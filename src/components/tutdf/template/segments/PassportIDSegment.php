<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 10:27
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\models\NbchSubjectPassportInterface;
use yii\base\InvalidArgumentException;

/**
 * Идентифицирующий сегмент (ID) паспорт гражданина РФ субъекта
 *
 * @property-read NbchSubjectPassportInterface $subjectPassport
 */
class PassportIDSegment extends IDSegment
{
    public const TYPE = 21;
    
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return self::TYPE;
    }
    
    /**
     * @inheritDoc
     */
    public function getSeriesNumber(): string
    {
        return $this->subjectPassport->getSeries();
    }
    
    /**
     * @inheritDoc
     */
    public function getNumber(): string
    {
        return $this->subjectPassport->getNumber();
    }
    
    /**
     * @inheritDoc
     */
    public function getIssueDate(): string
    {
        $date = $this->subjectPassport->getIssueDate();
        return $this->formatDate($date);
    }
    
    /**
     * @inheritDoc
     */
    public function getIssueAuthority(): string
    {
        return $this->subjectPassport->getIssueAuthority();
    }
    
    
    public function getTitle(): string
    {
        return parent::getTitle() . ' (Паспорт)';
    }
    
    /**
     * @return NbchSubjectPassportInterface
     */
    protected function getSubjectPassport(): NbchSubjectPassportInterface
    {
        $model = $this->_template->subject->getPassport();
        if($model === null){
            throw new InvalidArgumentException('Empty subkect passport');
        }
        return $model;
    }
}