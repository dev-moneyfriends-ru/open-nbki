<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL55ApplicationType
 *
 * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
 * XSD Type: FL_55_Application_Type
 */
class FL55ApplicationType extends GutdfSegment
{
    /**
     * 55.1. Код вида участия в сделке
     *
     * @var int $role
     */
    private $role = null;

    /**
     * 55.2. Сумма запрошенного займа (кредита), лизинга или обеспечения
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 55.3. Запрошенная валюта обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 55.4. УИд обращения
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 55.5. Дата обращения
     *
     * @var \DateTime $applicationDate
     */
    private $applicationDate = null;

    /**
     * 55.6. Код источника
     *
     * @var int $sourceCode
     */
    private $sourceCode = null;

    /**
     * 55.7. Код способа обращения
     *
     * @var string $wayCode
     */
    private $wayCode = null;

    /**
     * 55.8. Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)
     *
     * @var \DateTime $approvalEndDate
     */
    private $approvalEndDate = null;

    /**
     * 55.9. Дата окончания срока рассмотрения обращения
     *
     * @var \DateTime $stageEndDate
     */
    private $stageEndDate = null;

    /**
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @var string[] $purposeCode
     */
    private $purposeCode = [
        
    ];

    /**
     * 55.11. Код стадии рассмотрения обращения
     *
     * @var int $stageCode
     */
    private $stageCode = null;

    /**
     * 55.12. Дата перехода обращения в текущую стадию рассмотрения
     *
     * @var \DateTime $stageDate
     */
    private $stageDate = null;

    /**
     * 55.13. Код вида обращения
     *
     * @var string $applicationCode
     */
    private $applicationCode = null;

    /**
     * 55.14. Номер обращения
     *
     * @var string $num
     */
    private $num = null;

    /**
     * 55.15. Сумма одобренного займа (кредита), лизинга или обеспечения
     *
     * @var float $loanSum
     */
    private $loanSum = null;

    /**
     * Gets as role
     *
     * 55.1. Код вида участия в сделке
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * 55.1. Код вида участия в сделке
     *
     * @param int $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as sum
     *
     * 55.2. Сумма запрошенного займа (кредита), лизинга или обеспечения
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 55.2. Сумма запрошенного займа (кредита), лизинга или обеспечения
     *
     * @param float $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 55.3. Запрошенная валюта обязательства
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * 55.3. Запрошенная валюта обязательства
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as uid
     *
     * 55.4. УИд обращения
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 55.4. УИд обращения
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as applicationDate
     *
     * 55.5. Дата обращения
     *
     * @return \DateTime
     */
    public function getApplicationDate()
    {
        return $this->applicationDate;
    }

    /**
     * Sets a new applicationDate
     *
     * 55.5. Дата обращения
     *
     * @param \DateTime $applicationDate
     * @return self
     */
    public function setApplicationDate(\DateTime $applicationDate)
    {
        $this->applicationDate = $applicationDate;
        return $this;
    }

    /**
     * Gets as sourceCode
     *
     * 55.6. Код источника
     *
     * @return int
     */
    public function getSourceCode()
    {
        return $this->sourceCode;
    }

