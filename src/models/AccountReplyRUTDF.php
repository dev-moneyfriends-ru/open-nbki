<?php

namespace mfteam\nbch\models;


use DateTime;
use mfteam\nbch\models\AmountInfoRUTDF;
use mfteam\nbch\models\ContractTermsChangesRUTDF;
use mfteam\nbch\models\DebtBurdenInfoRUTDF;
use mfteam\nbch\models\FundDateRUTDF;

/**
 * Сделка
 *
 * @property-read MonthAverPaymtRUTDF|null $monthAverPaymt
 * @property-read null|SubmitHoldRUTDF $submitHold
 * @property DueArrearRUTDF[]|null|array|DueArrearRUTDF $dueArrear
 * @property-read null|SubjectNonMonetObligRUTDF $subjectNonMonetOblig
 * @property-read null|PastdueArrearRUTDF $pastdueArrear
 * @property null|array|CoborrowerRUTDF|CoborrowerRUTDF[] $coborrower
 * @property ArrearRUTDF[]|null|array|ArrearRUTDF $arrear
 * @property-read SourceNonMonetObligRUTDF|null $sourceNonMonetOblig
 * @property PaymtConditionRUTDF[]|PaymtConditionRUTDF|null|array $paymtCondition
 * @property null|array|TradeRUTDF[]|TradeRUTDF $trade
 * @property null|array|OverallValRUTDF|OverallValRUTDF[] $overallVal
 * @property-read CollatRepayRUTDF[] $collatRepay
 */
class AccountReplyRUTDF extends Account
{
    /**
     * УИд сделки.
     *
     * @var string $uuid
     */
    public $uuid = '';
    
    /**
     * Номер сделки.
     * Номер сделки, присвоенный источником.
     * Заполняется, если сделке ранее не был присвоен УИд сделки.
     * @var string|null $acctNum
     */
    public $acctNum = null;
    
    /**
     * Общие сведения о сделке
     * при передаче одно значение
     * @var TradeRUTDF[] $tradeArray
     */
    public $tradeArray = [];
    
    /**
     * Сумма и валюта обязательства
     * @var AccountAmtRUTDF[] $accountAmtArray
     */
    public $accountAmtArray = [];
    
    /**
     * Сведения о солидарных должниках
     * при передаче одно значение
     * @var CoborrowerRUTDF[] $coborrower
     */
    public $coborrowerArray = [];
    
    /**
     * Сведения об условиях платежей.
     * Сведения приводятся согласно условиям сделки
     * при передаче одно значение
     * @var PaymtConditionRUTDF[] $paymtCondition
     */
    public $paymtConditionArray = [];
    
    /**
     * Полная стоимость потребительского кредита (займа)
     * передается только для потребительского кредита (займа).
     * При передаче одно значение
     * @var OverallValRUTDF[] $overallVal
     */
    public $overallValArray = [];
    
    /**
     * Сведения об изменении договора
     * @var AmendmentRUTDF[] $amendment
     */
    public $amendment = [];
    
    /**
     * Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства.
     * В КИ заемщика или лизингополучателя указывается дата передачи ему суммы займа (кредита) или каждого предмета лизинга,
     * в КИ принципала по независимой гарантии или поручителя – соответственно дата выдачи гарантии или дата возникновения поручительства.
     * По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата передачи каждого транша,
     * за исключением выданного с использованием платежной карты, и займа (кредита), предоставленного на условиях овердрафта.
     * @var string $fundDate
     * @deprecated
     */
    public $fundDate = '';

    /**
     * Сведения о передаче финансирования субъекту или о возникновении обеспечения исполнения обязательства.
     * @var array|FundDateRUTDF[] $fundDateArray
     */
    private array $fundDateRUTDF = [];

    /**
     * Код источника.
     * Заполняется по справочнику 6.1.
     * @see SourceType
     * @var string
     */
    public string $memberTypeCode;

    /**
     * Полное наименование источника.
     * @var string $memberFullName
     */
    public string $memberFullName;
    
