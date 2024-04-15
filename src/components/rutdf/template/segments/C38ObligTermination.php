<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 38. Сведения о прекращении обязательства – C38_OBLIGTERMINATION
 */
class C38ObligTermination extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'C38_OBLIGTERMINATION';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF();
        return [
            $this->getSegmentName(),
            $model->loanIndicator,
            $this->formatDate($model->loanIndicatorDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Код основания прекращения обязательства' => 'Заполняется по справочнику 3.8.',
            'Дата фактического прекращения обязательства' => 'Дата, в которую прекратились взаимные обязательства субъекта и источника.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 38. Сведения о прекращении обязательства – C38_OBLIGTERMINATION';
    }
    
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
    public function getDescription(): string
    {
        return 'допустим 1 на группу блоков';
    }
}