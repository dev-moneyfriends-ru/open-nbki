<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 31. Сведения о неденежном обязательстве субъекта - C31_SUBJECTNONMONETOBLIG
 */
class C31SubjectNonMonetOblig extends BaseSegment
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
        return 'C31_SUBJECTNONMONETOBLIG';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getSubjectNonMonetOblig();
        if ($model === null) {
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatString($model->subjNonMonetOblig),
            self::EMPTY_VALUE,
            $this->formatString($model->subjNonMonetObligRegul),
            $model->subjNonMonetObligAdverseCode,
            $model->receivedpropCode,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Предмет обязательства' => 'Предмет обязательства субъекта согласно условиям договора.',
            'Объект предоставления' => 'Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У). В предыдущих версиях в этом показателе указывалось имущество, которое субъект должен передать источнику.',
            'Порядок исполнения обязательства' => 'Заполняется согласно условиям договора.',
            'Признак ненадлежащего исполнения обязательства' => 'Код «1» – субъект не исполнил свое обязательство или его часть; код «0» – субъект надлежаще исполняет свое обязательство.',
            'Код полученного имущества' => 'Заполняется по справочнику 4.1.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок формируется, если по показателю 18.10 «Признак денежного обязательства субъекта» указан код «0». Сведения указываются согласно условиям сделки.';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 31. Сведения о неденежном обязательстве субъекта - C31_SUBJECTNONMONETOBLIG';
    }
}