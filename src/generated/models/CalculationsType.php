<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CalculationsType
 *
 * 
 * XSD Type: Calculations
 */
class CalculationsType
{

    /**
     * @var int $totalAccts
     */
    private $totalAccts = null;

    /**
     * @var int $totalZeroBalanceAccounts
     */
    private $totalZeroBalanceAccounts = null;

    /**
     * @var int $totalActiveBalanceAccounts
     */
    private $totalActiveBalanceAccounts = null;

    /**
     * @var int $negativeRating
     */
    private $negativeRating = null;

    /**
     * @var int $paid
     */
    private $paid = null;

    /**
     * @var \DateTime $mostRecentAcc
     */
    private $mostRecentAcc = null;

    /**
     * @var \DateTime $oldest
     */
    private $oldest = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalHighCredit
     */
    private $totalHighCredit = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalCurrentBalance
     */
    private $totalCurrentBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalPastDueBalance
     */
    private $totalPastDueBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalOutstandingBalance
     */
    private $totalOutstandingBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalScheduledPaymnts
     */
    private $totalScheduledPaymnts = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $installment
     */
    private $installment = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $revolving
     */
    private $revolving = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $open
     */
    private $open = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $mortgage
     */
    private $mortgage = [
        
    ];

    /**
     * @var int $totalOfficialInfo
     */
    private $totalOfficialInfo = null;

    /**
     * @var int $totalLegalItems
     */
    private $totalLegalItems = null;

    /**
     * @var int $totalBankruptcies
     */
    private $totalBankruptcies = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalLiabilityBalance
     */
    private $totalLiabilityBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalLegalItemsBalance
     */
    private $totalLegalItemsBalance = [
        
    ];

    /**
     * @var int $totalCollections
     */
    private $totalCollections = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalCollectionsBalance
     */
    private $totalCollectionsBalance = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalClosedForCauseBalance
     */
    private $totalClosedForCauseBalance = [
        
    ];

    /**
     * @var int $totalReturnedItems
     */
    private $totalReturnedItems = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalReturnedItemsBalance
     */
    private $totalReturnedItemsBalance = [
        
    ];

    /**
     * @var int $totalClosedForCause
     */
    private $totalClosedForCause = null;

    /**
     * @var \DateTime $mostRecentOfficialInfo
     */
    private $mostRecentOfficialInfo = null;

    /**
     * @var \DateTime $mostRecentLegalItem
     */
    private $mostRecentLegalItem = null;

    /**
     * @var \DateTime $mostRecentBankruptcy
     */
    private $mostRecentBankruptcy = null;

    /**
     * @var \DateTime $mostRecentCollection
     */
    private $mostRecentCollection = null;

    /**
     * @var \DateTime $mostRecentReturnedItem
     */
    private $mostRecentReturnedItem = null;

    /**
     * @var \DateTime $mostRecentClosedForCause
     */
    private $mostRecentClosedForCause = null;

    /**
     * @var int $totalInquiries
     */
    private $totalInquiries = null;

    /**
     * @var int $recentInquiries
     */
    private $recentInquiries = null;

    /**
     * @var int $collectionsInquiries
     */
    private $collectionsInquiries = null;

    /**
     * @var \DateTime $mostRecentInq
     */
    private $mostRecentInq = null;

    /**
     * @var string $mostRecentInqText
     */
    private $mostRecentInqText = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $creditCard
     */
    private $creditCard = [
        
    ];

    /**
     * @var string $dynamicID
     */
    private $dynamicID = null;

    /**
     * @var string $dynamicIDType
     */
    private $dynamicIDType = null;

    /**
     * @var string $dynamicCountryCode
     */
    private $dynamicCountryCode = null;

    /**
     * @var string $dynamicCountryCodeText
     */
    private $dynamicCountryCodeText = null;

    /**
     * @var \mfteam\nbch\generated\models\IdType $primaryId
     */
    private $primaryId = null;

    /**
     * @var \DateTime $reportIssueDateTime
     */
    private $reportIssueDateTime = null;

    /**
     * @var int $totalBankingAccts
     */
    private $totalBankingAccts = null;

    /**
     * @var \mfteam\nbch\generated\models\CurrencyCodeType[] $totalBankingBalance
     */
    private $totalBankingBalance = [
        
    ];

    /**
     * @var int $totalNegBankingAccts
     */
    private $totalNegBankingAccts = null;

    /**
     * @var \DateTime $mostRecentBanking
     */
    private $mostRecentBanking = null;

    /**
     * @var \DateTime $oldestBanking
     */
    private $oldestBanking = null;

    /**
     * @var \mfteam\nbch\generated\models\AccountsGroupTotalType[] $accountsGroupTotal
     */
    private $accountsGroupTotal = [
        
    ];

