<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType;

/**
 * Class representing UL23CollateralAType
 */
class UL23CollateralAType
{
    /**
     * 23.2. Код предмета залога
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 23.4. Дата заключения договора залога
     *
     * @var string $date
     */
    private $date = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType\SumGroupUL2326GroupAType[] $sumGroupUL2326Group
     */
    private $sumGroupUL2326Group = [
        
    ];

    /**
     * 23.9. Дата прекращения залога согласно договору
     *
     * @var \DateTime $collateralEndDate
     */
    private $collateralEndDate = null;

    /**
     * 23.10. Дата фактического прекращения залога
     *
     * @var \DateTime $collateralFactEndDate
     */
    private $collateralFactEndDate = null;

    /**
     * 23.11. Код причины прекращения залога
     *
     * @var int $endReason
     */
    private $endReason = null;

    /**
     * 23.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @var float $contractTotalSum
     */
    private $contractTotalSum = null;

    /**
     * 23.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @var int $contractCount
     */
    private $contractCount = null;

    /**
     * 23.15. Код местонахождения залога по ОКАТО
     *
     * @var string $location
     */
    private $location = null;

    /**
     * 23.16. Актуальная стоимость предмета залога
     *
     * @var float $actualCost
     */
    private $actualCost = null;

    /**
     * 23.17. Дата расчета актуальной стоимости предмета залога
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as code
     *
     * 23.2. Код предмета залога
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
     * 23.2. Код предмета залога
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
     * 23.4. Дата заключения договора залога
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
     * 23.4. Дата заключения договора залога
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
     * Adds as sumGroupUL2326Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType\SumGroupUL2326GroupAType $sumGroupUL2326Group
     *@return self
     */
    public function addToSumGroupUL2326Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType\SumGroupUL2326GroupAType $sumGroupUL2326Group)
    {
        $this->sumGroupUL2326Group[] = $sumGroupUL2326Group;
        return $this;
    }

    /**
     * isset sumGroupUL2326Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSumGroupUL2326Group($index)
    {
        return isset($this->sumGroupUL2326Group[$index]);
    }

    /**
     * unset sumGroupUL2326Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSumGroupUL2326Group($index)
    {
        unset($this->sumGroupUL2326Group[$index]);
    }

    /**
     * Gets as sumGroupUL2326Group
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType\SumGroupUL2326GroupAType[]
     */
    public function getSumGroupUL2326Group()
    {
        return $this->sumGroupUL2326Group;
    }

    /**
     * Sets a new sumGroupUL2326Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType\SumGroupUL2326GroupAType[] $sumGroupUL2326Group
     * @return self
     */
    public function setSumGroupUL2326Group(array $sumGroupUL2326Group = null)
    {
        $this->sumGroupUL2326Group = $sumGroupUL2326Group;
        return $this;
    }

    /**
     * Gets as collateralEndDate
     *
     * 23.9. Дата прекращения залога согласно договору
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
     * 23.9. Дата прекращения залога согласно договору
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
     * 23.10. Дата фактического прекращения залога
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
     * 23.10. Дата фактического прекращения залога
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
     * 23.11. Код причины прекращения залога
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
     * 23.11. Код причины прекращения залога
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
     * 23.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
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
     * 23.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
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
     * 23.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
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
     * 23.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
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
     * 23.15. Код местонахождения залога по ОКАТО
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
     * 23.15. Код местонахождения залога по ОКАТО
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
     * 23.16. Актуальная стоимость предмета залога
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
     * 23.16. Актуальная стоимость предмета залога
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
     * 23.17. Дата расчета актуальной стоимости предмета залога
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
     * 23.17. Дата расчета актуальной стоимости предмета залога
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

