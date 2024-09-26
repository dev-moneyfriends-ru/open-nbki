<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL3235GroupType
 *
 * Блок 32,35
 * XSD Type: FL_32_35_Group_Type
 */
class FL3235GroupType
{
    /**
     * 32.1. Признак наличия залога = 0
     *
     * @var string $assetKind0
     */
    private $assetKind0 = null;

    /**
     * 32.1. Признак наличия залога = 1
     *
     * @var string $assetKind1
     */
    private $assetKind1 = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType[] $propertyIdGroupFL3235Group
     */
    private $propertyIdGroupFL3235Group = [
        
    ];

    /**
     * Gets as assetKind0
     *
     * 32.1. Признак наличия залога = 0
     *
     * @return string
     */
    public function getAssetKind0()
    {
        return $this->assetKind0;
    }

    /**
     * Sets a new assetKind0
     *
     * 32.1. Признак наличия залога = 0
     *
     * @param string $assetKind0
     * @return self
     */
    public function setAssetKind0($assetKind0)
    {
        $this->assetKind0 = $assetKind0;
        return $this;
    }

    /**
     * Gets as assetKind1
     *
     * 32.1. Признак наличия залога = 1
     *
     * @return string
     */
    public function getAssetKind1()
    {
        return $this->assetKind1;
    }

    /**
     * Sets a new assetKind1
     *
     * 32.1. Признак наличия залога = 1
     *
     * @param string $assetKind1
     * @return self
     */
    public function setAssetKind1($assetKind1)
    {
        $this->assetKind1 = $assetKind1;
        return $this;
    }

    /**
     * Adds as propertyIdGroupFL3235Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType $propertyIdGroupFL3235Group
     *@return self
     */
    public function addToPropertyIdGroupFL3235Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType $propertyIdGroupFL3235Group)
    {
        $this->propertyIdGroupFL3235Group[] = $propertyIdGroupFL3235Group;
        return $this;
    }

    /**
     * isset propertyIdGroupFL3235Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyIdGroupFL3235Group($index)
    {
        return isset($this->propertyIdGroupFL3235Group[$index]);
    }

    /**
     * unset propertyIdGroupFL3235Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyIdGroupFL3235Group($index)
    {
        unset($this->propertyIdGroupFL3235Group[$index]);
    }

    /**
     * Gets as propertyIdGroupFL3235Group
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType[]
     */
    public function getPropertyIdGroupFL3235Group()
    {
        return $this->propertyIdGroupFL3235Group;
    }

    /**
     * Sets a new propertyIdGroupFL3235Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType[] $propertyIdGroupFL3235Group
     * @return self
     */
    public function setPropertyIdGroupFL3235Group(array $propertyIdGroupFL3235Group = null)
    {
        $this->propertyIdGroupFL3235Group = $propertyIdGroupFL3235Group;
        return $this;
    }
}

