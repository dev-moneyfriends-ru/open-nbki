<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing TradeRUTDFType
 *
 * 
 * XSD Type: TradeRUTDF
 */
class TradeRUTDFType
{

    /**
     * @var string $ownerIndic
     */
    private $ownerIndic = null;

    /**
     * @var \DateTime $openedDt
     */
    private $openedDt = null;

    /**
     * @var string $tradeTypeCode
     */
    private $tradeTypeCode = null;

    /**
     * @var string $loanKindCode
     */
    private $loanKindCode = null;

    /**
     * @var string[] $acctType
     */
    private $acctType = [
        
    ];

    /**
     * @var int $isConsumerLoan
     */
    private $isConsumerLoan = null;

    /**
     * @var int $hasCard
     */
    private $hasCard = null;

    /**
     * @var int $isNovation
     */
    private $isNovation = null;

    /**
     * @var int $isMoneySource
     */
    private $isMoneySource = null;

    /**
     * @var int $isMoneyBorrower
     */
    private $isMoneyBorrower = null;

    /**
     * @var \DateTime $closeDt
     */
    private $closeDt = null;

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $acctSerialNum
     */
    private $acctSerialNum = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

    /**
     * Gets as ownerIndic
     *
     * @return string
     */
    public function getOwnerIndic()
    {
        return $this->ownerIndic;
    }

    /**
     * Sets a new ownerIndic
     *
     * @param string $ownerIndic
     * @return self
     */
    public function setOwnerIndic($ownerIndic)
    {
        $this->ownerIndic = $ownerIndic;
        return $this;
    }

    /**
     * Gets as openedDt
     *
     * @return \DateTime
     */
    public function getOpenedDt()
    {
        return $this->openedDt;
    }

    /**
     * Sets a new openedDt
     *
     * @param \DateTime $openedDt
     * @return self
     */
    public function setOpenedDt(\DateTime $openedDt)
    {
        $this->openedDt = $openedDt;
        return $this;
    }

    /**
     * Gets as tradeTypeCode
     *
     * @return string
     */
    public function getTradeTypeCode()
    {
        return $this->tradeTypeCode;
    }

    /**
     * Sets a new tradeTypeCode
     *
     * @param string $tradeTypeCode
     * @return self
     */
    public function setTradeTypeCode($tradeTypeCode)
    {
        $this->tradeTypeCode = $tradeTypeCode;
        return $this;
    }

    /**
     * Gets as loanKindCode
     *
     * @return string
     */
    public function getLoanKindCode()
    {
        return $this->loanKindCode;
    }

    /**
     * Sets a new loanKindCode
     *
     * @param string $loanKindCode
     * @return self
     */
    public function setLoanKindCode($loanKindCode)
    {
        $this->loanKindCode = $loanKindCode;
        return $this;
    }

    /**
     * Adds as acctType
     *
     * @return self
     * @param string $acctType
     */
    public function addToAcctType($acctType)
    {
        $this->acctType[] = $acctType;
        return $this;
    }

    /**
     * isset acctType
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcctType($index)
    {
        return isset($this->acctType[$index]);
    }

    /**
     * unset acctType
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcctType($index)
    {
        unset($this->acctType[$index]);
    }

    /**
     * Gets as acctType
     *
     * @return string[]
     */
    public function getAcctType()
    {
        return $this->acctType;
    }

    /**
     * Sets a new acctType
     *
     * @param string[] $acctType
     * @return self
     */
    public function setAcctType(array $acctType)
    {
        $this->acctType = $acctType;
        return $this;
    }

    /**
     * Gets as isConsumerLoan
     *
     * @return int
     */
    public function getIsConsumerLoan()
    {
        return $this->isConsumerLoan;
    }

    /**
     * Sets a new isConsumerLoan
     *
     * @param int $isConsumerLoan
     * @return self
     */
    public function setIsConsumerLoan($isConsumerLoan)
    {
        $this->isConsumerLoan = $isConsumerLoan;
        return $this;
    }

    /**
     * Gets as hasCard
     *
     * @return int
     */
    public function getHasCard()
    {
        return $this->hasCard;
    }

