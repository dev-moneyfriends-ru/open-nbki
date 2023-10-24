<?php

namespace mfteam\nbch\models;

/**
 * Сведения о неденежном обязательстве субъекта
 */
class SubjectNonMonetObligRUTDF extends BaseItem
{
    /**
     * @var string $subjNonMonetOblig
     */
    public $subjNonMonetOblig = null;
    
    /**
     * @var string $subjNonMonetObligObject
     */
    public $subjNonMonetObligObject = null;
    
    /**
     * @var string $subjNonMonetObligRegul
     */
    public $subjNonMonetObligRegul = null;
    
    /**
     * @var int $subjNonMonetObligAdverseCode
     */
    public $subjNonMonetObligAdverseCode = null;
    
    /**
     * @var string $acctSerialNum
     */
    public $acctSerialNum = null;
    
    /**
     * Код полученного имущества
     * @var string|null
     */
    public $receivedpropCode = null;
    
}