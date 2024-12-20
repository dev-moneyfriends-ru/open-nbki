<?php

namespace mfteam\nbch\models;

use mfteam\nbch\models\BaseItem;

/**
 * Сведения об обеспечиваемом обязательстве
 */
class AmountInfoRUTDF extends BaseItem
{
    /**
     * Сумма обеспечиваемого обязательства.
     * Заполняется, если обязательством субъекта обеспечивается исполнение другого обязательства. Отражается сумма задолженности всех видов по обязательству,
     * исполнение которого обеспечено обязательством субъекта, на дату формирования задолженности, изменения суммы задолженности.
     * @var float|null $ensuredAmt
     */
    public $ensuredAmt = null;

    /**
     * Валюта обеспечиваемого обязательства
     * @var string $commitcurrCode
     */
    public $commitcurrCode = 'RUB';

    /**
     * Код типа обеспечиваемого обязательства
     * Заполняется по справочнику 2.2
     * @var string $commitCode
     */
    public $commitCode = '';

    /**
     * Дата расчета.
     * Определяется датой, по состоянию на которую сформированы данные
     * @var string $amtDate
     */
    public $amtDate = '';

    /**
     * УИд сделки, в результате которой возникло обеспечиваемое обязательство
     * Указывается УИд сделки, обязательства из которой обеспечены обязательством субъекта.
     * @var string $commitUuid
     */
    public $commitUuid = '';

    /**
     * Лимит ответственности по обеспечиваемому обязательству.
     * Указывается лимит ответственности субъекта по обеспечению исполнения другого обязательства
     * согласно условиям сделки
     * @var float|null
     */
    public $liabilityLimit = null;
}
