<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 3. Регистрационный номер – B3_REGNUM
 */
class B3RegNum extends BaseSegment
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
        return 'B3_REGNUM';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->template->sendData->getRegnumReply()->regNum,
            $this->template->sendData->getRegnumReply()->lei
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Регистрационный номер' => 'Для российского юридического лица указывается ОГРН в соответствии с пунктом 2 статьи 4 Федерального закона от 8 августа 2001 года № 129-ФЗ «О государственной регистрации юридических лиц и индивидуальных предпринимателей» (Собрание законодательства Российской Федерации, 2001, № 33, ст. 3431; 2011, № 27, ст. 3880).
                                    Для иностранного юридического лица указывается регистрационный номер в стране регистрации (инкорпорации) или его аналог.
                                    ',
            'Идентификатор LEI' => 'Международный код идентификации юридического лица (Legal Entity Identifier, LEI) (далее ‒ идентификатор LEI). Значение указанного показателя приводится в соответствии с международным стандартом ISO 17442:2012 «Финансовые услуги. Идентификатор юридического лица».'
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
        return 'Блок 3. Регистрационный номер – B3_REGNUM';
    }
}