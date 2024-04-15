<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 3. Дата и место рождения – C3_BIRTH
 */
class C3Birth extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->template->sendData->getPersonReply()->oksm)) {
            $this->errors[] = 'Отсутствует Код страны по ОКСМ';
        }
        if (empty($this->template->sendData->getPersonReply()->birthDt)) {
            $this->errors[] = 'Отсутствует Дата рождения';
        }
        if (empty($this->template->sendData->getPersonReply()->placeOfBirth)) {
            $this->errors[] = 'Отсутствует Место рождения';
        }
        return $this->isEmptyErrors();
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C3_BIRTH";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->formatDate($this->template->sendData->getPersonReply()->birthDt),
            $this->template->sendData->getPersonReply()->oksm,
            $this->formatString($this->template->sendData->getPersonReply()->placeOfBirth),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "Дата рождения" => '',
            "Код страны по ОКСМ" => 'Цифровой код страны согласно Общероссийскому классификатору стран мира. При отсутствии страны в ОКСМ указывается «999».',
            "Место рождения" => 'Заполняется согласно документу, удостоверяющему личность.'
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
        return "Блок 3. Дата и место рождения – C3_BIRTH";
    }
}