<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent27Type
 *
 * Квалифицированное бюро получило от бюро данные для формирования сведений о среднемесячных платежах субъекта
 * XSD Type: FL_Event_2_7_Type
 */
class FLEvent27Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 40. Сведения квалифицированного бюро о среднемесячных платежах по договору займа (кредита)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL40AvgPaymentType $fL40AvgPayment
     */
    private $fL40AvgPayment = null;

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
     * Gets as fL40AvgPayment
     *
     * Блок 40. Сведения квалифицированного бюро о среднемесячных платежах по договору займа (кредита)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL40AvgPaymentType
     */
    public function getFL40AvgPayment()
    {
        return $this->fL40AvgPayment;
    }

    /**
     * Sets a new fL40AvgPayment
     *
     * Блок 40. Сведения квалифицированного бюро о среднемесячных платежах по договору займа (кредита)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL40AvgPaymentType $fL40AvgPayment
     * @return self
     */
    public function setFL40AvgPayment(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL40AvgPaymentType $fL40AvgPayment)
    {
        $this->fL40AvgPayment = $fL40AvgPayment;
        return $this;
    }
}

