<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType;

/**
 * Class representing FL25DebtAType
 */
class FL25DebtAType
{
    /**
     * 25.1. Признак наличия задолженности = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 25.1. Признак наличия задолженности = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 25.4. Сумма задолженности
     *
     * @var float $debtSum
     */
    private $debtSum = null;

    /**
     * 25.5. Сумма задолженности по основному долгу
     *
     * @var float $debtMainSum
     */
    private $debtMainSum = null;

    /**
     * 25.6. Сумма задолженности по процентам
     *
     * @var float $debtPercentSum
     */
    private $debtPercentSum = null;

    /**
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @var float $debtOtherSum
     */
    private $debtOtherSum = null;

    /**
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @var string $graceUnconfExist0
     */
    private $graceUnconfExist0 = null;

    /**
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @var string $graceUnconfExist1
     */
    private $graceUnconfExist1 = null;

    /**
     * Gets as exist0
     *
     * 25.1. Признак наличия задолженности = 0
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
     * 25.1. Признак наличия задолженности = 0
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
     * 25.1. Признак наличия задолженности = 1
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
     * 25.1. Признак наличия задолженности = 1
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
     * Gets as debtSum
     *
     * 25.4. Сумма задолженности
     *
     * @return float
     */
    public function getDebtSum()
    {
        return $this->debtSum;
    }

    /**
     * Sets a new debtSum
     *
     * 25.4. Сумма задолженности
     *
     * @param float $debtSum
     * @return self
     */
    public function setDebtSum($debtSum)
    {
        $this->debtSum = $debtSum;
        return $this;
    }

    /**
     * Gets as debtMainSum
     *
     * 25.5. Сумма задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtMainSum()
    {
        return $this->debtMainSum;
    }

    /**
     * Sets a new debtMainSum
     *
     * 25.5. Сумма задолженности по основному долгу
     *
     * @param float $debtMainSum
     * @return self
     */
    public function setDebtMainSum($debtMainSum)
    {
        $this->debtMainSum = $debtMainSum;
        return $this;
    }

    /**
     * Gets as debtPercentSum
     *
     * 25.6. Сумма задолженности по процентам
     *
     * @return float
     */
    public function getDebtPercentSum()
    {
        return $this->debtPercentSum;
    }

    /**
     * Sets a new debtPercentSum
     *
     * 25.6. Сумма задолженности по процентам
     *
     * @param float $debtPercentSum
     * @return self
     */
    public function setDebtPercentSum($debtPercentSum)
    {
        $this->debtPercentSum = $debtPercentSum;
        return $this;
    }

    /**
     * Gets as debtOtherSum
     *
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtOtherSum()
    {
        return $this->debtOtherSum;
    }

    /**
     * Sets a new debtOtherSum
     *
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @param float $debtOtherSum
     * @return self
     */
    public function setDebtOtherSum($debtOtherSum)
    {
        $this->debtOtherSum = $debtOtherSum;
        return $this;
    }

    /**
     * Gets as graceUnconfExist0
     *
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @return string
     */
    public function getGraceUnconfExist0()
    {
        return $this->graceUnconfExist0;
    }

    /**
     * Sets a new graceUnconfExist0
     *
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @param string $graceUnconfExist0
     * @return self
     */
    public function setGraceUnconfExist0($graceUnconfExist0)
    {
        $this->graceUnconfExist0 = $graceUnconfExist0;
        return $this;
    }

    /**
     * Gets as graceUnconfExist1
     *
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @return string
     */
    public function getGraceUnconfExist1()
    {
        return $this->graceUnconfExist1;
    }

    /**
     * Sets a new graceUnconfExist1
     *
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @param string $graceUnconfExist1
     * @return self
     */
    public function setGraceUnconfExist1($graceUnconfExist1)
    {
        $this->graceUnconfExist1 = $graceUnconfExist1;
        return $this;
    }
}

