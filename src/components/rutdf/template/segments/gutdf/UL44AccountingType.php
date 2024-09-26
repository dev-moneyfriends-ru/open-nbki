<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL44AccountingType
 *
 * Блок 44. Сведения об учете обязательства
 * XSD Type: UL_44_Accounting_Type
 */
class UL44AccountingType
{
    /**
     * 44.1. Признак учета обязательства = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 44.3. Сумма обязательства, учтенная на внебалансовых счетах
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * 44.1. Признак учета обязательства = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 44.2. Процентная ставка
     *
     * @var float $rate
     */
    private $rate = null;

    /**
     * 44.4. Признак льготного финансирования с государственной поддержкой = 0
     *
     * @var string $supportExist0
     */
    private $supportExist0 = null;

    /**
     * 44.4. Признак льготного финансирования с государственной поддержкой = 1
     *
     * @var string $supportExist1
     */
    private $supportExist1 = null;

    /**
     * 44.5. Информация о программе государственной поддержки
     *
     * @var string[] $supportInfo
     */
    private $supportInfo = [
        
    ];

    /**
     * 44.6. Дата расчета
     *
     * @var \DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as exist0
     *
     * 44.1. Признак учета обязательства = 0
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
     * 44.1. Признак учета обязательства = 0
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
     * 44.3. Сумма обязательства, учтенная на внебалансовых счетах
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
     * 44.3. Сумма обязательства, учтенная на внебалансовых счетах
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
     * 44.1. Признак учета обязательства = 1
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
     * 44.1. Признак учета обязательства = 1
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
     * Gets as rate
     *
     * 44.2. Процентная ставка
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * 44.2. Процентная ставка
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as supportExist0
     *
     * 44.4. Признак льготного финансирования с государственной поддержкой = 0
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
     * 44.4. Признак льготного финансирования с государственной поддержкой = 0
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
     * 44.4. Признак льготного финансирования с государственной поддержкой = 1
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
     * 44.4. Признак льготного финансирования с государственной поддержкой = 1
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
     * 44.5. Информация о программе государственной поддержки
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
     * 44.5. Информация о программе государственной поддержки
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
     * 44.5. Информация о программе государственной поддержки
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
     * 44.5. Информация о программе государственной поддержки
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
     * 44.5. Информация о программе государственной поддержки
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
     * 44.6. Дата расчета
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
     * 44.6. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }
}

