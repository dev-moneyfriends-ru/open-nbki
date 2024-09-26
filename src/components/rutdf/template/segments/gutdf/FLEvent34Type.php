<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent34Type
 *
 * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
 * XSD Type: FL_Event_3_4_Type
 */
class FLEvent34Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationRType $fL55ApplicationR
     */
    private $fL55ApplicationR = null;

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
     * Gets as fL55ApplicationR
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationRType
     */
    public function getFL55ApplicationR()
    {
        return $this->fL55ApplicationR;
    }

    /**
     * Sets a new fL55ApplicationR
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationRType $fL55ApplicationR
     * @return self
     */
    public function setFL55ApplicationR(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationRType $fL55ApplicationR)
    {
        $this->fL55ApplicationR = $fL55ApplicationR;
        return $this;
    }
}

