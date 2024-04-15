<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\LegalItemsRUTDF;

/**
 * Блок 30. Сведения о судебном споре или требовании по обязательству – B30_LEGALRECORD
 */
class B30LegalRecord extends BaseSegment
{
    /**
     * @var LegalItemsRUTDF
     */
    private $model;
    
    public function __construct(RutdfTemplate $template, LegalItemsRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
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
    public function getSegmentName(): string
    {
        return 'B30_LEGALRECORD';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->model;
        if ($model->hasCourtAct === null) {
            return [
                $this->getSegmentName(),
                0,
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
            $model->hasCourtAct,
            $this->formatDate($model->courtActDt),
            $model->courtActNum,
            $model->resolution,
            $model->courtActEffectCode,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак судебного спора или требования' => 'Код «1» – в производстве суда находится иск по обязательству источника и субъекта либо заявление источника о выдаче судебного приказа по обязательству; код «0» – обстоятельства кода «1» отсутствуют. Если указан код «0», иные показатели блока 39 не заполняются.',
            'Признак наличия судебного акта' => 'Код «1» – суд принял акт, которым заканчивается рассмотрение дела по существу (в частности, судебное решение или судебный приказ); код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», показатели 39.3–39.6 не заполняются.',
            'Дата принятия судебного акта' => '',
            'Номер судебного акта' => '',
            'Резолютивная часть судебного акта' => 'Цитируется резолютивная часть судебного акта. Из цитируемого текста исключаются номера счетов и не принадлежащие субъекту персональные данные.',
            'Признак вступления акта в законную силу' => 'Код «1» – судебный акт вступил в законную силу; код «0» – обстоятельство кода «1» отсутствует.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'По показателям 30.2–30.6 указываются сведения о судебном акте, которым заканчивается рассмотрение дела по существу';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 30. Сведения о судебном споре или требовании по обязательству – B30_LEGALRECORD';
    }
}