    /**
     * Порядковый номер транша.
     * Заполняется для займа (кредита), который выдается траншами, за исключением выданного с использованием платежной карты, и займа (кредита), предоставленного на условиях овердрафта
     * @var int $trancheNum
     * @deprecated
     */
    public $trancheNum;
    
    /**
     * Сведения о задолженности.
     * Указываются сведения обо всех имеющихся (непогашенных) денежных требованиях к субъекту согласно условиям сделки.
     * Размер требований определяется исходя из того, что вследствие внесения платежа первым погашается требование, которое возникло раньше.
     * Для договора лизинга в блоке указываются требования по внесению, в том числе лизинговых платежей, пеней и штрафов
     * при передаче одно значение
     * @var ArrearRUTDF[] $arrear
     */
    public $arrearArray = [];
    
    /**
     * Сведения о срочной задолженности.
     * Сведения обо всех денежных требованиях к субъекту, срок погашения которых не наступил. Сведения указываются согласно условиям сделки.
     * Для договора лизинга указываются требования по внесению, в том числе лизинговых платежей.
     * при передаче одно значение
     * @var DueArrearRUTDF[] $dueArrear
     */
    public $dueArrearArray = [];
    
    /**
     * Сведения о просроченной задолженности
     * Сведения обо всех денежных требованиях к субъекту, которые не были погашены в срок. Сведения приводятся согласно условиям сделки.
     * Для договора лизинга указываются требования по внесению, в том числе лизинговых платежей, пеней и штрафов.
     * при передаче одно значение
     * @var PastdueArrearRUTDF[] $pastdueArrear
     */
    public $pastdueArrearArray = [];
    
    /**
     * Сведения о внесении платежей.
     * Сведения о действиях субъекта по исполнению своего обязательства или его части.
     * В случае если по условиям сделки платеж признается внесенным с момента его принятия источником,
     * отражаются сведения о принятых источником платежах.
     * Для договора лизинга в блоке 28 Показателей КИ ФЛ отражаются суммы внесенных лизинговых платежей, пеней и штрафов.
     * Если передаются несколько показателей, то они будут обработаны и отображены в кредитном отчете последовательно.
     * @var PaymentRUTDF[] $payment
     */
    public $payment = [];
    
    /**
     * Величина среднемесячного платежа по договору займа (кредита) и дата ее расчета.
     * Сведения о величине среднемесячного платежа, рассчитанной в порядке, установленном приложением 1 к Положению Банка России «О порядке формирования кредитной истории».
     * Если величина среднемесячного платежа не рассчитывается, не формируется и не передается
     * при передаче одно значение
     * @var MonthAverPaymtRUTDF[] $monthAverPaymt
     */
    public $monthAverPaymtArray = [];
    
    /**
     * Сведения о неденежном обязательстве источника.
     * Блок формируется, если по показателю 18.9 «Признак денежного обязательства источника» указан код «0». Сведения указываются согласно условиям сделки.
     * Показатели в блоке не заполняются (обязательные заполняются дефисом) при передаче сведений о поручительстве и независимой гарантии
     * до наступления ответственности поручителя или обязанности принципала возместить гаранту выплаченную сумму соответственно (18.1 = 2 или 3, 18.3 = 6-8 или 9-13, 25.1=0).
     * при передаче одно значение
     * @var SourceNonMonetObligRUTDF[] $sourceNonMonetOblig
     */
    public $sourceNonMonetObligArray = [];
    
    /**
     * Сведения о неденежном обязательстве субъекта.
     * Блок формируется, если по показателю 18.10 «Признак денежного обязательства субъекта» указан код «0». Сведения указываются согласно условиям сделки
     * при передаче одно значение
     * @var SubjectNonMonetObligRUTDF[] $subjectNonMonetOblig
     */
    public $subjectNonMonetObligArray = [];
    
    /**
     * Сведения о залоге
     * @var CollateralRUTDF[] $collateral
     */
    public $collateral = [];
    
