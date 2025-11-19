<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL45StopSendType
 *
 * Блок 45. Сведения о прекращении передачи информации по обязательству
 * XSD Type: FL_45_StopSend_Type
 */
class FL45StopSendType extends GutdfSegment
{
    /**
     * 45.1. Код причины прекращения передачи информации
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 45.2. Дата прекращения передачи информации
     *
     * @var null|string $date
     */
    private $date = null;

    /**
     * Gets as code
     *
     * 45.1. Код причины прекращения передачи информации
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
     * 45.1. Код причины прекращения передачи информации
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
     * 45.2. Дата прекращения передачи информации
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
     * 45.2. Дата прекращения передачи информации
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
        return 'FL_45_StopSend';
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
        return 'Блок 45. Сведения о прекращении передачи информации по обязательству';
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

