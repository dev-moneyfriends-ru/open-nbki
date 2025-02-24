<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL13JointDebtorsType
 *
 * Блок 13. Сведения о солидарных должниках
 * XSD Type: UL_13_JointDebtors_Type
 */
class UL13JointDebtorsType extends GutdfSegment
{
    /**
     * 13.1. Признак наличия солидарных должников = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 13.1. Признак наличия солидарных должников = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 13.2. Число солидарных должников
     *
     * @var int $num
     */
    private $num = null;

    /**
     * Gets as exist0
     *
     * 13.1. Признак наличия солидарных должников = 0
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
     * 13.1. Признак наличия солидарных должников = 0
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
     * 13.1. Признак наличия солидарных должников = 1
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
     * 13.1. Признак наличия солидарных должников = 1
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
     * 13.2. Число солидарных должников
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
     * 13.2. Число солидарных должников
     *
     * @param int $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_13_JointDebtors';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
          'Признак наличия солидарных должников 0' => 'код «0» – обстоятельство кода «1» отсутствует.',
          'Признак наличия солидарных должников 1' => 'Код «1» – в обязательстве участвуют солидарные должники;',
          'Число солидарных должников' => '',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 13. Сведения о солидарных должниках';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $coBorrower = $this->sendData->getAccountReplyRUTDF()->getCoborrower();
        if($coBorrower === null || empty($coBorrower->solidaryNum)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $this->exist0 = null;
        $this->exist1 = '';
        $this->num = $coBorrower->solidaryNum;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'num',
        ];
    }
}

