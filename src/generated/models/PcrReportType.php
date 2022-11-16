<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing PcrReportType
 *
 * 
 * XSD Type: PcrReport
 */
class PcrReportType
{

    /**
     * @var \mfteam\nbch\generated\models\PcrReportType\ScoreAType[] $score
     */
    private $score = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PcrReasonsType $reasons
     */
    private $reasons = null;

    /**
     * @var int $exclusionCode
     */
    private $exclusionCode = null;

    /**
     * Adds as score
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PcrReportType\ScoreAType $score
     */
    public function addToScore(\mfteam\nbch\generated\models\PcrReportType\ScoreAType $score)
    {
        $this->score[] = $score;
        return $this;
    }

    /**
     * isset score
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScore($index)
    {
        return isset($this->score[$index]);
    }

    /**
     * unset score
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScore($index)
    {
        unset($this->score[$index]);
    }

    /**
     * Gets as score
     *
     * @return \mfteam\nbch\generated\models\PcrReportType\ScoreAType[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets a new score
     *
     * @param \mfteam\nbch\generated\models\PcrReportType\ScoreAType[] $score
     * @return self
     */
    public function setScore(array $score)
    {
        $this->score = $score;
        return $this;
    }

    /**
     * Gets as reasons
     *
     * @return \mfteam\nbch\generated\models\PcrReasonsType
     */
    public function getReasons()
    {
        return $this->reasons;
    }

    /**
     * Sets a new reasons
     *
     * @param \mfteam\nbch\generated\models\PcrReasonsType $reasons
     * @return self
     */
    public function setReasons(\mfteam\nbch\generated\models\PcrReasonsType $reasons)
    {
        $this->reasons = $reasons;
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


}

