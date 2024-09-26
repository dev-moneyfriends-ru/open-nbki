<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType;

/**
 * Class representing PropertyIdGroupUL2326GroupAType
 */
class PropertyIdGroupUL2326GroupAType
{
    /**
     * 23.3., 26.9. Идентификационный код предмета залога
     *
     * @var string $propertyId
     */
    private $propertyId = null;

    /**
     * Блок 23. Сведения о залоге
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType $uL23Collateral
     */
    private $uL23Collateral = null;

    /**
     * Блок 26. Сведения о страховании предмета залога
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType[] $uL26Insurance
     */
    private $uL26Insurance = [
        
    ];

    /**
     * Gets as propertyId
     *
     * 23.3., 26.9. Идентификационный код предмета залога
     *
     * @return string
     */
    public function getPropertyId()
    {
        return $this->propertyId;
    }

    /**
     * Sets a new propertyId
     *
     * 23.3., 26.9. Идентификационный код предмета залога
     *
     * @param string $propertyId
     * @return self
     */
    public function setPropertyId($propertyId)
    {
        $this->propertyId = $propertyId;
        return $this;
    }

    /**
     * Gets as uL23Collateral
     *
     * Блок 23. Сведения о залоге
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType
     */
    public function getUL23Collateral()
    {
        return $this->uL23Collateral;
    }

    /**
     * Sets a new uL23Collateral
     *
     * Блок 23. Сведения о залоге
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType $uL23Collateral
     * @return self
     */
    public function setUL23Collateral(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType $uL23Collateral = null)
    {
        $this->uL23Collateral = $uL23Collateral;
        return $this;
    }

    /**
     * Adds as uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType $uL26Insurance
     *@return self
     */
    public function addToUL26Insurance(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType $uL26Insurance)
    {
        $this->uL26Insurance[] = $uL26Insurance;
        return $this;
    }

    /**
     * isset uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL26Insurance($index)
    {
        return isset($this->uL26Insurance[$index]);
    }

    /**
     * unset uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL26Insurance($index)
    {
        unset($this->uL26Insurance[$index]);
    }

    /**
     * Gets as uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType[]
     */
    public function getUL26Insurance()
    {
        return $this->uL26Insurance;
    }

    /**
     * Sets a new uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType[] $uL26Insurance
     * @return self
     */
    public function setUL26Insurance(array $uL26Insurance = null)
    {
        $this->uL26Insurance = $uL26Insurance;
        return $this;
    }
}

