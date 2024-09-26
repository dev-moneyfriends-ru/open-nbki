<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType;

/**
 * Class representing UL26InsuranceAType
 */
class UL26InsuranceAType
{
    /**
     * 26.1. Признак наличия страхования = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 26.1. Признак наличия страхования = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 26.4. Признак наличия франшизы = 0
     *
     * @var string $franchiseExist0
     */
    private $franchiseExist0 = null;

    /**
     * 26.4. Признак наличия франшизы = 1
     *
     * @var string $franchiseExist1
     */
    private $franchiseExist1 = null;

    /**
     * 26.5. Дата начала действия страхования
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * 26.6. Дата окончания действия страхования согласно договору
     *
     * @var string $insuranceEndDate
     */
    private $insuranceEndDate = null;

    /**
     * 26.7. Дата фактического прекращения страхования
     *
     * @var \DateTime $insuranceFactEndDate
     */
    private $insuranceFactEndDate = null;

    /**
     * 26.8. Код причины прекращения страхования
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as exist0
     *
     * 26.1. Признак наличия страхования = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 26.1. Признак наличия страхования = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 26.1. Признак наличия страхования = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 26.1. Признак наличия страхования = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as franchiseExist0
     *
     * 26.4. Признак наличия франшизы = 0
     *
     * @return string
     */
    public function getFranchiseExist0()
    {
        return $this->franchiseExist0;
    }

    /**
     * Sets a new franchiseExist0
     *
     * 26.4. Признак наличия франшизы = 0
     *
     * @param string $franchiseExist0
     * @return self
     */
    public function setFranchiseExist0($franchiseExist0)
    {
        $this->franchiseExist0 = $franchiseExist0;
        return $this;
    }

    /**
     * Gets as franchiseExist1
     *
     * 26.4. Признак наличия франшизы = 1
     *
     * @return string
     */
    public function getFranchiseExist1()
    {
        return $this->franchiseExist1;
    }

    /**
     * Sets a new franchiseExist1
     *
     * 26.4. Признак наличия франшизы = 1
     *
     * @param string $franchiseExist1
     * @return self
     */
    public function setFranchiseExist1($franchiseExist1)
    {
        $this->franchiseExist1 = $franchiseExist1;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 26.5. Дата начала действия страхования
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 26.5. Дата начала действия страхования
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as insuranceEndDate
     *
     * 26.6. Дата окончания действия страхования согласно договору
     *
     * @return string
     */
    public function getInsuranceEndDate()
    {
        return $this->insuranceEndDate;
    }

    /**
     * Sets a new insuranceEndDate
     *
     * 26.6. Дата окончания действия страхования согласно договору
     *
     * @param string $insuranceEndDate
     * @return self
     */
    public function setInsuranceEndDate($insuranceEndDate)
    {
        $this->insuranceEndDate = $insuranceEndDate;
        return $this;
    }

    /**
     * Gets as insuranceFactEndDate
     *
     * 26.7. Дата фактического прекращения страхования
     *
     * @return \DateTime
     */
    public function getInsuranceFactEndDate()
    {
        return $this->insuranceFactEndDate;
    }

    /**
     * Sets a new insuranceFactEndDate
     *
     * 26.7. Дата фактического прекращения страхования
     *
     * @param \DateTime $insuranceFactEndDate
     * @return self
     */
    public function setInsuranceFactEndDate(?\DateTime $insuranceFactEndDate = null)
    {
        $this->insuranceFactEndDate = $insuranceFactEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 26.8. Код причины прекращения страхования
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 26.8. Код причины прекращения страхования
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }
}

