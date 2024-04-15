<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\Guarantor;
use mfteam\nbch\models\GuarantorRUTDF;
use yii\base\InvalidConfigException;

/**
 * Блок 24. Сведения о поручительстве – B24_GUARANTOR
 */
class B24Guarantor extends BaseSegment
{
    /**
     * @var GuarantorRUTDF
     */
    private $guarantor;
    
    public function __construct(RutdfTemplate $template, GuarantorRUTDF $guarantor)
    {
        $this->guarantor = $guarantor;
        parent::__construct($template);
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B24_GUARANTOR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if (empty($this->guarantor->guaranteeUuid)) {
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
            $this->guarantor->serialNum . "-" . $this->guarantor->getUuidControlSum($this->guarantor->guaranteeUuid),
            $this->formatCurrency($this->guarantor->guaranteeVolume),
            $this->guarantor->currencyCode,
            $this->formatDate($this->guarantor->guaranteeAgreementDt),
            $this->formatDate($this->guarantor->guaranteeExpirationDate),
            $this->formatDate($this->guarantor->guaranteeFactExpirationDate),
            $this->guarantor->guaranteeEndReason ?? self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия поручительства' => 'Код «1» – обязательство субъекта обеспечено поручительством; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 33 не заполняются.',
            'УИд договора поручительства' => 'Заполняется, если по обязательству поручителя формируется КИ. Значение показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ поручителя – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ поручителя – юридического лица.',
            'Размер поручительства' => '',
            'Валюта поручительства' => '',
            'Дата заключения договора поручительства' => '',
            'Дата прекращения поручительства согласно договору' => '',
            'Дата фактического прекращения поручительства' => '',
            'Код причины прекращения поручительства' => 'Заполняется по справочнику 4.2.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 24. Сведения о поручительстве – B24_GUARANTOR';
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