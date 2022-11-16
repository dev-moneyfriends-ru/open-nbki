<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing IdType
 *
 * 
 * XSD Type: Id
 */
class IdType
{

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var int $serialNum
     */
    private $serialNum = null;

    /**
     * @var string $srcCountryCode
     */
    private $srcCountryCode = null;

    /**
     * @var string $srcCountryCodeText
     */
    private $srcCountryCodeText = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var string $memberTypeText
     */
    private $memberTypeText = null;

    /**
     * @var string $memberNameText
     */
    private $memberNameText = null;

    /**
     * @var string $memberContactText
     */
    private $memberContactText = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * @var string $idNum
     */
    private $idNum = null;

    /**
     * @var string $idType
     */
    private $idType = null;

    /**
     * @var string $idTypeText
     */
    private $idTypeText = null;

    /**
     * @var string $seriesNumber
     */
    private $seriesNumber = null;

    /**
     * @var string $documentNumber
     */
    private $documentNumber = null;

    /**
     * @var string $issueCountry
     */
    private $issueCountry = null;

    /**
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * @var string $issueAuthority
     */
    private $issueAuthority = null;

    /**
     * @var string $dataValidity
     */
    private $dataValidity = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var int $freezeFlag
     */
    private $freezeFlag = null;

    /**
     * @var int $suppressFlag
     */
    private $suppressFlag = null;

    /**
     * @var \DateTime $suppressStrDt
     */
    private $suppressStrDt = null;

    /**
     * @var \DateTime $suppressEndDt
     */
    private $suppressEndDt = null;

    /**
     * @var string $disputedStatus
     */
    private $disputedStatus = null;

    /**
     * @var string $disputedStatusText
     */
    private $disputedStatusText = null;

    /**
     * @var string $oKSM
     */
    private $oKSM = null;

    /**
     * @var string $otherCountry
     */
    private $otherCountry = null;

    /**
     * @var string $otherId
     */
    private $otherId = null;

    /**
     * @var string $divCode
     */
    private $divCode = null;

    /**
     * @var \DateTime $validTo
     */
    private $validTo = null;

    /**
     * @var int $isPrevId
     */
    private $isPrevId = null;

    /**
     * @var string $idType2
     */
    private $idType2 = null;

    /**
     * @var \DateTime $reportingDt
     */
    private $reportingDt = null;

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
     * Gets as srcCountryCode
     *
     * @return string
     */
    public function getSrcCountryCode()
    {
        return $this->srcCountryCode;
    }

    /**
     * Sets a new srcCountryCode
     *
     * @param string $srcCountryCode
     * @return self
     */
    public function setSrcCountryCode($srcCountryCode)
    {
        $this->srcCountryCode = $srcCountryCode;
        return $this;
    }

    /**
     * Gets as srcCountryCodeText
     *
     * @return string
     */
    public function getSrcCountryCodeText()
    {
        return $this->srcCountryCodeText;
    }

    /**
     * Sets a new srcCountryCodeText
     *
     * @param string $srcCountryCodeText
     * @return self
     */
    public function setSrcCountryCodeText($srcCountryCodeText)
    {
        $this->srcCountryCodeText = $srcCountryCodeText;
        return $this;
    }

    /**
     * Gets as memberCode
     *
     * @return string
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Sets a new memberCode
     *
     * @param string $memberCode
     * @return self
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;
        return $this;
    }

    /**
     * Gets as memberTypeText
     *
     * @return string
     */
    public function getMemberTypeText()
    {
        return $this->memberTypeText;
    }

    /**
     * Sets a new memberTypeText
     *
     * @param string $memberTypeText
     * @return self
     */
    public function setMemberTypeText($memberTypeText)
    {
        $this->memberTypeText = $memberTypeText;
        return $this;
    }

    /**
     * Gets as memberNameText
     *
     * @return string
     */
    public function getMemberNameText()
    {
        return $this->memberNameText;
    }

    /**
     * Sets a new memberNameText
     *
     * @param string $memberNameText
     * @return self
     */
    public function setMemberNameText($memberNameText)
    {
        $this->memberNameText = $memberNameText;
        return $this;
    }

    /**
     * Gets as memberContactText
     *
     * @return string
     */
    public function getMemberContactText()
    {
        return $this->memberContactText;
    }

