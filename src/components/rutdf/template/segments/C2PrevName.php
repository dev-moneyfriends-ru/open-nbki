<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 2. Предыдущее имя – C2_PREVNAME
 */
class C2PrevName extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if($this->template->sendData->getPrevPersonReply()){
            if (empty($this->template->sendData->getPrevPersonReply()->name1)) {
                $this->errors[] = 'Отсутствует предыдущая Фамилия';
            }
            if (empty($this->template->sendData->getPrevPersonReply()->first)) {
                $this->errors[] = 'Отсутствует предыдущее Имя';
            }
            if (empty($this->template->sendData->getPrevPersonReply()->issueDate)) {
                $this->errors[] = 'Отсутствует Дата выдачи документа с измененным именем';
            }
        }
        return $this->getIsEmptyErrors();
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C2_PREVNAME";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $person = $this->template->sendData->getPrevPersonReply();
        if($person === null){
            return [
                $this->getSegmentName(),
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
       
        return [
            $this->getSegmentName(),
            $person->isPrevName,
            $this->formatString($person->name1),
            $this->formatString($person->first),
            $this->formatString($person->paternal),
            $this->formatDate($person->issueDate),
        ];
        
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак наличия предыдущего имени' => 'Код «1» – у субъекта имеется предыдущее имя;  код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 2 не заполняются.',
            'Фамилия предыдущая' => '',
            'Имя предыдущее' => '',
            'Отчество предыдущее' => 'Указывается при наличии.',
            'Дата выдачи документа с измененным именем' => 'Дата, в которую субъекту выдан документ, удостоверяющий личность, с именем, которое отличается от указанного в блоке 2. Если источнику известно несколько таких дат, указывается наиболее ранняя из них.'
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
        return "Блок 2. Предыдущее имя – C2_PREVNAME";
    }
}