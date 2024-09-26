<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL2326GroupType
 *
 * Блок 23,26
 * XSD Type: UL_23_26_Group_Type
 */
class UL2326GroupType
{
    /**
     * 23.1. Признак наличия залога = 0
     *
     * @var string $assetKind0
     */
    private $assetKind0 = null;

    /**
     * 23.1. Признак наличия залога = 1
     *
     * @var string $assetKind1
     */
    private $assetKind1 = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType[] $propertyIdGroupUL2326Group
     */
    private $propertyIdGroupUL2326Group = [
        
    ];

    /**
     * Gets as assetKind0
     *
     * 23.1. Признак наличия залога = 0
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
     * 23.1. Признак наличия залога = 0
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
     * 23.1. Признак наличия залога = 1
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
     * 23.1. Признак наличия залога = 1
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
     * Adds as propertyIdGroupUL2326Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType $propertyIdGroupUL2326Group
     *@return self
     */
    public function addToPropertyIdGroupUL2326Group(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType $propertyIdGroupUL2326Group)
    {
        $this->propertyIdGroupUL2326Group[] = $propertyIdGroupUL2326Group;
        return $this;
    }

    /**
     * isset propertyIdGroupUL2326Group
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyIdGroupUL2326Group($index)
    {
        return isset($this->propertyIdGroupUL2326Group[$index]);
    }

    /**
     * unset propertyIdGroupUL2326Group
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyIdGroupUL2326Group($index)
    {
        unset($this->propertyIdGroupUL2326Group[$index]);
    }

    /**
     * Gets as propertyIdGroupUL2326Group
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType[]
     */
    public function getPropertyIdGroupUL2326Group()
    {
        return $this->propertyIdGroupUL2326Group;
    }

    /**
     * Sets a new propertyIdGroupUL2326Group
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType[] $propertyIdGroupUL2326Group
     * @return self
     */
    public function setPropertyIdGroupUL2326Group(array $propertyIdGroupUL2326Group = null)
    {
        $this->propertyIdGroupUL2326Group = $propertyIdGroupUL2326Group;
        return $this;
    }
}