    /**
     * Сведения о поручительстве
     * @var GuarantorRUTDF[] $guarantor
     */
    public $guarantor = [];
    
    /**
     * Сведения о независимой гарантии
     * @var IndepGuarantorRUTDF[] $indepGuarantor
     */
    public $indepGuarantor = [];
    
    /**
     * Сведения о страховании предмета залога
     * @var CollatInsuredRUTDF[] $collatInsured
     */
    public $collatInsured = [];
    
    /**
     * Сведения о погашении требований кредитора по обязательству за счет обеспечения
     * @var CollatRepayRUTDF[] $collatRepay
     */
    private $collatRepayArray = [];

    /**
     * Сведения об изменении условий обязательства, обусловленном наступлением указанных в сделке событий.
     * @var ContractTermsChangesRUTDF[] $contractTermsChanges
     */
    private $contractTermsChanges = [];

    /**
     * Признак обязанности возместить выплаченную сумму.
     * Код «1» – принципал обязан возместить гаранту выплаченную им сумму;
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $hasGuaranteeRepay
     */
    public $hasGuaranteeRepay = 0;
    
    /**
     * Сумма, подлежащая возмещению
     * заполняется если $hasGuaranteeRepay = 1
     * @var string $guaranteeToRepay
     */
    public $guaranteeToRepay = '';
    
    /**
     * Сумма, выплаченная принципалом
     * заполняется если $hasGuaranteeRepay = 1
     * @var string $guaranteeRepayAmt
     */
    public $guaranteeRepayAmt = '';
    
    /**
     * Признак соблюдения порядка возмещения
     * Код «1» – принципал надлежаще возмещает гаранту выплаченную им сумму;
     * код «0» – обстоятельство кода «1» отсутствует.
     * заполняется если $hasGuaranteeRepay = 1
     * @var int $guaranteeRepayKeepCode
     */
    public $guaranteeRepayKeepCode = null;
    
    /**
     * Дата расчета показателей
     * $guaranteeToRepay
     * $guaranteeRepayAmt
     * $hasGuaranteeRepay
     * заполняется если $hasGuaranteeRepay = 1
     * @var string $guaranteeDate
     */
    public $guaranteeDate = '';
    
    /**
     * Код основания прекращения обязательства
     * Заполняется по справочнику 3.8.
     * @var int $loanIndicator
     */
    public $loanIndicator = null;
    
    /**
     * Дата фактического прекращения обязательства
     * Дата, в которую прекратились взаимные обязательства субъекта и источника.
     * @var string $loanIndicatorDt
     */
    public $loanIndicatorDt = '';
    
    /**
     * Сведения о судебном споре или требовании по обязательству
     * @var LegalItemsRUTDF[] $legalItems
     */
    public $legalItems = [];
    
    /**
     * Признак учета обязательства.
     * Код «1» – обязательство учтено у источника на балансовых счетах;
     * код «0» – обстоятельство кода «1» отсутствует, в том числе в случае если обязательство частично учтено на внебалансовых счетах.
     * @var int $obligAccountCode
     */
    public $obligAccountCode = null;
    
    /**
     * Процентная ставка.
     * Значение процентной ставки в соответствии с условиями сделки.
     * @var string $intRate
     */
    public $intRate = '';
    
    /**
     * Сумма обязательства, учтенная на внебалансовых счетах.
     * Заполняется, в случае если по показателю $obligAccountCode указан код «0».
     * Сумма обязательства, которая учтена на внебалансовых счетах источника.
     * @var string $offbalanceAmt
     */
    public $offbalanceAmt = '';
    
    /**
     * Признак льготного финансирования с государственной поддержкой
     * код «1» – в случае если заем (кредит) или предмет лизинга получен субъектом в рамках программы льготного финансирования с государственной поддержкой;
     * код «0» – в случае если обстоятельство кода «1» отсутствует.
     * @var int $preferenFinanc
     */
    public $preferenFinanc = null;
    
