<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 17. Уникальный идентификатор договора (сделки) – C17_UID
 */
class C17UID extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $model = $this->template->sendData->getAccountReplyRUTDF();
        if(empty($model->uuid)){
            $this->errors[] = 'Отсутствует УИД';
        }
        return $this->getIsEmptyErrors();
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C17_UID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF();
        return [
            $this->getSegmentName(),
            $model->uuid . "-" . $model->getUuidControlSum($model->uuid),
            self::EMPTY_VALUE
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'УИд сделки' => 'УИд сделки, по обязательствам из которой формируются блоки 17–39. Если сделка совершена по обращению, УИд сделки должен соответствовать значению показателя 55.4 «УИд обращения» блока 55. Если по одному обращению совершено несколько сделок, только УИд сделки, совершенной первой по времени, должен соответствовать УИд обращения.',
            'Номер сделки' => 'Номер сделки, присвоенный источником. Заполняется, если сделке ранее не был присвоен УИд сделки.',
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
        return "Блок 17. Идентификатор сделки – C17_UID";
    }
}