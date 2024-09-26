<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent114Type
 *
 * Пользователь обратился за кредитной оценкой (скорингом) субъекта
 * XSD Type: UL_Event_1_14_Type
 */
class ULEvent114Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 9. Кредитная оценка (скоринг)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL9ScoreType $uL9Score
     */
    private $uL9Score = null;

    /**
     * Блок 39. Сведения о пользователе – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL39OrgCustomerType $uL39OrgCustomer
     */
    private $uL39OrgCustomer = null;

    /**
     * Блок 40. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType $uL40PersonCustomer
     */
    private $uL40PersonCustomer = null;

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
     * Gets as uL9Score
     *
     * Блок 9. Кредитная оценка (скоринг)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL9ScoreType
     */
    public function getUL9Score()
    {
        return $this->uL9Score;
    }

    /**
     * Sets a new uL9Score
     *
     * Блок 9. Кредитная оценка (скоринг)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL9ScoreType $uL9Score
     * @return self
     */
    public function setUL9Score(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL9ScoreType $uL9Score)
    {
        $this->uL9Score = $uL9Score;
        return $this;
    }

    /**
     * Gets as uL39OrgCustomer
     *
     * Блок 39. Сведения о пользователе – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL39OrgCustomerType
     */
    public function getUL39OrgCustomer()
    {
        return $this->uL39OrgCustomer;
    }

    /**
     * Sets a new uL39OrgCustomer
     *
     * Блок 39. Сведения о пользователе – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL39OrgCustomerType $uL39OrgCustomer
     * @return self
     */
    public function setUL39OrgCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL39OrgCustomerType $uL39OrgCustomer = null)
    {
        $this->uL39OrgCustomer = $uL39OrgCustomer;
        return $this;
    }

    /**
     * Gets as uL40PersonCustomer
     *
     * Блок 40. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType
     */
    public function getUL40PersonCustomer()
    {
        return $this->uL40PersonCustomer;
    }

    /**
     * Sets a new uL40PersonCustomer
     *
     * Блок 40. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType $uL40PersonCustomer
     * @return self
     */
    public function setUL40PersonCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType $uL40PersonCustomer = null)
    {
        $this->uL40PersonCustomer = $uL40PersonCustomer;
        return $this;
    }
}

