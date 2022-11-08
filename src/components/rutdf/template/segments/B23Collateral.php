<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\models\Collateral;

/**
 * Блок 23. Сведения о залоге – B23_COLLATERAL
 */
class B23Collateral extends \mfteam\nbch\components\BaseSegment
{
    /**
     * @var Collateral
     */
    private $collateral;
    
    /**
     * @param Collateral $collateral
     * @param BaseRequestTemplate $template
     * @param $config
     */
    public function __construct(Collateral $collateral, BaseRequestTemplate $template, $config = [])
    {
        $this->collateral = $collateral;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B23_COLLATERAL';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if (empty($this->collateral->collateralCode)) {
            return [
                $this->segmentName,
                0,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
                $this->emptyValue,
            ];
        }
        return [
            $this->segmentName,
            1,
            $this->collateral->collateralCode,
            str_replace(" ", "", $this->collateral->serialNum),
            $this->formatNewDate($this->template->offer->getTrade()->openedDt),
            $this->formatCurrency($this->collateral->collateralValue),
            $this->collateral->currencyCode,
            $this->formatNewDate($this->collateral->collateralDate),
            $this->emptyValue,
            $this->formatNewDate($this->collateral->collateralExpirationDate),
            $this->formatNewDate($this->template->offer->getTrade()->completePerformDt),
            empty($this->template->offer->getTrade()->completePerformDt)?$this->emptyValue:1
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия залога' => 'Код «1» – исполнение обязательства обеспечено залогом;
                код «0» – обстоятельство кода «1» отсутствует.
                Если указан код «0», иные показатели блока 23 не заполняются.
                ',
            'Код предмета залога' => 'Заполняется по справочнику 4.1.',
            'Идентификационный код предмета залога' => 'Кадастровый номер – для имеющей такой номер недвижимости;
                идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства;
                код по ОКОФ или заводской номер – для промышленных машин и оборудования;
                штриховой код – для имеющего такой код товара;
                уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента.
                Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.
                Поскольку поле является ключевым, его значение должно быть уникальным для каждого факта предоставления залога, даже если предметом залога является один и тот же объект. Например, если два залогодателя являются долевыми собственниками одного объекта недвижимости, необходимо к кадастровому номеру добавить произвольный уникальный индекс: например, «…/1» и «…/2», «…-01» и «…-02», - «-ИВАНОВ» и «-ИВАНОВА», и т.п.
                ',
            'Дата заключения договора залога' => '',
            'Стоимость предмета залога' => 'Заполняется согласно заключению об оценке стоимости предмета залога.  если оценка стоимости предмета залога не проводилась, указывается цена приобретения предмета залога либо его стоимость по договору залога (по выбору источника).',
            'Валюта стоимости предмета залога' => '',
            'Дата проведения оценки предмета залога' => 'Заполняется, если стоимость предмета залога оценивалась.',
            'Признак иного обременения предмета залога' => 'Код «1» – имеется иное обременение предмета залога;
                код «0» – обстоятельство кода «1» отсутствует.
                ',
            'Дата прекращения залога согласно договору' => '',
            'Дата фактического прекращения залога' => '',
            'Код причины прекращения залога' => 'Заполняется по справочнику 4.2.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 23. Сведения о залоге – B23_COLLATERAL';
    }
}