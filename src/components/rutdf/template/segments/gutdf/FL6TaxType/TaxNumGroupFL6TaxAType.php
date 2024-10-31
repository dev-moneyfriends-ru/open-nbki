<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing TaxNumGroupFL6TaxAType
 */
class TaxNumGroupFL6TaxAType extends GutdfSegment
{
    /**
     * 6.1. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = null;

    /**
     * 6.2. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 6.1. Код номера налогоплательщика
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
     * 6.1. Код номера налогоплательщика
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
     * 6.2. Номер налогоплательщика
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
     * 6.2. Номер налогоплательщика
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
        return 'TaxNum_group_FL_6_Tax';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код номера налогоплательщика' => 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Заполняется по справочнику 1.7.',
            'Номер налогоплательщика' => 'Номер налогоплательщика того вида, который указан по показателю 6.1 «Код номера налогоплательщика». Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Указывается номер налогоплательщика того вида, который указан по показателю «Код номера налогоплательщика». Если по показателю «Код номера налогоплательщика» указан код «1», по показателю «Номер налогоплательщика» указывается ИНН в соответствии с пунктом 7 статьи 84 Налогового кодекса Российской Федерации (Собрание законодательства Российской Федерации, 1998, № 31, ст. 3824; 2019, № 39, ст. 5375).',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 6. Номер налогоплательщика';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $tax = $this->template->sendData->getRegnumReply();
        if ($tax === null) {
            return;
        }

        $this->taxCode = $tax->taxpayerCode;
        $this->taxNum = $tax->taxpayerNum;
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