    /**
     * @var int $totalIPRecords
     */
    private $totalIPRecords = null;

    /**
     * @var \DateTime $mostRecentLoanAppDt
     */
    private $mostRecentLoanAppDt = null;

    /**
     * @var \DateTime $oldestLoanAppDt
     */
    private $oldestLoanAppDt = null;

    /**
     * @var int $totalRejectedIPRecords
     */
    private $totalRejectedIPRecords = null;

    /**
     * @var int $totalApprovedIPRecords
     */
    private $totalApprovedIPRecords = null;

    /**
     * @var int $totalDefaultFlagIPRecords
     */
    private $totalDefaultFlagIPRecords = null;

    /**
     * @var int $totalClosedBankruptcies
     */
    private $totalClosedBankruptcies = null;

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
     * Gets as totalZeroBalanceAccounts
     *
     * @return int
     */
    public function getTotalZeroBalanceAccounts()
    {
        return $this->totalZeroBalanceAccounts;
    }

    /**
     * Sets a new totalZeroBalanceAccounts
     *
     * @param int $totalZeroBalanceAccounts
     * @return self
     */
    public function setTotalZeroBalanceAccounts($totalZeroBalanceAccounts)
    {
        $this->totalZeroBalanceAccounts = $totalZeroBalanceAccounts;
        return $this;
    }

    /**
     * Gets as totalActiveBalanceAccounts
     *
     * @return int
     */
    public function getTotalActiveBalanceAccounts()
    {
        return $this->totalActiveBalanceAccounts;
    }

    /**
     * Sets a new totalActiveBalanceAccounts
     *
     * @param int $totalActiveBalanceAccounts
     * @return self
     */
    public function setTotalActiveBalanceAccounts($totalActiveBalanceAccounts)
    {
        $this->totalActiveBalanceAccounts = $totalActiveBalanceAccounts;
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
     * Gets as paid
     *
     * @return int
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Sets a new paid
     *
     * @param int $paid
     * @return self
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * Gets as mostRecentAcc
     *
     * @return \DateTime
     */
    public function getMostRecentAcc()
    {
        return $this->mostRecentAcc;
    }

    /**
     * Sets a new mostRecentAcc
     *
     * @param \DateTime $mostRecentAcc
     * @return self
     */
    public function setMostRecentAcc(\DateTime $mostRecentAcc)
    {
        $this->mostRecentAcc = $mostRecentAcc;
        return $this;
    }

    /**
     * Gets as oldest
     *
     * @return \DateTime
     */
    public function getOldest()
    {
        return $this->oldest;
    }

    /**
     * Sets a new oldest
     *
     * @param \DateTime $oldest
     * @return self
     */
    public function setOldest(\DateTime $oldest)
    {
        $this->oldest = $oldest;
        return $this;
    }

    /**
     * Adds as totalHighCredit
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalHighCredit
     */
    public function addToTotalHighCredit(\mfteam\nbch\generated\models\CurrencyCodeType $totalHighCredit)
    {
        $this->totalHighCredit[] = $totalHighCredit;
        return $this;
    }

    /**
     * isset totalHighCredit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalHighCredit($index)
    {
        return isset($this->totalHighCredit[$index]);
    }

    /**
     * unset totalHighCredit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalHighCredit($index)
    {
        unset($this->totalHighCredit[$index]);
    }

    /**
     * Gets as totalHighCredit
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalHighCredit()
    {
        return $this->totalHighCredit;
    }

    /**
     * Sets a new totalHighCredit
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalHighCredit
     * @return self
     */
    public function setTotalHighCredit(array $totalHighCredit)
    {
        $this->totalHighCredit = $totalHighCredit;
        return $this;
    }

    /**
     * Adds as totalCurrentBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalCurrentBalance
     */
    public function addToTotalCurrentBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalCurrentBalance)
    {
        $this->totalCurrentBalance[] = $totalCurrentBalance;
        return $this;
    }

    /**
     * isset totalCurrentBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalCurrentBalance($index)
    {
        return isset($this->totalCurrentBalance[$index]);
    }

    /**
     * unset totalCurrentBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalCurrentBalance($index)
    {
        unset($this->totalCurrentBalance[$index]);
    }

    /**
     * Gets as totalCurrentBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalCurrentBalance()
    {
        return $this->totalCurrentBalance;
    }

    /**
     * Sets a new totalCurrentBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalCurrentBalance
     * @return self
     */
    public function setTotalCurrentBalance(array $totalCurrentBalance)
    {
        $this->totalCurrentBalance = $totalCurrentBalance;
        return $this;
    }

