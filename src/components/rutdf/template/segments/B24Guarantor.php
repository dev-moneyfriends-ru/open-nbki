<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\BaseRequestTemplate;
use mfteam\nbch\models\Guarantor;

/**
 * Блок 24. Сведения о поручительстве – B24_GUARANTOR
 */
class B24Guarantor extends \mfteam\nbch\components\BaseSegment
{
    /**
     * @var Guarantor
     */
    private $guarantor;
    
    public function __construct(Guarantor $guarantor, BaseRequestTemplate $template, $config = [])
    {
        $this->guarantor = $guarantor;
        parent::__construct($template, $config);
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
        if(empty($this->guarantor->serialNum)){
            return [];
        }
        return [
            $this->segmentName,
            1,
            $this->guarantor->serialNum,
            $this->formatCurrency($this->guarantor->guaranteeAmt),
            $this->guarantor->currencyCode,
            $this->formatNewDate($this->template->offer->getTrade()->openedDt),
            $this->formatNewDate($this->template->offer->getTrade()->closedDt),
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
            'Признак наличия поручительства' => 'Код «1» – обязательство субъекта обеспечено поручительством;
                код «0» – обстоятельство кода «1» отсутствует.
                Если указан код «0», иные показатели блока 24 не заполняются.
                ',
            'УИд договора поручительства' => '',
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
}