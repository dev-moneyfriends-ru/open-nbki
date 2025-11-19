<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL22TotalCostType
 *
 * Блок 22. Полная стоимость потребительского кредита (займа)
 * XSD Type: FL_22_TotalCost_Type
 */
class FL22TotalCostType extends GutdfSegment
{
    /**
     * 22.1. Минимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @var string $minPercentCost
     */
    private $minPercentCost = null;

    /**
     * 22.2. Минимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @var string $minCost
     */
    private $minCost = null;

    /**
     * 22.3. Дата расчета полной стоимости кредита (займа)
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * 22.4. Максимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @var string $maxPercentCost
     */
    private $maxPercentCost = null;

    /**
     * 22.5. Максимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @var string $maxCost
     */
    private $maxCost = null;

    /**
     * 22.6. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании путем снятия наличных денежных средств
     *
     * @var string $maxPercentCash
     */
    private $maxPercentCash = null;

    /**
     * 22.7. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании в безналичном порядке
     *
     * @var string $maxPercentCashless
     */
    private $maxPercentCashless = null;

    /**
     * Gets as minPercentCost
     *
     * 22.1. Минимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @return string
     */
    public function getMinPercentCost()
    {
        return $this->minPercentCost;
    }

    /**
     * Sets a new minPercentCost
     *
     * 22.1. Минимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @param string $minPercentCost
     * @return self
     */
    public function setMinPercentCost($minPercentCost)
    {
        $this->minPercentCost = $minPercentCost;
        return $this;
    }

    /**
     * Gets as minCost
     *
     * 22.2. Минимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @return string
     */
    public function getMinCost()
    {
        return $this->minCost;
    }

    /**
     * Sets a new minCost
     *
     * 22.2. Минимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @param string $minCost
     * @return self
     */
    public function setMinCost($minCost)
    {
        $this->minCost = $minCost;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 22.3. Дата расчета полной стоимости кредита (займа)
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
     * 22.3. Дата расчета полной стоимости кредита (займа)
     *
     * @param string $calcDate
     * @return self
     */
    public function setCalcDate($calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as maxPercentCost
     *
     * 22.4. Максимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @return string
     */
    public function getMaxPercentCost()
    {
        return $this->maxPercentCost;
    }

    /**
     * Sets a new maxPercentCost
     *
     * 22.4. Максимальная полная стоимость кредита (займа) в процентах годовых
     *
     * @param string $maxPercentCost
     * @return self
     */
    public function setMaxPercentCost($maxPercentCost)
    {
        $this->maxPercentCost = $maxPercentCost;
        return $this;
    }

    /**
     * Gets as maxCost
     *
     * 22.5. Максимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @return string
     */
    public function getMaxCost()
    {
        return $this->maxCost;
    }

    /**
     * Sets a new maxCost
     *
     * 22.5. Максимальная полная стоимость кредита (займа) в денежном выражении
     *
     * @param string $maxCost
     * @return self
     */
    public function setMaxCost($maxCost)
    {
        $this->maxCost = $maxCost;
        return $this;
    }

    /**
     * Gets as maxPercentCash
     *
     * 22.6. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании путем снятия наличных денежных средств
     *
     * @return string
     */
    public function getMaxPercentCash()
    {
        return $this->maxPercentCash;
    }

    /**
     * Sets a new maxPercentCash
     *
     * 22.6. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании путем снятия наличных денежных средств
     *
     * @param string $maxPercentCash
     * @return self
     */
    public function setMaxPercentCash($maxPercentCash)
    {
        $this->maxPercentCash = $maxPercentCash;
        return $this;
    }

    /**
     * Gets as maxPercentCashless
     *
     * 22.7. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании в безналичном порядке
     *
     * @return string
     */
    public function getMaxPercentCashless()
    {
        return $this->maxPercentCashless;
    }

    /**
     * Sets a new maxPercentCashless
     *
     * 22.7. Максимальная полная стоимость кредита (займа) в процентах годовых при его использовании в безналичном порядке
     *
     * @param string $maxPercentCashless
     * @return self
     */
    public function setMaxPercentCashless($maxPercentCashless)
    {
        $this->maxPercentCashless = $maxPercentCashless;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        // TODO: Implement getSegmentName() method.
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        // TODO: Implement getFieldsDescriptions() method.
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        // TODO: Implement getTitle() method.
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        // TODO: Implement init() method.
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        // TODO: Implement getXmlAttributes() method.
    }
}

