<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 11:48
 */

namespace mfteam\nbch\components\tutdf\template\segments;



use mfteam\nbch\components\tutdf\template\TutdfTemplate;

/**
 * Идентифицирующий сегмент (ID) СНИЛС субъекта
 * Class SNILSSegment
 * @package common\modules\nbki\components\templates\segments
 */
class SNILSSegment extends IDSegment
{
    /**
     * Тип документа СНИЛС
     */
    public const TYPE = 32;
    
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
        return $this->template->subject->getSnils();
    }
    
    /**
     * @return string
     */
    public function getTitle(): string
    {
        return parent::getTitle() . ' (СНИЛС)';
    }
}