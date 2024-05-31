<?php

namespace mfteam\nbch\components\rutdf\template;

use LogicException;
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
use mfteam\nbch\components\rutdf\template\segments\B30LegalRecord;
use mfteam\nbch\components\rutdf\template\segments\B35SubmitHold;
use mfteam\nbch\components\rutdf\template\segments\B3RegNum;
use mfteam\nbch\components\rutdf\template\segments\B44ObligacCount;
use mfteam\nbch\components\rutdf\template\segments\B45Application;
use mfteam\nbch\components\rutdf\template\segments\B46ObligPartTake;
use mfteam\nbch\components\rutdf\template\segments\B47ApplReject;
use mfteam\nbch\components\rutdf\template\segments\B4TaxPayerID;
use mfteam\nbch\components\rutdf\template\segments\B5Reorg;
use mfteam\nbch\components\rutdf\template\segments\B6Bankruptcy;
use mfteam\nbch\components\rutdf\template\segments\B7Setled;
use mfteam\nbch\components\rutdf\template\segments\BaseSegment;
use mfteam\nbch\components\rutdf\template\segments\C10ContactInfo;
use mfteam\nbch\components\rutdf\template\segments\C11Entrep;
use mfteam\nbch\components\rutdf\template\segments\C12Capability;
use mfteam\nbch\components\rutdf\template\segments\C17UID;
use mfteam\nbch\components\rutdf\template\segments\C18Trade;
use mfteam\nbch\components\rutdf\template\segments\C19AccountAmt;
use mfteam\nbch\components\rutdf\template\segments\C1Name;
use mfteam\nbch\components\rutdf\template\segments\C20CoBorrower;
use mfteam\nbch\components\rutdf\template\segments\C21PaymtCondition;
use mfteam\nbch\components\rutdf\template\segments\C22OverallVal;
use mfteam\nbch\components\rutdf\template\segments\C23Amendment;
use mfteam\nbch\components\rutdf\template\segments\C24FundDate;
use mfteam\nbch\components\rutdf\template\segments\C25Arrear;
use mfteam\nbch\components\rutdf\template\segments\C26DueArrear;
use mfteam\nbch\components\rutdf\template\segments\C27PastDsueArrear;
use mfteam\nbch\components\rutdf\template\segments\C28Paymt;
use mfteam\nbch\components\rutdf\template\segments\C29MonthAverPaymt;
use mfteam\nbch\components\rutdf\template\segments\C2PrevName;
use mfteam\nbch\components\rutdf\template\segments\C30SourceNonMonetOblig;
use mfteam\nbch\components\rutdf\template\segments\C31SubjectNonMonetOblig;
use mfteam\nbch\components\rutdf\template\segments\C32Collateral;
use mfteam\nbch\components\rutdf\template\segments\C33Guarantor;
use mfteam\nbch\components\rutdf\template\segments\C34IndepGuarantor;
use mfteam\nbch\components\rutdf\template\segments\C35Collatinsured;
use mfteam\nbch\components\rutdf\template\segments\C36CollatRepay;
use mfteam\nbch\components\rutdf\template\segments\C37GuaranteeRepay;
use mfteam\nbch\components\rutdf\template\segments\C38ObligTermination;
use mfteam\nbch\components\rutdf\template\segments\C39LegalRecord;
use mfteam\nbch\components\rutdf\template\segments\C3Birth;
use mfteam\nbch\components\rutdf\template\segments\C45SubmitHold;
use mfteam\nbch\components\rutdf\template\segments\C4Id;
use mfteam\nbch\components\rutdf\template\segments\C54ObligacCount;
use mfteam\nbch\components\rutdf\template\segments\C55Application;
use mfteam\nbch\components\rutdf\template\segments\C56ObligPartTake;
use mfteam\nbch\components\rutdf\template\segments\C57ApplReject;
use mfteam\nbch\components\rutdf\template\segments\C5PrevId;
use mfteam\nbch\components\rutdf\template\segments\C6RegNum;
use mfteam\nbch\components\rutdf\template\segments\C7Snils;
use mfteam\nbch\components\rutdf\template\segments\C8RegAddr;
use mfteam\nbch\components\rutdf\template\segments\C9ActualAddr;
use mfteam\nbch\components\rutdf\template\segments\Delete;
use mfteam\nbch\components\rutdf\template\segments\GroupHeader;
use mfteam\nbch\components\rutdf\template\segments\Header;
use mfteam\nbch\components\rutdf\template\segments\Trailer;
use mfteam\nbch\Env;
use mfteam\nbch\models\AmendmentRUTDF;
use mfteam\nbch\models\BaseItem;
use mfteam\nbch\models\CollateralRUTDF;
use mfteam\nbch\models\CollatInsuredRUTDF;
use mfteam\nbch\models\CollatRepayRUTDF;
use mfteam\nbch\models\GuarantorRUTDF;
use mfteam\nbch\models\IndepGuarantorRUTDF;
use mfteam\nbch\models\LegalItemsRUTDF;
use mfteam\nbch\models\rutdf\NbchDataInterface;
use mfteam\nbch\models\rutdf\NbchEvents;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;
use Yii;

