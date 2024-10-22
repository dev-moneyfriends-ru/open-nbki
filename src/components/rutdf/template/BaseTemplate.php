<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\components\rutdf\template\segments\GroupHeader;
use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\NbchDataInterface;
use mfteam\nbch\models\rutdf\NbchEvents;
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

    public const BASE_NAME_FILE_EXTENSION = '';

    /**
     * Массив событий для формирования отчета
     * @var array
     */
    protected $eventIds;

    /**
     * Данные для отправки
     * @var NbchDataInterface
     */
    public $sendData;

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
     * @var BaseSegment[]
     */
    protected $segments = [];

    /**
     * Ошибки генерации
     * @var array
     */
    protected $errors = [];

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
     * @inheritDoc
     */
    public function __construct(array $eventIds, NbchDataInterface $sendData, string $gHeaderCode = null)
    {
        $this->eventIds = $eventIds;
        $this->sendData = $sendData;
        $this->gHeaderCode = $gHeaderCode;
    }

    /**
     * @inheritDoc
     */
    public function saveAsTemp()
    {
        $path = tempnam(sys_get_temp_dir(), '');
        return $this->saveAs($path) === true ? $path : null;
    }

    /**
     * @inheritDoc
     */
    public function saveAs(string $path)
    {
        if (empty($this->content)) {
            $this->loadContent();
        }
        return file_put_contents($path, $this->content) !== false;
    }

    /**
     * @return string
     */
    public function getBaseName()
    {
        if (!empty($this->baseFileName)) {
            return $this->baseFileName;
        }
        $module = Env::ensure()->module;
        $name = $module->rutdf->userName;
        $this->generateTime = time();
        $suffix = Yii::$app->formatter->asDatetime($this->generateTime, '_yyyyMMdd_HHmmss' . self::BASE_NAME_FILE_EXTENSION);
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
            $suffix = Yii::$app->formatter->asDatetime($this->generateTime, '_yyyyMMdd_HHmmss' . self::BASE_NAME_FILE_EXTENSION);
        }
        $this->baseFileName = $name . $suffix;
        return $this->baseFileName;
    }

    /**
     * @inheritDoc
     */
    public function getFileContent(): string
    {
        return $this->fileContent;
    }

    /**
     * @inheritDoc
     */
    public function getRequest(): ?NbchRutdfRequest
    {
        return $this->request;
    }

    /**
     * @inheritDoc
     */
    public function setRequest(?NbchRutdfRequest $request): void
    {
        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @inheritDoc
     */
    public function getOperationaCode(): string
    {
        if ($this->gHeaderCode !== null) {
            return $this->gHeaderCode;
        }
        if (in_array(NbchEvents::EVENT_3_3, $this->eventIds, true)) {
            return GroupHeader::CODE_C2;
        }
        if ($this->sendData->isFirst()) {
            return GroupHeader::CODE_A;
        }
        return GroupHeader::CODE_B;
    }
}
