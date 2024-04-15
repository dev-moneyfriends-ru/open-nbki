<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\IndepGuarantorRUTDF;

/**
 * Блок 25. Сведения о независимой гарантии – B25_INDEPGUARANTOR
 */
class B25IndepGuarantor extends BaseSegment
{
    /**
     * @var IndepGuarantorRUTDF
     */
    private $model;
    
    /**
     * @param RutdfTemplate $template
     * @param IndepGuarantorRUTDF $model
     */
    public function __construct(RutdfTemplate $template, IndepGuarantorRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B25_INDEPGUARANTOR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if (empty($this->model->indepGuaranteeUuid)) {
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
            ];
        }
        return [
            $this->getSegmentName(),
            1,
            $this->model->indepGuaranteeUuid . '-' . $this->model->getUuidControlSum($this->model->indepGuaranteeUuid),
            $this->formatCurrency($this->model->indepGuaranteeVolume),
            $this->model->currencyCode,
            $this->formatDate($this->model->indepGuaranteeDt),
            $this->formatDate($this->model->indepGuaranteeExpirationDate),
            $this->formatDate($this->model->indepGuaranteeFactExpirationDate),
            $this->model->indepGuaranteeEndReason ?? self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия независимой гарантии' => 'Код «1» – исполнение обязательства обеспечено независимой гарантией; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 34 не заполняются.',
            'УИд независимой гарантии' => 'Заполняется, если по обязательству принципала формируется КИ. Значение указанного показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ принципала – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ принципала – юридического лица.',
            'Сумма независимой гарантии' => '',
            'Валюта независимой гарантии' => '',
            'Дата выдачи независимой гарантии' => '',
            'Дата окончания независимой гарантии согласно ее условиям' => '',
            'Дата фактического прекращения независимой гарантии' => '',
            'Код причины прекращения независимой гарантии' => 'Заполняется по справочнику 4.2.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 25. Сведения о независимой гарантии – B25_INDEPGUARANTOR';
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