/**
 * Шаблон RUTDF
 *
 * @property-read array $tokenList
 * @property-read string $baseName
 * @property-read C33Guarantor[] $c33Guarantor
 * @property-read string $fileContent
 * @property-read C32Collateral[] $c32Collateral
 * @property-read B23Collateral[]|array $b23Collateral
 * @property-read B24Guarantor[] $b24Guarantor
 * @property-read string $templatePath
 */
class RutdfTemplate
{
    /**
     * Версия формата файла
     */
    public const FORMAT_VERSION = 'RUTDF6.0';
    
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
     * Текущая строка в файле
     * @var int
     */
    private $currentLine = 0;
    
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
     * @var BaseSegment[]
     */
    protected $segments = [];
    
    /**
     * Ошибки генерации
     * @var array
     */
    protected $errors = [];
    
    /**
     * @var string[]
     */
    protected $singleSegments = [
        'B1_NAME' => B1Name::class,
        'B2_ADDR' => B2Addr::class,
        'B3_REGNUM' => B3RegNum::class,
        'B4_TAXPAYERID' => B4TaxPayerID::class,
        'B5_REORG' => B5Reorg::class,
        'B6_BANKRUPTCY' => B6Bankruptcy::class,
        'B7_SETTLED' => B7Setled::class,
        'B10_UID' => B10UID::class,
        'B11_TRADE' => B11Trade::class,
        'B13_COBORROWER' => B13CoBorrower::class,
        'B14_PAYMTCONDITION' => B14PaymtCondition::class,
        'B16_FUNDDATE' => B16FundDate::class,
        'B17_ARREAR' => B17Arrear::class,
        'B18_DUEARREAR' => B18DueArrear::class,
        'B19_PASTDUEARREAR' => B19PastDsueArrear::class,
        'B21_SOURCENONMONETOBLIG' => B21SourceNonMonetOblig::class,
        'B22_SUBJECTNONMONETOBLIG' => B22SubjectNonMonetOblig::class,
        'B28_GUARANTEEREPAY' => B28GuaranteeRepay::class,
        'B29_OBLIGTERMINATION' => B29ObligTermination::class,
        'B35_SUBMITHOLD' => B35SubmitHold::class,
        'B44_OBLIGACCOUNT' => B44ObligacCount::class,
        'B45_APPLICATION' => B45Application::class,
        'B46_OBLIGPARTTAKE' => B46ObligPartTake::class,
        'B47_APPLREJECT' => B47ApplReject::class,
        'C1_NAME' => C1Name::class,
        'C2_PREVNAME' => C2PrevName::class,
        'C3_BIRTH' => C3Birth::class,
        'C4_ID' => C4Id::class,
        'C5_PREVID' => C5PrevId::class,
        'C6_REGNUM' => C6RegNum::class,
        'C7_SNILS' => C7Snils::class,
        'C8_REGADDR' => C8RegAddr::class,
        'C9_ACTUALADDR' => C9ActualAddr::class,
        'C10_CONTACTINFO' => C10ContactInfo::class,
        'C11_ENTREP' => C11Entrep::class,
        'C12_CAPABILITY' => C12Capability::class,
        'C17_UID' => C17UID::class,
        'C18_TRADE' => C18Trade::class,
        'C20_COBORROWER' => C20CoBorrower::class,
        'C21_PAYMTCONDITION' => C21PaymtCondition::class,
        'C22_OVERALLVAL' => C22OverallVal::class,
        'C24_FUNDDATE' => C24FundDate::class,
        'C25_ARREAR' => C25Arrear::class,
        'C26_DUEARREAR' => C26DueArrear::class,
        'C27_PASTDUEARREAR' => C27PastDsueArrear::class,
        'C29_MONTHAVERPAYMT' => C29MonthAverPaymt::class,
        'C30_SOURCENONMONETOBLIG' => C30SourceNonMonetOblig::class,
        'C31_SUBJECTNONMONETOBLIG' => C31SubjectNonMonetOblig::class,
        'C37_GUARANTEEREPAY' => C37GuaranteeRepay::class,
        'C38_OBLIGTERMINATION' => C38ObligTermination::class,
        'C45_SUBMITHOLD' => C45SubmitHold::class,
        'C54_OBLIGACCOUNT' => C54ObligacCount::class,
        'C55_APPLICATION' => C55Application::class,
        'C56_OBLIGPARTTAKE' => C56ObligPartTake::class,
        'C57_APPLREJECT' => C57ApplReject::class,
        'DELETE' => Delete::class,
    ];
    
