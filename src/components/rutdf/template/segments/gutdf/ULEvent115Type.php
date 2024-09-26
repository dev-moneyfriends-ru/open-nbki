<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent115Type
 *
 * Пользователь запросил кредитный отчет субъекта (в соответствии с частью 16.1 статьи 4 Федерального закона от 30 декабря 2004 года «О кредитных историях» кредитная история субъекта не формируется на основании запросов пользователей кредитной истории в случае отсутствия основной и информационной частей кредитной истории в бюро
 * XSD Type: UL_Event_1_15_Type
 */
class ULEvent115Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 34. Сведения о запросе информации пользователем
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL34CustomerRequestType $uL34CustomerRequest
     */
    private $uL34CustomerRequest = null;

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
     * Gets as uL34CustomerRequest
     *
     * Блок 34. Сведения о запросе информации пользователем
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL34CustomerRequestType
     */
    public function getUL34CustomerRequest()
    {
        return $this->uL34CustomerRequest;
    }

    /**
     * Sets a new uL34CustomerRequest
     *
     * Блок 34. Сведения о запросе информации пользователем
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL34CustomerRequestType $uL34CustomerRequest
     * @return self
     */
    public function setUL34CustomerRequest(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL34CustomerRequestType $uL34CustomerRequest)
    {
        $this->uL34CustomerRequest = $uL34CustomerRequest;
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

