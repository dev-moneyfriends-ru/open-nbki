<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL39CourtType
 *
 * Блок 39. Сведения о судебном споре или требовании по обязательству
 * XSD Type: FL_39_Court_Type
 */
class FL39CourtType extends GutdfSegment
{
    /**
     * 39.1. Признак судебного спора или требования = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 39.1. Признак судебного спора или требования = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 39.2. Признак наличия судебного акта = 0
     *
     * @var string $actExist0
     */
    private $actExist0 = null;

    /**
     * 39.2. Признак наличия судебного акта = 1
     *
     * @var string $actExist1
     */
    private $actExist1 = null;

    /**
     * 39.3. Дата принятия судебного акта
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 39.4. Номер судебного акта
     *
     * @var string $num
     */
    private $num = null;

    /**
     * 39.5. Резолютивная часть судебного акта
     *
     * @var string $actResolution
     */
    private $actResolution = null;

    /**
     * 39.6. Признак вступления акта в законную силу = 0
     *
     * @var string $actStartExist0
     */
    private $actStartExist0 = null;

    /**
     * 39.6. Признак вступления акта в законную силу = 1
     *
     * @var string $actStartExist1
     */
    private $actStartExist1 = null;

    /**
     * 39.7. Код иска или требования
     *
     * @var int $lawsuitCode
     */
    private $lawsuitCode = null;

    /**
     * 39.8. Сумма требований, подлежащих удовлетворению
     *
     * @var string $sumTotal
     */
    private $sumTotal = null;

    /**
     * 39.9. Дополнительные сведения по судебному акту
     *
     * @var string $info
     */
    private $info = null;

    /**
     * Gets as exist0
     *
     * 39.1. Признак судебного спора или требования = 0
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
     * 39.1. Признак судебного спора или требования = 0
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
     * 39.1. Признак судебного спора или требования = 1
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
     * 39.1. Признак судебного спора или требования = 1
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
     * Gets as actExist0
     *
     * 39.2. Признак наличия судебного акта = 0
     *
     * @return string
     */
    public function getActExist0()
    {
        return $this->actExist0;
    }

    /**
     * Sets a new actExist0
     *
     * 39.2. Признак наличия судебного акта = 0
     *
     * @param string $actExist0
     * @return self
     */
    public function setActExist0($actExist0)
    {
        $this->actExist0 = $actExist0;
        return $this;
    }

    /**
     * Gets as actExist1
     *
     * 39.2. Признак наличия судебного акта = 1
     *
     * @return string
     */
    public function getActExist1()
    {
        return $this->actExist1;
    }

    /**
     * Sets a new actExist1
     *
     * 39.2. Признак наличия судебного акта = 1
     *
     * @param string $actExist1
     * @return self
     */
    public function setActExist1($actExist1)
    {
        $this->actExist1 = $actExist1;
        return $this;
    }

    /**
     * Gets as date
     *
     * 39.3. Дата принятия судебного акта
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
     * 39.3. Дата принятия судебного акта
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
     * Gets as num
     *
     * 39.4. Номер судебного акта
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 39.4. Номер судебного акта
     *
     * @param string $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Gets as actResolution
     *
     * 39.5. Резолютивная часть судебного акта
     *
     * @return string
     */
    public function getActResolution()
    {
        return $this->actResolution;
    }

    /**
     * Sets a new actResolution
     *
     * 39.5. Резолютивная часть судебного акта
     *
     * @param string $actResolution
     * @return self
     */
    public function setActResolution($actResolution)
    {
        $this->actResolution = $actResolution;
        return $this;
    }

    /**
     * Gets as actStartExist0
     *
     * 39.6. Признак вступления акта в законную силу = 0
     *
     * @return string
     */
    public function getActStartExist0()
    {
        return $this->actStartExist0;
    }

    /**
     * Sets a new actStartExist0
     *
     * 39.6. Признак вступления акта в законную силу = 0
     *
     * @param string $actStartExist0
     * @return self
     */
    public function setActStartExist0($actStartExist0)
    {
        $this->actStartExist0 = $actStartExist0;
        return $this;
    }

    /**
     * Gets as actStartExist1
     *
     * 39.6. Признак вступления акта в законную силу = 1
     *
     * @return string
     */
    public function getActStartExist1()
    {
        return $this->actStartExist1;
    }