    /**
     * Информация о программе государственной поддержки
     * Регистрационный номер, дата и наименование нормативного акта, которым утверждена программа льготного финансирования с государственной поддержкой.
     * @var string $preferenFinancInfo
     */
    public $preferenFinancInfo = '';
    
    /**
     * Сведения о прекращении передачи информации по обязательству
     * @var SubmitHoldRUTDF[] $submitHold
     */
    private $submitHoldArray = [];

    /**
     * УИд сделки, задолженность по которой была рефинансирована (если по такой сделке формируется кредитная история) за счет сделки, по которой формируется кредитная история
     * @var string|null
     */
    public $refUid = null;

    /**
     * Дата, по состоянию на которую сформированы (рассчитаны) показатели
     * @var string $calcDate
     */
    public $calcDate = '';

    /**
     * Сведения об обеспечиваемом обязательстве
     * @var array|AmountInfoRUTDF[]
     */
    private $amountInfoArray = [];

    /**
     * Сведения о долговой нагрузке заемщика
     * @var array|DebtBurdenInfoRUTDF
     */
    private $debtBurdenInfo = [];

    
    /**
     * @return TradeRUTDF[]
     */
    public function getTradeArray(): array
    {
        return $this->tradeArray;
    }
    
    /**
     * @param array|TradeRUTDF[] $config
     */
    public function setTrade(array $config): void
    {
        $this->tradeArray = $this->initPropertyModels($config, TradeRUTDF::class);
    }
    
    /**
     * @return TradeRUTDF|null
     */
    public function getTrade(): ?TradeRUTDF
    {
        return $this->getLastValue('tradeArray');
    }
    
    /**
     * @return AccountAmtRUTDF[]
     */
    public function getAccountAmtArray(): array
    {
        return $this->accountAmtArray;
    }
    
    /**
     * @return AccountAmtRUTDF
     */
    public function getAccountAmt(): ?AccountAmtRUTDF
    {
        return $this->getLastValue('accountAmtArray');
    }
    
    /**
     * @param array|AccountAmtRUTDF[] $config
     */
    public function setAccountAmt(array $config): void
    {
        $this->accountAmtArray = $this->initPropertyModels($config, AccountAmtRUTDF::class);
    }

    /**
     * @return AmountInfoRUTDF[]
     */
    public function getAmountInfoArray(): array
    {
        return $this->amountInfoArray;
    }

    /**
     * @return AmountInfoRUTDF
     */
    public function getAmountInfo(): ?AmountInfoRUTDF
    {
        return $this->getLastValue('amountInfoArray');
    }

    /**
     * @param array|AmountInfoRUTDF[] $config
     */
    public function setAmountInfo(array $config): void
    {
        $this->amountInfoArray = $this->initPropertyModels($config, AmountInfoRUTDF::class);
    }
    
    /**
     * @return CoborrowerRUTDF[]
     */
    public function getCoborrowerArray(): array
    {
        return $this->coborrowerArray;
    }
    
    /**
     * @return CoborrowerRUTDF|null
     */
    public function getCoborrower(): ?CoborrowerRUTDF
    {
        return $this->getLastValue('coborrowerArray');
    }
    
    /**
     * @param array|CoborrowerRUTDF[] $config
     */
    public function setCoborrower(array $config): void
    {
        $this->coborrowerArray = $this->initPropertyModels($config, CoborrowerRUTDF::class);
    }
    
    /**
     * @return PaymtConditionRUTDF[]
     */
    public function getPaymtConditionArray(): array
    {
        return $this->paymtConditionArray;
    }
    
    /**
     * @return PaymtConditionRUTDF|null
     */
    public function getPaymtCondition(): ?PaymtConditionRUTDF
    {
        return $this->getLastValue('paymtConditionArray');
    }
    
    /**
     * @param array|PaymtConditionRUTDF[] $config
     */
    public function setPaymtCondition(array $config): void
    {
        $this->paymtConditionArray = $this->initPropertyModels($config, PaymtConditionRUTDF::class);
    }
    
