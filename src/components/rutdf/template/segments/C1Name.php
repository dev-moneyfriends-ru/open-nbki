<?php

namespace mfteam\nbch\components\rutdf\template\segments;


use LogicException;

/**
 * Блок 1. Имя – C1_NAME
 */
class C1Name extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if(empty($this->template->sendData->getPersonReply())){
            $this->errors[] = 'Отсутствует данные по ФЛ';
        }else{
            if (empty($this->template->sendData->getPersonReply()->name1)) {
                $this->errors[] = 'Отсутствует Фамилия';
            }
            if (empty($this->template->sendData->getPersonReply()->first)) {
                $this->errors[] = 'Отсутствует Имя';
            }
        }
        
        return $this->getIsEmptyErrors();
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C1_NAME";
    }
    
    /**
     * @inheritDoc
     * @throws LogicException
     */
    public function getFields(): array
    {
        $person = $this->template->sendData->getPersonReply();
        if ($person === null) {
            throw new LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatString($person->name1),
            $this->formatString($person->first),
            $this->formatString($person->paternal),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "Фамилия" => '',
            "Имя" => '',
            "Отчество" => 'Указывается при наличии',
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
        return "Блок 1. Имя – C1_NAME";
    }
}