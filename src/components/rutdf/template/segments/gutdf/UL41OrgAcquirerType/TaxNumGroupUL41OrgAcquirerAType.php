<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL41OrgAcquirerType;

/**
 * Class representing TaxNumGroupUL41OrgAcquirerAType
 */
class TaxNumGroupUL41OrgAcquirerAType
{
    /**
     * 41.8. Код номера налогоплательщика
     *
     * @var int $taxCode
     */
    private $taxCode = null;

    /**
     * 41.9. Номер налогоплательщика
     *
     * @var string $taxNum
     */
    private $taxNum = null;

    /**
     * Gets as taxCode
     *
     * 41.8. Код номера налогоплательщика
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
     * 41.8. Код номера налогоплательщика
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
     * 41.9. Номер налогоплательщика
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
     * 41.9. Номер налогоплательщика
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

