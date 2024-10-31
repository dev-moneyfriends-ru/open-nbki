<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use DateTime;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType\FL25DebtAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType\FL26DebtDueAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType\FL27DebtOverdueAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType\FL28PaymentAType;

/**
 * Class representing FL25262728GroupType
 *
 * Блок 25-28
 * XSD Type: FL_25_26_27_28_Group_Type
 */
class FL25262728GroupType extends GutdfSegment
{
    /**
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 0
     *
     * @var string $lastPayExist0
     */
    private $lastPayExist0 = null;

    /**
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 1
     *
     * @var string $lastPayExist1
     */
    private $lastPayExist1 = null;

    /**
     * 25.8., 26.7., 27.7., 28.13. Дата расчета
     *
     * @var DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Блок 25. Сведения о задолженности
     *
     * @var FL25DebtAType $fL25Debt
     */
    private $fL25Debt = null;

    /**
     * Блок 26. Сведения о срочной задолженности
     *
     * @var FL26DebtDueAType $fL26DebtDue
     */
    private $fL26DebtDue = null;

    /**
     * Блок 27. Сведения о просроченной задолженности
     *
     * @var FL27DebtOverdueAType $fL27DebtOverdue
     */
    private $fL27DebtOverdue = null;

    /**
     * Блок 28. Сведения о внесении платежей
     *
     * @var FL28PaymentAType $fL28Payment
     */
    private $fL28Payment = null;

    /**
     * Gets as lastPayExist0
     *
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 0
     *
     * @return string
     */
    public function getLastPayExist0()
    {
        return $this->lastPayExist0;
    }

    /**
     * Sets a new lastPayExist0
     *
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 0
     *
     * @param string $lastPayExist0
     * @return self
     */
    public function setLastPayExist0($lastPayExist0)
    {
        $this->lastPayExist0 = $lastPayExist0;
        return $this;
    }

    /**
     * Gets as lastPayExist1
     *
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 1
     *
     * @return string
     */
    public function getLastPayExist1()
    {
        return $this->lastPayExist1;
    }

    /**
     * Sets a new lastPayExist1
     *
     * 25.3., 26.2., 27.2. Признак расчета по последнему платежу = 1
     *
     * @param string $lastPayExist1
     * @return self
     */
    public function setLastPayExist1($lastPayExist1)
    {
        $this->lastPayExist1 = $lastPayExist1;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 25.8., 26.7., 27.7., 28.13. Дата расчета
     *
     * @return DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 25.8., 26.7., 27.7., 28.13. Дата расчета
     *
     * @param DateTime $calcDate
     * @return self
     */
    public function setCalcDate(DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * Gets as fL25Debt
     *
     * Блок 25. Сведения о задолженности
     *
     * @return FL25DebtAType
     */
    public function getFL25Debt()
    {
        return $this->fL25Debt;
    }

    /**
     * Sets a new fL25Debt
     *
     * Блок 25. Сведения о задолженности
     *
     * @param FL25DebtAType $fL25Debt
     * @return self
     */
    public function setFL25Debt(FL25DebtAType $fL25Debt)
    {
        $this->fL25Debt = $fL25Debt;
        return $this;
    }

    /**
     * Gets as fL26DebtDue
     *
     * Блок 26. Сведения о срочной задолженности
     *
     * @return FL26DebtDueAType
     */
    public function getFL26DebtDue()
    {
        return $this->fL26DebtDue;
    }

    /**
     * Sets a new fL26DebtDue
     *
     * Блок 26. Сведения о срочной задолженности
     *
     * @param FL26DebtDueAType $fL26DebtDue
     * @return self
     */
    public function setFL26DebtDue(FL26DebtDueAType $fL26DebtDue)
    {
        $this->fL26DebtDue = $fL26DebtDue;
        return $this;
    }

    /**
     * Gets as fL27DebtOverdue
     *
     * Блок 27. Сведения о просроченной задолженности
     *
     * @return FL27DebtOverdueAType
     */
    public function getFL27DebtOverdue()
    {
        return $this->fL27DebtOverdue;
    }

    /**
     * Sets a new fL27DebtOverdue
     *
     * Блок 27. Сведения о просроченной задолженности
     *
     * @param FL27DebtOverdueAType $fL27DebtOverdue
     * @return self
     */
    public function setFL27DebtOverdue(FL27DebtOverdueAType $fL27DebtOverdue)
    {
        $this->fL27DebtOverdue = $fL27DebtOverdue;
        return $this;
    }

    /**
     * Gets as fL28Payment
     *
     * Блок 28. Сведения о внесении платежей
     *
     * @return FL28PaymentAType
     */
    public function getFL28Payment()
    {
        return $this->fL28Payment;
    }

    /**
     * Sets a new fL28Payment
     *
     * Блок 28. Сведения о внесении платежей
     *
     * @param FL28PaymentAType $fL28Payment
     * @return self
     */
    public function setFL28Payment(FL28PaymentAType $fL28Payment)
    {
        $this->fL28Payment = $fL28Payment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_25_26_27_28_Group';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак расчета по последнему платежу 0' => '25.3., 26.2., 27.2. Признак расчета по последнему платежу = 0',
            'Признак расчета по последнему платежу 1' => '25.3., 26.2., 27.2. Признак расчета по последнему платежу = 1',
            'Дата расчета' => 'Дата, по состоянию на которую сформированы (рассчитаны) значения показателей блока',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 25-28';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $account = $this->template->sendData->getAccountReplyRUTDF();
        $debt = $account->getArrear();
        if($debt && $debt->lastPaymentDueCode){
            $this->lastPayExist1 = '';
            $this->lastPayExist0 = null;
        }elseif($debt && !$debt->lastPaymentDueCode){
            $this->lastPayExist1 = null;
            $this->lastPayExist0 = '';
        }else{
            $this->lastPayExist1 = null;
            $this->lastPayExist0 = null;
        }
        $this->calcDate = $this->formatDate($account->calcDate);
        $this->fL25Debt = new FL25DebtAType($this->template);
        $this->fL26DebtDue = new FL26DebtDueAType($this->template);
        $this->fL27DebtOverdue = new FL27DebtOverdueAType($this->template);
        $this->fL28Payment = new FL28PaymentAType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'lastPayExist_0' => 'lastPayExist0',
            'lastPayExist_1' => 'lastPayExist1',
            'calcDate',
            'fL25Debt',
            'fL26DebtDue',
            'fL27DebtOverdue',
            'fL28Payment',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            'lastPayExist_0' => $this->lastPayExist0,
            'lastPayExist_1' => $this->lastPayExist1,
            'calcDate' => $this->calcDate,
        ];
    }
}

