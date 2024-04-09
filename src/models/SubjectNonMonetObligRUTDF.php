<?php

namespace mfteam\nbch\models;

/**
 * Сведения о неденежном обязательстве субъекта
 */
class SubjectNonMonetObligRUTDF extends BaseItem
{
    /**
     * Предмет обязательства.
     * Предмет обязательства субъекта согласно условиям договора.
     * @var string $subjNonMonetOblig
     */
    public $subjNonMonetOblig = '';
    
    /**
     * Объект предоставления.
     * Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У).
     * В предыдущих версиях в этом показателе указывалось имущество, которое субъект должен передать источнику.
     * @var string $subjNonMonetObligObject
     */
    public $subjNonMonetObligObject = '';
    
    /**
     * Порядок исполнения обязательства.
     * Заполняется согласно условиям договора.
     * @var string $subjNonMonetObligRegul
     */
    public $subjNonMonetObligRegul = '';
    
    /**
     * Признак ненадлежащего исполнения обязательства.
     * Код «1» – субъект не исполнил свое обязательство или его часть;
     * код «0» – субъект надлежаще исполняет свое обязательство.
     * @var int $subjNonMonetObligAdverseCode
     */
    public $subjNonMonetObligAdverseCode = null;
    
    /**
     * Код полученного имущества.
     * Заполняется по справочнику 4.1.
     * @var string $receivedpropCode
     */
    public $receivedpropCode = '';
}