<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent114Type
 *
 * Пользователь обратился за кредитной оценкой (скорингом) субъекта
 * XSD Type: FL_Event_1_14_Type
 */
class FLEvent114Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 16. Кредитная оценка (скоринг)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL16ScoreType $fL16Score
     */
    private $fL16Score = null;

    /**
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer
     */
    private $fL49OrgCustomer = null;

    /**
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer
     */
    private $fL50PersonCustomer = null;

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
     * Gets as fL16Score
     *
     * Блок 16. Кредитная оценка (скоринг)
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL16ScoreType
     */
    public function getFL16Score()
    {
        return $this->fL16Score;
    }

    /**
     * Sets a new fL16Score
     *
     * Блок 16. Кредитная оценка (скоринг)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL16ScoreType $fL16Score
     * @return self
     */
    public function setFL16Score(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL16ScoreType $fL16Score)
    {
        $this->fL16Score = $fL16Score;
        return $this;
    }

    /**
     * Gets as fL49OrgCustomer
     *
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType
     */
    public function getFL49OrgCustomer()
    {
        return $this->fL49OrgCustomer;
    }

    /**
     * Sets a new fL49OrgCustomer
     *
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer
     * @return self
     */
    public function setFL49OrgCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer = null)
    {
        $this->fL49OrgCustomer = $fL49OrgCustomer;
        return $this;
    }

    /**
     * Gets as fL50PersonCustomer
     *
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType
     */
    public function getFL50PersonCustomer()
    {
        return $this->fL50PersonCustomer;
    }

    /**
     * Sets a new fL50PersonCustomer
     *
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer
     * @return self
     */
    public function setFL50PersonCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer = null)
    {
        $this->fL50PersonCustomer = $fL50PersonCustomer;
        return $this;
    }
}

