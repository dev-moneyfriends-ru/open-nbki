<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL291DebtBurdenInfoType
 *
 * Блок 29(1). Сведения о долговой нагрузке заемщика
 * XSD Type: FL_29_1_DebtBurdenInfo_Type
 */
class FL291DebtBurdenInfoType extends GutdfSegment
{
    /**
     * 29(1).1. Диапазон показателя долговой нагрузки заемщика
     *
     * @var string $loadRange
     */
    private $loadRange = null;

    /**
     * 29(1).2. Дата расчета показателя долговой нагрузки заемщика
     *
     * @var string $loadCalcDate
     */
    private $loadCalcDate = null;

    /**
     * 29(1).3. Сведения о способе определения величины среднемесячного дохода заемщика
     *
     * @var string $incomeInfo
     */
    private $incomeInfo = null;

    /**
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @var string[] $incomeInfoSource
     */
    private $incomeInfoSource = [];

    /**
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 0
     *
     * @var string $loadFact0
     */
    private $loadFact0 = null;

    /**
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 1
     *
     * @var string $loadFact1
     */
    private $loadFact1 = null;

    /**
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 0
     *
     * @var string $loadCalculationFact0
     */
    private $loadCalculationFact0 = null;

    /**
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 1
     *
     * @var string $loadCalculationFact1
     */
    private $loadCalculationFact1 = null;

    /**
     * 29(1).7. УИд сделки (УИд обращения)
     *
     * @var string $dealUid
     */
    private $dealUid = null;

    /**
     * Gets as loadRange
     *
     * 29(1).1. Диапазон показателя долговой нагрузки заемщика
     *
     * @return string
     */
    public function getLoadRange()
    {
        return $this->loadRange;
    }

    /**
     * Sets a new loadRange
     *
     * 29(1).1. Диапазон показателя долговой нагрузки заемщика
     *
     * @param string $loadRange
     * @return self
     */
    public function setLoadRange($loadRange)
    {
        $this->loadRange = $loadRange;
        return $this;
    }

    /**
     * Gets as loadCalcDate
     *
     * 29(1).2. Дата расчета показателя долговой нагрузки заемщика
     *
     * @return string
     */
    public function getLoadCalcDate()
    {
        return $this->loadCalcDate;
    }

    /**
     * Sets a new loadCalcDate
     *
     * 29(1).2. Дата расчета показателя долговой нагрузки заемщика
     *
     * @param string $loadCalcDate
     * @return self
     */
    public function setLoadCalcDate($loadCalcDate)
    {
        $this->loadCalcDate = $loadCalcDate;
        return $this;
    }

    /**
     * Gets as incomeInfo
     *
     * 29(1).3. Сведения о способе определения величины среднемесячного дохода заемщика
     *
     * @return string
     */
    public function getIncomeInfo()
    {
        return $this->incomeInfo;
    }

    /**
     * Sets a new incomeInfo
     *
     * 29(1).3. Сведения о способе определения величины среднемесячного дохода заемщика
     *
     * @param string $incomeInfo
     * @return self
     */
    public function setIncomeInfo($incomeInfo)
    {
        $this->incomeInfo = $incomeInfo;
        return $this;
    }

    /**
     * Adds as incomeInfoSource
     *
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @return self
     * @param string $incomeInfoSource
     */
    public function addToIncomeInfoSource($incomeInfoSource)
    {
        $this->incomeInfoSource[] = $incomeInfoSource;
        return $this;
    }

    /**
     * isset incomeInfoSource
     *
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIncomeInfoSource($index)
    {
        return isset($this->incomeInfoSource[$index]);
    }

    /**
     * unset incomeInfoSource
     *
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIncomeInfoSource($index)
    {
        unset($this->incomeInfoSource[$index]);
    }

    /**
     * Gets as incomeInfoSource
     *
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @return string[]
     */
    public function getIncomeInfoSource()
    {
        return $this->incomeInfoSource;
    }

    /**
     * Sets a new incomeInfoSource
     *
     * 29(1).4. Источник сведений о величине среднемесячного дохода заемщика
     *
     * @param string $incomeInfoSource
     * @return self
     */
    public function setIncomeInfoSource(array $incomeInfoSource)
    {
        $this->incomeInfoSource = $incomeInfoSource;
        return $this;
    }

    /**
     * Gets as loadFact0
     *
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 0
     *
     * @return string
     */
    public function getLoadFact0()
    {
        return $this->loadFact0;
    }

    /**
     * Sets a new loadFact0
     *
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 0
     *
     * @param string $loadFact0
     * @return self
     */
    public function setLoadFact0($loadFact0)
    {
        $this->loadFact0 = $loadFact0;
        return $this;
    }

    /**
     * Gets as loadFact1
     *
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 1
     *
     * @return string
     */
    public function getLoadFact1()
    {
        return $this->loadFact1;
    }

    /**
     * Sets a new loadFact1
     *
     * 29(1).5. Признак учета долговой нагрузки созаемщиков = 1
     *
     * @param string $loadFact1
     * @return self
     */
    public function setLoadFact1($loadFact1)
    {
        $this->loadFact1 = $loadFact1;
        return $this;
    }

    /**
     * Gets as loadCalculationFact0
     *
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 0
     *
     * @return string
     */
    public function getLoadCalculationFact0()
    {
        return $this->loadCalculationFact0;
    }

