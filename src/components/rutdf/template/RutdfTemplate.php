<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\components\rutdf\template\segments\B10UID;
use mfteam\nbch\components\rutdf\template\segments\B11Trade;
use mfteam\nbch\components\rutdf\template\segments\B12AccountAmt;
use mfteam\nbch\components\rutdf\template\segments\B13CoBorrower;
use mfteam\nbch\components\rutdf\template\segments\B14PaymtCondition;
use mfteam\nbch\components\rutdf\template\segments\B15Amendment;
use mfteam\nbch\components\rutdf\template\segments\B16FundDate;
use mfteam\nbch\components\rutdf\template\segments\B17Arrear;
use mfteam\nbch\components\rutdf\template\segments\B18DueArrear;
use mfteam\nbch\components\rutdf\template\segments\B19PastDsueArrear;
use mfteam\nbch\components\rutdf\template\segments\B1Name;
use mfteam\nbch\components\rutdf\template\segments\B20Paymt;
use mfteam\nbch\components\rutdf\template\segments\B2Addr;
use mfteam\nbch\components\rutdf\template\segments\B3RegNum;
use mfteam\nbch\components\rutdf\template\segments\B44ObligacCount;
use mfteam\nbch\components\rutdf\template\segments\B46ObligPartTake;
use mfteam\nbch\components\rutdf\template\segments\B4TaxPayerID;
use mfteam\nbch\components\rutdf\template\segments\B5Reorg;
use mfteam\nbch\components\rutdf\template\segments\B6Bankruptcy;
use mfteam\nbch\components\rutdf\template\segments\B7Setled;
use mfteam\nbch\components\rutdf\template\segments\B8PrevCred;
use mfteam\nbch\components\rutdf\template\segments\C10ContactInfo;
use mfteam\nbch\components\rutdf\template\segments\C11Entrep;
use mfteam\nbch\components\rutdf\template\segments\C12Capability;
use mfteam\nbch\components\rutdf\template\segments\C17UID;
use mfteam\nbch\components\rutdf\template\segments\C18Trade;
use mfteam\nbch\components\rutdf\template\segments\C19AccountAmt;
use mfteam\nbch\components\rutdf\template\segments\C1Name;
use mfteam\nbch\components\rutdf\template\segments\C20CoBorrower;
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
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
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
     * Массив событий для формирования отчета
     * @var array
     */
    protected $eventIds;
    
    /**
     * @var NbchRutdfRequest|null
     */
    protected $request;
    
    public function __construct(array $eventIds, NbchSubjectInterface $subject, NbchOfferInterface $offer, $config = [])
    {
        $this->eventIds = $eventIds;
        parent::__construct($subject, $offer, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function getTemplatePath(): string
    {
        return '@vendor/mf-team/yii2-mf-nbch/src/components/rutdf/template/views/rutdf3';
    }
    
    /**
     * @inheritDoc
     */
    public function getTokenList(): array
    {
        return [
            'eventIds' => $this->eventIds,
            'isLegal' => $this->subject->isLegal(),
            "HEADER" => new Header($this),
            "GROUPHEADER" => new GroupHeader($this),
            "TRAILER" => new Trailer($this),
            "segments" => [
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
                "C17_UID" => new C17UID($this),
                "C18_TRADE" => new C18Trade($this),
                "C19_ACCOUNTAMT" => new C19AccountAmt($this),
                "C20_COBORROWER" => new C20CoBorrower($this),
                "B1_NAME" => new B1Name($this),
                "B2_ADDR" => new B2Addr($this),
                "B3_REGNUM" => new B3RegNum($this),
                "B4_TAXPAYERID" => new B4TaxPayerID($this),
                "B5_REORG" => new B5Reorg($this),
                "B6_BANKRUPTCY" => new B6Bankruptcy($this),
                "B7_SETTLED" => new B7Setled($this),
                "B8_PREVCRED" => new B8PrevCred($this),
                "B10_UID" => new B10UID($this),
                "B11_TRADE" => new B11Trade($this),
                "B12_ACCOUNTAMT" => new B12AccountAmt($this),
                "B13_COBORROWER" => new B13CoBorrower($this),
                "B14_PAYMTCONDITION" => new B14PaymtCondition($this),
                "B15_AMENDMENT" => new B15Amendment($this),
                "B16_FUNDDATE" => new B16FundDate($this),
                "B17_ARREAR" => new B17Arrear($this),
                "B18_DUEARREAR" => new B18DueArrear($this),
                "B19_PASTDUEARREAR" => new B19PastDsueArrear($this),
                "B20_PAYMT" => new B20Paymt($this),
                "B44_OBLIGACCOUNT" => new B44ObligacCount($this),
                "B46_OBLIGPARTTAKE" => new B46ObligPartTake($this)
             ]
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
     * @param array $eventId
     * @return RutdfTemplate
     */
    public function setEventIds(array $eventIds)
    {
        $this->eventIds = $eventIds;
        return $this;
    }
    
    /**
     * @return array
     */
    public function getEventIds(): array
    {
        return $this->eventIds;
    }
    
    /**
     * Содержимое файла отчета
     * @return string
     * @throws \Exception
     */
    public function getFileContent(): string
    {
        if ($this->_fileContent === null) {
            $this->loadFileContent();
        }
        return $this->_fileContent;
    }
    
    /**
     * Загружает содержимое файла отчета
     * @throws \yii\base\Exception
     */
    private function loadFileContent(): void
    {
        if ($this->request === null || $this->request->getFile() === null) {
            $this->_fileContent = '';
            return;
        }
        
        $content = $this->request->getFile()->getContent();
        if ($content === false) {
            throw new \yii\base\Exception('Невозможно получить содержимое файла');
        }
        $this->_fileContent = mb_convert_encoding($content, 'UTF-8', 'WINDOWS-1251');
    }
    
    /**
     * @param NbchRutdfRequest|null $request
     * @return RutdfTemplate
     */
    public function setRequest(?NbchRutdfRequest $request): RutdfTemplate
    {
        $this->request = $request;
        return $this;
    }
}