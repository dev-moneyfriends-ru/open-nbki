<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL23CollateralAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2326GroupType\PropertyIdGroupUL2326GroupAType\UL26InsuranceAType;

/**
 * Class representing PropertyIdGroupUL2326GroupAType
 */
class PropertyIdGroupUL2326GroupAType extends GutdfSegment
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
        return 'PropertyId_group_UL_23_26_Group';
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
        $collateral = $this->template->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx];

        $this->propertyId = $collateral->collateralId;
        $this->uL23Collateral = new UL23CollateralAType($this->template, $this->idx);

        $collatInsureds =  $this->template->sendData->getAccountReplyRUTDF()->getCollatInsured();

        foreach ($collatInsureds as $key => $collatInsured) {
            if($collatInsured->collateralId === $collateral->collateralId){
                $this->addToUL26Insurance(new UL26InsuranceAType($this->template, $key));
            }
        }
        if(empty($this->uL26Insurance)){
            $this->addToUL26Insurance(new UL26InsuranceAType($this->template));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'propertyId',
            'uL23Collateral',
            'uL26Insurance',
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

