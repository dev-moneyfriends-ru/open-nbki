<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent115Type
 *
 * Пользователь запросил кредитный отчет субъекта (в соответствии с частью 16.1 статьи 4 Федерального закона от 30 декабря 2004 года «О кредитных историях» кредитная история субъекта не формируется на основании запросов пользователей кредитной истории в случае отсутствия основной и информационной частей кредитной истории в бюро
 * XSD Type: FL_Event_1_15_Type
 */
class FLEvent115Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 44. Сведения о запросе информации пользователем
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL44CustomerRequestType $fL44CustomerRequest
     */
    private $fL44CustomerRequest = null;

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
     * Gets as fL44CustomerRequest
     *
     * Блок 44. Сведения о запросе информации пользователем
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL44CustomerRequestType
     */
    public function getFL44CustomerRequest()
    {
        return $this->fL44CustomerRequest;
    }

    /**
     * Sets a new fL44CustomerRequest
     *
     * Блок 44. Сведения о запросе информации пользователем
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL44CustomerRequestType $fL44CustomerRequest
     * @return self
     */
    public function setFL44CustomerRequest(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL44CustomerRequestType $fL44CustomerRequest)
    {
        $this->fL44CustomerRequest = $fL44CustomerRequest;
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

