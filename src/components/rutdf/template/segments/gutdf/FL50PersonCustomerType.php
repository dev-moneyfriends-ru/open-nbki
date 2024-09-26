<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL50PersonCustomerType
 *
 * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
 * XSD Type: FL_50_PersonCustomer_Type
 */
class FL50PersonCustomerType
{
    /**
     * 50.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 50.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 50.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 50.4. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 50.5. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * 50.6. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType\TaxCodeGroupFL50PersonCustomerAType[] $taxCodeGroupFL50PersonCustomer
     */
    private $taxCodeGroupFL50PersonCustomer = [
        
    ];

    /**
     * 50.9. СНИЛС
     *
     * @var string $socialNum
     */
    private $socialNum = null;

    /**
     * 50.10. Код документа
     *
     * @var string $docCode
     */
    private $docCode = null;

    /**
     * 50.11. Наименование иного документа
     *
     * @var string $docOtherName
     */
    private $docOtherName = null;

    /**
     * 50.12. Серия документа
     *
     * @var string $docSeries
     */
    private $docSeries = null;

    /**
     * 50.13. Номер документа
     *
     * @var string $docNum
     */
    private $docNum = null;

    /**
     * 50.14. Дата выдачи документа
     *
     * @var string $issueDate
     */
    private $issueDate = null;

    /**
     * 50.15. Кем выдан документ
     *
     * @var string $docIssuer
     */
    private $docIssuer = null;

    /**
     * 50.16. Код подразделения
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * 50.17. Признак мониторинга изменения кредитной истории = 0
     *
     * @var string $clientMonitoringChangingFact0
     */
    private $clientMonitoringChangingFact0 = null;

    /**
     * 50.17. Признак мониторинга изменения кредитной истории = 1
     *
     * @var string $clientMonitoringChangingFact1
     */
    private $clientMonitoringChangingFact1 = null;

    /**
     * 50.18. Дата начала мониторинга изменения кредитной истории
     *
     * @var string $clientBeginDateMonitoringChanging
     */
    private $clientBeginDateMonitoringChanging = null;

    /**
     * 50.19. Код запрошенных сведений
     *
     * @var string[] $clientRequestKindCode
     */
    private $clientRequestKindCode = [
        
    ];

    /**
     * 50.20. Дата предоставления сведений
     *
     * @var string $clientResponseDate
     */
    private $clientResponseDate = null;

    /**
     * 50.21. Дата запроса
     *
     * @var string $clientRequestDate
     */
    private $clientRequestDate = null;

    /**
     * 50.22. Код цели запроса
     *
     * @var string[] $clientRequestGoalCode
     */
    private $clientRequestGoalCode = [
        
    ];

    /**
     * 50.23. Иная цель запроса
     *
     * @var string[] $clientRequestOtherCode
     */
    private $clientRequestOtherCode = [
        
    ];

    /**
     * 50.24. Сумма обязательства, в связи с которым сделан запрос
     *
     * @var float $clientRequestSum
     */
    private $clientRequestSum = null;

    /**
     * 50.25. Валюта обязательства, в связи с которым сделан запрос
     *
     * @var string $clientRequestCurrency
     */
    private $clientRequestCurrency = null;

    /**
     * Gets as lastName
     *
     * 50.1. Фамилия
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
     * 50.1. Фамилия
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
     * 50.2. Имя
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
     * 50.2. Имя
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
     * 50.3. Отчество
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
     * 50.3. Отчество
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
     * 50.4. Дата рождения
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
     * 50.4. Дата рождения
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
     * 50.5. Место рождения
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
     * 50.5. Место рождения
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
     * 50.6. Регистрационный номер
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
     * 50.6. Регистрационный номер
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
     * Adds as taxCodeGroupFL50PersonCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType\TaxCodeGroupFL50PersonCustomerAType $taxCodeGroupFL50PersonCustomer
     *@return self
     */
    public function addToTaxCodeGroupFL50PersonCustomer(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType\TaxCodeGroupFL50PersonCustomerAType $taxCodeGroupFL50PersonCustomer)
    {
        $this->taxCodeGroupFL50PersonCustomer[] = $taxCodeGroupFL50PersonCustomer;
        return $this;
    }

    /**
     * isset taxCodeGroupFL50PersonCustomer
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCodeGroupFL50PersonCustomer($index)
    {
        return isset($this->taxCodeGroupFL50PersonCustomer[$index]);
    }

    /**
     * unset taxCodeGroupFL50PersonCustomer
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCodeGroupFL50PersonCustomer($index)
    {
        unset($this->taxCodeGroupFL50PersonCustomer[$index]);
    }

    /**
     * Gets as taxCodeGroupFL50PersonCustomer
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType\TaxCodeGroupFL50PersonCustomerAType[]
     */
    public function getTaxCodeGroupFL50PersonCustomer()
    {
        return $this->taxCodeGroupFL50PersonCustomer;
    }

    /**
     * Sets a new taxCodeGroupFL50PersonCustomer
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType\TaxCodeGroupFL50PersonCustomerAType[] $taxCodeGroupFL50PersonCustomer
     * @return self
     */
    public function setTaxCodeGroupFL50PersonCustomer(array $taxCodeGroupFL50PersonCustomer = null)
    {
        $this->taxCodeGroupFL50PersonCustomer = $taxCodeGroupFL50PersonCustomer;
        return $this;
    }

    /**
     * Gets as socialNum
     *
     * 50.9. СНИЛС
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
     * 50.9. СНИЛС
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
     * 50.10. Код документа
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
     * 50.10. Код документа
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
     * 50.11. Наименование иного документа
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
     * 50.11. Наименование иного документа
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
     * 50.12. Серия документа
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
     * 50.12. Серия документа
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
     * 50.13. Номер документа
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
     * 50.13. Номер документа
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
     * 50.14. Дата выдачи документа
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
     * 50.14. Дата выдачи документа
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
     * 50.15. Кем выдан документ
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
     * 50.15. Кем выдан документ
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
     * 50.16. Код подразделения
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
     * 50.16. Код подразделения
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
     * 50.17. Признак мониторинга изменения кредитной истории = 0
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
     * 50.17. Признак мониторинга изменения кредитной истории = 0
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
     * 50.17. Признак мониторинга изменения кредитной истории = 1
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
     * 50.17. Признак мониторинга изменения кредитной истории = 1
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
     * 50.18. Дата начала мониторинга изменения кредитной истории
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
     * 50.18. Дата начала мониторинга изменения кредитной истории
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
     * 50.19. Код запрошенных сведений
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
     * 50.19. Код запрошенных сведений
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
     * 50.19. Код запрошенных сведений
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
     * 50.19. Код запрошенных сведений
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
     * 50.19. Код запрошенных сведений
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
     * 50.20. Дата предоставления сведений
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
     * 50.20. Дата предоставления сведений
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
     * 50.21. Дата запроса
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
     * 50.21. Дата запроса
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
     * 50.22. Код цели запроса
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
     * 50.22. Код цели запроса
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
     * 50.22. Код цели запроса
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
     * 50.22. Код цели запроса
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
     * 50.22. Код цели запроса
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
     * 50.23. Иная цель запроса
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
     * 50.23. Иная цель запроса
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
     * 50.23. Иная цель запроса
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
     * 50.23. Иная цель запроса
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
     * 50.23. Иная цель запроса
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
     * 50.24. Сумма обязательства, в связи с которым сделан запрос
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
     * 50.24. Сумма обязательства, в связи с которым сделан запрос
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
     * 50.25. Валюта обязательства, в связи с которым сделан запрос
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
     * 50.25. Валюта обязательства, в связи с которым сделан запрос
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

