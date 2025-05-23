<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL26DebtDueAType
 */
class FL26DebtDueAType extends GutdfSegment
{
    /**
     * 26.3. Сумма срочной задолженности
     *
     * @var float $debtDueSum
     */
    private $debtDueSum = null;

    /**
     * 26.4. Сумма срочной задолженности по основному долгу
     *
     * @var float $debtDueMainSum
     */
    private $debtDueMainSum = null;

    /**
     * 26.5. Сумма срочной задолженности по процентам
     *
     * @var float $debtDuePercentSum
     */
    private $debtDuePercentSum = null;

    /**
     * 26.6. Сумма срочной задолженности по иным требованиям
     *
     * @var float $debtDueOtherSum
     */
    private $debtDueOtherSum = null;

    /**
     * 26.1. Дата возникновения срочной задолженности
     *
     * @var \DateTime $debtDueStartDate
     */
    private $debtDueStartDate = null;

    /**
     * Gets as debtDueSum
     *
     * 26.3. Сумма срочной задолженности
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
     * 26.3. Сумма срочной задолженности
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
     * 26.4. Сумма срочной задолженности по основному долгу
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
     * 26.4. Сумма срочной задолженности по основному долгу
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
     * 26.5. Сумма срочной задолженности по процентам
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
     * 26.5. Сумма срочной задолженности по процентам
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
     * 26.6. Сумма срочной задолженности по иным требованиям
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
     * 26.6. Сумма срочной задолженности по иным требованиям
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
     * Gets as debtDueStartDate
     *
     * 26.1. Дата возникновения срочной задолженности
     *
     * @return \DateTime
     */
    public function getDebtDueStartDate()
    {
        return $this->debtDueStartDate;
    }

    /**
     * Sets a new debtDueStartDate
     *
     * 26.1. Дата возникновения срочной задолженности
     *
     * @param \DateTime $debtDueStartDate
     * @return self
     */
    public function setDebtDueStartDate(?\DateTime $debtDueStartDate = null)
    {
        $this->debtDueStartDate = $debtDueStartDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_26_DebtDue';
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
        return 'Блок 26. Сведения о срочной задолженности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debt = $this->sendData->getAccountReplyRUTDF()->getDueArrear();
        if($debt === null || empty($debt->amtOutstanding)){
            $this->debtDueSum = $this->formatCurrency(0);
            return;
        }
        $this->debtDueStartDate = $this->formatDate($debt->startDt);
        $this->debtDueSum = $this->formatCurrency($debt->amtOutstanding);
        $this->debtDueMainSum = $this->formatCurrency($debt->principalOutstanding);
        $this->debtDuePercentSum = $this->formatCurrency($debt->intOutstanding);
        $this->debtDueOtherSum = $this->formatCurrency($debt->otherAmtOutstanding);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'debtDueSum',
            'debtDueMainSum',
            'debtDuePercentSum',
            'debtDueOtherSum',
            'debtDueStartDate',
        ];
    }
}