    /**
     * @var string[]
     */
    protected $multiSegments = [
        'B12_ACCOUNTAMT' => B12AccountAmt::class,
        'B15_AMENDMENT' => B15Amendment::class,
        'B20_PAYMT' => B20Paymt::class,
        'B23_COLLATERAL' => B23Collateral::class,
        'B24_GUARANTOR' => B24Guarantor::class,
        'B25_INDEPGUARANTOR' => B25IndepGuarantor::class,
        'B26_COLLATINSURED' => B26Collatinsured::class,
        'B27_COLLATREPAY' => B27CollatRepay::class,
        'B30_LEGALRECORD' => B30LegalRecord::class,
        'C19_ACCOUNTAMT' => C19AccountAmt::class,
        'C23_AMENDMENT' => C23Amendment::class,
        'C28_PAYMT' => C28Paymt::class,
        'C32_COLLATERAL' => C32Collateral::class,
        'C33_GUARANTOR' => C33Guarantor::class,
        'C34_INDEPGUARANTOR' => C34IndepGuarantor::class,
        'C35_COLLATINSURED' => C35Collatinsured::class,
        'C36_COLLATREPAY' => C36CollatRepay::class,
        'C39_LEGALRECORD' => C39LegalRecord::class,
    ];
    
    /**
     * @var null|string
     */
    protected $gHeaderCode = null;
    
    /**
     * @param array $eventIds
     * @param NbchDataInterface $sendData
     */
    public function __construct(array $eventIds, NbchDataInterface $sendData, string $gHeaderCode = null)
    {
        $this->eventIds = $eventIds;
        $this->sendData = $sendData;
        $this->gHeaderCode = $gHeaderCode;
    }
    
    /**
     * @return false|string|null
     */
    public function saveAsTemp()
    {
        $path = tempnam(sys_get_temp_dir(), '');
        return $this->saveAs($path) === true ? $path : null;
    }
    
    /**
     * @param string $path
     * @return bool
     */
    private function saveAs(string $path)
    {
        if (empty($this->content)) {
            $this->loadContent();
        }
        return file_put_contents($path, $this->content) !== false;
    }
    
    /**
     * @return void
     */
    public function loadContent()
    {
        $content = [];
        $segments = $this->getSegments();
        foreach ($segments as $segment) {
            $content[] = $segment->render();
        }
        $content = implode(PHP_EOL, $content);
        $this->content = mb_convert_encoding($content, 'cp1251');
    }
    
    /**
     * Текущий номер строки
     * @return int
     */
    public function getLineNumber(): int
    {
        return $this->currentLine;
    }
    
    /**
     * Следующая строка
     * @return void
     */
    public function nextLine(): void
    {
        $this->currentLine++;
    }
    
