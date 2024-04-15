<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 7. СНИЛС – C7_SNILS
 */
class C7Snils extends BaseSegment
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
        return "C7_SNILS";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        if($this->template->sendData->getSNILSReply()){
            return [
                $this->getSegmentName(),
                $this->template->sendData->getSNILSReply()->snils??self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "СНИЛС" => 'Страховой номер индивидуального лицевого счета (далее – СНИЛС) физического лица. Номер указывается согласно документу, подтверждающему регистрацию физического лица в системе индивидуального (персонифицированного) учета. Заполняется, если субъект предоставил СНИЛС источнику.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 7. СНИЛС – C7_SNILS";
    }
}