    /**
     * Sets a new loadCalculationFact0
     *
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 0
     *
     * @param string $loadCalculationFact0
     * @return self
     */
    public function setLoadCalculationFact0($loadCalculationFact0)
    {
        $this->loadCalculationFact0 = $loadCalculationFact0;
        return $this;
    }

    /**
     * Gets as loadCalculationFact1
     *
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 1
     *
     * @return string
     */
    public function getLoadCalculationFact1()
    {
        return $this->loadCalculationFact1;
    }

    /**
     * Sets a new loadCalculationFact1
     *
     * 29(1).6. Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу) = 1
     *
     * @param string $loadCalculationFact1
     * @return self
     */
    public function setLoadCalculationFact1($loadCalculationFact1)
    {
        $this->loadCalculationFact1 = $loadCalculationFact1;
        return $this;
    }

    /**
     * Gets as dealUid
     *
     * 29(1).7. УИд сделки (УИд обращения)
     *
     * @return string
     */
    public function getDealUid()
    {
        return $this->dealUid;
    }

    /**
     * Sets a new dealUid
     *
     * 29(1).7. УИд сделки (УИд обращения)
     *
     * @param string $dealUid
     * @return self
     */
    public function setDealUid($dealUid)
    {
        $this->dealUid = $dealUid;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_29_1_DebtBurdenInfo';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Диапазон показателя долговой нагрузки заемщика' => 'Заполняется по справочнику 1.9. Представляет собой интервал значений показателя долговой нагрузки заемщика, рассчитанного в случаях, установленных статьей 5 Федерального закона от 21 декабря 2013 года № 353-ФЗ «О потребительском кредите (займе)», а также в иных случаях, наступление которых влечет за собой необходимость расчета показателя долговой нагрузки заемщика, если такие случаи определены во внутреннем документе кредитной организации или микрофинансовой организации. Если условиями займа (кредита) предусмотрена солидарная ответственность заемщика и другого физического лица (других физических лиц) по исполнению обязательства (далее – созаемщик), показатель заполняется кредитной организацией или микрофинансовой организацией, исходя из совокупного значения показателя долговой нагрузки заемщика и созаемщика (созаемщиков).',
            'Дата расчета показателя долговой нагрузки заемщика' => '',
            'Сведения о способе определения величины среднемесячного дохода заемщика' => 'Заполняется по справочнику 1.10',
            'Источник сведений о величине среднемесячного дохода заемщика' => 'Заполняется по справочнику 1.11. Если по показателю 29.1.3 указан код 1, указывается один или несколько кодов, предусмотренных строками кодов 1–8 справочника 1.11. Если по показателю 29.1.3 указан код 2, указывается код 9 или 10 из справочника 1.11. Если по показателю 29.1.3 указан код 3, 4 или 5, показатель не заполняется. Если по показателю 29.1.3 указан код 6, указывается код 11.',
            'Признак учета долговой нагрузки созаемщиков' => 'Код «1» – если показатель долговой нагрузки заемщика рассчитан как отношение суммы среднемесячных платежей по всем кредитам и займам заемщика и созаемщика (созаемщиков) к величине их совокупного среднемесячного дохода; код «0» – если обстоятельство кода «1» отсутствует.',
            'Признак расчета показателя долговой нагрузки заемщика по заключенному потребительскому кредиту (займу)' => 'Код «1» – если показатель долговой нагрузки заемщика рассчитывается по заключенному договору потребительского кредита (займа); код «0» – если показатель долговой нагрузки заемщика рассчитан при принятии решения о предоставлении потребительского кредита (займа) на основании обращения заемщика.',
            'УИд сделки (УИд обращения)' => 'Если значение показателя 29.1.6 равно 1, указывается УИд сделки, в связи с которой рассчитан показатель долговой нагрузки заемщика. Если значение показателя 29.1.6 равно 0, указывается УИд обращения заемщика, при принятии решения о предоставлении потребительского кредита (займа) по которому рассчитан показатель долговой нагрузки данного заемщика. ',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
       return 'Блок 29(1). Сведения о долговой нагрузке заемщика ';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debtBurdenInfos = $this->template->sendData->getAccountReplyRUTDF()->getDebtBurdenInfo();
        if(empty($debtBurdenInfos)){
            return;
        }
        $debtBurdenInfo = array_shift($debtBurdenInfos);
        $this->loadRange = $debtBurdenInfo->loadRange;
        $this->loadCalcDate = $this->formatDate($debtBurdenInfo->loadCalcDate);
        $this->loadFact0 = $debtBurdenInfo->loadFact0;
        $this->loadFact1 = $debtBurdenInfo->loadFact1;
        $this->loadCalculationFact0 = $debtBurdenInfo->loadCalculationFact0;
        $this->loadCalculationFact1 = $debtBurdenInfo->loadCalculationFact1;
        $this->incomeInfo = $debtBurdenInfo->incomeInfo;
        $this->incomeInfoSource = $debtBurdenInfo->incomeInfoSource;
        $this->dealUid = UuidHelper::getUuidWithControl($debtBurdenInfo->dealUid);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'loadRange',
            'loadCalcDate',
            'incomeInfo',
            'incomeInfoSource',
            'loadFact_0' => 'loadFact0',
            'loadFact_1' => 'loadFact1',
            'loadCalculationFact_0' => 'loadCalculationFact0',
            'loadCalculationFact_1' => 'loadCalculationFact1',
            'dealUid',
        ];
    }
}

