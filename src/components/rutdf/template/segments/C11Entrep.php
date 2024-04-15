<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 11. Государственная регистрация в качестве индивидуального предпринимателя – C11_ENTREP
 */
class C11Entrep extends BaseSegment
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
        return "C11_ENTREP";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $regNum = $this->template->sendData->getRegnumReply();
        if (empty($regNum->regNum)) {
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            1,
            $regNum->regNum,
            $this->formatDate($regNum->regDate),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак индивидуального предпринимателя' => 'Код «1» – субъект зарегистрирован в Российской Федерации в качестве индивидуального предпринимателя; код «0» – обстоятельство кода «1» отсутствует. Если по показателю 11.1 «Признак индивидуального предпринимателя» указан код «0», иные показатели блока 11 не заполняются',
            'Регистрационный номер' => '',
            'Дата регистрации индивидуального предпринимателя' => '',
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
        return "Блок 11. Государственная регистрация в качестве индивидуального предпринимателя – C11_ENTREP";
    }
}