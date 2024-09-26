<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent112Type
 *
 * Изменились сведения по делу о банкротстве субъекта
 * XSD Type: FL_Event_1_12_Type
 */
class FLEvent112Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13Bankruptcy
     */
    private $fL13Bankruptcy = null;

    /**
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14BankruptcyEndType $fL14BankruptcyEnd
     */
    private $fL14BankruptcyEnd = null;

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
     * Gets as fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType
     */
    public function getFL13Bankruptcy()
    {
        return $this->fL13Bankruptcy;
    }

    /**
     * Sets a new fL13Bankruptcy
     *
     * Блок 13. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13Bankruptcy
     * @return self
     */
    public function setFL13Bankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13Bankruptcy)
    {
        $this->fL13Bankruptcy = $fL13Bankruptcy;
        return $this;
    }

    /**
     * Gets as fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14BankruptcyEndType
     */
    public function getFL14BankruptcyEnd()
    {
        return $this->fL14BankruptcyEnd;
    }

    /**
     * Sets a new fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14BankruptcyEndType $fL14BankruptcyEnd
     * @return self
     */
    public function setFL14BankruptcyEnd(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14BankruptcyEndType $fL14BankruptcyEnd)
    {
        $this->fL14BankruptcyEnd = $fL14BankruptcyEnd;
        return $this;
    }
}