    /**
     * @return OverallValRUTDF[]
     */
    public function getOverallValArray(): array
    {
        return $this->overallValArray;
    }
    
    /**
     * @return OverallValRUTDF|null
     */
    public function getOverallVal(): ?OverallValRUTDF
    {
        return $this->getLastValue('overallValArray');
    }
    
    /**
     * @param OverallValRUTDF[]|array $config
     */
    public function setOverallVal(array $config): void
    {
        $this->overallValArray = $this->initPropertyModels($config, OverallValRUTDF::class);
    }
    
    /**
     * @return AmendmentRUTDF[]
     */
    public function getAmendment(): array
    {
        return $this->amendment;
    }
    
    /**
     * @param AmendmentRUTDF[]|array $config
     */
    public function setAmendment(array $config): void
    {
        $this->amendment = $this->initPropertyModels($config, AmendmentRUTDF::class);
    }
    
    /**
     * @return array|ArrearRUTDF[]
     */
    public function getArrearArray(): array
    {
        return $this->arrearArray;
    }
    
    /**
     * @return ArrearRUTDF|null
     */
    public function getArrear(): ?ArrearRUTDF
    {
        return $this->getLastValue('arrearArray');
    }
    
    /**
     * @param array|ArrearRUTDF[] $config
     */
    public function setArrear(array $config): void
    {
        $this->arrearArray = $this->initPropertyModels($config, ArrearRUTDF::class);
    }
    
    /**
     * @return DueArrearRUTDF[]
     */
    public function getDueArrearArray(): array
    {
        return $this->dueArrearArray;
    }
    
    /**
     * @return DueArrearRUTDF|null
     */
    public function getDueArrear(): ?DueArrearRUTDF
    {
        return $this->getLastValue('dueArrearArray');
    }
    
    /**
     * @param DueArrearRUTDF[]|array $config
     */
    public function setDueArrear(array $config): void
    {
        $this->dueArrearArray = $this->initPropertyModels($config, DueArrearRUTDF::class);
    }
    
    /**
     * @return PastdueArrearRUTDF[]
     */
    public function getPastdueArrearArray(): array
    {
        return $this->pastdueArrearArray;
    }
    
    /**
     * @return PastdueArrearRUTDF|null
     */
    public function getPastdueArrear(): ?PastdueArrearRUTDF
    {
        return $this->getLastValue('pastdueArrearArray');
    }
    
    /**
     * @param PastdueArrearRUTDF[]|array $config
     */
    public function setPastdueArrear(array $config): void
    {
        $this->pastdueArrearArray = $this->initPropertyModels($config, PastdueArrearRUTDF::class);
    }
    
    /**
     * @return PaymentRUTDF[]
     */
    public function getPayment(): array
    {
        return $this->payment;
    }
    
    /**
     * @param PaymentRUTDF[] $payment
     */
    public function setPayment(array $payments): void
    {
        $this->payment = $this->initPropertyModels($payments, PaymentRUTDF::class);
    }
    
    /**
     * @return MonthAverPaymtRUTDF[]
     */
    public function getMonthAverPaymtArray(): array
    {
        return $this->monthAverPaymtArray;
    }
    
    /**
     * @return MonthAverPaymtRUTDF|null
     */
    public function getMonthAverPaymt(): ?MonthAverPaymtRUTDF
    {
        return $this->getLastValue('monthAverPaymtArray');
    }
    
    /**
     * @param MonthAverPaymtRUTDF[]|array $config
     */
    public function setMonthAverPaymt(array $config): void
    {
        $this->monthAverPaymtArray = $this->initPropertyModels($config, MonthAverPaymtRUTDF::class);
    }

    /**
     * @param MonthAverPaymtRUTDF[]|array $config
     */
    public function setMonthAverPaymtArray(array $config): void
    {
        $this->setMonthAverPaymt($config);
    }
    
