<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType;

/**
 * Class representing TaxNumGroupFL51OrgAcquirerAType
 */
class TaxNumGroupFL51OrgAcquirerAType
{
    /**
     * 51.8. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = null;

    /**
     * 51.9. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 51.8. Код номера налогоплательщика
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
     * 51.8. Код номера налогоплательщика
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
     * 51.9. Номер налогоплательщика
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
     * 51.9. Номер налогоплательщика
     *
     * @param string $taxNum
     * @return self
     */
    public function setTaxNum($taxNum)
    {
        $this->taxNum = $taxNum;
        return $this;
    }
}

