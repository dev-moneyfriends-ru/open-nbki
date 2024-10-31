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
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 6. Сведения по делу о несостоятельности (банкротстве)
     *
     * @var UL6BankruptcyType $uL6Bankruptcy
     */
    private $uL6Bankruptcy = null;

    /**
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var UL7BankruptcyEndType $uL7BankruptcyEnd
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
     * @return UL6BankruptcyType
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
     * @param UL6BankruptcyType $uL6Bankruptcy
     * @return self
     */
    public function setUL6Bankruptcy(UL6BankruptcyType $uL6Bankruptcy)
    {
        $this->uL6Bankruptcy = $uL6Bankruptcy;
        return $this;
    }

    /**
     * Gets as uL7BankruptcyEnd
     *
     * Блок 7. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return UL7BankruptcyEndType
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
     * @param UL7BankruptcyEndType $uL7BankruptcyEnd
     * @return self
     */
    public function setUL7BankruptcyEnd(UL7BankruptcyEndType $uL7BankruptcyEnd)
    {
        $this->uL7BankruptcyEnd = $uL7BankruptcyEnd;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_1_12';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения по делу о банкротстве субъекта';
    }

    protected function initAttributes()
    {
        $this->uL6Bankruptcy = new UL6BankruptcyType($this->template);
        $this->uL7BankruptcyEnd = new UL7BankruptcyEndType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL6Bankruptcy',
            'uL7BankruptcyEnd',
        ];
    }
}

