<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL15ContractChangesType
 *
 * Блок 15. Сведения об изменении договора
 * XSD Type: UL_15_ContractChanges_Type
 */
class  UL15ContractChangesType extends GutdfSegment
{
    /**
     * 15.1. Признак изменения договора = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 15.1. Признак изменения договора = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 15.2. Дата изменения договора
     *
     * @var string $changeDate
     */
    private $changeDate = null;

    /**
     * 15.3. Код вида изменения договора
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 15.4. Код специального изменения договора
     *
     * @var int $specialCode
     */
    private $specialCode = null;

    /**
     * 15.5. Описание иного изменения договора
     *
     * @var string $otherDesc
     */
    private $otherDesc = null;

    /**
     * 15.6. Дата вступления изменения договора в силу
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * 15.7. Дата планового прекращения действия изменения договора
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 15.8. Дата фактического прекращения действия изменения договора
     *
     * @var \DateTime $actualEndDate
     */
    private $actualEndDate = null;

    /**
     * 15.9. Код причины прекращения действия изменения договора
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * 15.10. Курс конверсии валюты долга
     *
     * @var float $currencyRate
     */
    private $currencyRate = null;

    /**
     * Gets as exist0
     *
     * 15.1. Признак изменения договора = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 15.1. Признак изменения договора = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 15.1. Признак изменения договора = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 15.1. Признак изменения договора = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as changeDate
     *
     * 15.2. Дата изменения договора
     *
     * @return string
     */
    public function getChangeDate()
    {
        return $this->changeDate;
    }

    /**
     * Sets a new changeDate
     *
     * 15.2. Дата изменения договора
     *
     * @param string $changeDate
     * @return self
     */
    public function setChangeDate($changeDate)
    {
        $this->changeDate = $changeDate;
        return $this;
    }

    /**
     * Gets as code
     *
     * 15.3. Код вида изменения договора
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
     * 15.3. Код вида изменения договора
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
     * Gets as specialCode
     *
     * 15.4. Код специального изменения договора
     *
     * @return int
     */
    public function getSpecialCode()
    {
        return $this->specialCode;
    }

    /**
     * Sets a new specialCode
     *
     * 15.4. Код специального изменения договора
     *
     * @param int $specialCode
     * @return self
     */
    public function setSpecialCode($specialCode)
    {
        $this->specialCode = $specialCode;
        return $this;
    }

    /**
     * Gets as otherDesc
     *
     * 15.5. Описание иного изменения договора
     *
     * @return string
     */
    public function getOtherDesc()
    {
        return $this->otherDesc;
    }

    /**
     * Sets a new otherDesc
     *
     * 15.5. Описание иного изменения договора
     *
     * @param string $otherDesc
     * @return self
     */
    public function setOtherDesc($otherDesc)
    {
        $this->otherDesc = $otherDesc;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * 15.6. Дата вступления изменения договора в силу
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * 15.6. Дата вступления изменения договора в силу
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * 15.7. Дата планового прекращения действия изменения договора
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 15.7. Дата планового прекращения действия изменения договора
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as actualEndDate
     *
     * 15.8. Дата фактического прекращения действия изменения договора
     *
     * @return \DateTime
     */
    public function getActualEndDate()
    {
        return $this->actualEndDate;
    }

    /**
     * Sets a new actualEndDate
     *
     * 15.8. Дата фактического прекращения действия изменения договора
     *
     * @param \DateTime $actualEndDate
     * @return self
     */
    public function setActualEndDate(?\DateTime $actualEndDate = null)
    {
        $this->actualEndDate = $actualEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 15.9. Код причины прекращения действия изменения договора
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 15.9. Код причины прекращения действия изменения договора
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * Gets as currencyRate
     *
     * 15.10. Курс конверсии валюты долга
     *
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     * Sets a new currencyRate
     *
     * 15.10. Курс конверсии валюты долга
     *
     * @param float $currencyRate
     * @return self
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_15_ContractChanges';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак изменения договора 0' => 'Код «1» – договор изменен (в том числе дополнен) в части условия, сведения о котором указываются в ином блоке в КИ данного субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 23 не заполняются. ',
            'Признак изменения договора 1' => 'Код «1» – договор изменен (в том числе дополнен) в части условия, сведения о котором указываются в ином блоке в КИ данного субъекта; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 23 не заполняются. ',
            'Дата изменения договора' => '',
            'Код вида изменения договора' => 'Заполняется по справочнику 3.1.',
            'Код специального изменения договора' => 'Заполняется: по справочнику 3.2 – если по показателю 15.3 «Код вида изменения договора» указан код «1»; по справочнику 3.3 – если по показателю 15.3 «Код вида изменения договора» указан код «2»; по справочнику 3.4 – если по показателю 15.3 «Код вида изменения договора» указан код «3».',
            'Описание иного изменения договора' => 'Заполняется, если по показателю 15.4 «Код специального изменения договора» указан код «99». вносится комментарий с описанием изменения договора. ',
            'Дата вступления изменения договора в силу' => '',
            'Дата планового прекращения действия изменения договора' => '',
            'Дата фактического прекращения действия изменения договора' => '',
            'Код причины прекращения действия изменения договора' => 'Заполняется по справочнику 3.5.',
            'Курс конверсии валюты долга' => 'Заполняется, если валюта обязательства субъекта была изменена. По указанному показателю отражается обменный курс валюты согласно условиям сделки.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 15. Сведения об изменении договора';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $changes = $this->sendData->getAccountReplyRUTDF()->getAmendment();
        if(empty($changes)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $this->exist0 = null;
        $this->exist1 = '1';

        $change = $changes[$this->idx];

        $this->changeDate = $this->formatDate($change->amendDate);
        $this->startDate = $this->formatDate($change->startDt);
        $this->endDate = $this->formatDate($change->planEndDt);
        $this->actualEndDate = $this->formatDate($change->factEndDt);

        $this->code = $change->type;
        $this->specialCode = $change->specType;
        $this->otherDesc = $change->otherDesc;
        $this->endCode = $change->endReason;
        $this->currencyRate = $change->curRate;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'changeDate',
            'code',
            'specialCode',
            'otherDesc',
            'startDate',
            'endDate',
            'actualEndDate',
            'currencyRate',
        ];
    }
}

