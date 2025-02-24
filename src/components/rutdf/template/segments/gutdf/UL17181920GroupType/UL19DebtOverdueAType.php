<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing UL19DebtOverdueAType
 */
class UL19DebtOverdueAType extends GutdfSegment
{
    /**
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @var string $missFact0
     */
    private $missFact0 = null;

    /**
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @var string $missFact1
     */
    private $missFact1 = null;

    /**
     * 19.3. Сумма просроченной задолженности
     *
     * @var float $debtOverdueSum
     */
    private $debtOverdueSum = null;

    /**
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @var float $debtOverdueMainSum
     */
    private $debtOverdueMainSum = null;

    /**
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @var float $debtOverduePercentSum
     */
    private $debtOverduePercentSum = null;

    /**
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @var float $debtOverdueOtherSum
     */
    private $debtOverdueOtherSum = null;

    /**
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @var \DateTime $debtOverdueStartDate
     */
    private $debtOverdueStartDate = null;

    /**
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @var \DateTime $mainMissDate
     */
    private $mainMissDate = null;

    /**
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @var \DateTime $percentMissDate
     */
    private $percentMissDate = null;

    /**
     * 19.11. Продолжительность просрочки
     *
     * @var int $missDuration
     */
    private $missDuration = null;

    /**
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @var int $repaidMissDuration
     */
    private $repaidMissDuration = null;

    /**
     * Gets as missFact0
     *
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @return string
     */
    public function getMissFact0()
    {
        return $this->missFact0;
    }

    /**
     * Sets a new missFact0
     *
     * 19.10. Признак наличия просроченной задолженности = 0
     *
     * @param string $missFact0
     * @return self
     */
    public function setMissFact0($missFact0)
    {
        $this->missFact0 = $missFact0;
        return $this;
    }

    /**
     * Gets as missFact1
     *
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @return string
     */
    public function getMissFact1()
    {
        return $this->missFact1;
    }

    /**
     * Sets a new missFact1
     *
     * 19.10. Признак наличия просроченной задолженности = 1
     *
     * @param string $missFact1
     * @return self
     */
    public function setMissFact1($missFact1)
    {
        $this->missFact1 = $missFact1;
        return $this;
    }

    /**
     * Gets as debtOverdueSum
     *
     * 19.3. Сумма просроченной задолженности
     *
     * @return float
     */
    public function getDebtOverdueSum()
    {
        return $this->debtOverdueSum;
    }

    /**
     * Sets a new debtOverdueSum
     *
     * 19.3. Сумма просроченной задолженности
     *
     * @param float $debtOverdueSum
     * @return self
     */
    public function setDebtOverdueSum($debtOverdueSum)
    {
        $this->debtOverdueSum = $debtOverdueSum;
        return $this;
    }

    /**
     * Gets as debtOverdueMainSum
     *
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtOverdueMainSum()
    {
        return $this->debtOverdueMainSum;
    }

    /**
     * Sets a new debtOverdueMainSum
     *
     * 19.4. Сумма просроченной задолженности по основному долгу
     *
     * @param float $debtOverdueMainSum
     * @return self
     */
    public function setDebtOverdueMainSum($debtOverdueMainSum)
    {
        $this->debtOverdueMainSum = $debtOverdueMainSum;
        return $this;
    }

    /**
     * Gets as debtOverduePercentSum
     *
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @return float
     */
    public function getDebtOverduePercentSum()
    {
        return $this->debtOverduePercentSum;
    }

    /**
     * Sets a new debtOverduePercentSum
     *
     * 19.5. Сумма просроченной задолженности по процентам
     *
     * @param float $debtOverduePercentSum
     * @return self
     */
    public function setDebtOverduePercentSum($debtOverduePercentSum)
    {
        $this->debtOverduePercentSum = $debtOverduePercentSum;
        return $this;
    }

    /**
     * Gets as debtOverdueOtherSum
     *
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtOverdueOtherSum()
    {
        return $this->debtOverdueOtherSum;
    }

    /**
     * Sets a new debtOverdueOtherSum
     *
     * 19.6. Сумма просроченной задолженности по иным требованиям
     *
     * @param float $debtOverdueOtherSum
     * @return self
     */
    public function setDebtOverdueOtherSum($debtOverdueOtherSum)
    {
        $this->debtOverdueOtherSum = $debtOverdueOtherSum;
        return $this;
    }

    /**
     * Gets as debtOverdueStartDate
     *
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @return \DateTime
     */
    public function getDebtOverdueStartDate()
    {
        return $this->debtOverdueStartDate;
    }

    /**
     * Sets a new debtOverdueStartDate
     *
     * 19.1. Дата возникновения просроченной задолженности
     *
     * @param \DateTime $debtOverdueStartDate
     * @return self
     */
    public function setDebtOverdueStartDate(?\DateTime $debtOverdueStartDate = null)
    {
        $this->debtOverdueStartDate = $debtOverdueStartDate;
        return $this;
    }

    /**
     * Gets as mainMissDate
     *
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @return \DateTime
     */
    public function getMainMissDate()
    {
        return $this->mainMissDate;
    }

    /**
     * Sets a new mainMissDate
     *
     * 19.8. Дата последнего пропущенного платежа по основному долгу
     *
     * @param \DateTime $mainMissDate
     * @return self
     */
    public function setMainMissDate(?\DateTime $mainMissDate = null)
    {
        $this->mainMissDate = $mainMissDate;
        return $this;
    }

