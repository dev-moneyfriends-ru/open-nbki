<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType;

/**
 * Class representing FL3235GroupType
 *
 * Блок 32,35
 * XSD Type: FL_32_35_Group_Type
 */
class FL3235GroupType extends GutdfSegment
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
     * @var PropertyIdGroupFL3235GroupAType[] $propertyIdGroupFL3235Group
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
     * @param PropertyIdGroupFL3235GroupAType $propertyIdGroupFL3235Group
     *@return self
     */
    public function addToPropertyIdGroupFL3235Group(PropertyIdGroupFL3235GroupAType $propertyIdGroupFL3235Group)
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
     * @return PropertyIdGroupFL3235GroupAType[]
     */
    public function getPropertyIdGroupFL3235Group()
    {
        return $this->propertyIdGroupFL3235Group;
    }

    /**
     * Sets a new propertyIdGroupFL3235Group
     *
     * @param PropertyIdGroupFL3235GroupAType[] $propertyIdGroupFL3235Group
     * @return self
     */
    public function setPropertyIdGroupFL3235Group(array $propertyIdGroupFL3235Group = null)
    {
        $this->propertyIdGroupFL3235Group = $propertyIdGroupFL3235Group;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_32_35_Group';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия залога 0' => 'код «0» – обстоятельство кода «1» отсутствует.',
            'Признак наличия залога 1' => 'Код «1» – исполнение обязательства обеспечено залогом;',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 32,35';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $collaterals = $this->sendData->getAccountReplyRUTDF()->getCollateral();
        if(empty($collaterals)){
            $this->assetKind0 = '';
            $this->assetKind1 = null;
            return;
        }
        $this->assetKind0 = null;
        $this->assetKind1 = '';

        foreach ($collaterals as $key => $collateral) {
            $this->addToPropertyIdGroupFL3235Group(new PropertyIdGroupFL3235GroupAType($this->template, $key));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'assetKind_0' => 'assetKind0',
            'assetKind_1' => 'assetKind1',
            'propertyIdGroupFL3235Group',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            'assetKind_0' => $this->assetKind0,
            'assetKind_1' => $this->assetKind1,
        ];
    }
}

