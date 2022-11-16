<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PKRType
 *
 * 
 * XSD Type: PKR
 */
class PKRType
{

    /**
     * @var int $score
     */
    private $score = null;

    /**
     * @var \DateTime $scoreDate
     */
    private $scoreDate = null;

    /**
     * @var int[] $factor
     */
    private $factor = [
        
    ];

    /**
     * @var string[] $factorWeight
     */
    private $factorWeight = [
        
    ];

    /**
     * @var int $exclusionCode
     */
    private $exclusionCode = null;

    /**
     * @var string $otherExclusion
     */
    private $otherExclusion = null;

    /**
     * Gets as score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * @param int $score
     * @return self
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as scoreDate
     *
     * @return \DateTime
     */
    public function getScoreDate()
    {
        return $this->scoreDate;
    }

    /**
     * Sets a new scoreDate
     *
     * @param \DateTime $scoreDate
     * @return self
     */
    public function setScoreDate(\DateTime $scoreDate)
    {
        $this->scoreDate = $scoreDate;
        return $this;
    }

    /**
     * Adds as factor
     *
     * @return self
     * @param int $factor
     */
    public function addToFactor($factor)
    {
        $this->factor[] = $factor;
        return $this;
    }

    /**
     * isset factor
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFactor($index)
    {
        return isset($this->factor[$index]);
    }

    /**
     * unset factor
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFactor($index)
    {
        unset($this->factor[$index]);
    }

    /**
     * Gets as factor
     *
     * @return int[]
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * @param int[] $factor
     * @return self
     */
    public function setFactor(array $factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Adds as factorWeight
     *
     * @return self
     * @param string $factorWeight
     */
    public function addToFactorWeight($factorWeight)
    {
        $this->factorWeight[] = $factorWeight;
        return $this;
    }

    /**
     * isset factorWeight
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFactorWeight($index)
    {
        return isset($this->factorWeight[$index]);
    }

    /**
     * unset factorWeight
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFactorWeight($index)
    {
        unset($this->factorWeight[$index]);
    }

    /**
     * Gets as factorWeight
     *
     * @return string[]
     */
    public function getFactorWeight()
    {
        return $this->factorWeight;
    }

    /**
     * Sets a new factorWeight
     *
     * @param string[] $factorWeight
     * @return self
     */
    public function setFactorWeight(array $factorWeight)
    {
        $this->factorWeight = $factorWeight;
        return $this;
    }

    /**
     * Gets as exclusionCode
     *
     * @return int
     */
    public function getExclusionCode()
    {
        return $this->exclusionCode;
    }

    /**
     * Sets a new exclusionCode
     *
     * @param int $exclusionCode
     * @return self
     */
    public function setExclusionCode($exclusionCode)
    {
        $this->exclusionCode = $exclusionCode;
        return $this;
    }

    /**
     * Gets as otherExclusion
     *
     * @return string
     */
    public function getOtherExclusion()
    {
        return $this->otherExclusion;
    }

    /**
     * Sets a new otherExclusion
     *
     * @param string $otherExclusion
     * @return self
     */
    public function setOtherExclusion($otherExclusion)
    {
        $this->otherExclusion = $otherExclusion;
        return $this;
    }


}

