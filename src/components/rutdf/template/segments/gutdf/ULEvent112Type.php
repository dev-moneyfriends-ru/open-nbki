<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent112Type
 *
 * Изменились сведения по делу о банкротстве субъекта
 * XSD Type: UL_Event_1_12_Type
 */
class ULEvent112Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6Bankruptcy
     */
    private $uL6Bankruptcy = null;

    /**
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL7BankruptcyEndType $uL7BankruptcyEnd
     */
    private $uL7BankruptcyEnd = null;

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
     * Gets as uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType
     */
    public function getUL6Bankruptcy()
    {
        return $this->uL6Bankruptcy;
    }

    /**
     * Sets a new uL6Bankruptcy
     *
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6Bankruptcy
     * @return self
     */
    public function setUL6Bankruptcy(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6Bankruptcy)
    {
        $this->uL6Bankruptcy = $uL6Bankruptcy;
        return $this;
    }

    /**
     * Gets as uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL7BankruptcyEndType
     */
    public function getUL7BankruptcyEnd()
    {
        return $this->uL7BankruptcyEnd;
    }

    /**
     * Sets a new uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL7BankruptcyEndType $uL7BankruptcyEnd
     * @return self
     */
    public function setUL7BankruptcyEnd(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL7BankruptcyEndType $uL7BankruptcyEnd)
    {
        $this->uL7BankruptcyEnd = $uL7BankruptcyEnd;
        return $this;
    }
}

