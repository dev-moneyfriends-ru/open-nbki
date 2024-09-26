<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL49OrgCustomerType
 *
 * Блок 49. Сведения о пользователе – юридическом лице
 * XSD Type: FL_49_OrgCustomer_Type
 */
class FL49OrgCustomerType
{
    /**
     * 49.1. Код пользователя
     *
     * @var string $clientCode
     */
    private $clientCode = null;

    /**
     * 49.2. Признак регистрации в Российской Федерации = 0
     *
     * @var string $clientRegistrationFact0
     */
    private $clientRegistrationFact0 = null;

    /**
     * 49.2. Признак регистрации в Российской Федерации = 1
     *
     * @var string $clientRegistrationFact1
     */
    private $clientRegistrationFact1 = null;

    /**
     * 49.3. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 49.4. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 49.5. Иное наименование
     *
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * 49.6. Идентификатор LEI
     *
     * @var string $clientIdLei
     */
    private $clientIdLei = null;

    /**
     * 49.7. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType\TaxCodeGroupFL49OrgCustomerAType[] $taxCodeGroupFL49OrgCustomer
     */
    private $taxCodeGroupFL49OrgCustomer = [
        
    ];

    /**
     * 49.10. Признак мониторинга изменения кредитной истории = 0
     *
     * @var string $clientMonitoringChangingFact0
     */
    private $clientMonitoringChangingFact0 = null;

    /**
     * 49.10. Признак мониторинга изменения кредитной истории = 1
     *
     * @var string $clientMonitoringChangingFact1
     */
    private $clientMonitoringChangingFact1 = null;

    /**
     * 49.11. Дата начала мониторинга изменения кредитной истории
     *
     * @var string $clientBeginDateMonitoringChanging
     */
    private $clientBeginDateMonitoringChanging = null;

    /**
     * 49.12. Код запрошенных сведений
     *
     * @var string[] $clientRequestKindCode
     */
    private $clientRequestKindCode = [
        
    ];

    /**
     * 49.13. Дата предоставления сведений
     *
     * @var string $clientResponseDate
     */
    private $clientResponseDate = null;

    /**
     * 49.14. Дата запроса
     *
     * @var string $clientRequestDate
     */
    private $clientRequestDate = null;

    /**
     * 49.15. Код цели запроса
     *
     * @var string[] $clientRequestGoalCode
     */
    private $clientRequestGoalCode = [
        
    ];

    /**
     * 49.16. Иная цель запроса
     *
     * @var string[] $clientRequestOtherCode
     */
    private $clientRequestOtherCode = [
        
    ];

    /**
     * 49.17. Сумма обязательства, в связи с которым сделан запрос
     *
     * @var float $clientRequestSum
     */
    private $clientRequestSum = null;

    /**
     * 49.18. Валюта обязательства, в связи с которым сделан запрос
     *
     * @var string $clientRequestCurrency
     */
    private $clientRequestCurrency = null;

    /**
     * Gets as clientCode
     *
     * 49.1. Код пользователя
     *
     * @return string
     */
    public function getClientCode()
    {
        return $this->clientCode;
    }

    /**
     * Sets a new clientCode
     *
     * 49.1. Код пользователя
     *
     * @param string $clientCode
     * @return self
     */
    public function setClientCode($clientCode)
    {
        $this->clientCode = $clientCode;
        return $this;
    }

    /**
     * Gets as clientRegistrationFact0
     *
     * 49.2. Признак регистрации в Российской Федерации = 0
     *
     * @return string
     */
    public function getClientRegistrationFact0()
    {
        return $this->clientRegistrationFact0;
    }

    /**
     * Sets a new clientRegistrationFact0
     *
     * 49.2. Признак регистрации в Российской Федерации = 0
     *
     * @param string $clientRegistrationFact0
     * @return self
     */
    public function setClientRegistrationFact0($clientRegistrationFact0)
    {
        $this->clientRegistrationFact0 = $clientRegistrationFact0;
        return $this;
    }

