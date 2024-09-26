<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType;

/**
 * Class representing PropertyIdGroupFL3235GroupAType
 */
class PropertyIdGroupFL3235GroupAType
{
    /**
     * 32.3., 35.9. Идентификационный код предмета залога
     *
     * @var string $propertyId
     */
    private $propertyId = null;

    /**
     * Блок 32. Сведения о залоге
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType $fL32Collateral
     */
    private $fL32Collateral = null;

    /**
     * Блок 35. Сведения о страховании предмета залога
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType[] $fL35Insurance
     */
    private $fL35Insurance = [
        
    ];

    /**
     * Gets as propertyId
     *
     * 32.3., 35.9. Идентификационный код предмета залога
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
     * 32.3., 35.9. Идентификационный код предмета залога
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
     * Gets as fL32Collateral
     *
     * Блок 32. Сведения о залоге
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType
     */
    public function getFL32Collateral()
    {
        return $this->fL32Collateral;
    }

    /**
     * Sets a new fL32Collateral
     *
     * Блок 32. Сведения о залоге
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType $fL32Collateral
     * @return self
     */
    public function setFL32Collateral(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType $fL32Collateral = null)
    {
        $this->fL32Collateral = $fL32Collateral;
        return $this;
    }

    /**
     * Adds as fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType $fL35Insurance
     *@return self
     */
    public function addToFL35Insurance(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType $fL35Insurance)
    {
        $this->fL35Insurance[] = $fL35Insurance;
        return $this;
    }

    /**
     * isset fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL35Insurance($index)
    {
        return isset($this->fL35Insurance[$index]);
    }

    /**
     * unset fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL35Insurance($index)
    {
        unset($this->fL35Insurance[$index]);
    }

    /**
     * Gets as fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType[]
     */
    public function getFL35Insurance()
    {
        return $this->fL35Insurance;
    }

    /**
     * Sets a new fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType[] $fL35Insurance
     * @return self
     */
    public function setFL35Insurance(array $fL35Insurance = null)
    {
        $this->fL35Insurance = $fL35Insurance;
        return $this;
    }
}

