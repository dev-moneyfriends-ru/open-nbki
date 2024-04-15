<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 1. Наименование юридического лица – B1_NAME
 */
class B1Name extends BaseSegment
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
        return 'B1_NAME';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $business = $this->template->sendData->getBusinessReply();
        if($business === null){
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatString($business->businessName),
            $this->formatString($business->abbreviatedBusinessName),
            $this->formatString($business->businessNameAlt),
            $business->nameChange,
            $this->formatString($business->businessNamebfrChange)
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Полное наименование' => 'Полное наименование юридического лица на русском языке.',
            'Сокращенное наименование' => 'Сокращенное наименование юридического лица на русском языке.',
            'Иное наименование' => 'Фирменное наименование юридического лица или его наименование на иностранном языке.
                                    Заполняется при наличии у источника сведений об ином наименовании субъекта.
                                    ',
            'Признак смены наименования' => 'Сведения о наименовании субъекта до его смены (за исключением случаев смены наименования субъекта при переходе к нему прав и обязанностей в рамках универсального правопреемства).
                                    код «1» – в случае если у субъекта имеется предыдущее наименование;
                                    код «0» – в случае если обстоятельство кода «1» отсутствует.
                                    Если указан код «0», показатель 1.5 «Полное наименование до его смены» не заполняется.
                                    ',
            'Полное наименование до его смены' => 'Сведения о наименовании субъекта до его смены (за исключением случаев смены наименования субъекта при переходе к нему прав и обязанностей в рамках универсального правопреемства).
                                    Указывается полное наименование субъекта до его смены.
                                    ',
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
        return 'Блок 1. Наименование юридического лица – B1_NAME';
    }
}