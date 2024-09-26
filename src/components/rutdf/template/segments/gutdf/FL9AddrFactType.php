<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL9AddrFactType
 *
 * Блок 9. Фактическое место жительства
 * XSD Type: FL_9_AddrFact_Type
 */
class FL9AddrFactType
{
    /**
     * 9.1. Признак отличия фактического места жительства = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 9.1. Признак отличия фактического места жительства = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 9.2. Почтовый индекс
     *
     * @var string $postCode
     */
    private $postCode = null;

    /**
     * 9.3. Код страны по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 9.4. Наименование иной страны
     *
     * @var string $countryOther
     */
    private $countryOther = null;

    /**
     * 9.5. Номер адреса в ГАР
     *
     * @var string $regStateNum
     */
    private $regStateNum = null;

    /**
     * 9.6. Код населенного пункта по ОКАТО
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * 9.7. Иной населенный пункт
     *
     * @var string $locationOther
     */
    private $locationOther = null;

    /**
     * 9.8. Улица
     *
     * @var string $street
     */
    private $street = null;

    /**
     * 9.9. Дом
     *
     * @var string $house
     */
    private $house = null;

    /**
     * 9.10. Владение
     *
     * @var string $estate
     */
    private $estate = null;

    /**
     * 9.11. Корпус
     *
     * @var string $block
     */
    private $block = null;

    /**
     * 9.12. Строение
     *
     * @var string $build
     */
    private $build = null;

    /**
     * 9.13. Квартира
     *
     * @var string $apart
     */
    private $apart = null;

    /**
     * Gets as exist0
     *
     * 9.1. Признак отличия фактического места жительства = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 9.1. Признак отличия фактического места жительства = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 9.1. Признак отличия фактического места жительства = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 9.1. Признак отличия фактического места жительства = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as postCode
     *
     * 9.2. Почтовый индекс
     *
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Sets a new postCode
     *
     * 9.2. Почтовый индекс
     *
     * @param string $postCode
     * @return self
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * 9.3. Код страны по ОКСМ
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * 9.3. Код страны по ОКСМ
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryOther
     *
     * 9.4. Наименование иной страны
     *
     * @return string
     */
    public function getCountryOther()
    {
        return $this->countryOther;
    }

    /**
     * Sets a new countryOther
     *
     * 9.4. Наименование иной страны
     *
     * @param string $countryOther
     * @return self
     */
    public function setCountryOther($countryOther)
    {
        $this->countryOther = $countryOther;
        return $this;
    }

    /**
     * Gets as regStateNum
     *
     * 9.5. Номер адреса в ГАР
     *
     * @return string
     */
    public function getRegStateNum()
    {
        return $this->regStateNum;
    }

    /**
     * Sets a new regStateNum
     *
     * 9.5. Номер адреса в ГАР
     *
     * @param string $regStateNum
     * @return self
     */
    public function setRegStateNum($regStateNum)
    {
        $this->regStateNum = $regStateNum;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * 9.6. Код населенного пункта по ОКАТО
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * 9.6. Код населенного пункта по ОКАТО
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as locationOther
     *
     * 9.7. Иной населенный пункт
     *
     * @return string
     */
    public function getLocationOther()
    {
        return $this->locationOther;
    }

    /**
     * Sets a new locationOther
     *
     * 9.7. Иной населенный пункт
     *
     * @param string $locationOther
     * @return self
     */
    public function setLocationOther($locationOther)
    {
        $this->locationOther = $locationOther;
        return $this;
    }

    /**
     * Gets as street
     *
     * 9.8. Улица
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * 9.8. Улица
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as house
     *
     * 9.9. Дом
     *
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * Sets a new house
     *
     * 9.9. Дом
     *
     * @param string $house
     * @return self
     */
    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    /**
     * Gets as estate
     *
     * 9.10. Владение
     *
     * @return string
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * Sets a new estate
     *
     * 9.10. Владение
     *
     * @param string $estate
     * @return self
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;
        return $this;
    }

    /**
     * Gets as block
     *
     * 9.11. Корпус
     *
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Sets a new block
     *
     * 9.11. Корпус
     *
     * @param string $block
     * @return self
     */
    public function setBlock($block)
    {
        $this->block = $block;
        return $this;
    }

    /**
     * Gets as build
     *
     * 9.12. Строение
     *
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Sets a new build
     *
     * 9.12. Строение
     *
     * @param string $build
     * @return self
     */
    public function setBuild($build)
    {
        $this->build = $build;
        return $this;
    }

    /**
     * Gets as apart
     *
     * 9.13. Квартира
     *
     * @return string
     */
    public function getApart()
    {
        return $this->apart;
    }

    /**
     * Sets a new apart
     *
     * 9.13. Квартира
     *
     * @param string $apart
     * @return self
     */
    public function setApart($apart)
    {
        $this->apart = $apart;
        return $this;
    }
}

