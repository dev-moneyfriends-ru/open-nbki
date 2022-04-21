<?php

namespace mfteam\nbch\models\dummy;

use mfteam\nbch\models\NbchSubjectPassportInterface;
use yii\base\BaseObject;

/**
 * Паспорт субъекта
 */
class Passport extends BaseObject implements NbchSubjectPassportInterface
{
    /**
     * @var string
     */
    private $series;
    /**
     * @var string
     */
    private $number;
    /**
     * @var string
     */
    private $issueDate;
    /**
     * @var string
     */
    private $issueAuthority;
    
    
    /**
     * @param string $series
     * @return Passport
     */
    public function setSeries($series)
    {
        $this->series = $series;
        return $this;
    }
    
    /**
     * @param string $number
     * @return Passport
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
    
    /**
     * @param string $issueDate
     * @return Passport
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }
    
    /**
     * @param string $issueAuthority
     * @return Passport
     */
    public function setIssueAuthority($issueAuthority)
    {
        $this->issueAuthority = $issueAuthority;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getSeries(): string
    {
        return $this->series;
    }
    
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    
    /**
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }
    
    /**
     * @return string
     */
    public function getIssueAuthority(): string
    {
        return $this->issueAuthority;
    }
}