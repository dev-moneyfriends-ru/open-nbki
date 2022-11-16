<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing SourceLegalRUTDFType
 *
 * 
 * XSD Type: SourceLegalRUTDF
 */
class SourceLegalRUTDFType
{

    /**
     * @var int $memberTypeCode
     */
    private $memberTypeCode = null;

    /**
     * @var int $memberRus
     */
    private $memberRus = null;

    /**
     * @var string $memberFullName
     */
    private $memberFullName = null;

    /**
     * @var string $memberShortName
     */
    private $memberShortName = null;

    /**
     * @var string $memberOtherName
     */
    private $memberOtherName = null;

    /**
     * @var string $memberLEI
     */
    private $memberLEI = null;

    /**
     * @var \DateTime $memberStartDt
     */
    private $memberStartDt = null;

    /**
     * @var string $memberRegNum
     */
    private $memberRegNum = null;

    /**
     * @var int $memberTaxpayerIDCode
     */
    private $memberTaxpayerIDCode = null;

    /**
     * @var string $memberTaxpayerID
     */
    private $memberTaxpayerID = null;

    /**
     * @var \DateTime $memberBankruptDt
     */
    private $memberBankruptDt = null;

    /**
     * @var \DateTime $memberComp
     */
    private $memberComp = null;

    /**
     * @var \DateTime $memberLiquidStartDt
     */
    private $memberLiquidStartDt = null;

    /**
     * @var \DateTime $memberLiquidEndDt
     */
    private $memberLiquidEndDt = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

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
     * Gets as memberTypeCode
     *
     * @return int
     */
    public function getMemberTypeCode()
    {
        return $this->memberTypeCode;
    }

    /**
     * Sets a new memberTypeCode
     *
     * @param int $memberTypeCode
     * @return self
     */
    public function setMemberTypeCode($memberTypeCode)
    {
        $this->memberTypeCode = $memberTypeCode;
        return $this;
    }

    /**
     * Gets as memberRus
     *
     * @return int
     */
    public function getMemberRus()
    {
        return $this->memberRus;
    }

    /**
     * Sets a new memberRus
     *
     * @param int $memberRus
     * @return self
     */
    public function setMemberRus($memberRus)
    {
        $this->memberRus = $memberRus;
        return $this;
    }

    /**
     * Gets as memberFullName
     *
     * @return string
     */
    public function getMemberFullName()
    {
        return $this->memberFullName;
    }

    /**
     * Sets a new memberFullName
     *
     * @param string $memberFullName
     * @return self
     */
    public function setMemberFullName($memberFullName)
    {
        $this->memberFullName = $memberFullName;
        return $this;
    }

    /**
     * Gets as memberShortName
     *
     * @return string
     */
    public function getMemberShortName()
    {
        return $this->memberShortName;
    }

    /**
     * Sets a new memberShortName
     *
     * @param string $memberShortName
     * @return self
     */
    public function setMemberShortName($memberShortName)
    {
        $this->memberShortName = $memberShortName;
        return $this;
    }

    /**
     * Gets as memberOtherName
     *
     * @return string
     */
    public function getMemberOtherName()
    {
        return $this->memberOtherName;
    }

    /**
     * Sets a new memberOtherName
     *
     * @param string $memberOtherName
     * @return self
     */
    public function setMemberOtherName($memberOtherName)
    {
        $this->memberOtherName = $memberOtherName;
        return $this;
    }

    /**
     * Gets as memberLEI
     *
     * @return string
     */
    public function getMemberLEI()
    {
        return $this->memberLEI;
    }

    /**
     * Sets a new memberLEI
     *
     * @param string $memberLEI
     * @return self
     */
    public function setMemberLEI($memberLEI)
    {
        $this->memberLEI = $memberLEI;
        return $this;
    }

    /**
     * Gets as memberStartDt
     *
     * @return \DateTime
     */
    public function getMemberStartDt()
    {
        return $this->memberStartDt;
    }

    /**
     * Sets a new memberStartDt
     *
     * @param \DateTime $memberStartDt
     * @return self
     */
    public function setMemberStartDt(\DateTime $memberStartDt)
    {
        $this->memberStartDt = $memberStartDt;
        return $this;
    }

    /**
     * Gets as memberRegNum
     *
     * @return string
     */
    public function getMemberRegNum()
    {
        return $this->memberRegNum;
    }

    /**
     * Sets a new memberRegNum
     *
     * @param string $memberRegNum
     * @return self
     */
    public function setMemberRegNum($memberRegNum)
    {
        $this->memberRegNum = $memberRegNum;
        return $this;
    }

    /**
     * Gets as memberTaxpayerIDCode
     *
     * @return int
     */
    public function getMemberTaxpayerIDCode()
    {
        return $this->memberTaxpayerIDCode;
    }

    /**
     * Sets a new memberTaxpayerIDCode
     *
     * @param int $memberTaxpayerIDCode
     * @return self
     */
    public function setMemberTaxpayerIDCode($memberTaxpayerIDCode)
    {
        $this->memberTaxpayerIDCode = $memberTaxpayerIDCode;
        return $this;
    }

    /**
     * Gets as memberTaxpayerID
     *
     * @return string
     */
    public function getMemberTaxpayerID()
    {
        return $this->memberTaxpayerID;
    }

    /**
     * Sets a new memberTaxpayerID
     *
     * @param string $memberTaxpayerID
     * @return self
     */
    public function setMemberTaxpayerID($memberTaxpayerID)
    {
        $this->memberTaxpayerID = $memberTaxpayerID;
        return $this;
    }

    /**
     * Gets as memberBankruptDt
     *
     * @return \DateTime
     */
    public function getMemberBankruptDt()
    {
        return $this->memberBankruptDt;
    }

    /**
     * Sets a new memberBankruptDt
     *
     * @param \DateTime $memberBankruptDt
     * @return self
     */
    public function setMemberBankruptDt(\DateTime $memberBankruptDt)
    {
        $this->memberBankruptDt = $memberBankruptDt;
        return $this;
    }

    /**
     * Gets as memberComp
     *
     * @return \DateTime
     */
    public function getMemberComp()
    {
        return $this->memberComp;
    }

    /**
     * Sets a new memberComp
     *
     * @param \DateTime $memberComp
     * @return self
     */
    public function setMemberComp(\DateTime $memberComp)
    {
        $this->memberComp = $memberComp;
        return $this;
    }

    /**
     * Gets as memberLiquidStartDt
     *
     * @return \DateTime
     */
    public function getMemberLiquidStartDt()
    {
        return $this->memberLiquidStartDt;
    }

    /**
     * Sets a new memberLiquidStartDt
     *
     * @param \DateTime $memberLiquidStartDt
     * @return self
     */
    public function setMemberLiquidStartDt(\DateTime $memberLiquidStartDt)
    {
        $this->memberLiquidStartDt = $memberLiquidStartDt;
        return $this;
    }

    /**
     * Gets as memberLiquidEndDt
     *
     * @return \DateTime
     */
    public function getMemberLiquidEndDt()
    {
        return $this->memberLiquidEndDt;
    }

    /**
     * Sets a new memberLiquidEndDt
     *
     * @param \DateTime $memberLiquidEndDt
     * @return self
     */
    public function setMemberLiquidEndDt(\DateTime $memberLiquidEndDt)
    {
        $this->memberLiquidEndDt = $memberLiquidEndDt;
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


}

