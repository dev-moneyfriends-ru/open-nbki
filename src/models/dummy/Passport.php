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
     * @var string
     */
    private $issueCode;
    
    /**
     * @var string
     */
    private $oksm;
    
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
    
    /**
     * @param string $oksm
     * @return Passport
     */
    public function setOksm(string $oksm): Passport
    {
        $this->oksm = $oksm;
        return $this;
    }
    
    /**
     * Код страны по ОКСМ
     * @return string
     */
    public function getOksm(): string
    {
        return $this->oksm;
    }
    
    /**
     * @return string
     */
    public function getIssueCode(): string
    {
        return $this->issueCode;
    }
    
    /**
     * @param string $issueCode
     * @return Passport
     */
    public function setIssueCode(string $issueCode): Passport
    {
        $this->issueCode = $issueCode;
        return $this;
    }
}