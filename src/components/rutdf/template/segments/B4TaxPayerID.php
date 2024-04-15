<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 *Блок 4. Номер налогоплательщика – B4_TAXPAYERID
 */
class B4TaxPayerID extends BaseSegment
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
        return "B4_TAXPAYERID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->template->sendData->getRegnumReply()->taxpayerCode,
            $this->template->sendData->getRegnumReply()->taxpayerNum,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Код номера налогоплательщика' => 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Заполняется по справочнику 1.7.',
            'Номер налогоплательщика' => 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Указывается номер налогоплательщика того вида, который указан по показателю «Код номера налогоплательщика».
            Если по показателю «Код номера налогоплательщика» указан код «1», по показателю «Номер налогоплательщика» указывается ИНН в соответствии с пунктом 7 статьи 84 Налогового кодекса Российской Федерации (Собрание законодательства Российской Федерации, 1998, № 31, ст. 3824; 2019, № 39, ст. 5375).
            ',
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
        return "Блок 4. Номер налогоплательщика – B4_TAXPAYERID";
    }
}