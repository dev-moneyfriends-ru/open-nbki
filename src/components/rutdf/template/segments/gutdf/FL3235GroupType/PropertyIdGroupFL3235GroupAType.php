<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL32CollateralAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\PropertyIdGroupFL3235GroupAType\FL35InsuranceAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing PropertyIdGroupFL3235GroupAType
 */
class PropertyIdGroupFL3235GroupAType extends GutdfSegment
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
        return 'PropertyId_group_FL_32_35_Group';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Идентификационный код предмета залога' => 'Кадастровый номер – для имеющей такой номер недвижимости; идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства; заводской номер – для имеющих такой номер промышленных машин и оборудования; штриховой код – для имеющего такой код товара; уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента. Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Предмет залога';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $collateral = $this->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx];

        $this->propertyId = $collateral->collateralId;
        $this->fL32Collateral = new FL32CollateralAType($this->template, $this->idx);

        $collatInsureds =  $this->sendData->getAccountReplyRUTDF()->getCollatInsured();

        foreach ($collatInsureds as $key => $collatInsured) {
            if($collatInsured->collateralId === $collateral->collateralId){
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
            'propertyId',
            'fL32Collateral',
            'fL35Insurance',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            'propertyId' => $this->propertyId,
        ];
    }
}

