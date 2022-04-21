<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 12:35
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use yii\base\InvalidArgumentException;

/**
 * Идентифицирующий сегмент (ID) ОГРН субъекта
 */
class OGRNSegment extends IDSegment
{
    public const TYPE_OGRN = 34;
    public const TYPE_OGRNIP = 33;
    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        if($this->_template->subject->isIP()){
            return self::TYPE_OGRNIP;
        }
        if($this->_template->subject->isLegal()){
            return self::TYPE_OGRN;
        }
        throw new InvalidArgumentException('Неверный тип акаунта');
    }
    
    /**
     * @inheritDoc
     */
    public function getNumber(): string
    {
       return $this->_template->subject->getOgrn();
    }
    
    public function getTitle(): string
    {
        return parent::getTitle() . ' (ОГРН)';
    }
}