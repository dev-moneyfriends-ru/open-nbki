<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL15IndividualBorrowerRatingType
 *
 * Блок 15. Индивидуальный рейтинг субъекта
 * XSD Type: FL_15_IndividualBorrowerRating_Type
 */
class FL15IndividualBorrowerRatingType
{
    /**
     * 15.1. Значение рейтинга
     *
     * @var int $ratingValue
     */
    private $ratingValue = null;

    /**
     * 15.2. Дата расчета рейтинга
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType\FactorCodeGroupFL15IndividualBorrowerRatingAType[] $factorCodeGroupFL15IndividualBorrowerRating
     */
    private $factorCodeGroupFL15IndividualBorrowerRating = [
        
    ];

    /**
     * 15.5. Код причины невозможности расчета рейтинга
     *
     * @var int $causeCode
     */
    private $causeCode = null;

    /**
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @var string[] $otherCause
     */
    private $otherCause = [
        
    ];

    /**
     * Gets as ratingValue
     *
     * 15.1. Значение рейтинга
     *
     * @return int
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * Sets a new ratingValue
     *
     * 15.1. Значение рейтинга
     *
     * @param int $ratingValue
     * @return self
     */
    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 15.2. Дата расчета рейтинга
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
     * 15.2. Дата расчета рейтинга
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
     * Adds as factorCodeGroupFL15IndividualBorrowerRating
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType\FactorCodeGroupFL15IndividualBorrowerRatingAType $factorCodeGroupFL15IndividualBorrowerRating
     *@return self
     */
    public function addToFactorCodeGroupFL15IndividualBorrowerRating(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType\FactorCodeGroupFL15IndividualBorrowerRatingAType $factorCodeGroupFL15IndividualBorrowerRating)
    {
        $this->factorCodeGroupFL15IndividualBorrowerRating[] = $factorCodeGroupFL15IndividualBorrowerRating;
        return $this;
    }

    /**
     * isset factorCodeGroupFL15IndividualBorrowerRating
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFactorCodeGroupFL15IndividualBorrowerRating($index)
    {
        return isset($this->factorCodeGroupFL15IndividualBorrowerRating[$index]);
    }

    /**
     * unset factorCodeGroupFL15IndividualBorrowerRating
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFactorCodeGroupFL15IndividualBorrowerRating($index)
    {
        unset($this->factorCodeGroupFL15IndividualBorrowerRating[$index]);
    }

    /**
     * Gets as factorCodeGroupFL15IndividualBorrowerRating
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType\FactorCodeGroupFL15IndividualBorrowerRatingAType[]
     */
    public function getFactorCodeGroupFL15IndividualBorrowerRating()
    {
        return $this->factorCodeGroupFL15IndividualBorrowerRating;
    }

    /**
     * Sets a new factorCodeGroupFL15IndividualBorrowerRating
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType\FactorCodeGroupFL15IndividualBorrowerRatingAType[] $factorCodeGroupFL15IndividualBorrowerRating
     * @return self
     */
    public function setFactorCodeGroupFL15IndividualBorrowerRating(array $factorCodeGroupFL15IndividualBorrowerRating = null)
    {
        $this->factorCodeGroupFL15IndividualBorrowerRating = $factorCodeGroupFL15IndividualBorrowerRating;
        return $this;
    }

    /**
     * Gets as causeCode
     *
     * 15.5. Код причины невозможности расчета рейтинга
     *
     * @return int
     */
    public function getCauseCode()
    {
        return $this->causeCode;
    }

    /**
     * Sets a new causeCode
     *
     * 15.5. Код причины невозможности расчета рейтинга
     *
     * @param int $causeCode
     * @return self
     */
    public function setCauseCode($causeCode)
    {
        $this->causeCode = $causeCode;
        return $this;
    }

    /**
     * Adds as otherCause
     *
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @return self
     * @param string $otherCause
     */
    public function addToOtherCause($otherCause)
    {
        $this->otherCause[] = $otherCause;
        return $this;
    }

    /**
     * isset otherCause
     *
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCause($index)
    {
        return isset($this->otherCause[$index]);
    }

    /**
     * unset otherCause
     *
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCause($index)
    {
        unset($this->otherCause[$index]);
    }

    /**
     * Gets as otherCause
     *
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @return string[]
     */
    public function getOtherCause()
    {
        return $this->otherCause;
    }

    /**
     * Sets a new otherCause
     *
     * 15.6. Иные причины невозможности расчета рейтинга
     *
     * @param string $otherCause
     * @return self
     */
    public function setOtherCause(array $otherCause = null)
    {
        $this->otherCause = $otherCause;
        return $this;
    }
}

