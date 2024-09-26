<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

/**
 * Class representing UL19DebtOverdueAType
 */
class UL19DebtOverdueAType
{
    /**
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @var string $missFact0
     */
    private $missFact0 = null;

    /**
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @var string $missFact1
     */
    private $missFact1 = null;

    /**
     * 19.3. Сумма просроченной задолженности
     *
     * @var float $debtOverdueSum
     */
    private $debtOverdueSum = null;

    /**
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @var float $debtOverdueMainSum
     */
    private $debtOverdueMainSum = null;

    /**
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @var float $debtOverduePercentSum
     */
    private $debtOverduePercentSum = null;

    /**
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @var float $debtOverdueOtherSum
     */
    private $debtOverdueOtherSum = null;

    /**
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @var \DateTime $debtOverdueStartDate
     */
    private $debtOverdueStartDate = null;

    /**
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @var \DateTime $mainMissDate
     */
    private $mainMissDate = null;

    /**
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @var \DateTime $percentMissDate
     */
    private $percentMissDate = null;

    /**
     * 19.11. Продолжительность просрочки
     *
     * @var int $missDuration
     */
    private $missDuration = null;

    /**
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @var int $repaidMissDuration
     */
    private $repaidMissDuration = null;

    /**
     * Gets as missFact0
     *
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @return string
     */
    public function getMissFact0()
    {
        return $this->missFact0;
    }

    /**
     * Sets a new missFact0
     *
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @param string $missFact0
     * @return self
     */
    public function setMissFact0($missFact0)
    {
        $this->missFact0 = $missFact0;
        return $this;
    }

    /**
     * Gets as missFact1
     *
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @return string
     */
    public function getMissFact1()
    {
        return $this->missFact1;
    }

    /**
     * Sets a new missFact1
     *
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @param string $missFact1
     * @return self
     */
    public function setMissFact1($missFact1)
    {
        $this->missFact1 = $missFact1;
        return $this;
    }

    /**
     * Gets as debtOverdueSum
     *
     * 19.3. Сумма просроченной задолженности
     *
     * @return float
     */
    public function getDebtOverdueSum()
    {
        return $this->debtOverdueSum;
    }

    /**
     * Sets a new debtOverdueSum
     *
     * 19.3. Сумма просроченной задолженности
     *
     * @param float $debtOverdueSum
     * @return self
     */
    public function setDebtOverdueSum($debtOverdueSum)
    {
        $this->debtOverdueSum = $debtOverdueSum;
        return $this;
    }

    /**
     * Gets as debtOverdueMainSum
     *
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtOverdueMainSum()
    {
        return $this->debtOverdueMainSum;
    }

    /**
     * Sets a new debtOverdueMainSum
     *
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @param float $debtOverdueMainSum
     * @return self
     */
    public function setDebtOverdueMainSum($debtOverdueMainSum)
    {
        $this->debtOverdueMainSum = $debtOverdueMainSum;
        return $this;
    }

    /**
     * Gets as debtOverduePercentSum
     *
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @return float
     */
    public function getDebtOverduePercentSum()
    {
        return $this->debtOverduePercentSum;
    }

    /**
     * Sets a new debtOverduePercentSum
     *
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @param float $debtOverduePercentSum
     * @return self
     */
    public function setDebtOverduePercentSum($debtOverduePercentSum)
    {
        $this->debtOverduePercentSum = $debtOverduePercentSum;
        return $this;
    }

    /**
     * Gets as debtOverdueOtherSum
     *
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtOverdueOtherSum()
    {
        return $this->debtOverdueOtherSum;
    }

    /**
     * Sets a new debtOverdueOtherSum
     *
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @param float $debtOverdueOtherSum
     * @return self
     */
    public function setDebtOverdueOtherSum($debtOverdueOtherSum)
    {
        $this->debtOverdueOtherSum = $debtOverdueOtherSum;
        return $this;
    }

    /**
     * Gets as debtOverdueStartDate
     *
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @return \DateTime
     */
    public function getDebtOverdueStartDate()
    {
        return $this->debtOverdueStartDate;
    }

    /**
     * Sets a new debtOverdueStartDate
     *
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @param \DateTime $debtOverdueStartDate
     * @return self
     */
    public function setDebtOverdueStartDate(?\DateTime $debtOverdueStartDate = null)
    {
        $this->debtOverdueStartDate = $debtOverdueStartDate;
        return $this;
    }

    /**
     * Gets as mainMissDate
     *
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @return \DateTime
     */
    public function getMainMissDate()
    {
        return $this->mainMissDate;
    }

    /**
     * Sets a new mainMissDate
     *
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @param \DateTime $mainMissDate
     * @return self
     */
    public function setMainMissDate(?\DateTime $mainMissDate = null)
    {
        $this->mainMissDate = $mainMissDate;
        return $this;
    }

    /**
     * Gets as percentMissDate
     *
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @return \DateTime
     */
    public function getPercentMissDate()
    {
        return $this->percentMissDate;
    }

    /**
     * Sets a new percentMissDate
     *
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @param \DateTime $percentMissDate
     * @return self
     */
    public function setPercentMissDate(?\DateTime $percentMissDate = null)
    {
        $this->percentMissDate = $percentMissDate;
        return $this;
    }

    /**
     * Gets as missDuration
     *
     * 19.11. Продолжительность просрочки
     *
     * @return int
     */
    public function getMissDuration()
    {
        return $this->missDuration;
    }

    /**
     * Sets a new missDuration
     *
     * 19.11. Продолжительность просрочки
     *
     * @param int $missDuration
     * @return self
     */
    public function setMissDuration($missDuration)
    {
        $this->missDuration = $missDuration;
        return $this;
    }

    /**
     * Gets as repaidMissDuration
     *
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @return int
     */
    public function getRepaidMissDuration()
    {
        return $this->repaidMissDuration;
    }

    /**
     * Sets a new repaidMissDuration
     *
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @param int $repaidMissDuration
     * @return self
     */
    public function setRepaidMissDuration($repaidMissDuration)
    {
        $this->repaidMissDuration = $repaidMissDuration;
        return $this;
    }
}