    /**
     * Adds as totalPastDueBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalPastDueBalance
     */
    public function addToTotalPastDueBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalPastDueBalance)
    {
        $this->totalPastDueBalance[] = $totalPastDueBalance;
        return $this;
    }

    /**
     * isset totalPastDueBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalPastDueBalance($index)
    {
        return isset($this->totalPastDueBalance[$index]);
    }

    /**
     * unset totalPastDueBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalPastDueBalance($index)
    {
        unset($this->totalPastDueBalance[$index]);
    }

    /**
     * Gets as totalPastDueBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalPastDueBalance()
    {
        return $this->totalPastDueBalance;
    }

    /**
     * Sets a new totalPastDueBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalPastDueBalance
     * @return self
     */
    public function setTotalPastDueBalance(array $totalPastDueBalance)
    {
        $this->totalPastDueBalance = $totalPastDueBalance;
        return $this;
    }

    /**
     * Adds as totalOutstandingBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalOutstandingBalance
     */
    public function addToTotalOutstandingBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalOutstandingBalance)
    {
        $this->totalOutstandingBalance[] = $totalOutstandingBalance;
        return $this;
    }

    /**
     * isset totalOutstandingBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalOutstandingBalance($index)
    {
        return isset($this->totalOutstandingBalance[$index]);
    }

    /**
     * unset totalOutstandingBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalOutstandingBalance($index)
    {
        unset($this->totalOutstandingBalance[$index]);
    }

    /**
     * Gets as totalOutstandingBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalOutstandingBalance()
    {
        return $this->totalOutstandingBalance;
    }

    /**
     * Sets a new totalOutstandingBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalOutstandingBalance
     * @return self
     */
    public function setTotalOutstandingBalance(array $totalOutstandingBalance)
    {
        $this->totalOutstandingBalance = $totalOutstandingBalance;
        return $this;
    }

    /**
     * Adds as totalScheduledPaymnts
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalScheduledPaymnts
     */
    public function addToTotalScheduledPaymnts(\mfteam\nbch\generated\models\CurrencyCodeType $totalScheduledPaymnts)
    {
        $this->totalScheduledPaymnts[] = $totalScheduledPaymnts;
        return $this;
    }

    /**
     * isset totalScheduledPaymnts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalScheduledPaymnts($index)
    {
        return isset($this->totalScheduledPaymnts[$index]);
    }

    /**
     * unset totalScheduledPaymnts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalScheduledPaymnts($index)
    {
        unset($this->totalScheduledPaymnts[$index]);
    }

    /**
     * Gets as totalScheduledPaymnts
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalScheduledPaymnts()
    {
        return $this->totalScheduledPaymnts;
    }

    /**
     * Sets a new totalScheduledPaymnts
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalScheduledPaymnts
     * @return self
     */
    public function setTotalScheduledPaymnts(array $totalScheduledPaymnts)
    {
        $this->totalScheduledPaymnts = $totalScheduledPaymnts;
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
     * Adds as revolving
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $revolving
     */
    public function addToRevolving(\mfteam\nbch\generated\models\CurrencyCodeType $revolving)
    {
        $this->revolving[] = $revolving;
        return $this;
    }

    /**
     * isset revolving
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevolving($index)
    {
        return isset($this->revolving[$index]);
    }

    /**
     * unset revolving
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevolving($index)
    {
        unset($this->revolving[$index]);
    }

    /**
     * Gets as revolving
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getRevolving()
    {
        return $this->revolving;
    }

    /**
     * Sets a new revolving
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $revolving
     * @return self
     */
    public function setRevolving(array $revolving)
    {
        $this->revolving = $revolving;
        return $this;
    }

    /**
     * Adds as open
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $open
     */
    public function addToOpen(\mfteam\nbch\generated\models\CurrencyCodeType $open)
    {
        $this->open[] = $open;
        return $this;
    }

    /**
     * isset open
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOpen($index)
    {
        return isset($this->open[$index]);
    }

    /**
     * unset open
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOpen($index)
    {
        unset($this->open[$index]);
    }

    /**
     * Gets as open
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Sets a new open
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $open
     * @return self
     */
    public function setOpen(array $open)
    {
        $this->open = $open;
        return $this;
    }

    /**
     * Adds as mortgage
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $mortgage
     */
    public function addToMortgage(\mfteam\nbch\generated\models\CurrencyCodeType $mortgage)
    {
        $this->mortgage[] = $mortgage;
        return $this;
    }

    /**
     * isset mortgage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMortgage($index)
    {
        return isset($this->mortgage[$index]);
    }

    /**
     * unset mortgage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMortgage($index)
    {
        unset($this->mortgage[$index]);
    }

    /**
     * Gets as mortgage
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getMortgage()
    {
        return $this->mortgage;
    }

    /**
     * Sets a new mortgage
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $mortgage
     * @return self
     */
    public function setMortgage(array $mortgage)
    {
        $this->mortgage = $mortgage;
        return $this;
    }

    /**
     * Gets as totalOfficialInfo
     *
     * @return int
     */
    public function getTotalOfficialInfo()
    {
        return $this->totalOfficialInfo;
    }

    /**
     * Sets a new totalOfficialInfo
     *
     * @param int $totalOfficialInfo
     * @return self
     */
    public function setTotalOfficialInfo($totalOfficialInfo)
    {
        $this->totalOfficialInfo = $totalOfficialInfo;
        return $this;
    }

    /**
     * Gets as totalLegalItems
     *
     * @return int
     */
    public function getTotalLegalItems()
    {
        return $this->totalLegalItems;
    }

    /**
     * Sets a new totalLegalItems
     *
     * @param int $totalLegalItems
     * @return self
     */
    public function setTotalLegalItems($totalLegalItems)
    {
        $this->totalLegalItems = $totalLegalItems;
        return $this;
    }

    /**
     * Gets as totalBankruptcies
     *
     * @return int
     */
    public function getTotalBankruptcies()
    {
        return $this->totalBankruptcies;
    }

    /**
     * Sets a new totalBankruptcies
     *
     * @param int $totalBankruptcies
     * @return self
     */
    public function setTotalBankruptcies($totalBankruptcies)
    {
        $this->totalBankruptcies = $totalBankruptcies;
        return $this;
    }

    /**
     * Adds as totalLiabilityBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalLiabilityBalance
     */
    public function addToTotalLiabilityBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalLiabilityBalance)
    {
        $this->totalLiabilityBalance[] = $totalLiabilityBalance;
        return $this;
    }

    /**
     * isset totalLiabilityBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalLiabilityBalance($index)
    {
        return isset($this->totalLiabilityBalance[$index]);
    }

    /**
     * unset totalLiabilityBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalLiabilityBalance($index)
    {
        unset($this->totalLiabilityBalance[$index]);
    }

    /**
     * Gets as totalLiabilityBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalLiabilityBalance()
    {
        return $this->totalLiabilityBalance;
    }

    /**
     * Sets a new totalLiabilityBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalLiabilityBalance
     * @return self
     */
    public function setTotalLiabilityBalance(array $totalLiabilityBalance)
    {
        $this->totalLiabilityBalance = $totalLiabilityBalance;
        return $this;
    }

    /**
     * Adds as totalLegalItemsBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalLegalItemsBalance
     */
    public function addToTotalLegalItemsBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalLegalItemsBalance)
    {
        $this->totalLegalItemsBalance[] = $totalLegalItemsBalance;
        return $this;
    }

    /**
     * isset totalLegalItemsBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalLegalItemsBalance($index)
    {
        return isset($this->totalLegalItemsBalance[$index]);
    }

    /**
     * unset totalLegalItemsBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalLegalItemsBalance($index)
    {
        unset($this->totalLegalItemsBalance[$index]);
    }

    /**
     * Gets as totalLegalItemsBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalLegalItemsBalance()
    {
        return $this->totalLegalItemsBalance;
    }

    /**
     * Sets a new totalLegalItemsBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalLegalItemsBalance
     * @return self
     */
    public function setTotalLegalItemsBalance(array $totalLegalItemsBalance)
    {
        $this->totalLegalItemsBalance = $totalLegalItemsBalance;
        return $this;
    }

    /**
     * Gets as totalCollections
     *
     * @return int
     */
    public function getTotalCollections()
    {
        return $this->totalCollections;
    }

    /**
     * Sets a new totalCollections
     *
     * @param int $totalCollections
     * @return self
     */
    public function setTotalCollections($totalCollections)
    {
        $this->totalCollections = $totalCollections;
        return $this;
    }

    /**
     * Adds as totalCollectionsBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalCollectionsBalance
     */
    public function addToTotalCollectionsBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalCollectionsBalance)
    {
        $this->totalCollectionsBalance[] = $totalCollectionsBalance;
        return $this;
    }

    /**
     * isset totalCollectionsBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalCollectionsBalance($index)
    {
        return isset($this->totalCollectionsBalance[$index]);
    }

    /**
     * unset totalCollectionsBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalCollectionsBalance($index)
    {
        unset($this->totalCollectionsBalance[$index]);
    }

    /**
     * Gets as totalCollectionsBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalCollectionsBalance()
    {
        return $this->totalCollectionsBalance;
    }

    /**
     * Sets a new totalCollectionsBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalCollectionsBalance
     * @return self
     */
    public function setTotalCollectionsBalance(array $totalCollectionsBalance)
    {
        $this->totalCollectionsBalance = $totalCollectionsBalance;
        return $this;
    }

    /**
     * Adds as totalClosedForCauseBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalClosedForCauseBalance
     */
    public function addToTotalClosedForCauseBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalClosedForCauseBalance)
    {
        $this->totalClosedForCauseBalance[] = $totalClosedForCauseBalance;
        return $this;
    }

    /**
     * isset totalClosedForCauseBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalClosedForCauseBalance($index)
    {
        return isset($this->totalClosedForCauseBalance[$index]);
    }

    /**
     * unset totalClosedForCauseBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalClosedForCauseBalance($index)
    {
        unset($this->totalClosedForCauseBalance[$index]);
    }

    /**
     * Gets as totalClosedForCauseBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalClosedForCauseBalance()
    {
        return $this->totalClosedForCauseBalance;
    }

    /**
     * Sets a new totalClosedForCauseBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalClosedForCauseBalance
     * @return self
     */
    public function setTotalClosedForCauseBalance(array $totalClosedForCauseBalance)
    {
        $this->totalClosedForCauseBalance = $totalClosedForCauseBalance;
        return $this;
    }

    /**
     * Gets as totalReturnedItems
     *
     * @return int
     */
    public function getTotalReturnedItems()
    {
        return $this->totalReturnedItems;
    }

    /**
     * Sets a new totalReturnedItems
     *
     * @param int $totalReturnedItems
     * @return self
     */
    public function setTotalReturnedItems($totalReturnedItems)
    {
        $this->totalReturnedItems = $totalReturnedItems;
        return $this;
    }

    /**
     * Adds as totalReturnedItemsBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalReturnedItemsBalance
     */
    public function addToTotalReturnedItemsBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalReturnedItemsBalance)
    {
        $this->totalReturnedItemsBalance[] = $totalReturnedItemsBalance;
        return $this;
    }

    /**
     * isset totalReturnedItemsBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalReturnedItemsBalance($index)
    {
        return isset($this->totalReturnedItemsBalance[$index]);
    }

    /**
     * unset totalReturnedItemsBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalReturnedItemsBalance($index)
    {
        unset($this->totalReturnedItemsBalance[$index]);
    }

    /**
     * Gets as totalReturnedItemsBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalReturnedItemsBalance()
    {
        return $this->totalReturnedItemsBalance;
    }

    /**
     * Sets a new totalReturnedItemsBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalReturnedItemsBalance
     * @return self
     */
    public function setTotalReturnedItemsBalance(array $totalReturnedItemsBalance)
    {
        $this->totalReturnedItemsBalance = $totalReturnedItemsBalance;
        return $this;
    }

    /**
     * Gets as totalClosedForCause
     *
     * @return int
     */
    public function getTotalClosedForCause()
    {
        return $this->totalClosedForCause;
    }

    /**
     * Sets a new totalClosedForCause
     *
     * @param int $totalClosedForCause
     * @return self
     */
    public function setTotalClosedForCause($totalClosedForCause)
    {
        $this->totalClosedForCause = $totalClosedForCause;
        return $this;
    }

    /**
     * Gets as mostRecentOfficialInfo
     *
     * @return \DateTime
     */
    public function getMostRecentOfficialInfo()
    {
        return $this->mostRecentOfficialInfo;
    }

    /**
     * Sets a new mostRecentOfficialInfo
     *
     * @param \DateTime $mostRecentOfficialInfo
     * @return self
     */
    public function setMostRecentOfficialInfo(\DateTime $mostRecentOfficialInfo)
    {
        $this->mostRecentOfficialInfo = $mostRecentOfficialInfo;
        return $this;
    }

    /**
     * Gets as mostRecentLegalItem
     *
     * @return \DateTime
     */
    public function getMostRecentLegalItem()
    {
        return $this->mostRecentLegalItem;
    }

    /**
     * Sets a new mostRecentLegalItem
     *
     * @param \DateTime $mostRecentLegalItem
     * @return self
     */
    public function setMostRecentLegalItem(\DateTime $mostRecentLegalItem)
    {
        $this->mostRecentLegalItem = $mostRecentLegalItem;
        return $this;
    }

    /**
     * Gets as mostRecentBankruptcy
     *
     * @return \DateTime
     */
    public function getMostRecentBankruptcy()
    {
        return $this->mostRecentBankruptcy;
    }

    /**
     * Sets a new mostRecentBankruptcy
     *
     * @param \DateTime $mostRecentBankruptcy
     * @return self
     */
    public function setMostRecentBankruptcy(\DateTime $mostRecentBankruptcy)
    {
        $this->mostRecentBankruptcy = $mostRecentBankruptcy;
        return $this;
    }

    /**
     * Gets as mostRecentCollection
     *
     * @return \DateTime
     */
    public function getMostRecentCollection()
    {
        return $this->mostRecentCollection;
    }

    /**
     * Sets a new mostRecentCollection
     *
     * @param \DateTime $mostRecentCollection
     * @return self
     */
    public function setMostRecentCollection(\DateTime $mostRecentCollection)
    {
        $this->mostRecentCollection = $mostRecentCollection;
        return $this;
    }

    /**
     * Gets as mostRecentReturnedItem
     *
     * @return \DateTime
     */
    public function getMostRecentReturnedItem()
    {
        return $this->mostRecentReturnedItem;
    }

    /**
     * Sets a new mostRecentReturnedItem
     *
     * @param \DateTime $mostRecentReturnedItem
     * @return self
     */
    public function setMostRecentReturnedItem(\DateTime $mostRecentReturnedItem)
    {
        $this->mostRecentReturnedItem = $mostRecentReturnedItem;
        return $this;
    }

    /**
     * Gets as mostRecentClosedForCause
     *
     * @return \DateTime
     */
    public function getMostRecentClosedForCause()
    {
        return $this->mostRecentClosedForCause;
    }

    /**
     * Sets a new mostRecentClosedForCause
     *
     * @param \DateTime $mostRecentClosedForCause
     * @return self
     */
    public function setMostRecentClosedForCause(\DateTime $mostRecentClosedForCause)
    {
        $this->mostRecentClosedForCause = $mostRecentClosedForCause;
        return $this;
    }

    /**
     * Gets as totalInquiries
     *
     * @return int
     */
    public function getTotalInquiries()
    {
        return $this->totalInquiries;
    }

    /**
     * Sets a new totalInquiries
     *
     * @param int $totalInquiries
     * @return self
     */
    public function setTotalInquiries($totalInquiries)
    {
        $this->totalInquiries = $totalInquiries;
        return $this;
    }

    /**
     * Gets as recentInquiries
     *
     * @return int
     */
    public function getRecentInquiries()
    {
        return $this->recentInquiries;
    }

    /**
     * Sets a new recentInquiries
     *
     * @param int $recentInquiries
     * @return self
     */
    public function setRecentInquiries($recentInquiries)
    {
        $this->recentInquiries = $recentInquiries;
        return $this;
    }

    /**
     * Gets as collectionsInquiries
     *
     * @return int
     */
    public function getCollectionsInquiries()
    {
        return $this->collectionsInquiries;
    }

    /**
     * Sets a new collectionsInquiries
     *
     * @param int $collectionsInquiries
     * @return self
     */
    public function setCollectionsInquiries($collectionsInquiries)
    {
        $this->collectionsInquiries = $collectionsInquiries;
        return $this;
    }

    /**
     * Gets as mostRecentInq
     *
     * @return \DateTime
     */
    public function getMostRecentInq()
    {
        return $this->mostRecentInq;
    }

    /**
     * Sets a new mostRecentInq
     *
     * @param \DateTime $mostRecentInq
     * @return self
     */
    public function setMostRecentInq(\DateTime $mostRecentInq)
    {
        $this->mostRecentInq = $mostRecentInq;
        return $this;
    }

    /**
     * Gets as mostRecentInqText
     *
     * @return string
     */
    public function getMostRecentInqText()
    {
        return $this->mostRecentInqText;
    }

    /**
     * Sets a new mostRecentInqText
     *
     * @param string $mostRecentInqText
     * @return self
     */
    public function setMostRecentInqText($mostRecentInqText)
    {
        $this->mostRecentInqText = $mostRecentInqText;
        return $this;
    }

    /**
     * Adds as creditCard
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $creditCard
     */
    public function addToCreditCard(\mfteam\nbch\generated\models\CurrencyCodeType $creditCard)
    {
        $this->creditCard[] = $creditCard;
        return $this;
    }

    /**
     * isset creditCard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCreditCard($index)
    {
        return isset($this->creditCard[$index]);
    }

    /**
     * unset creditCard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCreditCard($index)
    {
        unset($this->creditCard[$index]);
    }

    /**
     * Gets as creditCard
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $creditCard
     * @return self
     */
    public function setCreditCard(array $creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    /**
     * Gets as dynamicID
     *
     * @return string
     */
    public function getDynamicID()
    {
        return $this->dynamicID;
    }

    /**
     * Sets a new dynamicID
     *
     * @param string $dynamicID
     * @return self
     */
    public function setDynamicID($dynamicID)
    {
        $this->dynamicID = $dynamicID;
        return $this;
    }

    /**
     * Gets as dynamicIDType
     *
     * @return string
     */
    public function getDynamicIDType()
    {
        return $this->dynamicIDType;
    }

    /**
     * Sets a new dynamicIDType
     *
     * @param string $dynamicIDType
     * @return self
     */
    public function setDynamicIDType($dynamicIDType)
    {
        $this->dynamicIDType = $dynamicIDType;
        return $this;
    }

    /**
     * Gets as dynamicCountryCode
     *
     * @return string
     */
    public function getDynamicCountryCode()
    {
        return $this->dynamicCountryCode;
    }

    /**
     * Sets a new dynamicCountryCode
     *
     * @param string $dynamicCountryCode
     * @return self
     */
    public function setDynamicCountryCode($dynamicCountryCode)
    {
        $this->dynamicCountryCode = $dynamicCountryCode;
        return $this;
    }

    /**
     * Gets as dynamicCountryCodeText
     *
     * @return string
     */
    public function getDynamicCountryCodeText()
    {
        return $this->dynamicCountryCodeText;
    }

    /**
     * Sets a new dynamicCountryCodeText
     *
     * @param string $dynamicCountryCodeText
     * @return self
     */
    public function setDynamicCountryCodeText($dynamicCountryCodeText)
    {
        $this->dynamicCountryCodeText = $dynamicCountryCodeText;
        return $this;
    }

    /**
     * Gets as primaryId
     *
     * @return \mfteam\nbch\generated\models\IdType
     */
    public function getPrimaryId()
    {
        return $this->primaryId;
    }

    /**
     * Sets a new primaryId
     *
     * @param \mfteam\nbch\generated\models\IdType $primaryId
     * @return self
     */
    public function setPrimaryId(\mfteam\nbch\generated\models\IdType $primaryId)
    {
        $this->primaryId = $primaryId;
        return $this;
    }

    /**
     * Gets as reportIssueDateTime
     *
     * @return \DateTime
     */
    public function getReportIssueDateTime()
    {
        return $this->reportIssueDateTime;
    }

    /**
     * Sets a new reportIssueDateTime
     *
     * @param \DateTime $reportIssueDateTime
     * @return self
     */
    public function setReportIssueDateTime(\DateTime $reportIssueDateTime)
    {
        $this->reportIssueDateTime = $reportIssueDateTime;
        return $this;
    }

    /**
     * Gets as totalBankingAccts
     *
     * @return int
     */
    public function getTotalBankingAccts()
    {
        return $this->totalBankingAccts;
    }

    /**
     * Sets a new totalBankingAccts
     *
     * @param int $totalBankingAccts
     * @return self
     */
    public function setTotalBankingAccts($totalBankingAccts)
    {
        $this->totalBankingAccts = $totalBankingAccts;
        return $this;
    }

    /**
     * Adds as totalBankingBalance
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CurrencyCodeType $totalBankingBalance
     */
    public function addToTotalBankingBalance(\mfteam\nbch\generated\models\CurrencyCodeType $totalBankingBalance)
    {
        $this->totalBankingBalance[] = $totalBankingBalance;
        return $this;
    }

    /**
     * isset totalBankingBalance
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalBankingBalance($index)
    {
        return isset($this->totalBankingBalance[$index]);
    }

    /**
     * unset totalBankingBalance
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalBankingBalance($index)
    {
        unset($this->totalBankingBalance[$index]);
    }

    /**
     * Gets as totalBankingBalance
     *
     * @return \mfteam\nbch\generated\models\CurrencyCodeType[]
     */
    public function getTotalBankingBalance()
    {
        return $this->totalBankingBalance;
    }

    /**
     * Sets a new totalBankingBalance
     *
     * @param \mfteam\nbch\generated\models\CurrencyCodeType[] $totalBankingBalance
     * @return self
     */
    public function setTotalBankingBalance(array $totalBankingBalance)
    {
        $this->totalBankingBalance = $totalBankingBalance;
        return $this;
    }

    /**
     * Gets as totalNegBankingAccts
     *
     * @return int
     */
    public function getTotalNegBankingAccts()
    {
        return $this->totalNegBankingAccts;
    }

    /**
     * Sets a new totalNegBankingAccts
     *
     * @param int $totalNegBankingAccts
     * @return self
     */
    public function setTotalNegBankingAccts($totalNegBankingAccts)
    {
        $this->totalNegBankingAccts = $totalNegBankingAccts;
        return $this;
    }

    /**
     * Gets as mostRecentBanking
     *
     * @return \DateTime
     */
    public function getMostRecentBanking()
    {
        return $this->mostRecentBanking;
    }

    /**
     * Sets a new mostRecentBanking
     *
     * @param \DateTime $mostRecentBanking
     * @return self
     */
    public function setMostRecentBanking(\DateTime $mostRecentBanking)
    {
        $this->mostRecentBanking = $mostRecentBanking;
        return $this;
    }

    /**
     * Gets as oldestBanking
     *
     * @return \DateTime
     */
    public function getOldestBanking()
    {
        return $this->oldestBanking;
    }

    /**
     * Sets a new oldestBanking
     *
     * @param \DateTime $oldestBanking
     * @return self
     */
    public function setOldestBanking(\DateTime $oldestBanking)
    {
        $this->oldestBanking = $oldestBanking;
        return $this;
    }

    /**
     * Adds as accountsGroupTotal
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountsGroupTotalType $accountsGroupTotal
     */
    public function addToAccountsGroupTotal(\mfteam\nbch\generated\models\AccountsGroupTotalType $accountsGroupTotal)
    {
        $this->accountsGroupTotal[] = $accountsGroupTotal;
        return $this;
    }

    /**
     * isset accountsGroupTotal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountsGroupTotal($index)
    {
        return isset($this->accountsGroupTotal[$index]);
    }

    /**
     * unset accountsGroupTotal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountsGroupTotal($index)
    {
        unset($this->accountsGroupTotal[$index]);
    }

    /**
     * Gets as accountsGroupTotal
     *
     * @return \mfteam\nbch\generated\models\AccountsGroupTotalType[]
     */
    public function getAccountsGroupTotal()
    {
        return $this->accountsGroupTotal;
    }

    /**
     * Sets a new accountsGroupTotal
     *
     * @param \mfteam\nbch\generated\models\AccountsGroupTotalType[] $accountsGroupTotal
     * @return self
     */
    public function setAccountsGroupTotal(array $accountsGroupTotal)
    {
        $this->accountsGroupTotal = $accountsGroupTotal;
        return $this;
    }

    /**
     * Gets as totalIPRecords
     *
     * @return int
     */
    public function getTotalIPRecords()
    {
        return $this->totalIPRecords;
    }

    /**
     * Sets a new totalIPRecords
     *
     * @param int $totalIPRecords
     * @return self
     */
    public function setTotalIPRecords($totalIPRecords)
    {
        $this->totalIPRecords = $totalIPRecords;
        return $this;
    }

    /**
     * Gets as mostRecentLoanAppDt
     *
     * @return \DateTime
     */
    public function getMostRecentLoanAppDt()
    {
        return $this->mostRecentLoanAppDt;
    }

    /**
     * Sets a new mostRecentLoanAppDt
     *
     * @param \DateTime $mostRecentLoanAppDt
     * @return self
     */
    public function setMostRecentLoanAppDt(\DateTime $mostRecentLoanAppDt)
    {
        $this->mostRecentLoanAppDt = $mostRecentLoanAppDt;
        return $this;
    }

    /**
     * Gets as oldestLoanAppDt
     *
     * @return \DateTime
     */
    public function getOldestLoanAppDt()
    {
        return $this->oldestLoanAppDt;
    }

    /**
     * Sets a new oldestLoanAppDt
     *
     * @param \DateTime $oldestLoanAppDt
     * @return self
     */
    public function setOldestLoanAppDt(\DateTime $oldestLoanAppDt)
    {
        $this->oldestLoanAppDt = $oldestLoanAppDt;
        return $this;
    }

    /**
     * Gets as totalRejectedIPRecords
     *
     * @return int
     */
    public function getTotalRejectedIPRecords()
    {
        return $this->totalRejectedIPRecords;
    }

    /**
     * Sets a new totalRejectedIPRecords
     *
     * @param int $totalRejectedIPRecords
     * @return self
     */
    public function setTotalRejectedIPRecords($totalRejectedIPRecords)
    {
        $this->totalRejectedIPRecords = $totalRejectedIPRecords;
        return $this;
    }

    /**
     * Gets as totalApprovedIPRecords
     *
     * @return int
     */
    public function getTotalApprovedIPRecords()
    {
        return $this->totalApprovedIPRecords;
    }

    /**
     * Sets a new totalApprovedIPRecords
     *
     * @param int $totalApprovedIPRecords
     * @return self
     */
    public function setTotalApprovedIPRecords($totalApprovedIPRecords)
    {
        $this->totalApprovedIPRecords = $totalApprovedIPRecords;
        return $this;
    }

    /**
     * Gets as totalDefaultFlagIPRecords
     *
     * @return int
     */
    public function getTotalDefaultFlagIPRecords()
    {
        return $this->totalDefaultFlagIPRecords;
    }

    /**
     * Sets a new totalDefaultFlagIPRecords
     *
     * @param int $totalDefaultFlagIPRecords
     * @return self
     */
    public function setTotalDefaultFlagIPRecords($totalDefaultFlagIPRecords)
    {
        $this->totalDefaultFlagIPRecords = $totalDefaultFlagIPRecords;
        return $this;
    }

    /**
     * Gets as totalClosedBankruptcies
     *
     * @return int
     */
    public function getTotalClosedBankruptcies()
    {
        return $this->totalClosedBankruptcies;
    }

    /**
     * Sets a new totalClosedBankruptcies
     *
     * @param int $totalClosedBankruptcies
     * @return self
     */
    public function setTotalClosedBankruptcies($totalClosedBankruptcies)
    {
        $this->totalClosedBankruptcies = $totalClosedBankruptcies;
        return $this;
    }


}