    /**
     * @return SourceNonMonetObligRUTDF[]
     */
    public function getSourceNonMonetObligArray(): array
    {
        return $this->sourceNonMonetObligArray;
    }
    
    /**
     * @return SourceNonMonetObligRUTDF
     */
    public function getSourceNonMonetOblig(): ?SourceNonMonetObligRUTDF
    {
        return $this->getLastValue('sourceNonMonetObligArray');
    }
    
    /**
     * @param SourceNonMonetObligRUTDF[]|array $sourceNonMonetObligArray
     */
    public function setSourceNonMonetOblig(array $config): void
    {
        $this->sourceNonMonetObligArray = $this->initPropertyModels($config, SourceNonMonetObligRUTDF::class);
    }

    /**
     * @param SourceNonMonetObligRUTDF[]|array $sourceNonMonetObligArray
     * @deprecated
     */
    public function setSourceNonMonetObligArray(array $config): void
    {
        $this->setSourceNonMonetOblig($config);
    }

    /**
     * @return SubjectNonMonetObligRUTDF[]
     */
    public function getSubjectNonMonetObligArray(): array
    {
        return $this->subjectNonMonetObligArray;
    }
    
    /**
     * @return SubjectNonMonetObligRUTDF|null
     */
    public function getSubjectNonMonetOblig(): ?SubjectNonMonetObligRUTDF
    {
        return $this->getLastValue('subjectNonMonetObligArray');
    }
    
    /**
     * @param SubjectNonMonetObligRUTDF[]|array $config
     */
    public function setSubjectNonMonetOblig(array $config): void
    {
        $this->subjectNonMonetObligArray = $this->initPropertyModels($config, SubjectNonMonetObligRUTDF::class);
    }

    /**
     * @param SubjectNonMonetObligRUTDF[]|array $config
     * @deprecated
     */
    public function setSubjectNonMonetObligArray(array $config): void
    {
        $this->setSubjectNonMonetOblig($config);
    }

    /**
     * @return CollateralRUTDF[]
     */
    public function getCollateral(): array
    {
        return $this->collateral;
    }
    
    /**
     * @param CollateralRUTDF[]|array $config
     */
    public function setCollateral(array $config): void
    {
        $this->collateral = $this->initPropertyModels($config, CollateralRUTDF::class);
    }
    
    /**
     * @return GuarantorRUTDF[]
     */
    public function getGuarantor(): array
    {
        return $this->guarantor;
    }
    
    /**
     * @param GuarantorRUTDF[]|array $config
     */
    public function setGuarantor(array $config): void
    {
        $this->guarantor = $this->initPropertyModels($config, GuarantorRUTDF::class);
    }
    
    /**
     * @return IndepGuarantorRUTDF[]
     */
    public function getIndepGuarantor(): array
    {
        return $this->indepGuarantor;
    }
    
    /**
     * @param IndepGuarantorRUTDF[]|array $config
     */
    public function setIndepGuarantor(array $config): void
    {
        $this->indepGuarantor = $this->initPropertyModels($config, IndepGuarantorRUTDF::class);
    }
    
    /**
     * @return CollatInsuredRUTDF[]
     */
    public function getCollatInsured(): array
    {
        return $this->collatInsured;
    }
    
    /**
     * @param CollatInsuredRUTDF[]|array $config
     */
    public function setCollatInsured(array $config): void
    {
        $this->collatInsured = $this->initPropertyModels($config, IndepGuarantorRUTDF::class);
    }
    
    /**
     * @return CollatRepayRUTDF[]
     */
    public function getCollatRepay(): array
    {
        return $this->collatRepayArray;
    }
    
    /**
     * @param CollatRepayRUTDF[]|array $config
     */
    public function setCollatRepay(array $config): void
    {
        $this->collatRepayArray = $this->initPropertyModels($config, CollatRepayRUTDF::class);
    }