    /**
     * Sets a new actStartExist1
     *
     * 39.6. Признак вступления акта в законную силу = 1
     *
     * @param string $actStartExist1
     * @return self
     */
    public function setActStartExist1($actStartExist1)
    {
        $this->actStartExist1 = $actStartExist1;
        return $this;
    }

    /**
     * Gets as lawsuitCode
     *
     * 39.7. Код иска или требования
     *
     * @return int
     */
    public function getLawsuitCode()
    {
        return $this->lawsuitCode;
    }

    /**
     * Sets a new lawsuitCode
     *
     * 39.7. Код иска или требования
     *
     * @param int $lawsuitCode
     * @return self
     */
    public function setLawsuitCode($lawsuitCode)
    {
        $this->lawsuitCode = $lawsuitCode;
        return $this;
    }

    /**
     * Gets as sumTotal
     *
     * 39.8. Сумма требований, подлежащих удовлетворению
     *
     * @return string
     */
    public function getSumTotal()
    {
        return $this->sumTotal;
    }

    /**
     * Sets a new sumTotal
     *
     * 39.8. Сумма требований, подлежащих удовлетворению
     *
     * @param string $sumTotal
     * @return self
     */
    public function setSumTotal($sumTotal)
    {
        $this->sumTotal = $sumTotal;
        return $this;
    }

    /**
     * Gets as info
     *
     * 39.9. Дополнительные сведения по судебному акту
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * 39.9. Дополнительные сведения по судебному акту
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_39_Court';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак судебного спора или требования 0' => 'Код «1» – в производстве суда находится иск по обязательству источника и субъекта либо заявление источника о выдаче судебного приказа по обязательству; код «0» – обстоятельства кода «1» отсутствуют. Если указан код «0», иные показатели блока не заполняются.',
            'Признак судебного спора или требования 1' => 'Код «1» – в производстве суда находится иск по обязательству источника и субъекта либо заявление источника о выдаче судебного приказа по обязательству; код «0» – обстоятельства кода «1» отсутствуют. Если указан код «0», иные показатели блока не заполняются.',
            'Признак наличия судебного акта 0' => 'Код «1» – суд принял акт, которым заканчивается рассмотрение дела по существу (в частности, судебное решение или судебный приказ); код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», показатели 39.3–39.6 не заполняются.',
            'Признак наличия судебного акта 1' => 'Код «1» – суд принял акт, которым заканчивается рассмотрение дела по существу (в частности, судебное решение или судебный приказ); код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», показатели 39.3–39.6 не заполняются.',
            'Дата принятия судебного акта' => '',
            'Номер судебного акта' => '',
            'Резолютивная часть судебного акта' => 'Заполняется по справочнику 5.5',
            'Признак вступления акта в законную силу 0' => 'Код «1» – судебный акт вступил в законную силу; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак вступления акта в законную силу 1' => 'Код «1» – судебный акт вступил в законную силу; код «0» – обстоятельство кода «1» отсутствует.',
            'Код иска или требования' => 'Заполняется по справочнику 5.6',
            'Сумма требований, подлежащих удовлетворению' => 'Сумма требований, подлежащих удовлетворению на основании решения суда.',
            'Дополнительные сведения по судебному акту' => 'Дополнительные сведения по судебному акту, заполняется по решению Источника.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 39. Сведения о судебном споре или требовании по обязательству';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if($this->idx === null){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $this->exist1 = '';
        $this->exist0 = null;

        $court = $this->template->sendData->getAccountReplyRUTDF()->getLegalItems()[$this->idx];

        if($court->hasCourtAct){
            $this->actExist1 = '';
            $this->actExist0 = null;
        }else{
            $this->actExist0 = '';
            $this->actExist1 = null;
        }

        $this->date = $this->formatDate($court->courtActDt);
        $this->num = $court->courtActNum;
        $this->actResolution = $court->resolution;

        if($court->courtActEffectCode){
            $this->actStartExist1 = '';
            $this->actStartExist0 = null;
        }else{
            $this->actStartExist0 = '';
            $this->actStartExist1 = null;
        }

        $this->lawsuitCode = $court->lawsuitCode;
        $this->sumTotal = $this->formatCurrency($court->sumTotal);
        $this->info = $court->info;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'actExist_0' => 'actExist0',
            'actExist_1' => 'actExist1',
            'date',
            'num',
            'actResolution',
            'actStartExist_0' => 'actStartExist0',
            'actStartExist_1' => 'actStartExist1',
            'lawsuitCode',
            'sumTotal',
            'info',
        ];
    }
}

