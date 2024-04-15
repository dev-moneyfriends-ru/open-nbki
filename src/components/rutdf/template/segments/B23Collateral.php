<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\Collateral;
use mfteam\nbch\models\CollateralRUTDF;

/**
 * Блок 23. Сведения о залоге – B23_COLLATERAL
 */
class B23Collateral extends BaseSegment
{
    /**
     * @var CollateralRUTDF
     */
    private $collateral;
    
    /**
     * @param CollateralRUTDF $collateral
     * @param RutdfTemplate $template
     * @param $config
     */
    public function __construct(RutdfTemplate $template, CollateralRUTDF $collateral)
    {
        $this->collateral = $collateral;
        parent::__construct($template);
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
                0 => $this->getSegmentName(),
                1 => 0,
                2 => self::EMPTY_VALUE,
                3 => self::EMPTY_VALUE,
                4 => self::EMPTY_VALUE,
                5 => self::EMPTY_VALUE,
                6 => self::EMPTY_VALUE,
                7 => self::EMPTY_VALUE,
                8 => self::EMPTY_VALUE,
                9 => self::EMPTY_VALUE,
                10 => self::EMPTY_VALUE,
                11 => self::EMPTY_VALUE,
                12 => self::EMPTY_VALUE,
                13 => self::EMPTY_VALUE,
                14 => self::EMPTY_VALUE,
            ];
        }
        return [
            0 => $this->getSegmentName(),
            1 => 1,
            2 => $this->collateral->collateralCode,
            3 => str_replace(" ", "", $this->collateral->collateralId),
            4 => $this->formatDate($this->collateral->collateralAgreementDt),
            5 => $this->formatCurrency($this->collateral->collateralValue),
            6 => $this->collateral->currencyCode,
            7 => $this->formatDate($this->collateral->collateralDate),
            8 => self::EMPTY_VALUE,
            9 => $this->formatDate($this->collateral->collateralExpirationDate),
            10 => $this->formatDate($this->collateral->collateralFactExpirationDate),
            11 => $this->collateral->collateralEndReason??self::EMPTY_VALUE,
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
            'Наименование сегмента' => '',
            'Признак наличия залога' => 'Код «1» – исполнение обязательства обеспечено залогом; код «0» – обстоятельство кода «1» отсутствует. Если по показателю 32.1 «Признак наличия залога» указан код «0», иные показатели блока 32 Показателей КИ ФЛ не заполняются.',
            'Код предмета залога' => 'Заполняется по справочнику 4.1.',
            'Идентификационный код предмета залога' => 'Указывается: кадастровый номер – для имеющей такой номер недвижимости; идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства; код по Общероссийскому классификатору основных фондов (далее – ОКОФ) или заводской номер – для промышленных машин и оборудования; штриховой код – для имеющего такой код товара;  уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента. Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.',
            'Дата заключения договора залога' => '',
            'Стоимость предмета залога' => 'Заполняется согласно заключению об оценке стоимости предмета залога.  если оценка стоимости предмета залога не проводилась, указывается цена приобретения предмета залога либо его стоимость по договору залога (по выбору источника).',
            'Валюта стоимости предмета залога' => '',
            'Дата проведения оценки предмета залога' => 'Заполняется, если стоимость предмета залога оценивалась.',
            'Признак иного обременения предмета залога' => 'Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У). В предыдущих версиях в этом показателе указывался код «1» – имеется иное обременение предмета залога, либо код «0» – обстоятельство кода «1» отсутствовало.',
            'Дата прекращения залога согласно договору' => '',
            'Дата фактического прекращения залога' => '',
            'Код причины прекращения залога' => 'Заполняется по справочнику 4.2.',
            'Вид стоимости предмета залога' => 'Заполняется по справочнику 4.1.1 Вид стоимости предмета залога, указанной по показателю 32.5 «Стоимость предмета залога».',
            'Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога' => 'Общая сумма обязательств по всем договорам, исполнение которых обеспечивается одним и тем же предметом залога. Указывается в валюте, которая указана по показателю 32.6 «Валюта стоимости предмета залога».',
            'Количество договоров, исполнение обязательств по которым обеспечено предметом залога' => 'Количество договоров, обязательства из которых обеспечиваются одним и тем же предметом залога.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 23. Сведения о залоге – B23_COLLATERAL';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }
}