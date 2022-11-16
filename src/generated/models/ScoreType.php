<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ScoreType
 *
 * 
 * XSD Type: Score
 */
class ScoreType
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


}

