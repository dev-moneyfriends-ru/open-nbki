<?php

namespace mfteam\nbch\components\rutdf\template;


use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\NbchDataInterface;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
use Yii;

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
    protected $fileContent;

    /**
     * Сгенерированное содержимое файла отчета
     * @var string
     */
    protected $content;

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
    public int $generateTime;

    /**
     * Данные для отправки
     * @var NbchDataInterface
     */
    public $sendData;

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
        $suffix = (new \DateTime())->setTimestamp($this->generateTime)->format('_Ymd_His');
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
            $suffix = Yii::$app->formatter->asDatetime($this->generateTime, '_yyyyMMdd_HHmmss');
        }
        $this->baseFileName = $name . $suffix;
        return $this->baseFileName;
    }

    public function getFileContent(): string
    {
        return $this->fileContent;
    }

    public function getRequest(): ?NbchRutdfRequest
    {
        return $this->request;
    }

    public function setRequest(?NbchRutdfRequest $request): void
    {
        $this->request = $request;
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
}