    /**
     * Gets as percentMissDate
     *
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @return \DateTime
     */
    public function getPercentMissDate()
    {
        return $this->percentMissDate;
    }

    /**
     * Sets a new percentMissDate
     *
     * 19.9. Дата последнего пропущенного платежа по процентам
     *
     * @param \DateTime $percentMissDate
     * @return self
     */
    public function setPercentMissDate(?\DateTime $percentMissDate = null)
    {
        $this->percentMissDate = $percentMissDate;
        return $this;
    }

    /**
     * Gets as missDuration
     *
     * 19.11. Продолжительность просрочки
     *
     * @return int
     */
    public function getMissDuration()
    {
        return $this->missDuration;
    }

    /**
     * Sets a new missDuration
     *
     * 19.11. Продолжительность просрочки
     *
     * @param int $missDuration
     * @return self
     */
    public function setMissDuration($missDuration)
    {
        $this->missDuration = $missDuration;
        return $this;
    }

    /**
     * Gets as repaidMissDuration
     *
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @return int
     */
    public function getRepaidMissDuration()
    {
        return $this->repaidMissDuration;
    }

    /**
     * Sets a new repaidMissDuration
     *
     * 19.12. Продолжительность последней погашенной просрочки
     *
     * @param int $repaidMissDuration
     * @return self
     */
    public function setRepaidMissDuration($repaidMissDuration)
    {
        $this->repaidMissDuration = $repaidMissDuration;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_19_DebtOverdue';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия просроченной задолженности 0' => 'код «0» – в случае если обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не заполняются.',
            'Признак наличия просроченной задолженности 1' => 'код «1» – в случае если у субъекта имеется просроченная задолженность перед источником или в блоке 19 ранее указывались сведения о денежных требованиях к субъекту, которые не были погашены в срок;',
            'Сумма просроченной задолженности' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 19.2 «Признак расчета по последнему платежу» Если указано значение «0.00» и по показателю 19.10 указан код «1», заполняются показатели 19.1, 19.7 и 19.12, иные показатели блока 19 не заполняются. Если в блоке 19 ранее указывались сведения о денежных требованиях к субъекту, которые не были погашены в срок, по показателю 19.1 указывается ближайшая прошедшая дата возникновения просроченной задолженности. Если показатель 19.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма просроченной задолженности по основному долгу' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 19.2 «Признак расчета по последнему платежу». Если показатель 19.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма просроченной задолженности по процентам' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 19.2 «Признак расчета по последнему платежу». Если показатель 19.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма просроченной задолженности по иным требованиям' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 19.2 «Признак расчета по последнему платежу». Если показатель 19.2 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Дата последнего пропущенного платежа по основному долгу' => 'Ближайшая прошедшая дата, в которую заемщик по условиям сделки должен был внести, но не внес платеж по срочной задолженности.',
            'Дата последнего пропущенного платежа по процентам' => 'Ближайшая прошедшая дата, в которую заемщик по условиям сделки должен был внести, но не внес платеж по срочной задолженности.',
            'Продолжительность просрочки' => 'Количество календарных дней, в течение которых субъект нарушает обязанность вносить платежи. Значение указанного показателя определяется методом ФИФО. В случае прекращения обязательства субъекта указывается значение «0».',
            'Продолжительность последней погашенной просрочки' => 'В случае прекращения обязательства субъекта указывается количество календарных дней, в течение которых субъект нарушал обязанность вносить платежи, по состоянию на дату прекращения обязательства субъекта.',
            'Дата возникновения просроченной задолженности' => 'Ближайшая прошедшая дата возникновения просроченной задолженности.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 19. Сведения о просроченной задолженности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debt = $this->sendData->getAccountReplyRUTDF()->getPastdueArrear();
        if($debt === null || empty($debt->missFact)){
            $this->missFact0 = '';
            $this->missFact1 = null;
            return;
        }
        $this->missFact0 = null;
        $this->missFact1 = '';

        $this->debtOverdueStartDate = $this->formatDate($debt->pastDueDt);
        $this->repaidMissDuration = $debt->repaidMissDuration;
        $this->missDuration = $debt->daysPastDue;

        if(empty($debt->amtPastDue)){
            $this->debtOverdueSum = $this->formatCurrency(0);
            return;
        }

        $this->debtOverdueSum = $this->formatCurrency($debt->amtPastDue);
        $this->debtOverdueMainSum = $this->formatCurrency($debt->principalAmtPastDue);
        $this->debtOverduePercentSum = $this->formatCurrency($debt->intAmtPastDue);
        $this->debtOverdueOtherSum = $this->formatCurrency($debt->otherAmtPastDue);

        $this->mainMissDate = $this->formatDate($debt->principalMissedDate);
        $this->percentMissDate = $this->formatDate($debt->intMissedDate);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'missFact_0' => 'missFact0',
            'missFact_1' => 'missFact1',
            'debtOverdueSum',
            'debtOverdueMainSum',
            'debtOverduePercentSum',
            'debtOverdueOtherSum',
            'debtOverdueStartDate',
            'mainMissDate',
            'percentMissDate',
            'missDuration',
            'repaidMissDuration',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'В блоке указываются сведения обо всех денежных требованиях к субъекту, которые не были погашены в срок. Сведения приводятся согласно условиям сделки. Для договора лизинга указываются требования по внесению в том числе лизинговых платежей, пеней и штрафов.';
    }
}

