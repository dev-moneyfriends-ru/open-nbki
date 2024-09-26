<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType;

/**
 * Class representing TaxNumGroupFL52PersonAcquirerAType
 */
class TaxNumGroupFL52PersonAcquirerAType
{
    /**
     * 52.6. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = null;

    /**
     * 52.7. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 52.6. Код номера налогоплательщика
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
     * 52.6. Код номера налогоплательщика
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
     * 52.7. Номер налогоплательщика
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
     * 52.7. Номер налогоплательщика
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

