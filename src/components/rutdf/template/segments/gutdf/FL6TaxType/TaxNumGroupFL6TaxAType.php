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
     * 6.2(1) Признак проверки ИНН = 0
     *
     * @var string $innChecked0
     */
    private $innChecked0 = null;

    /**
     * 6.2(1) Признак проверки ИНН = 1
     *
     * @var string $innChecked1
     */
    private $innChecked1 = null;

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
     * Gets as innChecked0
     *
     * 6.2(1) Признак проверки ИНН = 0
     *
     * @return string
     */
    public function getInnChecked0()
    {
        return $this->innChecked0;
    }

    /**
     * Sets a new innChecked0
     *
     * 6.2(1) Признак проверки ИНН = 0
     *
     * @param string $innChecked0
     * @return self
     */
    public function setInnChecked0($innChecked0)
    {
        $this->innChecked0 = $innChecked0;
        return $this;
    }

    /**
     * Gets as innChecked1
     *
     * 6.2(1) Признак проверки ИНН = 1
     *
     * @return string
     */
    public function getInnChecked1()
    {
        return $this->innChecked1;
    }

    /**
     * Sets a new innChecked1
     *
     * 6.2(1) Признак проверки ИНН = 1
     *
     * @param string $innChecked1
     * @return self
     */
    public function setInnChecked1($innChecked1)
    {
        $this->innChecked1 = $innChecked1;
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
            'Признак проверки ИНН' => 'Заполняется, если по показателю 6.1 указан код «1».',
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
        $tax = $this->sendData->getRegnumReply();
        if ($tax === null || !$tax->taxpayerChecked) {
            return;
        }
        $this->innChecked1 = '';

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
            'innChecked_1' => 'innChecked1',
        ];
    }
}

