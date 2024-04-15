<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 47. Сведения об отказе источника от предложения совершить сделку – B47_APPLREJECT
 */
class B47ApplReject extends BaseSegment
{
    
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
        return 'B47_APPLREJECT';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getInformationPartRUTDF();
        return [
            $this->getSegmentName(),
            $this->formatDate($model->rejectedDate),
            $model->rejectedReasonCode,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата отказа' => '',
            'Код причины отказа' => 'Заполняется по справочнику 6.5. При наличии нескольких причин значения указываются через запятую.',
        ];
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
    public function getTitle(): string
    {
        return 'Блок 47. Сведения об отказе источника от предложения совершить сделку – B47_APPLREJECT';
    }
}