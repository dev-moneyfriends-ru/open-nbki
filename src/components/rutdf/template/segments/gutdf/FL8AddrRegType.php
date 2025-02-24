<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\models\AddressReplyRUTDF;

/**
 * Class representing FL8AddrRegType
 *
 * Блок 8. Регистрация физического лица по месту жительства или пребывания
 * XSD Type: FL_8_AddrReg_Type
 */
class FL8AddrRegType extends GutdfSegment
{
    /**
     * 8.1. Код адреса регистрации
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 8.2. Почтовый индекс
     *
     * @var string $postCode
     */
    private $postCode = null;

    /**
     * 8.3. Код страны по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 8.4. Наименование иной страны
     *
     * @var string $countryOther
     */
    private $countryOther = null;

    /**
     * 8.5. Номер адреса в ГАР
     *
     * @var string $regStateNum
     */
    private $regStateNum = null;

    /**
     * 8.6. Код населенного пункта по ОКАТО
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * 8.7. Иной населенный пункт
     *
     * @var string $locationOther
     */
    private $locationOther = null;

    /**
     * 8.8. Улица
     *
     * @var string $street
     */
    private $street = null;

    /**
     * 8.9. Дом
     *
     * @var string $house
     */
    private $house = null;

    /**
     * 8.10. Владение
     *
     * @var string $estate
     */
    private $estate = null;

    /**
     * 8.11. Корпус
     *
     * @var string $block
     */
    private $block = null;

    /**
     * 8.12. Строение
     *
     * @var string $build
     */
    private $build = null;

    /**
     * 8.13. Квартира
     *
     * @var string $apart
     */
    private $apart = null;

    /**
     * 8.14. Дата регистрации
     *
     * @var string $date
     */
    private $date = null;

    /**
     * 8.15. Наименование регистрирующего органа
     *
     * @var string $dept
     */
    private $dept = null;

    /**
     * 8.16. Код подразделения, осуществившего регистрацию
     *
     * @var string $deptCode
     */
    private $deptCode = null;

    /**
     * Gets as code
     *
     * 8.1. Код адреса регистрации
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 8.1. Код адреса регистрации
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as postCode
     *
     * 8.2. Почтовый индекс
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
     * 8.2. Почтовый индекс
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
     * 8.3. Код страны по ОКСМ
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
     * 8.3. Код страны по ОКСМ
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
     * 8.4. Наименование иной страны
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
     * 8.4. Наименование иной страны
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
     * 8.5. Номер адреса в ГАР
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
     * 8.5. Номер адреса в ГАР
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
     * 8.6. Код населенного пункта по ОКАТО
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
     * 8.6. Код населенного пункта по ОКАТО
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
     * 8.7. Иной населенный пункт
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
     * 8.7. Иной населенный пункт
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
     * 8.8. Улица
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
     * 8.8. Улица
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
     * 8.9. Дом
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
     * 8.9. Дом
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
     * 8.10. Владение
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
     * 8.10. Владение
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
     * 8.11. Корпус
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
     * 8.11. Корпус
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
     * 8.12. Строение
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
     * 8.12. Строение
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
     * 8.13. Квартира
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
     * 8.13. Квартира
     *
     * @param string $apart
     * @return self
     */
    public function setApart($apart)
    {
        $this->apart = $apart;
        return $this;
    }

    /**
     * Gets as date
     *
     * 8.14. Дата регистрации
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 8.14. Дата регистрации
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as dept
     *
     * 8.15. Наименование регистрирующего органа
     *
     * @return string
     */
    public function getDept()
    {
        return $this->dept;
    }

    /**
     * Sets a new dept
     *
     * 8.15. Наименование регистрирующего органа
     *
     * @param string $dept
     * @return self
     */
    public function setDept($dept)
    {
        $this->dept = $dept;
        return $this;
    }

    /**
     * Gets as deptCode
     *
     * 8.16. Код подразделения, осуществившего регистрацию
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
     * 8.16. Код подразделения, осуществившего регистрацию
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_8_AddrReg';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код адреса регистрации' => 'Заполняется по справочнику 1.2.
                                Если указан код «2», иные показатели блока 8 заполняются сведениями об адресе регистрации субъекта по месту пребывания.
                                Если указан код «3», иные показатели блока 8 не заполняются.
                                При отсутствии сведений по этому показателю укажите «-».
                                ',
            'Почтовый индекс' => '',
            'Код страны по ОКСМ' => 'Цифровой код страны согласно Общероссийскому классификатору стран мира (далее – ОКСМ, см. справочник A1).
                                При отсутствии страны в ОКСМ указывается «999».
                                ',
            'Наименование иной страны' => '',
            'Номер адреса в ГАР' => 'Уникальный номер адреса объекта адресации в государственном адресном реестре (далее – ГАР).
                                Указываются код населенного пункта, код улицы, код дома (владения), код корпуса и код номера квартиры
                                ',
            'Код населенного пункта по ОКАТО' => 'Указывается согласно Общероссийскому классификатору объектов административно-территориального деления (далее – ОКАТО).
                                При отсутствии в ОКАТО кода населенного пункта указывается «99 999 999 999».
                                ',
            'Иной населенный пункт' => 'Заполняется, если по показателю «Код населенного пункта по ОКАТО» указано «99 999 999 999».
                                При отсутствии сведений о населенном пункте в государственном реестре (ЕГРЮЛ или иной реестр) населенный пункт указывается на русском или английском языке (по выбору источника).
                                ',
            'Улица' => '',
            'Дом' => '',
            'Владение' => '',
            'Корпус' => '',
            'Строение' => '',
            'Квартира' => 'Номер квартиры, помещения или комнаты, в которой зарегистрировано лицо.',
            'Дата регистрации' => 'Дата регистрации субъекта по соответствующему адресу.',
            'Наименование регистрирующего органа' => '',
            'Код подразделения, осуществившего регистрацию' => 'Заполняется только для паспорта гражданина Российской Федерации. Сведения указываются согласно отметке о регистрации субъекта.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 8. Регистрация физического лица по месту жительства или пребывания';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $address = $this->sendData->getRegAddress();
        $this->code = $address->regType;
        if($this->code === '3'){
            return;
        }
        $this->postCode = $address->postal;
        $this->countryCode = $address->oksm;
        $this->countryOther = $address->otherCountry;
        $this->regStateNum = $address->fias;
        $this->locationCode = $address->okato;
        $this->locationOther = $this->formatString($address->otherLocation);
        $this->street = $this->formatString($address->street);
        $this->house = $this->formatString($address->houseNumber);
        $this->estate = $this->formatString($address->estate);
        $this->block = $this->formatString(str_replace(" ", "", $address->block));
        $this->build = $this->formatString($address->building);
        $this->apart = $this->formatString($address->apartment);
        $this->date = $this->formatDate($address->addrSinceDt);
        $this->dept = $this->formatString($address->regAuthority);
        $this->deptCode = $this->formatString($address->divCode);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'code',
            'postCode',
            'countryCode',
            'countryOther',
            'regStateNum',
            'locationCode',
            'locationOther',
            'street',
            'house',
            'estate',
            'block',
            'build',
            'apart',
            'date',
            'dept',
            'deptCode',
        ];
    }
}

