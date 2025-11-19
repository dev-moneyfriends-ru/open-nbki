<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\FL32CollateralAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\FL35InsuranceAType;

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
     * 32.3., 35.9. Идентификационный код предмета залога
     *
     * @var string $propertyId
     */
    private $propertyId = null;

    /**
     * Блок 32. Сведения о залоге
     *
     * @var FL32CollateralAType $fL32Collateral
     */
    private $fL32Collateral = null;

    /**
     * Блок 35. Сведения о страховании предмета залога
     *
     * @var FL35InsuranceAType[] $fL35Insurance
     */
    private $fL35Insurance = [
        
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
     * @return FL32CollateralAType
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
     * @param FL32CollateralAType $fL32Collateral
     * @return self
     */
    public function setFL32Collateral(?FL32CollateralAType $fL32Collateral = null)
    {
        $this->fL32Collateral = $fL32Collateral;
        return $this;
    }

    /**
     * Adds as fL35Insurance
     *
     * Блок 35. Сведения о страховании предмета залога
     *
     * @return self
     * @param FL35InsuranceAType $fL35Insurance
     */
    public function addToFL35Insurance(FL35InsuranceAType $fL35Insurance)
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
     * @return FL35InsuranceAType[]
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
     * @param FL35InsuranceAType[] $fL35Insurance
     * @return self
     */
    public function setFL35Insurance(array $fL35Insurance = null)
    {
        $this->fL35Insurance = $fL35Insurance;
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
        if(empty($this->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx])){
            $this->assetKind0 = '';
            $this->assetKind1 = null;
            return;
        }
        $collateral = $this->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx];
        $this->assetKind0 = null;
        $this->assetKind1 = '';
        $this->propertyId = $collateral->collateralId;
        $this->setFL32Collateral(new FL32CollateralAType($this->template, $this->idx));
        foreach ($this->sendData->getAccountReplyRUTDF()->getCollatInsured() as $key => $collateralInsured){
            if($collateral->collateralId === $collateralInsured->collateralId){
                $this->addToFL35Insurance(new FL35InsuranceAType($this->template, $key));
            }
        }
        if(empty($this->fL35Insurance)){
            $this->addToFL35Insurance(new FL35InsuranceAType($this->template));
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
            'propertyId',
            'fl32Collateral',
            'fl35Insurance',
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
            'propertyId',
            'fl32Collateral',
            'fl35Insurance',
        ];
    }
}

