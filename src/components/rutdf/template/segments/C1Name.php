<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use yii\base\Exception;

/**
 * Блок 1. Имя – C1_NAME
 */
class C1Name extends \mfteam\nbch\components\BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->template->subject->getPerson()->name1)) {
            $this->errors[] = 'Отсутствует Фамилия';
        }
        if (empty($this->template->subject->getPerson()->first)) {
            $this->errors[] = 'Отсутствует Имя';
        }
        
        return $this->isEmptyErrors;
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
     * @throws Exception
     */
    public function getFields(): array
    {
        $person = $this->template->subject->getPerson();
        if ($person === null) {
            throw new Exception();
        }
        return [
            $this->segmentName,
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
            "Отчество" => '',
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