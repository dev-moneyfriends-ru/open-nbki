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
use mfteam\nbch\components\rutdf\template\segments\B21SourceNonMonetOblig;
use mfteam\nbch\components\rutdf\template\segments\B22SubjectNonMonetOblig;
use mfteam\nbch\components\rutdf\template\segments\B23Collateral;
use mfteam\nbch\components\rutdf\template\segments\B24Guarantor;
use mfteam\nbch\components\rutdf\template\segments\B25IndepGuarantor;
use mfteam\nbch\components\rutdf\template\segments\B26Collatinsured;
use mfteam\nbch\components\rutdf\template\segments\B27CollatRepay;
use mfteam\nbch\components\rutdf\template\segments\B28GuaranteeRepay;
use mfteam\nbch\components\rutdf\template\segments\B29ObligTermination;
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
use mfteam\nbch\components\rutdf\template\segments\C21PaymtCondition;
use mfteam\nbch\components\rutdf\template\segments\C23Amendment;
use mfteam\nbch\components\rutdf\template\segments\C24FundDate;
use mfteam\nbch\components\rutdf\template\segments\C25Arrear;
use mfteam\nbch\components\rutdf\template\segments\C26DueArrear;
use mfteam\nbch\components\rutdf\template\segments\C27PastDsueArrear;
use mfteam\nbch\components\rutdf\template\segments\C28Paymt;
use mfteam\nbch\components\rutdf\template\segments\C29MonthAverPaymt;
use mfteam\nbch\components\rutdf\template\segments\C2PrevName;
use mfteam\nbch\components\rutdf\template\segments\C32Collateral;
use mfteam\nbch\components\rutdf\template\segments\C33Guarantor;
use mfteam\nbch\components\rutdf\template\segments\C34IndepGuarantor;
use mfteam\nbch\components\rutdf\template\segments\C35Collatinsured;
use mfteam\nbch\components\rutdf\template\segments\C36CollatRepay;
use mfteam\nbch\components\rutdf\template\segments\C37GuaranteeRepay;
use mfteam\nbch\components\rutdf\template\segments\C3Birth;
use mfteam\nbch\components\rutdf\template\segments\C4Id;
use mfteam\nbch\components\rutdf\template\segments\C54ObligacCount;
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
use mfteam\nbch\models\Collateral;
use mfteam\nbch\models\Guarantor;
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
            "segments" => $this->createSegments(),
            "template" => $this
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
    
    /**
     * @return array|B23Collateral[]
     */
    private function getB23Collateral()
    {
        if (empty($this->offer->getCollateralArray())) {
            return [
                new B23Collateral(new Collateral(), $this),
            ];
        }
        return array_map(function (Collateral $item) {
            return new B23Collateral($item, $this);
        }, $this->offer->getCollateralArray());
    }
    
    /**
     * @return B24Guarantor[]
     */
    private function getB24Guarantor()
    {
        if (empty($this->offer->getGuarantorArray())) {
            return [
                new B24Guarantor(new Guarantor(), $this),
            ];
        }
        return array_map(function (Guarantor $item) {
            return new B24Guarantor($item, $this);
        }, $this->offer->getGuarantorArray());
    }
    
    /**
     * @return array
     */
    public function createSegments(): array
    {
        if ($this->subject->isLegal()) {
            return [
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
                "B23_COLLATERAL" => $this->getB23Collateral(),
                "B24_GUARANTOR" => $this->getB24Guarantor(),
                "B25_INDEPGUARANTOR" => new B25IndepGuarantor($this),
                "B26_COLLATINSURED" => new B26Collatinsured($this),
                "B27_COLLATREPAY" => new B27CollatRepay($this),
                "B28_GUARANTEEREPAY" => new B28GuaranteeRepay($this),
                "B29_OBLIGTERMINATION" => new B29ObligTermination($this),
                "B44_OBLIGACCOUNT" => new B44ObligacCount($this),
                "B46_OBLIGPARTTAKE" => new B46ObligPartTake($this),
            ];
        }
        return [
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
            "C21_PAYMTCONDITION" => new C21PaymtCondition($this),
            "C23_AMENDMENT" => new C23Amendment($this),
            "C24_FUNDDATE" => new C24FundDate($this),
            "C25_ARREAR" => new C25Arrear($this),
            "C26_DUEARREAR" => new C26DueArrear($this),
            "C27_PASTDUEARREAR" => new C27PastDsueArrear($this),
            "C28_PAYMT" => new C28Paymt($this),
            "C29_MONTHAVERPAYMT" => new C29MonthAverPaymt($this),
            "C32_COLLATERAL" => $this->getC32Collateral(),
            "C33_GUARANTOR" => $this->getC33Guarantor(),
            "C34_INDEPGUARANTOR" => new C34IndepGuarantor($this),
            "C35_COLLATINSURED" => new C35Collatinsured($this),
            "C36_COLLATREPAY" => new C36CollatRepay($this),
            "C37_GUARANTEEREPAY" => new C37GuaranteeRepay($this),
            "C54_OBLIGACCOUNT" => new C54ObligacCount($this),
        ];
    }
    
    /**
     * @return C32Collateral[]
     */
    private function getC32Collateral()
    {
        if (empty($this->offer->getCollateralArray())) {
            return [
                new C32Collateral(new Collateral(), $this),
            ];
        }
        return array_map(function (Collateral $item) {
            return new C32Collateral($item, $this);
        }, $this->offer->getCollateralArray());
    }
    
    /**
     * @return C33Guarantor[]
     */
    private function getC33Guarantor()
    {
        if (empty($this->offer->getGuarantorArray())) {
            return [
                new C33Guarantor(new Guarantor(), $this),
            ];
        }
        return array_map(function (Guarantor $item) {
            return new C33Guarantor($item, $this);
        }, $this->offer->getGuarantorArray());
    }
}