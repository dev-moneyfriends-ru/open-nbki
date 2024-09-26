<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL40PersonCustomerType
 *
 * Блок 40. Сведения о пользователе – индивидуальном предпринимателе
 * XSD Type: UL_40_PersonCustomer_Type
 */
class UL40PersonCustomerType
{
    /**
     * 40.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 40.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 40.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 40.4. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 40.5. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * 40.6. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType\TaxCodeGroupUL40PersonCustomerAType[] $taxCodeGroupUL40PersonCustomer
     */
    private $taxCodeGroupUL40PersonCustomer = [
        
    ];

    /**
     * 40.9. СНИЛС
     *
     * @var string $socialNum
     */
    private $socialNum = null;

    /**
     * 40.10. Код документа
     *
     * @var string $docCode
     */
    private $docCode = null;

    /**
     * 40.11. Наименование иного документа
     *
     * @var string $docOtherName
     */
    private $docOtherName = null;

    /**
     * 40.12. Серия документа
     *
     * @var string $docSeries
     */
    private $docSeries = null;

    /**
     * 40.13. Номер документа
     *
     * @var string $docNum
     */
    private $docNum = null;

    /**
     * 40.14. Дата выдачи документа
     *
     * @var string $issueDate
     */
    private $issueDate = null;

    /**
     * 40.15. Кем выдан документ
     *
     * @var string $docIssuer
     */
    private $docIssuer = null;

    /**
     * 40.16. Код подразделения
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * 40.17. Признак мониторинга изменения кредитной истории = 0
     *
     * @var string $clientMonitoringChangingFact0
     */
    private $clientMonitoringChangingFact0 = null;

    /**
     * 40.17. Признак мониторинга изменения кредитной истории = 1
     *
     * @var string $clientMonitoringChangingFact1
     */
    private $clientMonitoringChangingFact1 = null;

    /**
     * 40.18. Дата начала мониторинга изменения кредитной истории
     *
     * @var string $clientBeginDateMonitoringChanging
     */
    private $clientBeginDateMonitoringChanging = null;

    /**
     * 40.19. Код запрошенных сведений
     *
     * @var string[] $clientRequestKindCode
     */
    private $clientRequestKindCode = [
        
    ];

    /**
     * 40.20. Дата предоставления сведений
     *
     * @var string $clientResponseDate
     */
    private $clientResponseDate = null;

    /**
     * 40.21. Дата запроса
     *
     * @var string $clientRequestDate
     */
    private $clientRequestDate = null;

    /**
     * 40.22. Код цели запроса
     *
     * @var string[] $clientRequestGoalCode
     */
    private $clientRequestGoalCode = [
        
    ];

    /**
     * 40.23. Иная цель запроса
     *
     * @var string[] $clientRequestOtherCode
     */
    private $clientRequestOtherCode = [
        
    ];

    /**
     * 40.24. Сумма обязательства, в связи с которым сделан запрос
     *
     * @var float $clientRequestSum
     */
    private $clientRequestSum = null;

    /**
     * 40.25. Валюта обязательства, в связи с которым сделан запрос
     *
     * @var string $clientRequestCurrency
     */
    private $clientRequestCurrency = null;

    /**
     * Gets as lastName
     *
     * 40.1. Фамилия
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * 40.1. Фамилия
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * 40.2. Имя
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * 40.2. Имя
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * 40.3. Отчество
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * 40.3. Отчество
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as birthDate
     *
     * 40.4. Дата рождения
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * 40.4. Дата рождения
     *
     * @param string $birthDate
     * @return self
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as birthPlace
     *
     * 40.5. Место рождения
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Sets a new birthPlace
     *
     * 40.5. Место рождения
     *
     * @param string $birthPlace
     * @return self
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 40.6. Регистрационный номер
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
     * 40.6. Регистрационный номер
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
     * Adds as taxCodeGroupUL40PersonCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType\TaxCodeGroupUL40PersonCustomerAType $taxCodeGroupUL40PersonCustomer
     *@return self
     */
    public function addToTaxCodeGroupUL40PersonCustomer(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType\TaxCodeGroupUL40PersonCustomerAType $taxCodeGroupUL40PersonCustomer)
    {
        $this->taxCodeGroupUL40PersonCustomer[] = $taxCodeGroupUL40PersonCustomer;
        return $this;
    }

    /**
     * isset taxCodeGroupUL40PersonCustomer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCodeGroupUL40PersonCustomer($index)
    {
        return isset($this->taxCodeGroupUL40PersonCustomer[$index]);
    }

    /**
     * unset taxCodeGroupUL40PersonCustomer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCodeGroupUL40PersonCustomer($index)
    {
        unset($this->taxCodeGroupUL40PersonCustomer[$index]);
    }

    /**
     * Gets as taxCodeGroupUL40PersonCustomer
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType\TaxCodeGroupUL40PersonCustomerAType[]
     */
    public function getTaxCodeGroupUL40PersonCustomer()
    {
        return $this->taxCodeGroupUL40PersonCustomer;
    }

