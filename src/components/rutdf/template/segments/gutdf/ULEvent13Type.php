<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent13Type
 *
 * Источник отказался от совершения сделки по обращению
 * XSD Type: UL_Event_1_3_Type
 */
class ULEvent13Type extends EventDataType
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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application
     */
    private $uL45Application = null;

    /**
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL47RejectType $uL47Reject
     */
    private $uL47Reject = null;

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
     * Gets as uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType
     */
    public function getUL45Application()
    {
        return $this->uL45Application;
    }

    /**
     * Sets a new uL45Application
     *
     * Блок 45. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application
     * @return self
     */
    public function setUL45Application(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL45ApplicationType $uL45Application)
    {
        $this->uL45Application = $uL45Application;
        return $this;
    }

    /**
     * Gets as uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL47RejectType
     */
    public function getUL47Reject()
    {
        return $this->uL47Reject;
    }

    /**
     * Sets a new uL47Reject
     *
     * Блок 47. Сведения об отказе источника от предложения совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL47RejectType $uL47Reject
     * @return self
     */
    public function setUL47Reject(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL47RejectType $uL47Reject)
    {
        $this->uL47Reject = $uL47Reject;
        return $this;
    }
}

