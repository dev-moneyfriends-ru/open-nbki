<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL20JointDebtorsType
 *
 * Блок 20. Сведения о солидарных должниках
 * XSD Type: FL_20_JointDebtors_Type
 */
class FL20JointDebtorsType
{
    /**
     * 20.1. Признак наличия солидарных должников = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 20.1. Признак наличия солидарных должников = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 20.2. Число солидарных должников
     *
     * @var int $num
     */
    private $num = null;

    /**
     * Gets as exist0
     *
     * 20.1. Признак наличия солидарных должников = 0
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
     * 20.1. Признак наличия солидарных должников = 0
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
     * 20.1. Признак наличия солидарных должников = 1
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
     * 20.1. Признак наличия солидарных должников = 1
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
     * Gets as num
     *
     * 20.2. Число солидарных должников
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 20.2. Число солидарных должников
     *
     * @param int $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }
}

