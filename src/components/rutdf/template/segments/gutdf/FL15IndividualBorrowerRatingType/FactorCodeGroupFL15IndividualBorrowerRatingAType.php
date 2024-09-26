<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType;

/**
 * Class representing FactorCodeGroupFL15IndividualBorrowerRatingAType
 */
class FactorCodeGroupFL15IndividualBorrowerRatingAType
{
    /**
     * 15.3. Код фактора влияния на рейтинг
     *
     * @var string $factorCode
     */
    private $factorCode = null;

    /**
     * 15.4. Доля влияния фактора
     *
     * @var string $factorPortion
     */
    private $factorPortion = null;

    /**
     * Gets as factorCode
     *
     * 15.3. Код фактора влияния на рейтинг
     *
     * @return string
     */
    public function getFactorCode()
    {
        return $this->factorCode;
    }

    /**
     * Sets a new factorCode
     *
     * 15.3. Код фактора влияния на рейтинг
     *
     * @param string $factorCode
     * @return self
     */
    public function setFactorCode($factorCode)
    {
        $this->factorCode = $factorCode;
        return $this;
    }

    /**
     * Gets as factorPortion
     *
     * 15.4. Доля влияния фактора
     *
     * @return string
     */
    public function getFactorPortion()
    {
        return $this->factorPortion;
    }

    /**
     * Sets a new factorPortion
     *
     * 15.4. Доля влияния фактора
     *
     * @param string $factorPortion
     * @return self
     */
    public function setFactorPortion($factorPortion)
    {
        $this->factorPortion = $factorPortion;
        return $this;
    }
}

