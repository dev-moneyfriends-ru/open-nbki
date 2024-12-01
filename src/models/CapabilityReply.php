<?php

namespace mfteam\nbch\models;

/**
 * Сведения о дееспособности
 */
class CapabilityReply extends BaseItem
{
    /**
     * Код дееспособности @see CapabilityReply::capabilityList()
     * @var int $capability
     */
    public $capability = null;
    
    /**
     * Дата вступления в силу решения суда о признании недееспособным или об ограничении дееспособности
     * @var string $incapDecisionDt
     */
    public $incapDecisionDt = null;
    
    /**
     * Номер решения суда.
     * Сведения о решении суда, который признал гражданина недееспособным или ограничил его дееспособность.
     * @var string $incapDecisionNum
     */
    public $incapDecisionNum = null;
    
    /**
     * Наименование суда.
     * Для иностранного суда заполняются на языке страны места нахождения данного суда. В скобках указывается перевод наименования суда на русский язык (при наличии перевода).
     * Сведения о решении суда, который признал гражданина недееспособным или ограничил его дееспособность.
     * @var string $incapCourtName
     */
    public $incapCourtName = null;
    
    /**
     * Дата вступления в силу решения суда о признании дееспособным или об отмене ограничения дееспособности
     * @var string $capDecisionDt
     */
    public $capDecisionDt = null;
    
    /**
     * Номер решения суда.
     * Сведения о решении суда, который признал гражданина дееспособным или отменил ограничение его дееспособности
     * @var string $capDecisionNum
     */
    public $capDecisionNum = null;
    
    /**
     * Наименование суда.
     * Сведения о решении суда, который признал гражданина дееспособным или отменил ограничение его дееспособности
     * для иностранного суда заполняются на языке страны места нахождения данного суда. В скобках указывается перевод наименования суда на русский язык (при наличии перевода).
     * @var string $capCourtName
     */
    public $capCourtName = null;
    
    
    /**
     * Виды дееспособности
     * @return string[]
     */
    public static function capabilityList()
    {
        return [
            1 => 'Гражданин полностью дееспособен (в том числе если несовершеннолетний гражданин эмансипирован или вступил в брак)',
            2 => 'Гражданин не полностью дееспособен в силу закона, в том числе в связи с несовершеннолетием',
            3 => 'Суд ограничил дееспособность гражданина',
            4 => 'Суд признал гражданина недееспособным',
            5 => 'Суд признал гражданина дееспособным либо отменил ограничение дееспособности',
        ];
    }
}
