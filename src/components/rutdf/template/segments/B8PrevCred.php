<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 8. Сведения об основных частях КИ юридического лица, от которого субъекту перешли права и обязанности – B8_PREVCRED
 */
class B8PrevCred extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B8_PREVCRED";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
          $this->segmentName,
          0,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Признак наличия лица, от которого перешли права и обязанности' => '',
            'Признак регистрации в Российской Федерации' => '',
            'Полное наименование лица, от которого перешли права и обязанности' => '',
            'Регистрационный номер лица, от которого перешли права и обязанности' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 8. Сведения об основных частях КИ юридического лица, от которого субъекту перешли права и обязанности – B8_PREVCRED";
    }
}