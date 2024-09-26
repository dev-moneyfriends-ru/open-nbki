<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL9ScoreType
 *
 * Блок 9. Кредитная оценка (скоринг)
 * XSD Type: UL_9_Score_Type
 */
class UL9ScoreType
{
    /**
     * 9.1. Значение кредитной оценки
     *
     * @var int $value
     */
    private $value = null;

    /**
     * 9.2. Дата расчета кредитной оценки
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as value
     *
     * 9.1. Значение кредитной оценки
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * 9.1. Значение кредитной оценки
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 9.2. Дата расчета кредитной оценки
     *
     * @return string
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 9.2. Дата расчета кредитной оценки
     *
     * @param string $calcDate
     * @return self
     */
    public function setCalcDate($calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }
}

