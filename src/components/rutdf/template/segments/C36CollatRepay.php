<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\CollatRepayRUTDF;

/**
 * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения – C36_COLLATREPAY
 */
class C36CollatRepay extends BaseSegment
{
    /**
     * @var CollatRepayRUTDF
     */
    private $model;
    
    /**
     * @param RutdfTemplate $template
     * @param CollatRepayRUTDF $model
     */
    public function __construct(RutdfTemplate $template, CollatRepayRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C36_COLLATREPAY';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->model;
        if (empty($model->collatRepayAmt)) {
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            0,
            $model->collatRepayCode,
            $this->formatDate($model->collatRepayDt),
            $this->formatCurrency($model->collatRepayAmt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак погашения требований за счет обеспечения' => 'Код «1» – требования источника к субъекту были полностью или частично погашены за счет обеспечения; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 36 не заполняются.',
            'Код использованного обеспечения' => 'Заполняется по справочнику 4.3.',
            'Дата погашения требований за счет обеспечения' => '',
            'Сумма требований, погашенных за счет обеспечения' => 'По обязательству поручителя указывается общая сумма внесенных им платежей; по обязательству из независимой гарантии указывается выплаченная по гарантии сумма; по договору страхования предмета залога, который заключен в пользу источника или субъекта, указывается размер страховой выплаты.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения – C36_COLLATREPAY';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return '';
    }
}