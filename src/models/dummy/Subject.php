<?php

namespace mfteam\nbch\models\dummy;

use mfteam\nbch\models\Address;
use mfteam\nbch\models\Business;
use mfteam\nbch\models\NbchSubjectInterface;
use mfteam\nbch\models\NbchSubjectPassportInterface;
use mfteam\nbch\models\Person;
use mfteam\nbch\models\Phone;
use yii\base\BaseObject;

/**
 * Субъект договора займа
 *
 * @property null|string $ogrn
 * @property Address $actualAddress
 * @property Business|null $business
 * @property null|NbchSubjectPassportInterface $passport
 * @property null|Person $person
 * @property null|string $inn
 * @property array|Phone[] $phones
 * @property Phone|null $workPhone
 * @property null|string $snils
 * @property string $subjectType
 * @property Address $legalAddress
 * @property string $offerRelationType
 * @deprecated
 */
class Subject extends BaseObject implements NbchSubjectInterface
{
    /**
     * @var Address|null
     */
    private $_actualAddress;
    
    /**
     * @var Address
     */
    private $_legalAddress;
    
    /**
     * @var Phone|null
     */
    private $_workPhone;
    
    /**
     * @var array|Phone[]
     */
    private $_phones = [];
    
    /**
     * @var string
     */
    private $_subjectType;
    
    /**
     * @var string
     */
    private $_offerRelationType;
    
    /**
     * @var string
     */
    private $_inn;
    
    /**
     * @var string
     */
    private $_ogrn;
    
    /**
     * @var string
     */
    private $_snils;
    
    /**
     * @var NbchSubjectPassportInterface|null
     */
    private $_passport;
    
    /**
     * @var Person|null
     */
    private $_person;
    
    /**
     * @var Business|null
     */
    private $_business;
    
    /**
     * Дата регистрации
     * @var string
     */
    private $_regDate;
    
    /**
     * Признак специального налогового режима
     * @var int
     */
    private $_specialTax = 0;
    
    /**
     * @inheritDoc
     */
    public function getActualAddress(): Address
    {
        return $this->_actualAddress;
    }
    
    /**
     * @inheritDoc
     */
    public function getLegalAddress(): Address
    {
        return $this->_legalAddress;
    }
    
    /**
     * @inheritDoc
     */
    public function getWorkPhone(): ?Phone
    {
        return $this->_workPhone;
    }
    
    /**
     * @inheritDoc
     */
    public function getPhones(): array
    {
        return $this->_phones;
    }
    
    /**
     * @inheritDoc
     */
    public function getSubjectType(): string
    {
        return $this->_subjectType;
    }
    
    /**
     * @inheritDoc
     */
    public function getOfferRelationType(): string
    {
        return $this->_offerRelationType;
    }
    
    /**
     * @inheritDoc
     */
    public function getInn(): ?string
    {
        return $this->_inn;
    }
    
    /**
     * @inheritDoc
     */
    public function isIp(): bool
    {
        return $this->_subjectType === self::SUBJECT_TYPE_IP;
    }
    
    /**
     * @inheritDoc
     */
    public function isLegal(): bool
    {
        return $this->_subjectType === self::SUBJECT_TYPE_LEGAL;
    }
    
    /**
     * @inheritDoc
     */
    public function isPerson(): bool
    {
        return $this->_subjectType === self::SUBJECT_TYPE_PERSON;
    }
    
    /**
     * @inheritDoc
     */
    public function getOgrn(): ?string
    {
        return $this->_ogrn;
    }
    
    /**
     * @inheritDoc
     */
    public function getSnils(): ?string
    {
        return $this->_snils;
    }
    
    /**
     * @inheritDoc
     */
    public function getPassport(): ?NbchSubjectPassportInterface
    {
        return $this->_passport;
    }
    
    /**
     * @inheritDoc
     */
    public function getPerson(): ?Person
    {
        return $this->_person;
    }
    
    /**
     * @inheritDoc
     */
    public function getBusiness(): ?Business
    {
        return $this->_business;
    }
    
    /**
     * @param Address $actualAddress
     * @return Subject
     */
    public function setActualAddress(Address $actualAddress): Subject
    {
        $this->_actualAddress = $actualAddress;
        return $this;
    }
    
    /**
     * @param Address $legalAddress
     * @return Subject
     */
    public function setLegalAddress(Address $legalAddress): Subject
    {
        $this->_legalAddress = $legalAddress;
        return $this;
    }
    
    /**
     * @param Phone $workPhone
     * @return Subject
     */
    public function setWorkPhone(Phone $workPhone): Subject
    {
        $this->_workPhone = $workPhone;
        return $this;
    }
    
    /**
     * @param array|Phone[] $phones
     * @return Subject
     */
    public function setPhones(array $phones): Subject
    {
        $this->_phones = $phones;
        return $this;
    }
    
    /**
     * @param Phone $phone
     * @return $this
     */
    public function addPhone(Phone $phone): Subject
    {
        $models = $this->getPhones();
        $models[] = $phone;
        return $this->setPhones($models);
    }
    
    /**
     * @param string $subjectType
     * @return Subject
     */
    public function setSubjectType(string $subjectType): Subject
    {
        $this->_subjectType = $subjectType;
        return $this;
    }
    
    /**
     * @param string $offerRelationType
     * @return Subject
     */
    public function setOfferRelationType(string $offerRelationType): Subject
    {
        $this->_offerRelationType = $offerRelationType;
        return $this;
    }
    
    /**
     * @param string $inn
     * @return Subject
     */
    public function setInn(string $inn): Subject
    {
        $this->_inn = $inn;
        return $this;
    }
    
    /**
     * @param string $ogrn
     * @return Subject
     */
    public function setOgrn(string $ogrn): Subject
    {
        $this->_ogrn = $ogrn;
        return $this;
    }
    
    /**
     * @param string $snils
     * @return Subject
     */
    public function setSnils(string $snils): Subject
    {
        $this->_snils = $snils;
        return $this;
    }
    
    /**
     * @param NbchSubjectPassportInterface|null $passport
     * @return Subject
     */
    public function setPassport(?NbchSubjectPassportInterface $passport): Subject
    {
        $this->_passport = $passport;
        return $this;
    }
    
    /**
     * @param Person|null $person
     * @return Subject
     */
    public function setPerson(?Person $person): Subject
    {
        $this->_person = $person;
        return $this;
    }
    
    /**
     * @param Business|null $business
     * @return Subject
     */
    public function setBusiness(?Business $business): Subject
    {
        $this->_business = $business;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getRegDate(): string
    {
        return $this->_regDate;
    }
    
    /**
     * @param string $regDate
     * @return Subject
     */
    public function setRegDate(string $regDate): Subject
    {
        $this->_regDate = $regDate;
        return $this;
    }
    
    /**
     * @return int
     */
    public function getSpecialTax(): int
    {
        return $this->_specialTax;
    }
    
    /**
     * Признак специального налогового режима 0 или 1
     * @param int $_specialTax
     * @return Subject
     */
    public function setSpecialTax(int $_specialTax): Subject
    {
        $this->_specialTax = $_specialTax;
        return $this;
    }
}