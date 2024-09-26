<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL6TaxType
 *
 * Блок 6. Номер налогоплательщика и регистрационный номер
 * XSD Type: FL_6_Tax_Type
 */
class FL6TaxType
{
    /**
     * Номер налогоплательщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType[] $taxNumGroupFL6Tax
     */
    private $taxNumGroupFL6Tax = [
        
    ];

    /**
     * 6.3. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 6.4. Признак специального налогового режима = 0
     *
     * @var string $specialMode0
     */
    private $specialMode0 = null;

    /**
     * 6.4. Признак специального налогового режима = 1
     *
     * @var string $specialMode1
     */
    private $specialMode1 = null;

    /**
     * Adds as taxNumGroupFL6Tax
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType $taxNumGroupFL6Tax
     *@return self
     */
    public function addToTaxNumGroupFL6Tax(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType $taxNumGroupFL6Tax)
    {
        $this->taxNumGroupFL6Tax[] = $taxNumGroupFL6Tax;
        return $this;
    }

    /**
     * isset taxNumGroupFL6Tax
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupFL6Tax($index)
    {
        return isset($this->taxNumGroupFL6Tax[$index]);
    }

    /**
     * unset taxNumGroupFL6Tax
     *
     * Номер налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupFL6Tax($index)
    {
        unset($this->taxNumGroupFL6Tax[$index]);
    }

    /**
     * Gets as taxNumGroupFL6Tax
     *
     * Номер налогоплательщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType[]
     */
    public function getTaxNumGroupFL6Tax()
    {
        return $this->taxNumGroupFL6Tax;
    }

    /**
     * Sets a new taxNumGroupFL6Tax
     *
     * Номер налогоплательщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType[] $taxNumGroupFL6Tax
     * @return self
     */
    public function setTaxNumGroupFL6Tax(array $taxNumGroupFL6Tax = null)
    {
        $this->taxNumGroupFL6Tax = $taxNumGroupFL6Tax;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 6.3. Регистрационный номер
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 6.3. Регистрационный номер
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as specialMode0
     *
     * 6.4. Признак специального налогового режима = 0
     *
     * @return string
     */
    public function getSpecialMode0()
    {
        return $this->specialMode0;
    }

    /**
     * Sets a new specialMode0
     *
     * 6.4. Признак специального налогового режима = 0
     *
     * @param string $specialMode0
     * @return self
     */
    public function setSpecialMode0($specialMode0)
    {
        $this->specialMode0 = $specialMode0;
        return $this;
    }

    /**
     * Gets as specialMode1
     *
     * 6.4. Признак специального налогового режима = 1
     *
     * @return string
     */
    public function getSpecialMode1()
    {
        return $this->specialMode1;
    }

    /**
     * Sets a new specialMode1
     *
     * 6.4. Признак специального налогового режима = 1
     *
     * @param string $specialMode1
     * @return self
     */
    public function setSpecialMode1($specialMode1)
    {
        $this->specialMode1 = $specialMode1;
        return $this;
    }
}

