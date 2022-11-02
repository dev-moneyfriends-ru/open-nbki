<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\components\rutdf\template\segments\C10ContactInfo;
use mfteam\nbch\components\rutdf\template\segments\C11Entrep;
use mfteam\nbch\components\rutdf\template\segments\C12Capability;
use mfteam\nbch\components\rutdf\template\segments\C17UID;
use mfteam\nbch\components\rutdf\template\segments\C1Name;
use mfteam\nbch\components\rutdf\template\segments\C2PrevName;
use mfteam\nbch\components\rutdf\template\segments\C3Birth;
use mfteam\nbch\components\rutdf\template\segments\C4Id;
use mfteam\nbch\components\rutdf\template\segments\C5PrevId;
use mfteam\nbch\components\rutdf\template\segments\C6RegNum;
use mfteam\nbch\components\rutdf\template\segments\C7Snils;
use mfteam\nbch\components\rutdf\template\segments\C8RegAddr;
use mfteam\nbch\components\rutdf\template\segments\C9ActualAddr;
use mfteam\nbch\components\rutdf\template\segments\GroupHeader;
use mfteam\nbch\components\rutdf\template\segments\Header;
use mfteam\nbch\components\rutdf\template\segments\Trailer;
use mfteam\nbch\Env;
use mfteam\nbch\exceptions\UnknownEventException;
use mfteam\nbch\models\NbchOfferInterface;
use mfteam\nbch\models\NbchSubjectInterface;
use mfteam\nbch\models\rutdf\NbchEvents;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\InvalidConfigException;

/**
 * Шаблон RUTDF
 *
 * @property-read array $tokenList
 * @property-read string $baseName
 * @property-read string $templatePath
 */
class RutdfTemplate extends BaseRequestTemplate
{
    /**
     * Версия формата файла
     */
    public const FORMAT_VERSION = 'RUTDF3.0';
    
    /**
     * Связь файла
     */
    public const ENTITY = "RutdfTemplate";
    
    /**
     * Код события для формирования отчета
     * @var string
     */
    protected $eventId;
    
    public function __construct(string $eventId, NbchSubjectInterface $subject, NbchOfferInterface $offer, $config = [])
    {
        if (empty(NbchEvents::list()[$eventId])) {
            throw new UnknownEventException();
        }
        $this->eventId = $eventId;
        parent::__construct($subject, $offer, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function getTemplatePath(): string
    {
        // TODO: Implement getTemplatePath() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getTokenList(): array
    {
        return [
            "HEADER" => new Header($this),
            "0_GROUPHEADER" => new GroupHeader($this),
            "TRAILER" => new Trailer($this),
            "C1_NAME" => new C1Name($this),
            "C2_PREVNAME" => new C2PrevName($this),
            "C3_BIRTH" => new C3Birth($this),
            "C4_ID" => new C4Id($this),
            "C5_PREVID" => new C5PrevId($this),
            "C6_REGNUM" => new C6RegNum($this),
            "C7_SNILS" => new C7Snils($this),
            "C8_REGADDR" => new C8RegAddr($this),
            "C9_ACTUALADDR" => new C9ActualAddr($this),
            "C10_CONTACTINFO" => new C10ContactInfo($this),
            "C11_ENTREP" => new C11Entrep($this),
            "C12_CAPABILITY" => new C12Capability($this),
            "C17_UID" => new C17UID($this)
        ];
    }
    
    /**
     * @return string
     * @throws InvalidConfigException
     */
    public function getBaseName()
    {
        $module = Env::ensure()->module;
        $name = $module->rutdf->userName;
        $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        while (
        $module->file->fileExist(
            $name . $suffix,
            NbchTutdfRequest::FILE_TUTDF_TYPE,
            self::ENTITY,
            $module->rutdf->userName
        )
        ) {
            sleep(1);
            $suffix = Yii::$app->formatter->asDatetime(time(), '_yyyyMMdd_HHmmss');
        }
        return $name . $suffix;
    }
    
    /**
     * @param string $eventId
     * @return RutdfTemplate
     */
    public function setEventId(string $eventId)
    {
        $this->eventId = $eventId;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->eventId;
    }
}