    /**
     * Sets a new taxCodeGroupUL40PersonCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL40PersonCustomerType\TaxCodeGroupUL40PersonCustomerAType[] $taxCodeGroupUL40PersonCustomer
     * @return self
     */
    public function setTaxCodeGroupUL40PersonCustomer(array $taxCodeGroupUL40PersonCustomer = null)
    {
        $this->taxCodeGroupUL40PersonCustomer = $taxCodeGroupUL40PersonCustomer;
        return $this;
    }

    /**
     * Gets as socialNum
     *
     * 40.9. СНИЛС
     *
     * @return string
     */
    public function getSocialNum()
    {
        return $this->socialNum;
    }

    /**
     * Sets a new socialNum
     *
     * 40.9. СНИЛС
     *
     * @param string $socialNum
     * @return self
     */
    public function setSocialNum($socialNum)
    {
        $this->socialNum = $socialNum;
        return $this;
    }

    /**
     * Gets as docCode
     *
     * 40.10. Код документа
     *
     * @return string
     */
    public function getDocCode()
    {
        return $this->docCode;
    }

    /**
     * Sets a new docCode
     *
     * 40.10. Код документа
     *
     * @param string $docCode
     * @return self
     */
    public function setDocCode($docCode)
    {
        $this->docCode = $docCode;
        return $this;
    }

    /**
     * Gets as docOtherName
     *
     * 40.11. Наименование иного документа
     *
     * @return string
     */
    public function getDocOtherName()
    {
        return $this->docOtherName;
    }

    /**
     * Sets a new docOtherName
     *
     * 40.11. Наименование иного документа
     *
     * @param string $docOtherName
     * @return self
     */
    public function setDocOtherName($docOtherName)
    {
        $this->docOtherName = $docOtherName;
        return $this;
    }

    /**
     * Gets as docSeries
     *
     * 40.12. Серия документа
     *
     * @return string
     */
    public function getDocSeries()
    {
        return $this->docSeries;
    }

    /**
     * Sets a new docSeries
     *
     * 40.12. Серия документа
     *
     * @param string $docSeries
     * @return self
     */
    public function setDocSeries($docSeries)
    {
        $this->docSeries = $docSeries;
        return $this;
    }

    /**
     * Gets as docNum
     *
     * 40.13. Номер документа
     *
     * @return string
     */
    public function getDocNum()
    {
        return $this->docNum;
    }

    /**
     * Sets a new docNum
     *
     * 40.13. Номер документа
     *
     * @param string $docNum
     * @return self
     */
    public function setDocNum($docNum)
    {
        $this->docNum = $docNum;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * 40.14. Дата выдачи документа
     *
     * @return string
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * 40.14. Дата выдачи документа
     *
     * @param string $issueDate
     * @return self
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as docIssuer
     *
     * 40.15. Кем выдан документ
     *
     * @return string
     */
    public function getDocIssuer()
    {
        return $this->docIssuer;
    }

    /**
     * Sets a new docIssuer
     *
     * 40.15. Кем выдан документ
     *
     * @param string $docIssuer
     * @return self
     */
    public function setDocIssuer($docIssuer)
    {
        $this->docIssuer = $docIssuer;
        return $this;
    }

    /**
     * Gets as deptCode
     *
     * 40.16. Код подразделения
     *
     * @return string
     */
    public function getDeptCode()
    {
        return $this->deptCode;
    }

    /**
     * Sets a new deptCode
     *
     * 40.16. Код подразделения
     *
     * @param string $deptCode
     * @return self
     */
    public function setDeptCode($deptCode)
    {
        $this->deptCode = $deptCode;
        return $this;
    }

    /**
     * Gets as clientMonitoringChangingFact0
     *
     * 40.17. Признак мониторинга изменения кредитной истории = 0
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
     * 40.17. Признак мониторинга изменения кредитной истории = 0
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
     * 40.17. Признак мониторинга изменения кредитной истории = 1
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
     * 40.17. Признак мониторинга изменения кредитной истории = 1
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
     * 40.18. Дата начала мониторинга изменения кредитной истории
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
     * 40.18. Дата начала мониторинга изменения кредитной истории
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
     * 40.19. Код запрошенных сведений
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
     * 40.19. Код запрошенных сведений
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
     * 40.19. Код запрошенных сведений
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
     * 40.19. Код запрошенных сведений
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
     * 40.19. Код запрошенных сведений
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
     * 40.20. Дата предоставления сведений
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
     * 40.20. Дата предоставления сведений
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
     * 40.21. Дата запроса
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
     * 40.21. Дата запроса
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
     * 40.22. Код цели запроса
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
     * 40.22. Код цели запроса
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
     * 40.22. Код цели запроса
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
     * 40.22. Код цели запроса
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
     * 40.22. Код цели запроса
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
     * 40.23. Иная цель запроса
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
     * 40.23. Иная цель запроса
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
     * 40.23. Иная цель запроса
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
     * 40.23. Иная цель запроса
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
     * 40.23. Иная цель запроса
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
     * 40.24. Сумма обязательства, в связи с которым сделан запрос
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
     * 40.24. Сумма обязательства, в связи с которым сделан запрос
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
     * 40.25. Валюта обязательства, в связи с которым сделан запрос
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
     * 40.25. Валюта обязательства, в связи с которым сделан запрос
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