    /**
     * @return void
     */
    public function resetLine(): void
    {
        $this->currentLine = 0;
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
        $suffix = Yii::$app->formatter->asDatetime($this->generateTime, '_yyyyMMdd_HHmmss');
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
    
    /**
     * @return string
     */
    public function getFileContent(): string
    {
        return $this->fileContent;
    }
    
    /**
     * @return void
     */
    protected function createSegments(): void
    {
        $segments = [];
        $segments[] = new Header($this);
        $cnt = 1;
        $operationCode = $this->getOperationaCode();
        foreach ($this->eventIds as $eventId) {
            $segments[] = (new GroupHeader($this))->setEvent($eventId)->setNumber($cnt)->setCode($operationCode)->setComment($this->sendData->getGroupHeaderComment());
            $blocks = NbchEvents::getEventBlocks($eventId, $this->sendData->isLegal());
            foreach ($blocks as $block) {
                $items = $this->createSegment($block);
                if (empty($items)) {
                    continue;
                }
                foreach ($items as $item) {
                    if (!$item->validate()) {
                        $this->errors[] = [
                            $item->getSegmentName() => $item->getErrors(),
                        ];
                    }
                    $segments[] = $item;
                }
            }
            $cnt++;
        }
        $segments[] = (new Trailer($this))->setCntGroups($cnt - 1);
        $this->segments = $segments;
    }
    
    /**
     * @return NbchRutdfRequest|null
     */
    public function getRequest(): ?NbchRutdfRequest
    {
        return $this->request;
    }
    
    /**
     * @param NbchRutdfRequest|null $request
     */
    public function setRequest(?NbchRutdfRequest $request): void
    {
        $this->request = $request;
    }
    
    /**
     * @param string $block
     * @return BaseSegment[]
     */
    private function createSegment(string $block): array
    {
        if (isset($this->singleSegments[$block])) {
            return $this->createSingleSegment($this->singleSegments[$block]);
        }
        if (isset($this->multiSegments[$block])) {
            return $this->createMultiSegment($this->multiSegments[$block]);
        }
        throw new LogicException('Unknown segment');
    }
    
    /**
     * @param string $segmentClass
     * @return BaseSegment[]
     */
    private function createSingleSegment(string $segmentClass): array
    {
        return [new $segmentClass($this)];
    }
    
    /**
     * @return BaseSegment[]
     */
    public function getSegments()
    {
        if (empty($this->segments)) {
            $this->createSegments();
        }
        return $this->segments;
    }
    
    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
    
    /**
     * @param string $segmentClass
     * @return BaseSegment[]
     */
    private function createMultiSegment(string $segmentClass): array
    {
        $segments = [];
        switch ($segmentClass) {
            case B12AccountAmt::class:
            case C19AccountAmt::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getAccountAmtArray()
                    );
                }
                break;
            case B15Amendment::class:
            case C23Amendment::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getAmendment(),
                        new AmendmentRUTDF()
                    );
                }
                break;
            case B20Paymt::class:
            case C28Paymt::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getPayment()
                    );
                }
                break;
            case B23Collateral::class:
            case C32Collateral::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getCollateral(),
                        new CollateralRUTDF()
                    );
                }
                break;
            case B24Guarantor::class:
            case C33Guarantor::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getGuarantor(),
                        new GuarantorRUTDF()
                    );
                }
                break;
            case B25IndepGuarantor::class:
            case C34IndepGuarantor::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getIndepGuarantor(),
                        new IndepGuarantorRUTDF()
                    );
                }
                break;
            case B26Collatinsured::class:
            case C35Collatinsured::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getCollatInsured(),
                        new CollatInsuredRUTDF()
                    );
                }
                break;
            case B27CollatRepay::class:
            case C36CollatRepay::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getCollatRepay(),
                        new CollatRepayRUTDF()
                    );
                }
                break;
            case B30LegalRecord::class:
            case C39LegalRecord::class:
                {
                    $segments = $this->configureSegments(
                        $segmentClass,
                        $this->sendData->getAccountReplyRUTDF()->getLegalItems(),
                        new LegalItemsRUTDF()
                    );
                }
                break;
            default:
            {
                throw new LogicException();
            }
        }
        return $segments;
    }
    
    /**
     * @param string $segmentClass
     * @param BaseItem[] $items
     * @param BaseItem|null $default
     * @return array
     */
    private function configureSegments(string $segmentClass, array $items, BaseItem $default = null): array
    {
        $segments = [];
        if (empty($items) && $default !== null) {
            $segments[] = new $segmentClass($this, $default);
        }
        foreach ($items as $item) {
            $segments[] = new $segmentClass($this, $item);
        }
        return $segments;
    }
    
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * @return string
     */
    private function getOperationaCode(): string
    {
        if($this->gHeaderCode !== null){
            return $this->gHeaderCode;
        }
        if(in_array(NbchEvents::EVENT_3_3, $this->eventIds, true)){
            return GroupHeader::CODE_C2;
        }
        if($this->sendData->isFirst()){
            return GroupHeader::CODE_A;
        }
        return GroupHeader::CODE_B;
    }
}