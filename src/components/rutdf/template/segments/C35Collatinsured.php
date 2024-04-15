<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\CollatInsuredRUTDF;

/**
 * Блок 35. Сведения о страховании предмета залога – C35_COLLATINSURED
 */
class C35Collatinsured extends BaseSegment
{
    /**
     * @var CollatInsuredRUTDF
     */
    private $model;
    
    /**
     * @param RutdfTemplate $template
     * @param CollatInsuredRUTDF $model
     */
    public function __construct(RutdfTemplate $template, CollatInsuredRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
    }
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C35_COLLATINSURED';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->model;
        if(empty($model->insurLimit)){
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            1,
            $this->formatCurrency($model->insurLimit),
            $model->currencyCode,
            $model->hasFranchise,
            $this->formatDate($model->insurStartDt),
            $this->formatDate($model->insurEndDt),
            $this->formatDate($model->insurFactEndDt),
            $model->insurEndReason,
            $model->collateralId,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия страхования' => 'Код «1» – риск утраты стоимости предмета залога застрахован в пользу источника или субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 35 не заполняются.',
            'Лимит страховых выплат' => 'Указывается предельный размер обязательств страховщика согласно договору. При отсутствии лимита страховых выплат по указанному показателю приводится страховая сумма.',
            'Валюта страховых выплат' => '',
            'Признак наличия франшизы' => 'Код «1» – в договоре страхования имеется условие об условной или безусловной франшизе; код «0» – обстоятельство кода «1» отсутствует.',
            'Дата начала действия страхования' => 'Дата начала действия страхования, обусловленного договором страхования.',
            'Дата окончания действия страхования согласно договору' => 'Дата планового окончания действия страхования, обусловленного договором страхования.',
            'Дата фактического прекращения страхования' => 'Дата фактического окончания действия страхования, обусловленного договором страхования.',
            'Код причины прекращения страхования' => 'Заполняется по справочнику 4.2.',
            'Идентификационный код предмета залога' => 'Должен совпадать хотя бы с одним значением показателя 32.3 «Идентификационный код предмета залога» в блоке 32 для одной записи кредитной истории.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 35. Сведения о страховании предмета залога – C35_COLLATINSURED';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
}