    /**
     * Sets a new sourceCode
     *
     * 55.6. Код источника
     *
     * @param int $sourceCode
     * @return self
     */
    public function setSourceCode($sourceCode)
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }

    /**
     * Gets as wayCode
     *
     * 55.7. Код способа обращения
     *
     * @return string
     */
    public function getWayCode()
    {
        return $this->wayCode;
    }

    /**
     * Sets a new wayCode
     *
     * 55.7. Код способа обращения
     *
     * @param string $wayCode
     * @return self
     */
    public function setWayCode($wayCode)
    {
        $this->wayCode = $wayCode;
        return $this;
    }

    /**
     * Gets as approvalEndDate
     *
     * 55.8. Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)
     *
     * @return \DateTime
     */
    public function getApprovalEndDate()
    {
        return $this->approvalEndDate;
    }

    /**
     * Sets a new approvalEndDate
     *
     * 55.8. Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)
     *
     * @param \DateTime $approvalEndDate
     * @return self
     */
    public function setApprovalEndDate(?\DateTime $approvalEndDate = null)
    {
        $this->approvalEndDate = $approvalEndDate;
        return $this;
    }

    /**
     * Gets as stageEndDate
     *
     * 55.9. Дата окончания срока рассмотрения обращения
     *
     * @return \DateTime
     */
    public function getStageEndDate()
    {
        return $this->stageEndDate;
    }

    /**
     * Sets a new stageEndDate
     *
     * 55.9. Дата окончания срока рассмотрения обращения
     *
     * @param \DateTime $stageEndDate
     * @return self
     */
    public function setStageEndDate(?\DateTime $stageEndDate = null)
    {
        $this->stageEndDate = $stageEndDate;
        return $this;
    }

    /**
     * Adds as purposeCode
     *
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @return self
     * @param string $purposeCode
     */
    public function addToPurposeCode($purposeCode)
    {
        $this->purposeCode[] = $purposeCode;
        return $this;
    }

    /**
     * isset purposeCode
     *
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurposeCode($index)
    {
        return isset($this->purposeCode[$index]);
    }

    /**
     * unset purposeCode
     *
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurposeCode($index)
    {
        unset($this->purposeCode[$index]);
    }

    /**
     * Gets as purposeCode
     *
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @return string[]
     */
    public function getPurposeCode()
    {
        return $this->purposeCode;
    }

    /**
     * Sets a new purposeCode
     *
     * 55.10. Код цели запрошенного займа (кредита)
     *
     * @param string $purposeCode
     * @return self
     */
    public function setPurposeCode(array $purposeCode = null)
    {
        $this->purposeCode = $purposeCode;
        return $this;
    }

    /**
     * Gets as stageCode
     *
     * 55.11. Код стадии рассмотрения обращения
     *
     * @return int
     */
    public function getStageCode()
    {
        return $this->stageCode;
    }

    /**
     * Sets a new stageCode
     *
     * 55.11. Код стадии рассмотрения обращения
     *
     * @param int $stageCode
     * @return self
     */
    public function setStageCode($stageCode)
    {
        $this->stageCode = $stageCode;
        return $this;
    }

    /**
     * Gets as stageDate
     *
     * 55.12. Дата перехода обращения в текущую стадию рассмотрения
     *
     * @return \DateTime
     */
    public function getStageDate()
    {
        return $this->stageDate;
    }

    /**
     * Sets a new stageDate
     *
     * 55.12. Дата перехода обращения в текущую стадию рассмотрения
     *
     * @param \DateTime $stageDate
     * @return self
     */
    public function setStageDate(\DateTime $stageDate)
    {
        $this->stageDate = $stageDate;
        return $this;
    }

    /**
     * Gets as applicationCode
     *
     * 55.13. Код вида обращения
     *
     * @return string
     */
    public function getApplicationCode()
    {
        return $this->applicationCode;
    }

    /**
     * Sets a new applicationCode
     *
     * 55.13. Код вида обращения
     *
     * @param string $applicationCode
     * @return self
     */
    public function setApplicationCode($applicationCode)
    {
        $this->applicationCode = $applicationCode;
        return $this;
    }

    /**
     * Gets as num
     *
     * 55.14. Номер обращения
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 55.14. Номер обращения
     *
     * @param string $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Gets as loanSum
     *
     * 55.15. Сумма одобренного займа (кредита), лизинга или обеспечения
     *
     * @return float
     */
    public function getLoanSum()
    {
        return $this->loanSum;
    }

    /**
     * Sets a new loanSum
     *
     * 55.15. Сумма одобренного займа (кредита), лизинга или обеспечения
     *
     * @param float $loanSum
     * @return self
     */
    public function setLoanSum($loanSum)
    {
        $this->loanSum = $loanSum;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_55_Application';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код вида участия в сделке' => 'Заполняется по справочнику 2.1.',
            'Сумма запрошенного займа (кредита), лизинга или обеспечения' => '',
            'Запрошенная валюта обязательства' => '',
            'УИд обращения' => 'УИд, который присваивается обращению по правилам, установленным приложением 2 к Положению Банка России «О порядке формирования кредитной истории» для присвоения УИд сделке. Если по этому обращению совершена сделка, то значение поля должно соответствовать показателю 17.1 «УИд сделки». Если УИд не присваивался, то укажите его произвольный уникальный идентификатор в показателе 55.14 «Номер обращения». УИд обязателен для всех обращений, показатель «Дата обращения» по которым больше или равен 01.11.2022.',
            'Дата обращения' => '',
            'Код источника' => 'Заполняется по справочнику 6.1.',
            'Код способа обращения' => 'Заполняется кодом 6, 7 или 8 по справочнику 6.4.1.',
            'Дата окончания действия инвестиционного предложения, одобрения обращения (оферты кредитора)' => 'Заполняется для инвестиционного предложения в соответствии с частью 2 статьи 13 Федерального закона от 2 августа 2019 года № 259-ФЗ «О привлечении инвестиций с использованием инвестиционных платформ и о внесении изменений в отдельные законодательные акты Российской Федерации» (Собрание законодательства Российской Федерации, 2019, № 31, ст. 4418) (далее – инвестиционное предложение) или оферты кредитора со сроком для ее акцепта и принятом решении об одобрении.',
            'Дата окончания срока рассмотрения обращения' => 'Плановая дата окончания срока рассмотрения источником обращения. В случае если по истечении 5 календарных дней со дня окончания указанного по этому показателю срока в бюро не поступили сведения об изменении стадии рассмотрения обращения, НБКИ исключает из КИ информацию об обращении. ',
            'Код цели запрошенного займа (кредита)' => 'Заполняется по справочнику 2.4. При наличии нескольких целей займа (кредита) значения указываются через запятую',
            'Код стадии рассмотрения обращения' => 'Заполняется по справочнику 6.4.2',
            'Дата перехода обращения в текущую стадию рассмотрения' => 'Дата, в которую рассмотрение обращения перешло к стадии, указанной по показателю 55.11 «Код стадии рассмотрения обращения».',
            'Код вида обращения' => 'Заполняется по справочнику 6.4',
            'Номер обращения' => 'Номер обращения, присвоенный источником.',
            'Сумма одобренного займа (кредита), лизинга или обеспечения' => 'Сумма одобренного источником займа (кредита), лизинга или обеспечения по результатам рассмотрения источником обращения субъекта.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $informPart = $this->sendData->getInformationPartRUTDF();

        $this->role = $informPart->requestedFlagIndicatorCode;
        $this->sum = $this->formatCurrency($informPart->requestedAmt);
        $this->currency = $informPart->requestedCurrencyCode;
        $this->uid = UuidHelper::getUuidWithControl($informPart->applicationNumber);
        $this->applicationDate = $this->formatDate($informPart->applicationDate);
        $this->sourceCode = $informPart->creditorTypeCode;
        $this->wayCode = $informPart->applicationShipmentCode;
        $this->approvalEndDate = $this->formatDate($informPart->approvalExpireDate);
        $this->stageEndDate = $this->formatDate($informPart->considerationShipmentDate);
        $this->purposeCode = $informPart->requestloanCode;
        $this->stageCode = $informPart->considerationShipmentCode;
        $this->stageDate = $this->formatDate($informPart->transitDate);
        $this->applicationCode = $informPart->applicationCode;
        $this->num = $informPart->oldAppNum;
        $this->loanSum = $this->formatCurrency($informPart->loanSum);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'role',
            'sum',
            'currency',
            'uid',
            'applicationDate',
            'sourceCode',
            'wayCode',
            'approvalEndDate',
            'stageEndDate',
            'purposeCode',
            'stageCode',
            'stageDate',
            'applicationCode',
            'num',
            'loanSum',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Если обращение перешло в стадию рассмотрения «4» либо по истечении 10 рабочих дней со дня окончания указанного в показателе 55.8 срока в бюро не поступили сведения о заключении договора, НБКИ исключает из КИ информацию об обращении (в течение 2 рабочих дней). Если за один день произошло несколько переходов из одной стадии рассмотрения обращения в другую, следует передать их в одном файле с соответствующими событиями и в порядке наступления этих событий в этот день.';
    }
}

