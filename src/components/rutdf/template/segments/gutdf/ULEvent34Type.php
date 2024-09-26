<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent34Type
 *
 * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
 * XSD Type: UL_Event_3_4_Type
 */
class ULEvent34Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationRType $uL45ApplicationR
     */
    private $uL45ApplicationR = null;

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * Sets a new operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @param string $operationCode
     * @return self
     */
    public function setOperationCode($operationCode)
    {
        $this->operationCode = $operationCode;
        return $this;
    }

    /**
     * Gets as uL45ApplicationR
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationRType
     */
    public function getUL45ApplicationR()
    {
        return $this->uL45ApplicationR;
    }

    /**
     * Sets a new uL45ApplicationR
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationRType $uL45ApplicationR
     * @return self
     */
    public function setUL45ApplicationR(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationRType $uL45ApplicationR)
    {
        $this->uL45ApplicationR = $uL45ApplicationR;
        return $this;
    }
}

