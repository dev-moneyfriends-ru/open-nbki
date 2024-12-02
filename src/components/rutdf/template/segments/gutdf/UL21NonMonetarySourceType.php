<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL21NonMonetarySourceType
 *
 * Блок 21. Сведения о неденежном обязательстве источника
 * XSD Type: UL_21_NonMonetarySource_Type
 */
class UL21NonMonetarySourceType extends GutdfSegment
{
    /**
     * 21.1. Предмет обязательства
     *
     * @var string $item
     */
    private $item = null;

    /**
     * 21.2. Код предоставляемого имущества
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 21.4. Дата передачи имущества субъекту
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 21.5. Идентификационный код предоставляемого имущества
     *
     * @var string $propertyId
     */
    private $propertyId = null;

    /**
     * Gets as item
     *
     * 21.1. Предмет обязательства
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * 21.1. Предмет обязательства
     *
     * @param string $item
     * @return self
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as code
     *
     * 21.2. Код предоставляемого имущества
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 21.2. Код предоставляемого имущества
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 21.4. Дата передачи имущества субъекту
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 21.4. Дата передачи имущества субъекту
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as propertyId
     *
     * 21.5. Идентификационный код предоставляемого имущества
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
     * 21.5. Идентификационный код предоставляемого имущества
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_21_NonMonetarySource';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Предмет обязательства' => 'Предмет обязательства источника согласно условиям договора.',
            'Код предоставляемого имущества' => 'Заполняется по справочнику 4.1.',
            'Дата передачи имущества субъекту' => 'Дата передачи имущества субъекту или возникновения неденежного поручительства.',
            'Идентификационный код предоставляемого имущества' => 'Указывается: кадастровый номер – для имеющей такой номер недвижимости; идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства; код по Общероссийскому классификатору основных фондов (далее – ОКОФ) или заводской номер – для промышленных машин и оборудования; штриховой код – для имеющего такой код товара;  уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента. Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 21. Сведения о неденежном обязательстве источника';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getSourceNonMonetObligArray()[$this->idx];
        $this->item = $model->srcNonMonetOblig;
        $this->code = $model->srcNonMonetObligCode;
        $this->propertyId = $model->srcNonMonetObligCodeIdent;
        $this->date = $this->formatDate($model->srcNonMonetObligDt);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'item',
            'code',
            'date',
            'propertyId',
        ];
    }
}
