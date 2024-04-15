<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 45. Сведения о прекращении передачи информации по обязательству
 */
class C45SubmitHold extends BaseSegment
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
        return 'C45_SUBMITHOLD';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getSubmitHold();
        if($model === null){
            throw new \LogicException();
        }
        
        return [
            $this->getSegmentName(),
            $model->holdCode,
            $this->formatDate($model->holdDt)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код причины прекращения передачи информации' => 'Заполняется по справочнику 5.4.',
            'Дата прекращения передачи информации' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В случае перехода прав кредитора к другому лицу блок формирует лицо, от которого права перешли.';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 45. Сведения о прекращении передачи информации по обязательству';
    }
}