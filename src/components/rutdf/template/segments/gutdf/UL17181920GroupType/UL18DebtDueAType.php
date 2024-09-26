<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

/**
 * Class representing UL18DebtDueAType
 */
class UL18DebtDueAType
{
    /**
     * 18.3. Сумма срочной задолженности
     *
     * @var float $debtDueSum
     */
    private $debtDueSum = null;

    /**
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @var float $debtDueMainSum
     */
    private $debtDueMainSum = null;

    /**
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @var float $debtDuePercentSum
     */
    private $debtDuePercentSum = null;

    /**
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @var float $debtDueOtherSum
     */
    private $debtDueOtherSum = null;

    /**
     * 18.1. Дата возникновения срочной задолженности
     *
     * @var \DateTime $debtDueStartDate
     */
    private $debtDueStartDate = null;

    /**
     * Gets as debtDueSum
     *
     * 18.3. Сумма срочной задолженности
     *
     * @return float
     */
    public function getDebtDueSum()
    {
        return $this->debtDueSum;
    }

    /**
     * Sets a new debtDueSum
     *
     * 18.3. Сумма срочной задолженности
     *
     * @param float $debtDueSum
     * @return self
     */
    public function setDebtDueSum($debtDueSum)
    {
        $this->debtDueSum = $debtDueSum;
        return $this;
    }

    /**
     * Gets as debtDueMainSum
     *
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtDueMainSum()
    {
        return $this->debtDueMainSum;
    }

    /**
     * Sets a new debtDueMainSum
     *
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @param float $debtDueMainSum
     * @return self
     */
    public function setDebtDueMainSum($debtDueMainSum)
    {
        $this->debtDueMainSum = $debtDueMainSum;
        return $this;
    }

    /**
     * Gets as debtDuePercentSum
     *
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @return float
     */
    public function getDebtDuePercentSum()
    {
        return $this->debtDuePercentSum;
    }

    /**
     * Sets a new debtDuePercentSum
     *
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @param float $debtDuePercentSum
     * @return self
     */
    public function setDebtDuePercentSum($debtDuePercentSum)
    {
        $this->debtDuePercentSum = $debtDuePercentSum;
        return $this;
    }

    /**
     * Gets as debtDueOtherSum
     *
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtDueOtherSum()
    {
        return $this->debtDueOtherSum;
    }

    /**
     * Sets a new debtDueOtherSum
     *
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @param float $debtDueOtherSum
     * @return self
     */
    public function setDebtDueOtherSum($debtDueOtherSum)
    {
        $this->debtDueOtherSum = $debtDueOtherSum;
        return $this;
    }

    /**
     * Gets as debtDueStartDate
     *
     * 18.1. Дата возникновения срочной задолженности
     *
     * @return \DateTime
     */
    public function getDebtDueStartDate()
    {
        return $this->debtDueStartDate;
    }

    /**
     * Sets a new debtDueStartDate
     *
     * 18.1. Дата возникновения срочной задолженности
     *
     * @param \DateTime $debtDueStartDate
     * @return self
     */
    public function setDebtDueStartDate(?\DateTime $debtDueStartDate = null)
    {
        $this->debtDueStartDate = $debtDueStartDate;
        return $this;
    }
}

