<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL5ReorgType
 *
 * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
 * XSD Type: UL_5_Reorg_Type
 */
class UL5ReorgType extends GutdfSegment
{
    /**
     * 5.2. Признак реорганизации = 0
     *
     * @var string $exist0
     */
    private $exist0 = '';

    /**
     * 5.2. Признак реорганизации = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 5.6. Дата правопреемства (окончания реорганизации)
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as exist0
     *
     * 5.2. Признак реорганизации = 0
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
     * 5.2. Признак реорганизации = 0
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
     * 5.2. Признак реорганизации = 1
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
     * 5.2. Признак реорганизации = 1
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
     * Gets as fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as date
     *
     * 5.6. Дата правопреемства (окончания реорганизации)
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
     * 5.6. Дата правопреемства (окончания реорганизации)
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_5_Reorg';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак реорганизации 0' => 'Код «1» – субъект создан в результате реорганизации; код «0» – обстоятельство кода «1» отсутствует. В случае если по данному показателю указан код «0», иные показатели блока 5 Показателей КИ ЮЛ не заполняются.',
            'Признак реорганизации 1' => 'Код «1» – субъект создан в результате реорганизации; код «0» – обстоятельство кода «1» отсутствует. В случае если по данному показателю указан код «0», иные показатели блока 5 Показателей КИ ЮЛ не заполняются.',
            'Полное наименование лица, от которого перешли права и обязанности' => '',
            'Сокращенное наименование лица, от которого перешли права и обязанности' => '',
            'Регистрационный номер лица, от которого перешли права и обязанности' => '',
            'Дата правопреемства (окончания реорганизации)' => '',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Указываются сведения о наименовании субъекта до перехода к нему прав и обязанностей в рамках универсального правопреемства.';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации';
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $reorg = $this->sendData->getReorgReply();
        if ($reorg === null || empty($reorg->isReorg)) {
            $this->setExist0('');
            $this->setExist1(null);
            return;
        }

        $this->setExist0(null);
        $this->setExist1('');
        $this->setFullName($reorg->prevName);
        $this->setShortName($reorg->prevAbbrName);
        $this->setRegNum($reorg->prevRegNum);
        $this->setDate($this->formatDate($reorg->reorgDt));
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'fullName',
            'shortName',
            'regNum',
            'date',
        ];
    }
}

