<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\UL23CollateralAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\UL26InsuranceAType;

/**
 * Class representing UL2326GroupType
 *
 * Блок 23,26
 * XSD Type: UL_23_26_Group_Type
 */
class UL2326GroupType extends GutdfSegment
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
     * 23.3., 26.9. Идентификационный код предмета залога
     *
     * @var string $propertyId
     */
    private $propertyId = null;

    /**
     * Блок 23. Сведения о залоге
     *
     * @var UL23CollateralAType $uL23Collateral
     */
    private $uL23Collateral = null;

    /**
     * Блок 26. Сведения о страховании предмета залога
     *
     * @var UL26InsuranceAType[] $uL26Insurance
     */
    private $uL26Insurance = [
        
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
     * @return UL23CollateralAType
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
     * @param UL23CollateralAType $uL23Collateral
     * @return self
     */
    public function setUL23Collateral(?UL23CollateralAType $uL23Collateral = null)
    {
        $this->uL23Collateral = $uL23Collateral;
        return $this;
    }

    /**
     * Adds as uL26Insurance
     *
     * Блок 26. Сведения о страховании предмета залога
     *
     * @return self
     * @param UL26InsuranceAType $uL26Insurance
     */
    public function addToUL26Insurance(UL26InsuranceAType $uL26Insurance)
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
     * @return UL26InsuranceAType[]
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
     * @param UL26InsuranceAType[] $uL26Insurance
     * @return self
     */
    public function setUL26Insurance(array $uL26Insurance = null)
    {
        $this->uL26Insurance = $uL26Insurance;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_23_26_Group';
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
        return 'Блоки 23,26';
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

        $this->setUL23Collateral(new UL23CollateralAType($this->template, $this->idx));
        foreach ($this->sendData->getAccountReplyRUTDF()->getCollatInsured() as $key => $collateralInsured){
            if($collateral->collateralId === $collateralInsured->collateralId){
                $this->addToUL26Insurance(new UL26InsuranceAType($this->template, $key));
            }
        }
        if(empty($this->fL35Insurance)){
            $this->addToUL26Insurance(new UL26InsuranceAType($this->template));
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
            'ul23Collateral',
            'ul26Insurance',
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

