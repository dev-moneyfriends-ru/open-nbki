<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL7BankruptcyEndType
 *
 * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
 * XSD Type: UL_7_BankruptcyEnd_Type
 */
class UL7BankruptcyEndType extends GutdfSegment
{
    /**
     * 7.1. Признак завершения расчетов с кредиторами = 0
     *
     * @var string $bankruptcyEndFact0
     */
    private $bankruptcyEndFact0 = null;

    /**
     * 7.1. Признак завершения расчетов с кредиторами = 1
     *
     * @var string $bankruptcyEndFact1
     */
    private $bankruptcyEndFact1 = null;

    /**
     * 7.2. Дата завершения расчетов с кредиторами
     *
     * @var \DateTime $completionDate
     */
    private $completionDate = null;

    /**
     * Gets as bankruptcyEndFact0
     *
     * 7.1. Признак завершения расчетов с кредиторами = 0
     *
     * @return string
     */
    public function getBankruptcyEndFact0()
    {
        return $this->bankruptcyEndFact0;
    }

    /**
     * Sets a new bankruptcyEndFact0
     *
     * 7.1. Признак завершения расчетов с кредиторами = 0
     *
     * @param string $bankruptcyEndFact0
     * @return self
     */
    public function setBankruptcyEndFact0($bankruptcyEndFact0)
    {
        $this->bankruptcyEndFact0 = $bankruptcyEndFact0;
        return $this;
    }

    /**
     * Gets as bankruptcyEndFact1
     *
     * 7.1. Признак завершения расчетов с кредиторами = 1
     *
     * @return string
     */
    public function getBankruptcyEndFact1()
    {
        return $this->bankruptcyEndFact1;
    }

    /**
     * Sets a new bankruptcyEndFact1
     *
     * 7.1. Признак завершения расчетов с кредиторами = 1
     *
     * @param string $bankruptcyEndFact1
     * @return self
     */
    public function setBankruptcyEndFact1($bankruptcyEndFact1)
    {
        $this->bankruptcyEndFact1 = $bankruptcyEndFact1;
        return $this;
    }

    /**
     * Gets as completionDate
     *
     * 7.2. Дата завершения расчетов с кредиторами
     *
     * @return \DateTime
     */
    public function getCompletionDate()
    {
        return $this->completionDate;
    }

    /**
     * Sets a new completionDate
     *
     * 7.2. Дата завершения расчетов с кредиторами
     *
     * @param \DateTime $completionDate
     * @return self
     */
    public function setCompletionDate(?\DateTime $completionDate = null)
    {
        $this->completionDate = $completionDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        // TODO: Implement getSegmentName() method.
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        // TODO: Implement getFieldsDescriptions() method.
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        // TODO: Implement getTitle() method.
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        // TODO: Implement init() method.
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        // TODO: Implement getXmlAttributes() method.
    }
}

