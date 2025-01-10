<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use DateTime;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType\UL17DebtAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType\UL18DebtDueAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType\UL19DebtOverdueAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL17181920GroupType\UL20PaymentAType;

/**
 * Class representing UL17181920GroupType
 *
 * Блок 17-20
 * XSD Type: UL_17_18_19_20_Group_Type
 */
class UL17181920GroupType extends GutdfSegment
{
    /**
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 0
     *
     * @var string $lastPayExist0
     */
    private $lastPayExist0 = null;

    /**
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 1
     *
     * @var string $lastPayExist1
     */
    private $lastPayExist1 = null;

    /**
     * 17.8., 18.7., 19.7., 20.13. Дата расчета
     *
     * @var DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Блок 17. Сведения о задолженности
     *
     * @var UL17DebtAType $uL17Debt
     */
    private $uL17Debt = null;

    /**
     * Блок 18. Сведения о срочной задолженности
     *
     * @var UL18DebtDueAType $uL18DebtDue
     */
    private $uL18DebtDue = null;

    /**
     * Блок 19. Сведения о просроченной задолженности
     *
     * @var UL19DebtOverdueAType $uL19DebtOverdue
     */
    private $uL19DebtOverdue = null;

    /**
     * Блок 20. Сведения о внесении платежей
     *
     * @var UL20PaymentAType $uL20Payment
     */
    private $uL20Payment = null;

    /**
     * Gets as lastPayExist0
     *
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 0
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
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 0
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
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 1
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
     * 17.3., 18.2., 19.2. Признак расчета по последнему платежу = 1
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
     * 17.8., 18.7., 19.7., 20.13. Дата расчета
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
     * 17.8., 18.7., 19.7., 20.13. Дата расчета
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
     * Gets as uL17Debt
     *
     * Блок 17. Сведения о задолженности
     *
     * @return UL17DebtAType
     */
    public function getUL17Debt()
    {
        return $this->uL17Debt;
    }

    /**
     * Sets a new uL17Debt
     *
     * Блок 17. Сведения о задолженности
     *
     * @param UL17DebtAType $uL17Debt
     * @return self
     */
    public function setUL17Debt(UL17DebtAType $uL17Debt)
    {
        $this->uL17Debt = $uL17Debt;
        return $this;
    }

    /**
     * Gets as uL18DebtDue
     *
     * Блок 18. Сведения о срочной задолженности
     *
     * @return UL18DebtDueAType
     */
    public function getUL18DebtDue()
    {
        return $this->uL18DebtDue;
    }

    /**
     * Sets a new uL18DebtDue
     *
     * Блок 18. Сведения о срочной задолженности
     *
     * @param UL18DebtDueAType $uL18DebtDue
     * @return self
     */
    public function setUL18DebtDue(UL18DebtDueAType $uL18DebtDue)
    {
        $this->uL18DebtDue = $uL18DebtDue;
        return $this;
    }

    /**
     * Gets as uL19DebtOverdue
     *
     * Блок 19. Сведения о просроченной задолженности
     *
     * @return UL19DebtOverdueAType
     */
    public function getUL19DebtOverdue()
    {
        return $this->uL19DebtOverdue;
    }

    /**
     * Sets a new uL19DebtOverdue
     *
     * Блок 19. Сведения о просроченной задолженности
     *
     * @param UL19DebtOverdueAType $uL19DebtOverdue
     * @return self
     */
    public function setUL19DebtOverdue(UL19DebtOverdueAType $uL19DebtOverdue)
    {
        $this->uL19DebtOverdue = $uL19DebtOverdue;
        return $this;
    }

    /**
     * Gets as uL20Payment
     *
     * Блок 20. Сведения о внесении платежей
     *
     * @return UL20PaymentAType
     */
    public function getUL20Payment()
    {
        return $this->uL20Payment;
    }

    /**
     * Sets a new uL20Payment
     *
     * Блок 20. Сведения о внесении платежей
     *
     * @param UL20PaymentAType $uL20Payment
     * @return self
     */
    public function setUL20Payment(UL20PaymentAType $uL20Payment)
    {
        $this->uL20Payment = $uL20Payment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_17_18_19_20_Group';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак расчета по последнему платежу 0' => '17.3., 18.2., 19.2. Признак расчета по последнему платежу = 0',
            'Признак расчета по последнему платежу 1' => '17.3., 18.2., 19.2. Признак расчета по последнему платежу = 1',
            'Дата расчета' => 'Дата, по состоянию на которую сформированы (рассчитаны) значения показателей блока',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 17-20';
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

        $this->uL17Debt = new UL17DebtAType($this->template);
        $this->uL18DebtDue = new UL18DebtDueAType($this->template);
        $this->uL19DebtOverdue = new UL19DebtOverdueAType($this->template);

        if(!empty($this->template->sendData->getAccountReplyRUTDF()->getPayment())){
            $this->fL28Payment = new UL20PaymentAType($this->template);
        }
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
            'uL17Debt',
            'uL18DebtDue',
            'uL19DebtOverdue',
            'uL20Payment',
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

