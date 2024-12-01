<?php

namespace mfteam\nbch\models;

/**
 * Сведения об обращении
 */
class InformationPartReplyRUTDF extends BaseInformationPartReplyRUTDF
{
    
    /**
     * Код вида участия в сделке
     * Заполняется по справочнику 2.1.
     * @see RoleType::list()
     * @var string $requestedFlagIndicatorCode
     */
    public $requestedFlagIndicatorCode = '';
    
    /**
     * Сумма запрошенного займа (кредита), лизинга или обеспечения
     * @var string $requestedAmt
     */
    public $requestedAmt = '';
    
    /**
     * Запрошенная валюта обязательства
     * @var string $requestedCurrencyCode
     */
    public $requestedCurrencyCode = 'RUB';
    
    /**
     * УИд обращения.
     * УИд, который присваивается обращению по правилам, установленным приложением 2 к Положению Банка России «О порядке формирования кредитной истории» для присвоения УИд сделке.
     * Если по этому обращению совершена сделка, то значение поля должно соответствовать показателю 17.1 «УИд сделки».
     * Если УИд не присваивался, то укажите его произвольный уникальный идентификатор в показателе 55.14 «Номер обращения».
     * УИд обязателен для всех обращений, показатель «Дата обращения» по которым больше или равен 01.11.2022.
     * @var string $applicationNumber
     */
    public $applicationNumber = '';
    
    /**
     * Номер обращения
     * Номер обращения, присвоенный источником.
     * @var string $oldAppNum
     */
    public $oldAppNum = null;
    
    /**
     * Дата обращения
     * @var string $applicationDate
     */
    public $applicationDate = '';
    
    /**
     * Код источника
     * @see SourceType
     * @var string $creditorTypeCode
     */
    public $creditorTypeCode = '';
    
    /**
     * Код способа обращения
     * Заполняется кодом 6, 7 или 8 по справочнику 6.4.1.
     * @var string $applicationShipmentCode
     */
    public $applicationShipmentCode = '';
    
    /**
     * Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)
     * Заполняется для инвестиционного предложения в соответствии с частью 2 статьи 13 Федерального закона
     * от 2 августа 2019 года № 259-ФЗ «О привлечении инвестиций с использованием инвестиционных платформ
     * и о внесении изменений в отдельные законодательные акты Российской Федерации» (Собрание законодательства Российской Федерации, 2019, № 31, ст. 4418)
     * или оферты кредитора со сроком для ее акцепта и принятом решении об одобрении.
     * @var string $approvalExpireDate
     */
    public $approvalExpireDate = null;
    
    /**
     * Дата окончания срока рассмотрения обращения
     * Плановая дата окончания срока рассмотрения источником обращения.
     * В случае если по истечении 5 календарных дней со дня окончания указанного по этому показателю срока
     * в бюро не поступили сведения об изменении стадии рассмотрения обращения, НБКИ исключает из КИ информацию об обращении.
     * @var string $considerationShipmentDate
     */
    public $considerationShipmentDate = null;
    
    /**
     * Код цели запрошенного займа (кредита)
     * Заполняется по справочнику 2.4
     * @var string $requestloanCode
     */
    public $requestloanCode = '';
    
    /**
     * Код стадии рассмотрения обращения
     * Заполняется по справочнику 6.4.2
     * @var string $considerationShipmentCode
     */
    public $considerationShipmentCode = '';
    
    /**
     * Дата перехода обращения в текущую стадию рассмотрения
     * Дата, в которую рассмотрение обращения перешло к стадии, указанной по показателю 55.11 «Код стадии рассмотрения обращения».
     * @var string $transitDate
     */
    public $transitDate = '';
    
    /**
     * Код вида обращения
     * Заполняется по справочнику 6.4
     * @var string $applicationCode
     */
    public $applicationCode = '';
    
    /**
     * Код вида участия в сделке
     * Заполняется по справочнику 2.1.
     * @var int $flagIndicatorCode
     */
    public $flagIndicatorCode = null;
    
    /**
     * Код вида займа (кредита)
     * Заполняется по справочнику 2.3.
     * @var int $approvedLoanTypeCode
     */
    public $approvedLoanTypeCode = null;
    
    /**
     * УИд сделки
     * @var string $agreementNumber
     */
    public $agreementNumber = '';
    
    /**
     * Номер договора прекративших действие до 29.10.2020
     * @var string $oldAgreementNum
     */
    public $oldAgreementNum = '';
    
    /**
     * Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     * @var string $fundDt
     */
    public $fundDt = null;
    
    /**
     * Признак просрочки должника более 90 дней
     * Код «1» – должник нарушил срок платежа по займу или лизингу более чем на 90 календарных дней;
     * код «0» – обстоятельство кода «1» отсутствует.
     * Продолжительность просрочки определяется методом ФИФО.
     * @var int $defaultFlag
     */
    public $defaultFlag = null;
    
    /**
     * Признак прекращения обязательства.
     * Код «1» – взаимные обязательства субъекта и источника прекращены (независимо от основания);
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $loanIndicator
     */
    public $loanIndicator = null;
    
    /**
     * Дата отказа
     * @var string $rejectedDate
     */
    public $rejectedDate = '';
    
    /**
     * Коды причины отказа.
     * Заполняется по справочнику 6.5.
     * @var int[] $rejectedReasonCode
     */
    public $rejectedReasonCode = [];

    /**
     * Сумма одобренного источником займа (кредита), лизинга или обеспечения по результатам рассмотрения источником обращения субъекта.
     * @var string $loanSum
     */
    public $loanSum = null;
    
}
