<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации – B5_REORG
 */
class B5Reorg extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B5_REORG";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getReorgReply();
        if($model === null || $model->nameChangeCode === 0){
            return [
                $this->getSegmentName(),
                self::EMPTY_VALUE,
                0,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
                self::EMPTY_VALUE,
            ];
        }
        return [
            $this->getSegmentName(),
            self::EMPTY_VALUE,
            1,
            $this->formatString($model->prevName),
            $this->formatString($model->prevAbbrName),
            $model->prevRegNum,
            $this->formatDate($model->reorgDt),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование' => '',
            'Признак смены наименования' => 'Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У). В предыдущих версиях в этом показателе указывался код «1» – субъект сменил свое наименование без реорганизации, либо код «0» – обстоятельство кода «1» отсутствовало.',
            'Признак реорганизации' => 'Код «1» – субъект создан в результате реорганизации; код «0» – обстоятельство кода «1» отсутствует. В случае если по данному показателю указан код «0», иные показатели блока 5 Показателей КИ ЮЛ не заполняются.',
            'Полное наименование лица, от которого перешли права и обязанности' => '',
            'Сокращенное наименование лица, от которого перешли права и обязанности' => '',
            'Регистрационный номер лица, от которого перешли права и обязанности' => '',
            'Дата правопреемства (окончания реорганизации)' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 5. Сведения о правопреемстве при реорганизации  – B5_REORG";
    }
    
    public function validate(): bool
    {
        return true;
    }
    
    public function getDescription(): string
    {
        return 'Указываются сведения о наименовании субъекта до перехода к нему прав и обязанностей в рамках универсального правопреемства.';
    }
}