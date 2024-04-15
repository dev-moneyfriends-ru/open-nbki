<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 10. Контактные данные – C10_CONTACTINFO
 */
class C10ContactInfo extends BaseSegment
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
        return "C10_CONTACTINFO";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $address = $this->template->sendData->getRegAddress();
        return [
            $this->getSegmentName(),
            $address->phone??self::EMPTY_VALUE,
            $address->phoneComment?$this->formatString($address->phoneComment):self::EMPTY_VALUE,
            $address->email??self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Номер телефона' => 'Контактный номер телефона.',
            'Комментарий к номеру телефона' => 'Пояснительные сведения о номере телефона.',
            'Адрес электронной почты' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "Указываются сведения, если субъект предоставил соответствующие контактные данные источнику.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 10. Контактные данные – C10_CONTACTINFO";
    }
}