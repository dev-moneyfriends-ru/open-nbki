<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL54AccountingType
 *
 * Блок 54. Сведения об учете обязательства
 * XSD Type: FL_54_Accounting_Type
 */
class FL54AccountingType extends GutdfSegment
{
    /**
     * 54.1. Признак учета обязательства = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 54.3. Сумма обязательства, учтенная на внебалансовых счетах
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 54.1. Признак учета обязательства = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 54.2. Минимальная процентная ставка
     *
     * @var float $minInterest
     */
    private $minInterest = null;

    /**
     * 54.6. Максимальная процентная ставка
     *
     * @var float $maxInterest
     */
    private $maxInterest = null;

    /**
     * 54.4. Признак льготного финансирования с государственной поддержкой = 0
     *
     * @var string $supportExist0
     */
    private $supportExist0 = null;

    /**
     * 54.4. Признак льготного финансирования с государственной поддержкой = 1
     *
     * @var string $supportExist1
     */
    private $supportExist1 = null;

    /**
     * 54.5. Информация о программе государственной поддержки
     *
     * @var string[] $supportInfo
     */
    private $supportInfo = [
        
    ];

    /**
     * 54.7. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as exist0
     *
     * 54.1. Признак учета обязательства = 0
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
     * 54.1. Признак учета обязательства = 0
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
     * Gets as sum
     *
     * 54.3. Сумма обязательства, учтенная на внебалансовых счетах
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
     * 54.3. Сумма обязательства, учтенная на внебалансовых счетах
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
     * Gets as exist1
     *
     * 54.1. Признак учета обязательства = 1
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
     * 54.1. Признак учета обязательства = 1
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
     * Gets as minInterest
     *
     * 54.2. Минимальная процентная ставка
     *
     * @return float
     */
    public function getMinInterest()
    {
        return $this->minInterest;
    }

    /**
     * Sets a new minInterest
     *
     * 54.2. Минимальная процентная ставка
     *
     * @param float $minInterest
     * @return self
     */
    public function setMinInterest($minInterest)
    {
        $this->minInterest = $minInterest;
        return $this;
    }

    /**
     * Gets as maxInterest
     *
     * 54.6. Максимальная процентная ставка
     *
     * @return float
     */
    public function getMaxInterest()
    {
        return $this->maxInterest;
    }

    /**
     * Sets a new maxInterest
     *
     * 54.6. Максимальная процентная ставка
     *
     * @param float $maxInterest
     * @return self
     */
    public function setMaxInterest($maxInterest)
    {
        $this->maxInterest = $maxInterest;
        return $this;
    }

    /**
     * Gets as supportExist0
     *
     * 54.4. Признак льготного финансирования с государственной поддержкой = 0
     *
     * @return string
     */
    public function getSupportExist0()
    {
        return $this->supportExist0;
    }

    /**
     * Sets a new supportExist0
     *
     * 54.4. Признак льготного финансирования с государственной поддержкой = 0
     *
     * @param string $supportExist0
     * @return self
     */
    public function setSupportExist0($supportExist0)
    {
        $this->supportExist0 = $supportExist0;
        return $this;
    }

    /**
     * Gets as supportExist1
     *
     * 54.4. Признак льготного финансирования с государственной поддержкой = 1
     *
     * @return string
     */
    public function getSupportExist1()
    {
        return $this->supportExist1;
    }

    /**
     * Sets a new supportExist1
     *
     * 54.4. Признак льготного финансирования с государственной поддержкой = 1
     *
     * @param string $supportExist1
     * @return self
     */
    public function setSupportExist1($supportExist1)
    {
        $this->supportExist1 = $supportExist1;
        return $this;
    }

    /**
     * Adds as supportInfo
     *
     * 54.5. Информация о программе государственной поддержки
     *
     * @return self
     * @param string $supportInfo
     */
    public function addToSupportInfo($supportInfo)
    {
        $this->supportInfo[] = $supportInfo;
        return $this;
    }

    /**
     * isset supportInfo
     *
     * 54.5. Информация о программе государственной поддержки
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportInfo($index)
    {
        return isset($this->supportInfo[$index]);
    }

    /**
     * unset supportInfo
     *
     * 54.5. Информация о программе государственной поддержки
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportInfo($index)
    {
        unset($this->supportInfo[$index]);
    }

    /**
     * Gets as supportInfo
     *
     * 54.5. Информация о программе государственной поддержки
     *
     * @return string[]
     */
    public function getSupportInfo()
    {
        return $this->supportInfo;
    }

    /**
     * Sets a new supportInfo
     *
     * 54.5. Информация о программе государственной поддержки
     *
     * @param string $supportInfo
     * @return self
     */
    public function setSupportInfo(array $supportInfo = null)
    {
        $this->supportInfo = $supportInfo;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 54.7. Дата расчета
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
     * 54.7. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_54_Accounting';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак учета обязательства 0' => 'код «0» – обстоятельство кода «1» отсутствует, в том числе в случае если обязательство частично учтено на внебалансовых счетах.',
            'Признак учета обязательства 1' => 'Код «1» – обязательство учтено у источника на балансовых счетах;',
            'Минимальная процентная ставка' => 'Значение минимальной процентной ставки в соответствии с условиями сделки. Если условиями сделки не предусмотрены различные процентные ставки, значение равно процентной ставке в соответствии с условиями сделки. В случае отсутствия процентной ставки в соответствии с условиями сделки, указывается значение «0.00».',
            'Сумма обязательства, учтенная на внебалансовых счетах' => 'Заполняется, в случае если по показателю 54.1 «Признак учета обязательства» указан код «0». Сумма обязательства, которая учтена на внебалансовых счетах источника.',
            'Признак льготного финансирования с государственной поддержкой 0' => 'код «1» – в случае если заем (кредит) или предмет лизинга получен субъектом в рамках программы льготного финансирования с государственной поддержкой; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак льготного финансирования с государственной поддержкой 1' => 'код «1» – в случае если заем (кредит) или предмет лизинга получен субъектом в рамках программы льготного финансирования с государственной поддержкой; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Информация о программе государственной поддержки' => 'Регистрационный номер, дата и наименование нормативного акта, которым утверждена программа льготного финансирования с государственной поддержкой.',
            'Максимальная процентная ставка' => 'Значение максимальной процентной ставки в соответствии с условиями сделки. Если условиями сделки не предусмотрены различные процентные ставки, значение равно процентной ставке в соответствии с условиями сделки. В случае отсутствия процентной ставки в соответствии с условиями сделки, указывается значение «0.00».',
            'Дата расчета' => 'Дата, по состоянию на которую сформированы (рассчитаны) показатели блока',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 54. Сведения об учете обязательства';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $account = $this->sendData->getAccountReplyRUTDF();

        if($account->obligAccountCode){
            $this->exist0 = null;
            $this->exist1 = '';
            $this->sum = $this->formatCurrency($account->offbalanceAmt);
        }else{
            $this->exist0 = '';
            $this->exist1 = null;
            $this->sum = $this->formatCurrency(0);
        }

        $this->minInterest = $account->intRate;
        $this->maxInterest = $account->intRate;

        if($account->preferenFinanc){
            $this->supportExist0 = null;
            $this->supportExist1 = '';
            $this->supportInfo = $account->preferenFinancInfo;
        }else{
            $this->supportExist0 = '';
            $this->supportExist1 = null;
        }

        $this->calcDate = $this->formatDate($this->sendData->getReportingDt());
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
            'supportExist_0' => 'supportExist0',
            'supportExist_1' => 'supportExist1',
            'supportInfo',
            'calcDate'
        ];
    }
}

