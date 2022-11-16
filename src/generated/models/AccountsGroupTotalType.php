<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AccountsGroupTotalType
 *
 * 
 * XSD Type: AccountsGroupTotal
 */
class AccountsGroupTotalType
{

    /**
     * @var string $accountType
     */
    private $accountType = null;

    /**
     * @var string $accountTypeText
     */
    private $accountTypeText = null;

    /**
     * @var int $totalAccts
     */
    private $totalAccts = null;

    /**
     * @var int $zeroBalance
     */
    private $zeroBalance = null;

    /**
     * @var int $negativeRating
     */
    private $negativeRating = null;

    /**
     * @var int $positiveRating
     */
    private $positiveRating = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $highCredit
     */
    private $highCredit = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $installment
     */
    private $installment = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $currentBalance
     */
    private $currentBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $pastDueBalance
     */
    private $pastDueBalance = [
        
    ];

    /**
     * @var \DateTime $mostRecentAcctDate
     */
    private $mostRecentAcctDate = null;

    /**
     * @var \DateTime $oldestAcctDate
     */
    private $oldestAcctDate = null;

    /**
     * Gets as accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets a new accountType
     *
     * @param string $accountType
     * @return self
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Gets as accountTypeText
     *
     * @return string
     */
    public function getAccountTypeText()
    {
        return $this->accountTypeText;
    }

    /**
     * Sets a new accountTypeText
     *
     * @param string $accountTypeText
     * @return self
     */
    public function setAccountTypeText($accountTypeText)
    {
        $this->accountTypeText = $accountTypeText;
        return $this;
    }

    /**
     * Gets as totalAccts
     *
     * @return int
     */
    public function getTotalAccts()
    {
        return $this->totalAccts;
    }

    /**
     * Sets a new totalAccts
     *
     * @param int $totalAccts
     * @return self
     */
    public function setTotalAccts($totalAccts)
    {
        $this->totalAccts = $totalAccts;
        return $this;
    }

    /**
     * Gets as zeroBalance
     *
     * @return int
     */
    public function getZeroBalance()
    {
        return $this->zeroBalance;
    }

    /**
     * Sets a new zeroBalance
     *
     * @param int $zeroBalance
     * @return self
     */
    public function setZeroBalance($zeroBalance)
    {
        $this->zeroBalance = $zeroBalance;
        return $this;
    }

    /**
     * Gets as negativeRating
     *
     * @return int
     */
    public function getNegativeRating()
    {
        return $this->negativeRating;
    }

    /**
     * Sets a new negativeRating
     *
     * @param int $negativeRating
     * @return self
     */
    public function setNegativeRating($negativeRating)
    {
        $this->negativeRating = $negativeRating;
        return $this;
    }

    /**
     * Gets as positiveRating
     *
     * @return int
     */
    public function getPositiveRating()
    {
        return $this->positiveRating;
    }

    /**
     * Sets a new positiveRating
     *
     * @param int $positiveRating
     * @return self
     */
    public function setPositiveRating($positiveRating)
    {
        $this->positiveRating = $positiveRating;
        return $this;
    }

    /**
     * Adds as highCredit
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $highCredit
     */
    public function addToHighCredit(\mfteam\nbch\generated\models\CurrencyCodeType $highCredit)
    {
        $this->highCredit[] = $highCredit;
        return $this;
    }

    /**
     * isset highCredit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHighCredit($index)
    {
        return isset($this->highCredit[$index]);
    }

    /**
     * unset highCredit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHighCredit($index)
    {
        unset($this->highCredit[$index]);
    }

    /**
     * Gets as highCredit
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getHighCredit()
    {
        return $this->highCredit;
    }

    /**
     * Sets a new highCredit
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $highCredit
     * @return self
     */
    public function setHighCredit(array $highCredit)
    {
        $this->highCredit = $highCredit;
        return $this;
    }

    /**
     * Adds as installment
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $installment
     */
    public function addToInstallment(\mfteam\nbch\generated\models\CurrencyCodeType $installment)
    {
        $this->installment[] = $installment;
        return $this;
    }

    /**
     * isset installment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstallment($index)
    {
        return isset($this->installment[$index]);
    }

    /**
     * unset installment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstallment($index)
    {
        unset($this->installment[$index]);
    }

    /**
     * Gets as installment
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * Sets a new installment
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $installment
     * @return self
     */
    public function setInstallment(array $installment)
    {
        $this->installment = $installment;
        return $this;
    }

    /**
     * Adds as currentBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $currentBalance
     */
    public function addToCurrentBalance(\mfteam\nbch\generated\models\CurrencyCodeType $currentBalance)
    {
        $this->currentBalance[] = $currentBalance;
        return $this;
    }

    /**
     * isset currentBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentBalance($index)
    {
        return isset($this->currentBalance[$index]);
    }

    /**
     * unset currentBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentBalance($index)
    {
        unset($this->currentBalance[$index]);
    }

    /**
     * Gets as currentBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getCurrentBalance()
    {
        return $this->currentBalance;
    }

    /**
     * Sets a new currentBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $currentBalance
     * @return self
     */
    public function setCurrentBalance(array $currentBalance)
    {
        $this->currentBalance = $currentBalance;
        return $this;
    }

    /**
     * Adds as pastDueBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $pastDueBalance
     */
    public function addToPastDueBalance(\mfteam\nbch\generated\models\CurrencyCodeType $pastDueBalance)
    {
        $this->pastDueBalance[] = $pastDueBalance;
        return $this;
    }

    /**
     * isset pastDueBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPastDueBalance($index)
    {
        return isset($this->pastDueBalance[$index]);
    }

    /**
     * unset pastDueBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPastDueBalance($index)
    {
        unset($this->pastDueBalance[$index]);
    }

    /**
     * Gets as pastDueBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getPastDueBalance()
    {
        return $this->pastDueBalance;
    }

    /**
     * Sets a new pastDueBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $pastDueBalance
     * @return self
     */
    public function setPastDueBalance(array $pastDueBalance)
    {
        $this->pastDueBalance = $pastDueBalance;
        return $this;
    }

    /**
     * Gets as mostRecentAcctDate
     *
     * @return \DateTime
     */
    public function getMostRecentAcctDate()
    {
        return $this->mostRecentAcctDate;
    }

    /**
     * Sets a new mostRecentAcctDate
     *
     * @param \DateTime $mostRecentAcctDate
     * @return self
     */
    public function setMostRecentAcctDate(\DateTime $mostRecentAcctDate)
    {
        $this->mostRecentAcctDate = $mostRecentAcctDate;
        return $this;
    }

    /**
     * Gets as oldestAcctDate
     *
     * @return \DateTime
     */
    public function getOldestAcctDate()
    {
        return $this->oldestAcctDate;
    }

    /**
     * Sets a new oldestAcctDate
     *
     * @param \DateTime $oldestAcctDate
     * @return self
     */
    public function setOldestAcctDate(\DateTime $oldestAcctDate)
    {
        $this->oldestAcctDate = $oldestAcctDate;
        return $this;
    }


}

