<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing TaxNumGroupFL46UL36OrgSourceAType
 */
class TaxNumGroupFL46UL36OrgSourceAType extends GutdfSegment
{
    /**
     * 46.9., 36.9. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = 1;

    /**
     * 46.10., 36.10. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 46.9., 36.9. Код номера налогоплательщика
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
     * 46.9., 36.9. Код номера налогоплательщика
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
     * 46.10., 36.10. Номер налогоплательщика
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
     * 46.10., 36.10. Номер налогоплательщика
     *
     * @param string $taxNum
     * @return self
     */
    public function setTaxNum($taxNum)
    {
        $this->taxNum = $taxNum;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'TaxNum_group_FL_46_UL_36_OrgSource';
    }

    public function getFields(): array
    {
        return [
            'taxCode' => $this->getTaxCode(),
            'taxNum' => $this->getTaxNum(),
        ];
    }

    public function getFieldsDescriptions(): array
    {
        return [
            'Код номера налогоплательщика' => 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Заполняется по справочнику 1.7.',
            'Номер налогоплательщика' => 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Указывается номер налогоплательщика того вида, который указан по показателю «Код номера налогоплательщика».
Если по показателю «Код номера налогоплательщика» указан код «1», по показателю «Номер налогоплательщика» указывается ИНН в соответствии с пунктом 7 статьи 84 Налогового кодекса Российской Федерации (Собрание законодательства Российской Федерации, 1998, № 31, ст. 3824; 2019, № 39, ст. 5375).
',
        ];
    }

    public function getDescription(): string
    {
        return 'Заполняется согласно документу, подтверждающему постановку лица на налоговый учет. Указывается номер налогоплательщика того вида, который указан по показателю «Код номера налогоплательщика».
Если по показателю «Код номера налогоплательщика» указан код «1», по показателю «Номер налогоплательщика» указывается ИНН в соответствии с пунктом 7 статьи 84 Налогового кодекса Российской Федерации (Собрание законодательства Российской Федерации, 1998, № 31, ст. 3824; 2019, № 39, ст. 5375).
';
    }

    public function getTitle(): string
    {
        return 'Блок 46/36. Номер налогоплательщика';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $this->taxNum = $this->template->config->sourceInn;
    }

    public function getXmlAttributes(): array
    {
        return [
          'taxCode',
          'taxNum',
        ];
    }
}

