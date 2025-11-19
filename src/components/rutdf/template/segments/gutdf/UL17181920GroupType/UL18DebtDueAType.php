<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing UL18DebtDueAType
 */
class UL18DebtDueAType extends GutdfSegment
{
    /**
     * 18.8. Признак наличия срочной задолженности = 0
     *
     * @var string $debtDueExist0
     */
    private $debtDueExist0 = null;

    /**
     * 18.8. Признак наличия срочной задолженности = 1
     *
     * @var string $debtDueExist1
     */
    private $debtDueExist1 = null;

    /**
     * 18.1. Дата возникновения срочной задолженности
     *
     * @var string $debtDueStartDate
     */
    private $debtDueStartDate = null;

    /**
     * 18.3. Сумма срочной задолженности
     *
     * @var float $debtDueSum
     */
    private $debtDueSum = null;

    /**
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @var float $debtDueMainSum
     */
    private $debtDueMainSum = null;

    /**
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @var float $debtDuePercentSum
     */
    private $debtDuePercentSum = null;

    /**
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @var float $debtDueOtherSum
     */
    private $debtDueOtherSum = null;

    /**
     * Gets as debtDueExist0
     *
     * 18.8. Признак наличия срочной задолженности = 0
     *
     * @return string
     */
    public function getDebtDueExist0()
    {
        return $this->debtDueExist0;
    }

    /**
     * Sets a new debtDueExist0
     *
     * 18.8. Признак наличия срочной задолженности = 0
     *
     * @param string $debtDueExist0
     * @return self
     */
    public function setDebtDueExist0($debtDueExist0)
    {
        $this->debtDueExist0 = $debtDueExist0;
        return $this;
    }

    /**
     * Gets as debtDueExist1
     *
     * 18.8. Признак наличия срочной задолженности = 1
     *
     * @return string
     */
    public function getDebtDueExist1()
    {
        return $this->debtDueExist1;
    }

    /**
     * Sets a new debtDueExist1
     *
     * 18.8. Признак наличия срочной задолженности = 1
     *
     * @param string $debtDueExist1
     * @return self
     */
    public function setDebtDueExist1($debtDueExist1)
    {
        $this->debtDueExist1 = $debtDueExist1;
        return $this;
    }

    /**
     * Gets as debtDueStartDate
     *
     * 18.1. Дата возникновения срочной задолженности
     *
     * @return string
     */
    public function getDebtDueStartDate()
    {
        return $this->debtDueStartDate;
    }

    /**
     * Sets a new debtDueStartDate
     *
     * 18.1. Дата возникновения срочной задолженности
     *
     * @param string $debtDueStartDate
     * @return self
     */
    public function setDebtDueStartDate($debtDueStartDate)
    {
        $this->debtDueStartDate = $debtDueStartDate;
        return $this;
    }

    /**
     * Gets as debtDueSum
     *
     * 18.3. Сумма срочной задолженности
     *
     * @return float
     */
    public function getDebtDueSum()
    {
        return $this->debtDueSum;
    }

    /**
     * Sets a new debtDueSum
     *
     * 18.3. Сумма срочной задолженности
     *
     * @param float $debtDueSum
     * @return self
     */
    public function setDebtDueSum($debtDueSum)
    {
        $this->debtDueSum = $debtDueSum;
        return $this;
    }

    /**
     * Gets as debtDueMainSum
     *
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtDueMainSum()
    {
        return $this->debtDueMainSum;
    }

    /**
     * Sets a new debtDueMainSum
     *
     * 18.4. Сумма срочной задолженности по основному долгу
     *
     * @param float $debtDueMainSum
     * @return self
     */
    public function setDebtDueMainSum($debtDueMainSum)
    {
        $this->debtDueMainSum = $debtDueMainSum;
        return $this;
    }

    /**
     * Gets as debtDuePercentSum
     *
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @return float
     */
    public function getDebtDuePercentSum()
    {
        return $this->debtDuePercentSum;
    }

    /**
     * Sets a new debtDuePercentSum
     *
     * 18.5. Сумма срочной задолженности по процентам
     *
     * @param float $debtDuePercentSum
     * @return self
     */
    public function setDebtDuePercentSum($debtDuePercentSum)
    {
        $this->debtDuePercentSum = $debtDuePercentSum;
        return $this;
    }

    /**
     * Gets as debtDueOtherSum
     *
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtDueOtherSum()
    {
        return $this->debtDueOtherSum;
    }

    /**
     * Sets a new debtDueOtherSum
     *
     * 18.6. Сумма срочной задолженности по иным требованиям
     *
     * @param float $debtDueOtherSum
     * @return self
     */
    public function setDebtDueOtherSum($debtDueOtherSum)
    {
        $this->debtDueOtherSum = $debtDueOtherSum;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_18_DebtDue';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Дата возникновения срочной задолженности' => 'Указывается дата возникновения срочной задолженности. По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата возникновения срочной задолженности при передаче первого транша и каждый раз при выдаче транша после полного погашения задолженности по предыдущему (предыдущим) траншам.',
            'Сумма срочной задолженности' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 18.2 «Признак расчета по последнему платежу». Если указано значение «0.00», иные показатели блока 18 не заполняются. Если показатель 18.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма срочной задолженности по основному долгу' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 18.2 «Признак расчета по последнему платежу». Если показатель 18.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма срочной задолженности по процентам' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 18.2 «Признак расчета по последнему платежу». Если показатель 18.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма срочной задолженности по иным требованиям' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 18.2 «Признак расчета по последнему платежу». Если показатель 18.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 18. Сведения о срочной задолженности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debt = $this->sendData->getAccountReplyRUTDF()->getDueArrear();
        if ($debt === null || empty($debt->amtOutstanding)) {
            $this->setDebtDueExist0('');
            $this->setDebtDueExist1(null);
            return;
        }

        $this->setDebtDueExist0(null);
        $this->setDebtDueExist1('');
        $this->setDebtDueStartDate($this->formatDate($debt->startDt));
        $this->setDebtDueSum($debt->amtOutstanding);
        $this->setDebtDueMainSum($debt->principalOutstanding);
        $this->setDebtDuePercentSum($debt->intOutstanding);
        $this->setDebtDueOtherSum($debt->otherAmtOutstanding);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'debtDueExist_0' => 'debtDueExist0',
            'debtDueExist_1' => 'debtDueExist1',
            'debtDueStartDate',
            'debtDueSum',
            'debtDueMainSum',
            'debtDuePercentSum',
            'debtDueOtherSum',
        ];
    }
}

