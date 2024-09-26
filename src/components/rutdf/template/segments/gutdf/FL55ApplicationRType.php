<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL55ApplicationRType
 *
 * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
 * XSD Type: FL_55_Application_R_Type
 */
class FL55ApplicationRType
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
}

