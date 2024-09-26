<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType;

/**
 * Class representing FL32CollateralAType
 */
class FL32CollateralAType
{
    /**
     * 32.2. Код предмета залога
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 32.4. Дата заключения договора залога
     *
     * @var string $date
     */
    private $date = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType\SumGroupFL3235GroupAType[] $sumGroupFL3235Group
     */
    private $sumGroupFL3235Group = [
        
    ];

    /**
     * 32.9, Дата прекращения залога согласно договору
     *
     * @var \DateTime $collateralEndDate
     */
    private $collateralEndDate = null;

    /**
     * 32.10. Дата фактического прекращения залога
     *
     * @var \DateTime $collateralFactEndDate
     */
    private $collateralFactEndDate = null;

    /**
     * 32.11. Код причины прекращения залога
     *
     * @var int $endReason
     */
    private $endReason = null;

    /**
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @var float $contractTotalSum
     */
    private $contractTotalSum = null;

    /**
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @var int $contractCount
     */
    private $contractCount = null;

    /**
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @var string $location
     */
    private $location = null;

    /**
     * 32.16. Актуальная стоимость предмета залога
     *
     * @var float $actualCost
     */
    private $actualCost = null;

    /**
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as code
     *
     * 32.2. Код предмета залога
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 32.2. Код предмета залога
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 32.4. Дата заключения договора залога
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 32.4. Дата заключения договора залога
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as sumGroupFL3235Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType\SumGroupFL3235GroupAType $sumGroupFL3235Group
     *@return self
     */
    public function addToSumGroupFL3235Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType\SumGroupFL3235GroupAType $sumGroupFL3235Group)
    {
        $this->sumGroupFL3235Group[] = $sumGroupFL3235Group;
        return $this;
    }

    /**
     * isset sumGroupFL3235Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSumGroupFL3235Group($index)
    {
        return isset($this->sumGroupFL3235Group[$index]);
    }

    /**
     * unset sumGroupFL3235Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSumGroupFL3235Group($index)
    {
        unset($this->sumGroupFL3235Group[$index]);
    }

    /**
     * Gets as sumGroupFL3235Group
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType\SumGroupFL3235GroupAType[]
     */
    public function getSumGroupFL3235Group()
    {
        return $this->sumGroupFL3235Group;
    }

    /**
     * Sets a new sumGroupFL3235Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType\SumGroupFL3235GroupAType[] $sumGroupFL3235Group
     * @return self
     */
    public function setSumGroupFL3235Group(array $sumGroupFL3235Group = null)
    {
        $this->sumGroupFL3235Group = $sumGroupFL3235Group;
        return $this;
    }

    /**
     * Gets as collateralEndDate
     *
     * 32.9, Дата прекращения залога согласно договору
     *
     * @return \DateTime
     */
    public function getCollateralEndDate()
    {
        return $this->collateralEndDate;
    }

    /**
     * Sets a new collateralEndDate
     *
     * 32.9, Дата прекращения залога согласно договору
     *
     * @param \DateTime $collateralEndDate
     * @return self
     */
    public function setCollateralEndDate(?\DateTime $collateralEndDate = null)
    {
        $this->collateralEndDate = $collateralEndDate;
        return $this;
    }

    /**
     * Gets as collateralFactEndDate
     *
     * 32.10. Дата фактического прекращения залога
     *
     * @return \DateTime
     */
    public function getCollateralFactEndDate()
    {
        return $this->collateralFactEndDate;
    }

    /**
     * Sets a new collateralFactEndDate
     *
     * 32.10. Дата фактического прекращения залога
     *
     * @param \DateTime $collateralFactEndDate
     * @return self
     */
    public function setCollateralFactEndDate(?\DateTime $collateralFactEndDate = null)
    {
        $this->collateralFactEndDate = $collateralFactEndDate;
        return $this;
    }

    /**
     * Gets as endReason
     *
     * 32.11. Код причины прекращения залога
     *
     * @return int
     */
    public function getEndReason()
    {
        return $this->endReason;
    }

    /**
     * Sets a new endReason
     *
     * 32.11. Код причины прекращения залога
     *
     * @param int $endReason
     * @return self
     */
    public function setEndReason($endReason)
    {
        $this->endReason = $endReason;
        return $this;
    }

    /**
     * Gets as contractTotalSum
     *
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @return float
     */
    public function getContractTotalSum()
    {
        return $this->contractTotalSum;
    }

    /**
     * Sets a new contractTotalSum
     *
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @param float $contractTotalSum
     * @return self
     */
    public function setContractTotalSum($contractTotalSum)
    {
        $this->contractTotalSum = $contractTotalSum;
        return $this;
    }

    /**
     * Gets as contractCount
     *
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @return int
     */
    public function getContractCount()
    {
        return $this->contractCount;
    }

    /**
     * Sets a new contractCount
     *
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @param int $contractCount
     * @return self
     */
    public function setContractCount($contractCount)
    {
        $this->contractCount = $contractCount;
        return $this;
    }

    /**
     * Gets as location
     *
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as actualCost
     *
     * 32.16. Актуальная стоимость предмета залога
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->actualCost;
    }

    /**
     * Sets a new actualCost
     *
     * 32.16. Актуальная стоимость предмета залога
     *
     * @param float $actualCost
     * @return self
     */
    public function setActualCost($actualCost)
    {
        $this->actualCost = $actualCost;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @return \DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(?\DateTime $calcDate = null)
    {
        $this->calcDate = $calcDate;
        return $this;
    }
}

