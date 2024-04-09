<?php

namespace mfteam\nbch\models;

/**
 * Сведения о солидарных должниках
 */
class CoborrowerRUTDF extends BaseItem
{
    /**
     * Признак наличия солидарных должников
     * Код «1» – в обязательстве участвуют солидарные должники;
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $hasSolidary
     */
    public $hasSolidary = 0;
    
    /**
     * Число солидарных должников
     * Не заполняется, если по показателю 20.1 «Признак наличия солидарных должников» указан код «0».
     * @var int $solidaryNum
     */
    public $solidaryNum = null;
    
}