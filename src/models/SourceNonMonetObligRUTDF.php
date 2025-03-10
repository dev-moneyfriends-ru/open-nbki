<?php

namespace mfteam\nbch\models;

/**
 * Сведения о неденежном обязательстве источника
 */
class SourceNonMonetObligRUTDF extends BaseItem
{
    /**
     * Предмет обязательства.
     * Предмет обязательства источника согласно условиям договора.
     * @var string $srcNonMonetOblig
     */
    public $srcNonMonetOblig = '';
    
    /**
     * Код предоставляемого имущества.
     * Заполняется по справочнику 4.1.
     * @var string $srcNonMonetObligCode
     */
    public $srcNonMonetObligCode = '';
    
    /**
     * Объект предоставления.
     * Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У).
     * В предыдущих версиях в этом показателе указывалось имущество, которое источник должен передать субъекту.
     * @var string $srcNonMonetObligObject
     * @deprecated
     */
    public $srcNonMonetObligObject = '';
    
    /**
     * Дата передачи имущества субъекту.
     * Дата передачи имущества субъекту или возникновения неденежного поручительства.
     * @var string $srcNonMonetObligDt
     */
    public $srcNonMonetObligDt = '';
    
    /**
     * Идентификационный код предоставляемого имущества.
     * Указывается:
     * кадастровый номер – для имеющей такой номер недвижимости;
     * идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства;
     * код по Общероссийскому классификатору основных фондов (далее – ОКОФ) или заводской номер – для промышленных машин и оборудования;
     * штриховой код – для имеющего такой код товара;
     * уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента.
     * Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.
     * @var string $srcNonMonetObligCodeIdent
     */
    public $srcNonMonetObligCodeIdent = '';
}