    /**
     * @param CollatRepayRUTDF[]|array $config
     * @deprecated
     */
    public function setCollatRepayArray(array $config): void
    {
        $this->setCollatRepay($config);
    }

    /**
     * @return LegalItemsRUTDF[]
     */
    public function getLegalItems(): array
    {
        return $this->legalItems;
    }
    
    /**
     * @param LegalItemsRUTDF[]|array $config
     */
    public function setLegalItems(array $config): void
    {
        $this->legalItems = $this->initPropertyModels($config, LegalItemsRUTDF::class);
    }
    
    /**
     * @return SubmitHoldRUTDF[]
     */
    public function getSubmitHoldArray(): array
    {
        return $this->submitHoldArray;
    }
    
    /**
     * @return SubmitHoldRUTDF|null
     */
    public function getSubmitHold(): ?SubmitHoldRUTDF
    {
        return $this->getLastValue('submitHoldArray');
    }
    
    /**
     * @param SubmitHoldRUTDF[]|array $config
     */
    public function setSubmitHoldArray(array $config): void
    {
        $this->submitHoldArray = $this->initPropertyModels($config, SubmitHoldRUTDF::class);
    }

    /**
     * @param int $minDays
     * @param int|null $maxDays
     * @param int|null $maxMonth
     * @return int
     */
    public function getHisoricalPastDueDays(int $minDays = 0, int $maxDays = null, int $maxMonth = null)
    {
        if(empty($this->pastdueArrearArray)){
            return 0;
        }
        $maxValue = 0;
        foreach ($this->pastdueArrearArray as $model)
        {
            $daysPastDue = $model->getDaysPastDue();
            if($daysPastDue === 0 || $daysPastDue < $minDays){
                continue;
            }
            if($maxMonth !== null){
                $currentDate = new DateTime('now');
                $date = new DateTime($model->calcDate);
                $diff = $currentDate->diff($date);
                $diffMonth = $diff->y * 12 + $diff->m;
                if($diffMonth > $maxMonth){
                    continue;
                }
            }

            if($maxDays !== null && $daysPastDue > $maxDays){
                $maxValue = $maxDays;
                break;
            }

            if($maxDays === null && $daysPastDue < $minDays){
                continue;
            }

            if($daysPastDue > $maxValue){
                $maxValue = $daysPastDue;
            }

        }
        return $maxValue;
    }

    /**
     * Действующий договор
     * @return bool
     */
    public function isActive(): bool
    {
        return empty($this->loanIndicator);
    }
    /**
     * Проданный договор
     * @return bool
     */
    public function isAcquirer(): bool
    {
        return !empty($this->getAcquirerIndivid()) || !empty($this->getAcquirerLegal());
    }

    /**
     * @return ContractTermsChangesRUTDF[]
     */
    public function getContractTermsChanges(): array
    {
        return $this->contractTermsChanges;
    }

    /**
     * @param array|ContractTermsChangesRUTDF[] $config
     * @return void
     */
    public function setContractTermsChanges(array $config): void
    {
        $this->contractTermsChanges = $this->initPropertyModels($config, ContractTermsChangesRUTDF::class);
    }

    /**
     * @return array|FundDateRUTDF[]
     */
    public function getFundDateRUTDF(): array
    {
        return $this->fundDateRUTDF;
    }

    /**
     * @param array|FundDateRUTDF[] $config
     * @return void
     */
    public function setFundDateRUTDF(array $config): void
    {
        $this->fundDateRUTDF = $this->initPropertyModels($config, FundDateRUTDF::class);
    }

    /**
     * @return DebtBurdenInfoRUTDF[]
     */
    public function getDebtBurdenInfo(): array
    {
        return $this->debtBurdenInfo;
    }

    /**
     * @param array|DebtBurdenInfoRUTDF[] $config
     * @return void
     */
    public function setDebtBurdenInfo(array $config): void
    {
        $this->debtBurdenInfo = $this->initPropertyModels($config, DebtBurdenInfoRUTDF::class);
    }
}
