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
                0 => $this->segmentName,
                1 => 0,
                2 => $this->emptyValue,
                3 => $this->emptyValue,
                4 => $this->emptyValue,
                5 => $this->emptyValue,
                6 => $this->emptyValue,
                7 => $this->emptyValue,
                8 => $this->emptyValue,
                9 => $this->emptyValue,
                10 =>$this->emptyValue,
                11 =>$this->emptyValue,
                12 => $this->emptyValue,
                13 => $this->emptyValue,
                14 => $this->emptyValue,
            ];
        }
        return [
            0 => $this->segmentName,
            1 => 1,
            2 => $this->collateral->collateralCode,
            3 => str_replace(" ", "", $this->collateral->serialNum),
            4 => $this->formatNewDate($this->template->offer->getTrade()->openedDt),
            5 => $this->formatCurrency($this->collateral->collateralValue),
            6 => $this->collateral->currencyCode,
            7 => $this->formatNewDate($this->collateral->collateralDate),
            8 => $this->emptyValue,
            9 => $this->formatNewDate($this->collateral->collateralExpirationDate),
            10 =>$this->formatNewDate($this->template->offer->getTrade()->completePerformDt),
            11 =>empty($this->template->offer->getTrade()->completePerformDt)?$this->emptyValue:1,
            12 => $this->collateral->collateralValueType,
            13 => $this->formatCurrency($this->collateral->collateralcommAmt),
            14 => $this->collateral->collateralcontCnt,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            '0 Наименование сегмента' => '',
            '1 Признак наличия залога' => 'Код «1» – исполнение обязательства обеспечено залогом;
                код «0» – обстоятельство кода «1» отсутствует.
                Если указан код «0», иные показатели блока 23 не заполняются.
                ',
            '2 Код предмета залога' => 'Заполняется по справочнику 4.1.',
            '3 Идентификационный код предмета залога' => 'Кадастровый номер – для имеющей такой номер недвижимости;
                идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства;
                код по ОКОФ или заводской номер – для промышленных машин и оборудования;
                штриховой код – для имеющего такой код товара;
                уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента.
                Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.
                Поскольку поле является ключевым, его значение должно быть уникальным для каждого факта предоставления залога, даже если предметом залога является один и тот же объект. Например, если два залогодателя являются долевыми собственниками одного объекта недвижимости, необходимо к кадастровому номеру добавить произвольный уникальный индекс: например, «…/1» и «…/2», «…-01» и «…-02», - «-ИВАНОВ» и «-ИВАНОВА», и т.п.
                ',
            '4 Дата заключения договора залога' => '',
            '5 Стоимость предмета залога' => 'Заполняется согласно заключению об оценке стоимости предмета залога.  если оценка стоимости предмета залога не проводилась, указывается цена приобретения предмета залога либо его стоимость по договору залога (по выбору источника).',
            '6 Валюта стоимости предмета залога' => '',
            '7 Дата проведения оценки предмета залога' => 'Заполняется, если стоимость предмета залога оценивалась.',
            '8 Признак иного обременения предмета залога' => 'Не заполняется',
            '9 Дата прекращения залога согласно договору' => '',
            '10 Дата фактического прекращения залога' => '',
            '11 Код причины прекращения залога' => 'Заполняется по справочнику 4.2.',
            '12 Вид стоимости предмета залога' => 'Заполняется по справочнику 4.1.1 Вид стоимости предмета залога, указанной по показателю 32.5 «Стоимость предмета залога».',
            '13 Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога' => 'Общая сумма обязательств по всем договорам, исполнение которых обеспечивается одним и тем же предметом залога.
                Указывается в валюте, которая указана по показателю 32.6 «Валюта стоимости предмета залога».
                ',
            '14 Количество договоров, исполнение обязательств по которым обеспечено предметом залога' => 'Количество договоров, обязательства из которых обеспечиваются одним и тем же предметом залога.',
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