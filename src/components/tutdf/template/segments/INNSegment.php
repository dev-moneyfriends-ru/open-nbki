<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 12:12
 */

namespace mfteam\nbch\components\tutdf\template\segments;

/**
 * Идентифицирующий сегмент (ID) ИНН субъекта
 */
class INNSegment extends IDSegment
{
    public const TYPE = 81;
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
    public function getNumber(): string
    {
        return $this->template->subject->getInn();
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return parent::getTitle() . ' (ИНН)';
    }
}