<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL12CapacityType;

/**
 * Class representing IncapacityGroupFL12CapacityAType
 */
class IncapacityGroupFL12CapacityAType
{
    /**
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @var string $incapacityDate
     */
    private $incapacityDate = null;

    /**
     * 12.3. Номер решения суда
     *
     * @var string $incapacityDecisionNum
     */
    private $incapacityDecisionNum = null;

    /**
     * 12.4. Наименование суда
     *
     * @var string $incapacityCourtName
     */
    private $incapacityCourtName = null;

    /**
     * Gets as incapacityDate
     *
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @return string
     */
    public function getIncapacityDate()
    {
        return $this->incapacityDate;
    }

    /**
     * Sets a new incapacityDate
     *
     * 12.2. Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     *
     * @param string $incapacityDate
     * @return self
     */
    public function setIncapacityDate($incapacityDate)
    {
        $this->incapacityDate = $incapacityDate;
        return $this;
    }

    /**
     * Gets as incapacityDecisionNum
     *
     * 12.3. Номер решения суда
     *
     * @return string
     */
    public function getIncapacityDecisionNum()
    {
        return $this->incapacityDecisionNum;
    }

    /**
     * Sets a new incapacityDecisionNum
     *
     * 12.3. Номер решения суда
     *
     * @param string $incapacityDecisionNum
     * @return self
     */
    public function setIncapacityDecisionNum($incapacityDecisionNum)
    {
        $this->incapacityDecisionNum = $incapacityDecisionNum;
        return $this;
    }

    /**
     * Gets as incapacityCourtName
     *
     * 12.4. Наименование суда
     *
     * @return string
     */
    public function getIncapacityCourtName()
    {
        return $this->incapacityCourtName;
    }

    /**
     * Sets a new incapacityCourtName
     *
     * 12.4. Наименование суда
     *
     * @param string $incapacityCourtName
     * @return self
     */
    public function setIncapacityCourtName($incapacityCourtName)
    {
        $this->incapacityCourtName = $incapacityCourtName;
        return $this;
    }
}

