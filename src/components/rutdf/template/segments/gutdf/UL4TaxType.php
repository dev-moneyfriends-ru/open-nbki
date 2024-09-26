<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL4TaxType
 *
 * Блок 4. Номер налогоплательщика
 * XSD Type: UL_4_Tax_Type
 */
class UL4TaxType
{
    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $taxNumGroupUL4Tax
     */
    private $taxNumGroupUL4Tax = [
        
    ];

    /**
     * Adds as taxNumGroupUL4Tax
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax
     *@return self
     */
    public function addToTaxNumGroupUL4Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax)
    {
        $this->taxNumGroupUL4Tax[] = $taxNumGroupUL4Tax;
        return $this;
    }

    /**
     * isset taxNumGroupUL4Tax
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupUL4Tax($index)
    {
        return isset($this->taxNumGroupUL4Tax[$index]);
    }

    /**
     * unset taxNumGroupUL4Tax
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupUL4Tax($index)
    {
        unset($this->taxNumGroupUL4Tax[$index]);
    }

    /**
     * Gets as taxNumGroupUL4Tax
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[]
     */
    public function getTaxNumGroupUL4Tax()
    {
        return $this->taxNumGroupUL4Tax;
    }

    /**
     * Sets a new taxNumGroupUL4Tax
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $taxNumGroupUL4Tax
     * @return self
     */
    public function setTaxNumGroupUL4Tax(array $taxNumGroupUL4Tax)
    {
        $this->taxNumGroupUL4Tax = $taxNumGroupUL4Tax;
        return $this;
    }
}