    /**
     * Sets a new hasCard
     *
     * @param int $hasCard
     * @return self
     */
    public function setHasCard($hasCard)
    {
        $this->hasCard = $hasCard;
        return $this;
    }

    /**
     * Gets as isNovation
     *
     * @return int
     */
    public function getIsNovation()
    {
        return $this->isNovation;
    }

    /**
     * Sets a new isNovation
     *
     * @param int $isNovation
     * @return self
     */
    public function setIsNovation($isNovation)
    {
        $this->isNovation = $isNovation;
        return $this;
    }

    /**
     * Gets as isMoneySource
     *
     * @return int
     */
    public function getIsMoneySource()
    {
        return $this->isMoneySource;
    }

    /**
     * Sets a new isMoneySource
     *
     * @param int $isMoneySource
     * @return self
     */
    public function setIsMoneySource($isMoneySource)
    {
        $this->isMoneySource = $isMoneySource;
        return $this;
    }

    /**
     * Gets as isMoneyBorrower
     *
     * @return int
     */
    public function getIsMoneyBorrower()
    {
        return $this->isMoneyBorrower;
    }

    /**
     * Sets a new isMoneyBorrower
     *
     * @param int $isMoneyBorrower
     * @return self
     */
    public function setIsMoneyBorrower($isMoneyBorrower)
    {
        $this->isMoneyBorrower = $isMoneyBorrower;
        return $this;
    }

    /**
     * Gets as closeDt
     *
     * @return \DateTime
     */
    public function getCloseDt()
    {
        return $this->closeDt;
    }

    /**
     * Sets a new closeDt
     *
     * @param \DateTime $closeDt
     * @return self
     */
    public function setCloseDt(\DateTime $closeDt)
    {
        $this->closeDt = $closeDt;
        return $this;
    }

    /**
     * Gets as fid
     *
     * @return int
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Sets a new fid
     *
     * @param int $fid
     * @return self
     */
    public function setFid($fid)
    {
        $this->fid = $fid;
        return $this;
    }

    /**
     * Gets as serialNum
     *
     * @return int
     */
    public function getSerialNum()
    {
        return $this->serialNum;
    }

    /**
     * Sets a new serialNum
     *
     * @param int $serialNum
     * @return self
     */
    public function setSerialNum($serialNum)
    {
        $this->serialNum = $serialNum;
        return $this;
    }

    /**
     * Gets as acctSerialNum
     *
     * @return string
     */
    public function getAcctSerialNum()
    {
        return $this->acctSerialNum;
    }

    /**
     * Sets a new acctSerialNum
     *
     * @param string $acctSerialNum
     * @return self
     */
    public function setAcctSerialNum($acctSerialNum)
    {
        $this->acctSerialNum = $acctSerialNum;
        return $this;
    }

    /**
     * Gets as fileSinceDt
     *
     * @return \DateTime
     */
    public function getFileSinceDt()
    {
        return $this->fileSinceDt;
    }

    /**
     * Sets a new fileSinceDt
     *
     * @param \DateTime $fileSinceDt
     * @return self
     */
    public function setFileSinceDt(\DateTime $fileSinceDt)
    {
        $this->fileSinceDt = $fileSinceDt;
        return $this;
    }

    /**
     * Gets as lastUpdatedDt
     *
     * @return \DateTime
     */
    public function getLastUpdatedDt()
    {
        return $this->lastUpdatedDt;
    }

    /**
     * Sets a new lastUpdatedDt
     *
     * @param \DateTime $lastUpdatedDt
     * @return self
     */
    public function setLastUpdatedDt(\DateTime $lastUpdatedDt)
    {
        $this->lastUpdatedDt = $lastUpdatedDt;
        return $this;
    }

    /**
     * Gets as reportingDt
     *
     * @return \DateTime
     */
    public function getReportingDt()
    {
        return $this->reportingDt;
    }

    /**
     * Sets a new reportingDt
     *
     * @param \DateTime $reportingDt
     * @return self
     */
    public function setReportingDt(\DateTime $reportingDt)
    {
        $this->reportingDt = $reportingDt;
        return $this;
    }


}

