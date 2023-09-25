<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 8. Регистрация физического лица по месту жительства или пребывания - C8_REGADDR
 */
class C8RegAddr extends \mfteam\nbch\components\BaseSegment
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
        return "C8_REGADDR";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $address = $this->template->subject->getLegalAddress();
        return [
            $this->segmentName,
            1,
            $address->postal,
            $address->oksm,
            $this->emptyValue,
            $address->fias??$this->emptyValue,
            $address->okato,
            $this->emptyValue,
            $this->formatString($address->street),
            $this->formatString($address->houseNumber),
            $this->emptyValue,
            str_replace(" ", "", $this->formatString($address->block)),
            $this->formatString($address->building),
            $this->formatString($address->apartment),
            $this->formatNewDate($address->addrSinceDt),
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
            'Наименование сегмента' => "",
            'Код адреса регистрации' => "",
            'Почтовый индекс' => "",
            'Код страны по ОКСМ' => "",
            'Наименование иной страны' => "",
            'Номер адреса в ГАР' => "",
            'Код населенного пункта по ОКАТО' => "",
            'Иной населенный пункт' => "",
            'Улица' => "",
            'Дом' => "",
            'Владение' => "",
            'Корпус' => "",
            'Строение' => "",
            'Квартира' => "",
            'Дата регистрации' => "",
            'Наименование регистрирующего органа' => "",
            'Код подразделения, осуществившего регистрацию' => "",
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "(допустим 1 на группу блоков)";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 8. Регистрация физического лица по месту жительства или пребывания - C8_REGADDR";
    }
}