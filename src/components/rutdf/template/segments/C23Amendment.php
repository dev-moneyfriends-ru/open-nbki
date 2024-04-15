<?php

namespace mfteam\nbch\components\rutdf\template\segments;


use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\AmendmentRUTDF;

/**
 * Блок 23. Сведения об изменении договора – C23_AMENDMENT
 */
class C23Amendment extends BaseSegment
{
    
    /**
     * @var AmendmentRUTDF
     */
    private $model;
    
    public function __construct(RutdfTemplate $template, AmendmentRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C23_AMENDMENT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->model;
        if (empty($model->amendDate)) {
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
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            1,
            $this->formatDate($model->amendDate),
            $model->type,
            $model->specType,
            $this->formatString($model->otherDesc),
            $this->formatDate($model->startDt),
            $this->formatDate($model->planEndDt),
            $this->formatDate($model->factEndDt),
            $model->endReason,
            $model->curRate,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак изменения договора' => 'Код «1» – договор изменен (в том числе дополнен) в части условия, сведения о котором указываются в ином блоке в КИ данного субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 23 не заполняются. ',
            'Дата изменения договора' => '',
            'Код вида изменения договора' => 'Заполняется по справочнику 3.1.',
            'Код специального изменения договора' => 'Заполняется: по справочнику 3.2 – если по показателю 23.3 «Код вида изменения договора» указан код «1»; по справочнику 3.3 – если по показателю 23.3 «Код вида изменения договора» указан код «2»; по справочнику 3.4 – если по показателю 23.3 «Код вида изменения договора» указан код «3».',
            'Описание иного изменения договора' => 'Заполняется, если по показателю 23.4 «Код специального изменения договора» указан код «99». вносится комментарий с описанием изменения договора. ',
            'Дата вступления изменения договора в силу' => '',
            'Дата планового прекращения действия изменения договора' => '',
            'Дата фактического прекращения действия изменения договора' => '',
            'Код причины прекращения действия изменения договора' => 'Заполняется по справочнику 3.5.',
            'Курс конверсии валюты долга' => 'Заполняется, если валюта обязательства субъекта была изменена. По указанному показателю отражается обменный курс валюты согласно условиям сделки.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 23. Сведения об изменении договора – C23_AMENDMENT';
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