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
     * @var FL13BankruptcyType $fL13Bankruptcy
     */
    private $fL13Bankruptcy = null;

    /**
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @var FL14BankruptcyEndType $fL14BankruptcyEnd
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
     * @return FL13BankruptcyType
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
     * @param FL13BankruptcyType $fL13Bankruptcy
     * @return self
     */
    public function setFL13Bankruptcy(FL13BankruptcyType $fL13Bankruptcy)
    {
        $this->fL13Bankruptcy = $fL13Bankruptcy;
        return $this;
    }

    /**
     * Gets as fL14BankruptcyEnd
     *
     * Блок 14. Сведения о завершении расчетов с кредиторами и освобождении субъекта от исполнения обязательств в связи с банкротством
     *
     * @return FL14BankruptcyEndType
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
     * @param FL14BankruptcyEndType $fL14BankruptcyEnd
     * @return self
     */
    public function setFL14BankruptcyEnd(FL14BankruptcyEndType $fL14BankruptcyEnd)
    {
        $this->fL14BankruptcyEnd = $fL14BankruptcyEnd;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_1_12';
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
        $this->fL13BankruptcyEnd = new FL13BankruptcyType($this->template);
        $this->fL14BankruptcyEnd = new FL14BankruptcyEndType($this->template);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL13Bankruptcy',
            'fL14BankruptcyEnd',
        ];
    }
}