    /**
     * Gets as clientRegistrationFact1
     *
     * 49.2. Признак регистрации в Российской Федерации = 1
     *
     * @return string
     */
    public function getClientRegistrationFact1()
    {
        return $this->clientRegistrationFact1;
    }

    /**
     * Sets a new clientRegistrationFact1
     *
     * 49.2. Признак регистрации в Российской Федерации = 1
     *
     * @param string $clientRegistrationFact1
     * @return self
     */
    public function setClientRegistrationFact1($clientRegistrationFact1)
    {
        $this->clientRegistrationFact1 = $clientRegistrationFact1;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * 49.3. Полное наименование
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 49.3. Полное наименование
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * 49.4. Сокращенное наименование
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 49.4. Сокращенное наименование
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as otherName
     *
     * 49.5. Иное наименование
     *
     * @return string
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * 49.5. Иное наименование
     *
     * @param string $otherName
     * @return self
     */
    public function setOtherName($otherName)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as clientIdLei
     *
     * 49.6. Идентификатор LEI
     *
     * @return string
     */
    public function getClientIdLei()
    {
        return $this->clientIdLei;
    }

    /**
     * Sets a new clientIdLei
     *
     * 49.6. Идентификатор LEI
     *
     * @param string $clientIdLei
     * @return self
     */
    public function setClientIdLei($clientIdLei)
    {
        $this->clientIdLei = $clientIdLei;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 49.7. Регистрационный номер
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 49.7. Регистрационный номер
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Adds as taxCodeGroupFL49OrgCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType\TaxCodeGroupFL49OrgCustomerAType $taxCodeGroupFL49OrgCustomer
     *@return self
     */
    public function addToTaxCodeGroupFL49OrgCustomer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType\TaxCodeGroupFL49OrgCustomerAType $taxCodeGroupFL49OrgCustomer)
    {
        $this->taxCodeGroupFL49OrgCustomer[] = $taxCodeGroupFL49OrgCustomer;
        return $this;
    }

    /**
     * isset taxCodeGroupFL49OrgCustomer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCodeGroupFL49OrgCustomer($index)
    {
        return isset($this->taxCodeGroupFL49OrgCustomer[$index]);
    }

    /**
     * unset taxCodeGroupFL49OrgCustomer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCodeGroupFL49OrgCustomer($index)
    {
        unset($this->taxCodeGroupFL49OrgCustomer[$index]);
    }

    /**
     * Gets as taxCodeGroupFL49OrgCustomer
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType\TaxCodeGroupFL49OrgCustomerAType[]
     */
    public function getTaxCodeGroupFL49OrgCustomer()
    {
        return $this->taxCodeGroupFL49OrgCustomer;
    }

    /**
     * Sets a new taxCodeGroupFL49OrgCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType\TaxCodeGroupFL49OrgCustomerAType[] $taxCodeGroupFL49OrgCustomer
     * @return self
     */
    public function setTaxCodeGroupFL49OrgCustomer(array $taxCodeGroupFL49OrgCustomer = null)
    {
        $this->taxCodeGroupFL49OrgCustomer = $taxCodeGroupFL49OrgCustomer;
        return $this;
    }

    /**
     * Gets as clientMonitoringChangingFact0
     *
     * 49.10. Признак мониторинга изменения кредитной истории = 0
     *
     * @return string
     */
    public function getClientMonitoringChangingFact0()
    {
        return $this->clientMonitoringChangingFact0;
    }

    /**
     * Sets a new clientMonitoringChangingFact0
     *
     * 49.10. Признак мониторинга изменения кредитной истории = 0
     *
     * @param string $clientMonitoringChangingFact0
     * @return self
     */
    public function setClientMonitoringChangingFact0($clientMonitoringChangingFact0)
    {
        $this->clientMonitoringChangingFact0 = $clientMonitoringChangingFact0;
        return $this;
    }

    /**
     * Gets as clientMonitoringChangingFact1
     *
     * 49.10. Признак мониторинга изменения кредитной истории = 1
     *
     * @return string
     */
    public function getClientMonitoringChangingFact1()
    {
        return $this->clientMonitoringChangingFact1;
    }

    /**
     * Sets a new clientMonitoringChangingFact1
     *
     * 49.10. Признак мониторинга изменения кредитной истории = 1
     *
     * @param string $clientMonitoringChangingFact1
     * @return self
     */
    public function setClientMonitoringChangingFact1($clientMonitoringChangingFact1)
    {
        $this->clientMonitoringChangingFact1 = $clientMonitoringChangingFact1;
        return $this;
    }

    /**
     * Gets as clientBeginDateMonitoringChanging
     *
     * 49.11. Дата начала мониторинга изменения кредитной истории
     *
     * @return string
     */
    public function getClientBeginDateMonitoringChanging()
    {
        return $this->clientBeginDateMonitoringChanging;
    }

    /**
     * Sets a new clientBeginDateMonitoringChanging
     *
     * 49.11. Дата начала мониторинга изменения кредитной истории
     *
     * @param string $clientBeginDateMonitoringChanging
     * @return self
     */
    public function setClientBeginDateMonitoringChanging($clientBeginDateMonitoringChanging)
    {
        $this->clientBeginDateMonitoringChanging = $clientBeginDateMonitoringChanging;
        return $this;
    }

    /**
     * Adds as clientRequestKindCode
     *
     * 49.12. Код запрошенных сведений
     *
     * @return self
     * @param string $clientRequestKindCode
     */
    public function addToClientRequestKindCode($clientRequestKindCode)
    {
        $this->clientRequestKindCode[] = $clientRequestKindCode;
        return $this;
    }

    /**
     * isset clientRequestKindCode
     *
     * 49.12. Код запрошенных сведений
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClientRequestKindCode($index)
    {
        return isset($this->clientRequestKindCode[$index]);
    }

    /**
     * unset clientRequestKindCode
     *
     * 49.12. Код запрошенных сведений
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClientRequestKindCode($index)
    {
        unset($this->clientRequestKindCode[$index]);
    }

    /**
     * Gets as clientRequestKindCode
     *
     * 49.12. Код запрошенных сведений
     *
     * @return string[]
     */
    public function getClientRequestKindCode()
    {
        return $this->clientRequestKindCode;
    }

    /**
     * Sets a new clientRequestKindCode
     *
     * 49.12. Код запрошенных сведений
     *
     * @param string $clientRequestKindCode
     * @return self
     */
    public function setClientRequestKindCode(array $clientRequestKindCode)
    {
        $this->clientRequestKindCode = $clientRequestKindCode;
        return $this;
    }

    /**
     * Gets as clientResponseDate
     *
     * 49.13. Дата предоставления сведений
     *
     * @return string
     */
    public function getClientResponseDate()
    {
        return $this->clientResponseDate;
    }

    /**
     * Sets a new clientResponseDate
     *
     * 49.13. Дата предоставления сведений
     *
     * @param string $clientResponseDate
     * @return self
     */
    public function setClientResponseDate($clientResponseDate)
    {
        $this->clientResponseDate = $clientResponseDate;
        return $this;
    }

    /**
     * Gets as clientRequestDate
     *
     * 49.14. Дата запроса
     *
     * @return string
     */
    public function getClientRequestDate()
    {
        return $this->clientRequestDate;
    }

    /**
     * Sets a new clientRequestDate
     *
     * 49.14. Дата запроса
     *
     * @param string $clientRequestDate
     * @return self
     */
    public function setClientRequestDate($clientRequestDate)
    {
        $this->clientRequestDate = $clientRequestDate;
        return $this;
    }

    /**
     * Adds as clientRequestGoalCode
     *
     * 49.15. Код цели запроса
     *
     * @return self
     * @param string $clientRequestGoalCode
     */
    public function addToClientRequestGoalCode($clientRequestGoalCode)
    {
        $this->clientRequestGoalCode[] = $clientRequestGoalCode;
        return $this;
    }

    /**
     * isset clientRequestGoalCode
     *
     * 49.15. Код цели запроса
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClientRequestGoalCode($index)
    {
        return isset($this->clientRequestGoalCode[$index]);
    }

    /**
     * unset clientRequestGoalCode
     *
     * 49.15. Код цели запроса
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClientRequestGoalCode($index)
    {
        unset($this->clientRequestGoalCode[$index]);
    }

    /**
     * Gets as clientRequestGoalCode
     *
     * 49.15. Код цели запроса
     *
     * @return string[]
     */
    public function getClientRequestGoalCode()
    {
        return $this->clientRequestGoalCode;
    }

    /**
     * Sets a new clientRequestGoalCode
     *
     * 49.15. Код цели запроса
     *
     * @param string $clientRequestGoalCode
     * @return self
     */
    public function setClientRequestGoalCode(array $clientRequestGoalCode)
    {
        $this->clientRequestGoalCode = $clientRequestGoalCode;
        return $this;
    }

    /**
     * Adds as clientRequestOtherCode
     *
     * 49.16. Иная цель запроса
     *
     * @return self
     * @param string $clientRequestOtherCode
     */
    public function addToClientRequestOtherCode($clientRequestOtherCode)
    {
        $this->clientRequestOtherCode[] = $clientRequestOtherCode;
        return $this;
    }

    /**
     * isset clientRequestOtherCode
     *
     * 49.16. Иная цель запроса
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClientRequestOtherCode($index)
    {
        return isset($this->clientRequestOtherCode[$index]);
    }

    /**
     * unset clientRequestOtherCode
     *
     * 49.16. Иная цель запроса
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClientRequestOtherCode($index)
    {
        unset($this->clientRequestOtherCode[$index]);
    }

    /**
     * Gets as clientRequestOtherCode
     *
     * 49.16. Иная цель запроса
     *
     * @return string[]
     */
    public function getClientRequestOtherCode()
    {
        return $this->clientRequestOtherCode;
    }

    /**
     * Sets a new clientRequestOtherCode
     *
     * 49.16. Иная цель запроса
     *
     * @param string $clientRequestOtherCode
     * @return self
     */
    public function setClientRequestOtherCode(array $clientRequestOtherCode = null)
    {
        $this->clientRequestOtherCode = $clientRequestOtherCode;
        return $this;
    }

    /**
     * Gets as clientRequestSum
     *
     * 49.17. Сумма обязательства, в связи с которым сделан запрос
     *
     * @return float
     */
    public function getClientRequestSum()
    {
        return $this->clientRequestSum;
    }

    /**
     * Sets a new clientRequestSum
     *
     * 49.17. Сумма обязательства, в связи с которым сделан запрос
     *
     * @param float $clientRequestSum
     * @return self
     */
    public function setClientRequestSum($clientRequestSum)
    {
        $this->clientRequestSum = $clientRequestSum;
        return $this;
    }

    /**
     * Gets as clientRequestCurrency
     *
     * 49.18. Валюта обязательства, в связи с которым сделан запрос
     *
     * @return string
     */
    public function getClientRequestCurrency()
    {
        return $this->clientRequestCurrency;
    }

    /**
     * Sets a new clientRequestCurrency
     *
     * 49.18. Валюта обязательства, в связи с которым сделан запрос
     *
     * @param string $clientRequestCurrency
     * @return self
     */
    public function setClientRequestCurrency($clientRequestCurrency)
    {
        $this->clientRequestCurrency = $clientRequestCurrency;
        return $this;
    }
}

