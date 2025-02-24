<?php

namespace mfteam\nbch\components\rutdf\template;


use mfteam\nbch\components\rutdf\NbchDataInterface;
use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
use Yii;
use yii\base\Exception;

abstract class BaseTemplate implements TemplateInterface
{
    /**
     * Версия формата файла
     */
    public const FORMAT_VERSION = 'RUTDF6.03';

    /**
     * Связь файла
     */
    public const ENTITY = "RutdfTemplate";
    public const FILE_EXTENSION = '';

    /**
     * Массив событий для формирования отчета
     * @var array
     */
    protected $eventIds;

    /**
     * Содержимое существующего файла отчета
     * @var string
     */
    protected $fileContent = '';

    /**
     * Сгенерированное содержимое файла отчета
     * @var string
     */
    protected $content = '';

    /**
     * @var NbchRutdfRequest|null
     */
    protected $request;

    /**
     * Название файла
     * @var string
     */
    protected $baseFileName;

    /**
     * Время генерации
     * @var int
     */
    public $generateTime;

    /**
     * Данные для отправки
     * @var NbchDataInterface
     */
    public $sendData;
    /**
     * Данные для коррекции
     * @var NbchDataInterface|null
     */
    public $correctionData = null;

    /**
     * @var BaseSegment[]
     */
    protected $segments = [];

    /**
     * Ошибки генерации
     * @var array
     */
    protected $errors = [];

    /**
     * @inheritDoc
     */
    public function __construct(array $eventIds, NbchDataInterface $sendData)
    {
        $this->eventIds = $eventIds;
        $this->sendData = $sendData;
    }

    public function saveAsTemp()
    {
        $path = tempnam(sys_get_temp_dir(), '');
        return $this->saveAs($path) === true ? $path : null;
    }

    public function saveAs(string $path)
    {
        if (empty($this->content)) {
            $this->loadContent();
        }
        return file_put_contents($path, $this->content) !== false;
    }

    public function getBaseName()
    {
        if (!empty($this->baseFileName)) {
            return $this->baseFileName;
        }

        $this->generateTime = time();
        $module = Env::ensure()->module;
        $name = $module->rutdf->userName;
        $suffix = (new \DateTime())->setTimestamp($this->generateTime)->format('_Ymd_His')  . static::FILE_EXTENSION;
        while (
        $module->file->fileExist(
            $name . $suffix,
            NbchRutdfRequest::FILE_RUTDF_TYPE,
            self::ENTITY,
            $module->rutdf->userName
        )
        ) {
            sleep(1);
            $this->generateTime = time();
            $suffix = Yii::$app->formatter->asDatetime($this->generateTime, '_yyyyMMdd_HHmmss')  . static::FILE_EXTENSION;
        }
        $this->baseFileName = $name . $suffix;
        return $this->baseFileName;
    }

    public function getFileContent(): string
    {
        if(empty($this->fileContent)){
            $this->loadFileContent();
        }
        if(empty($this->fileContent) && !empty($this->content)){
            $this->fileContent = $this->content;
        }
        return $this->fileContent;
    }

    /**
     * Загружает содержимое файла отчета
     * @throws Exception
     */
    protected function loadFileContent(): void
    {
        if ($this->request === null || $this->request->getFile() === null) {
            $this->fileContent = '';
            return;
        }

        $content = $this->request->getFile()->getContent();
        if ($content === false) {
            throw new Exception('Невозможно получить содержимое файла');
        }
        $this->fileContent = mb_convert_encoding($content, 'UTF-8', 'WINDOWS-1251');
    }

    /**
     * @param NbchRutdfRequest|null $request
     * @return BaseTemplate
     */
    public function setRequest(?NbchRutdfRequest $request): void
    {
        $this->request = $request;
    }

    public function getRequest(): ?NbchRutdfRequest
    {
        return $this->request;
    }


    public function getSegments()
    {
        if (empty($this->segments)) {
            $this->createSegments();
        }
        return $this->segments;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getEventIds(): array
    {
        return $this->eventIds;
    }

    public function setFileContent(string $fileContent): BaseTemplate
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * @param NbchDataInterface|null $correctionData
     * @return $this
     */
    public function setCorrectionData(?NbchDataInterface $correctionData): BaseTemplate
    {
        $this->correctionData = $correctionData;
        return $this;
    }
}