    /**
     * Sets a new memberContactText
     *
     * @param string $memberContactText
     * @return self
     */
    public function setMemberContactText($memberContactText)
    {
        $this->memberContactText = $memberContactText;
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
     * Gets as idNum
     *
     * @return string
     */
    public function getIdNum()
    {
        return $this->idNum;
    }

    /**
     * Sets a new idNum
     *
     * @param string $idNum
     * @return self
     */
    public function setIdNum($idNum)
    {
        $this->idNum = $idNum;
        return $this;
    }

    /**
     * Gets as idType
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Sets a new idType
     *
     * @param string $idType
     * @return self
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        return $this;
    }

    /**
     * Gets as idTypeText
     *
     * @return string
     */
    public function getIdTypeText()
    {
        return $this->idTypeText;
    }

    /**
     * Sets a new idTypeText
     *
     * @param string $idTypeText
     * @return self
     */
    public function setIdTypeText($idTypeText)
    {
        $this->idTypeText = $idTypeText;
        return $this;
    }

    /**
     * Gets as seriesNumber
     *
     * @return string
     */
    public function getSeriesNumber()
    {
        return $this->seriesNumber;
    }

    /**
     * Sets a new seriesNumber
     *
     * @param string $seriesNumber
     * @return self
     */
    public function setSeriesNumber($seriesNumber)
    {
        $this->seriesNumber = $seriesNumber;
        return $this;
    }

    /**
     * Gets as documentNumber
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     * Sets a new documentNumber
     *
     * @param string $documentNumber
     * @return self
     */
    public function setDocumentNumber($documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * Gets as issueCountry
     *
     * @return string
     */
    public function getIssueCountry()
    {
        return $this->issueCountry;
    }

    /**
     * Sets a new issueCountry
     *
     * @param string $issueCountry
     * @return self
     */
    public function setIssueCountry($issueCountry)
    {
        $this->issueCountry = $issueCountry;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueAuthority
     *
     * @return string
     */
    public function getIssueAuthority()
    {
        return $this->issueAuthority;
    }

    /**
     * Sets a new issueAuthority
     *
     * @param string $issueAuthority
     * @return self
     */
    public function setIssueAuthority($issueAuthority)
    {
        $this->issueAuthority = $issueAuthority;
        return $this;
    }

    /**
     * Gets as dataValidity
     *
     * @return string
     */
    public function getDataValidity()
    {
        return $this->dataValidity;
    }

    /**
     * Sets a new dataValidity
     *
     * @param string $dataValidity
     * @return self
     */
    public function setDataValidity($dataValidity)
    {
        $this->dataValidity = $dataValidity;
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
     * Gets as freezeFlag
     *
     * @return int
     */
    public function getFreezeFlag()
    {
        return $this->freezeFlag;
    }

    /**
     * Sets a new freezeFlag
     *
     * @param int $freezeFlag
     * @return self
     */
    public function setFreezeFlag($freezeFlag)
    {
        $this->freezeFlag = $freezeFlag;
        return $this;
    }

    /**
     * Gets as suppressFlag
     *
     * @return int
     */
    public function getSuppressFlag()
    {
        return $this->suppressFlag;
    }

    /**
     * Sets a new suppressFlag
     *
     * @param int $suppressFlag
     * @return self
     */
    public function setSuppressFlag($suppressFlag)
    {
        $this->suppressFlag = $suppressFlag;
        return $this;
    }

    /**
     * Gets as suppressStrDt
     *
     * @return \DateTime
     */
    public function getSuppressStrDt()
    {
        return $this->suppressStrDt;
    }

    /**
     * Sets a new suppressStrDt
     *
     * @param \DateTime $suppressStrDt
     * @return self
     */
    public function setSuppressStrDt(\DateTime $suppressStrDt)
    {
        $this->suppressStrDt = $suppressStrDt;
        return $this;
    }

    /**
     * Gets as suppressEndDt
     *
     * @return \DateTime
     */
    public function getSuppressEndDt()
    {
        return $this->suppressEndDt;
    }

    /**
     * Sets a new suppressEndDt
     *
     * @param \DateTime $suppressEndDt
     * @return self
     */
    public function setSuppressEndDt(\DateTime $suppressEndDt)
    {
        $this->suppressEndDt = $suppressEndDt;
        return $this;
    }

    /**
     * Gets as disputedStatus
     *
     * @return string
     */
    public function getDisputedStatus()
    {
        return $this->disputedStatus;
    }

    /**
     * Sets a new disputedStatus
     *
     * @param string $disputedStatus
     * @return self
     */
    public function setDisputedStatus($disputedStatus)
    {
        $this->disputedStatus = $disputedStatus;
        return $this;
    }

    /**
     * Gets as disputedStatusText
     *
     * @return string
     */
    public function getDisputedStatusText()
    {
        return $this->disputedStatusText;
    }

    /**
     * Sets a new disputedStatusText
     *
     * @param string $disputedStatusText
     * @return self
     */
    public function setDisputedStatusText($disputedStatusText)
    {
        $this->disputedStatusText = $disputedStatusText;
        return $this;
    }

    /**
     * Gets as oKSM
     *
     * @return string
     */
    public function getOKSM()
    {
        return $this->oKSM;
    }

    /**
     * Sets a new oKSM
     *
     * @param string $oKSM
     * @return self
     */
    public function setOKSM($oKSM)
    {
        $this->oKSM = $oKSM;
        return $this;
    }

    /**
     * Gets as otherCountry
     *
     * @return string
     */
    public function getOtherCountry()
    {
        return $this->otherCountry;
    }

    /**
     * Sets a new otherCountry
     *
     * @param string $otherCountry
     * @return self
     */
    public function setOtherCountry($otherCountry)
    {
        $this->otherCountry = $otherCountry;
        return $this;
    }

    /**
     * Gets as otherId
     *
     * @return string
     */
    public function getOtherId()
    {
        return $this->otherId;
    }

    /**
     * Sets a new otherId
     *
     * @param string $otherId
     * @return self
     */
    public function setOtherId($otherId)
    {
        $this->otherId = $otherId;
        return $this;
    }

    /**
     * Gets as divCode
     *
     * @return string
     */
    public function getDivCode()
    {
        return $this->divCode;
    }

    /**
     * Sets a new divCode
     *
     * @param string $divCode
     * @return self
     */
    public function setDivCode($divCode)
    {
        $this->divCode = $divCode;
        return $this;
    }

    /**
     * Gets as validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * @param \DateTime $validTo
     * @return self
     */
    public function setValidTo(\DateTime $validTo)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Gets as isPrevId
     *
     * @return int
     */
    public function getIsPrevId()
    {
        return $this->isPrevId;
    }

    /**
     * Sets a new isPrevId
     *
     * @param int $isPrevId
     * @return self
     */
    public function setIsPrevId($isPrevId)
    {
        $this->isPrevId = $isPrevId;
        return $this;
    }

    /**
     * Gets as idType2
     *
     * @return string
     */
    public function getIdType2()
    {
        return $this->idType2;
    }

    /**
     * Sets a new idType2
     *
     * @param string $idType2
     * @return self
     */
    public function setIdType2($idType2)
    {
        $this->idType2 = $idType2;
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

