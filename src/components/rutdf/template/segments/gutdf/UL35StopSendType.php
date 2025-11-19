<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL35StopSendType
 *
 * Блок 35. Сведения о прекращении передачи информации по обязательству
 * XSD Type: UL_35_StopSend_Type
 */
class UL35StopSendType extends GutdfSegment
{
    /**
     * 35.1. Код причины прекращения передачи информации
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 35.2. Дата прекращения передачи информации
     *
     * @var string $date
     */
    private $date = null;

    /**
     * Gets as code
     *
     * 35.1. Код причины прекращения передачи информации
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 35.1. Код причины прекращения передачи информации
     *
     * @param int $code
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
     * 35.2. Дата прекращения передачи информации
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 35.2. Дата прекращения передачи информации
     *
     * @param string $date
     * @return self
     */
    public function setDate(string $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_35_StopSend';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код причины прекращения передачи информации' => '',
            'Дата прекращения передачи информации' => ''
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 35. Сведения о прекращении передачи информации по обязательству';
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'code',
            'date',
        ];
    }

    public function init(): void
    {
        $submitHold = $this->template->sendData->getAccountReplyRUTDF()->getSubmitHold();
        if($submitHold === null){
            return;
        }
        $this->setCode($submitHold->holdCode);
        $this->setDate($submitHold->holdDt);
    }
}

