<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL57RejectType
 *
 * Блок 57. Сведения об отказе источника от предложения совершить сделку
 * XSD Type: FL_57_Reject_Type
 */
class FL57RejectType extends GutdfSegment
{
    /**
     * 57.1. Дата отказа
     *
     * @var string $rejectDate
     */
    private $rejectDate = null;

    /**
     * 57.2. Код причины отказа
     *
     * @var int[] $rejectCode
     */
    private $rejectCode = [
        
    ];

    /**
     * Gets as rejectDate
     *
     * 57.1. Дата отказа
     *
     * @return string
     */
    public function getRejectDate()
    {
        return $this->rejectDate;
    }

    /**
     * Sets a new rejectDate
     *
     * 57.1. Дата отказа
     *
     * @param \DateTime $rejectDate
     * @return self
     */
    public function setRejectDate(\DateTime $rejectDate)
    {
        $this->rejectDate = $rejectDate;
        return $this;
    }

    /**
     * Adds as rejectCode
     *
     * 57.2. Код причины отказа
     *
     * @return self
     * @param int $rejectCode
     */
    public function addToRejectCode($rejectCode)
    {
        $this->rejectCode[] = $rejectCode;
        return $this;
    }

    /**
     * isset rejectCode
     *
     * 57.2. Код причины отказа
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectCode($index)
    {
        return isset($this->rejectCode[$index]);
    }

    /**
     * unset rejectCode
     *
     * 57.2. Код причины отказа
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectCode($index)
    {
        unset($this->rejectCode[$index]);
    }

    /**
     * Gets as rejectCode
     *
     * 57.2. Код причины отказа
     *
     * @return int[]
     */
    public function getRejectCode()
    {
        return $this->rejectCode;
    }

    /**
     * Sets a new rejectCode
     *
     * 57.2. Код причины отказа
     *
     * @param int $rejectCode
     * @return self
     */
    public function setRejectCode(array $rejectCode)
    {
        $this->rejectCode = $rejectCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_57_Reject';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Дата отказа' => '',
            'Код причины отказа' => 'Заполняется по справочнику 6.5. При наличии нескольких причин значения указываются через запятую.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 57. Сведения об отказе источника от предложения совершить сделку';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $infoPart = $this->sendData->getInformationPartRUTDF();

        $this->rejectDate = $infoPart->rejectedDate;
        $this->rejectCode = implode(',', $infoPart->rejectedReasonCode);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'rejectDate',
            'rejectCode'
        ];
    }
}

