<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing TaxNumGroupUL4TaxAType
 */
class TaxNumGroupUL4TaxAType extends GutdfSegment
{
    /**
     * 4.1. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = null;

    /**
     * 4.2. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 4.1. Код номера налогоплательщика
     *
     * @return int
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * 4.1. Код номера налогоплательщика
     *
     * @param int $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Gets as taxNum
     *
     * 4.2. Номер налогоплательщика
     *
     * @return string
     */
    public function getTaxNum()
    {
        return $this->taxNum;
    }

    /**
     * Sets a new taxNum
     *
     * 4.2. Номер налогоплательщика
     *
     * @param string $taxNum
     * @return self
     */
    public function setTaxNum($taxNum)
    {
        $this->taxNum = $taxNum;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'TaxNum_group_UL_4_Tax';
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            'taxCode' => $this->getTaxCode(),
            'taxNum' => $this->getTaxNum(),
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
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
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Номер налогоплательщика';
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->taxCode = $this->sendData->getRegnumReply()->taxpayerCode;
        $this->taxNum = $this->sendData->getRegnumReply()->taxpayerNum;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'taxCode',
            'taxNum',
        ];
    }
}

