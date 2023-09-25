<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации – B5_REORG
 */
class B5Reorg extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B5_REORG";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            0,
            0,
            $this->emptyValue,
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
            'Наименование' => '',
            'Признак смены наименования' => '',
            'Признак реорганизации' => '',
            'Полное наименование лица, от которого перешли права и обязанности' => '',
            'Сокращенное наименование лица, от которого перешли права и обязанности' => '',
            'Регистрационный номер лица, от которого перешли права и обязанности' => '',
            'Дата правопреемства (окончания реорганизации)' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 5. Сведения о правопреемстве при реорганизации  – B5_REORG";
    }
}