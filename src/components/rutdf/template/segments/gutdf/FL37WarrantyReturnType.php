<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL37WarrantyReturnType
 *
 * Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы
 * XSD Type: FL_37_WarrantyReturn_Type
 */
class FL37WarrantyReturnType extends GutdfSegment
{
    /**
     * 37.1. Признак обязанности возместить выплаченную сумму = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 37.1. Признак обязанности возместить выплаченную сумму = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 37.2. Сумма, подлежащая возмещению
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 37.3. Сумма, выплаченная принципалом
     *
     * @var float $paidSum
     */
    private $paidSum = null;

    /**
     * 37.4. Признак соблюдения порядка возмещения = 0
     *
     * @var string $compliance0
     */
    private $compliance0 = null;

    /**
     * 37.4. Признак соблюдения порядка возмещения = 1
     *
     * @var string $compliance1
     */
    private $compliance1 = null;

    /**
     * 37.5. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as exist0
     *
     * 37.1. Признак обязанности возместить выплаченную сумму = 0
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
     * 37.1. Признак обязанности возместить выплаченную сумму = 0
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
     * 37.1. Признак обязанности возместить выплаченную сумму = 1
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
     * 37.1. Признак обязанности возместить выплаченную сумму = 1
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
     * Gets as sum
     *
     * 37.2. Сумма, подлежащая возмещению
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 37.2. Сумма, подлежащая возмещению
     *
     * @param float $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as paidSum
     *
     * 37.3. Сумма, выплаченная принципалом
     *
     * @return float
     */
    public function getPaidSum()
    {
        return $this->paidSum;
    }

    /**
     * Sets a new paidSum
     *
     * 37.3. Сумма, выплаченная принципалом
     *
     * @param float $paidSum
     * @return self
     */
    public function setPaidSum($paidSum)
    {
        $this->paidSum = $paidSum;
        return $this;
    }

    /**
     * Gets as compliance0
     *
     * 37.4. Признак соблюдения порядка возмещения = 0
     *
     * @return string
     */
    public function getCompliance0()
    {
        return $this->compliance0;
    }

    /**
     * Sets a new compliance0
     *
     * 37.4. Признак соблюдения порядка возмещения = 0
     *
     * @param string $compliance0
     * @return self
     */
    public function setCompliance0($compliance0)
    {
        $this->compliance0 = $compliance0;
        return $this;
    }

    /**
     * Gets as compliance1
     *
     * 37.4. Признак соблюдения порядка возмещения = 1
     *
     * @return string
     */
    public function getCompliance1()
    {
        return $this->compliance1;
    }

    /**
     * Sets a new compliance1
     *
     * 37.4. Признак соблюдения порядка возмещения = 1
     *
     * @param string $compliance1
     * @return self
     */
    public function setCompliance1($compliance1)
    {
        $this->compliance1 = $compliance1;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 37.5. Дата расчета
     *
     * @return \DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 37.5. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(?\DateTime $calcDate = null)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_37_WarrantyReturn';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак обязанности возместить выплаченную сумму 0' => 'Код «1» – принципал обязан возместить гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 37 не заполняются.',
            'Признак обязанности возместить выплаченную сумму 1' => 'Код «1» – принципал обязан возместить гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 37 не заполняются.',
            'Сумма, подлежащая возмещению' => '',
            'Сумма, выплаченная принципалом' => '',
            'Признак соблюдения порядка возмещения 0' => 'Код «1» – принципал надлежаще возмещает гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует.',
            'Признак соблюдения порядка возмещения 1' => 'Код «1» – принципал надлежаще возмещает гаранту выплаченную им сумму; код «0» – обстоятельство кода «1» отсутствует.',
            'Дата расчета' => 'Дата, по состоянию на которую рассчитаны значения показателей блока 37',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 37. Сведения о возмещении принципалом гаранту выплаченной суммы';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $account = $this->sendData->getAccountReplyRUTDF();

        if(!$account->hasGuaranteeRepay){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }

        $this->exist0 = null;
        $this->exist1 = '';
        $this->sum = $this->formatCurrency($account->guaranteeToRepay);
        $this->paidSum = $this->formatCurrency($account->guaranteeRepayAmt);

        if($account->guaranteeRepayKeepCode){
            $this->compliance0 = null;
            $this->compliance1 = '';
        }else{
            $this->compliance0 = '';
            $this->compliance1 = null;
        }

        $this->calcDate = $this->formatDate($account->guaranteeDate);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'sum',
            'paidSum',
            'compliance_0' => 'compliance0',
            'compliance_1' => 'compliance1',
            'calcDate',
        ];
    }
}

