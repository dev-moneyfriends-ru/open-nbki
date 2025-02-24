<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType\PhoneGroupUL2AddressAType;

/**
 * Class representing UL2AddressType
 *
 * Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация
 * XSD Type: UL_2_Address_Type
 */
class UL2AddressType extends GutdfSegment
{
    /**
     * 2.1. Код страны по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 2.2. Наименование иной страны
     *
     * @var string $countryOther
     */
    private $countryOther = null;

    /**
     * 2.3. Номер адреса в ГАР
     *
     * @var string $regStateNum
     */
    private $regStateNum = null;

    /**
     * 2.4. Код населенного пункта по ОКАТО
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * 2.5. Иной населенный пункт
     *
     * @var string $locationOther
     */
    private $locationOther = null;

    /**
     * 2.6. Улица
     *
     * @var string $street
     */
    private $street = null;

    /**
     * 2.7. Дом
     *
     * @var string $house
     */
    private $house = null;

    /**
     * 2.8. Владение
     *
     * @var string $estate
     */
    private $estate = null;

    /**
     * 2.9. Корпус
     *
     * @var string $block
     */
    private $block = null;

    /**
     * 2.10. Строение
     *
     * @var string $build
     */
    private $build = null;

    /**
     * 2.11. Помещение (офис)
     *
     * @var string $apart
     */
    private $apart = null;

    /**
     * @var PhoneGroupUL2AddressAType[] $phoneGroupUL2Address
     */
    private $phoneGroupUL2Address = [

    ];

    /**
     * 2.14. Адрес электронной почты
     *
     * @var string[] $email
     */
    private $email = [

    ];

    /**
     * 2.15. Признак иностранного юридического лица = 0
     *
     * @var string $foreignerFact0
     */
    private $foreignerFact0 = '';

    /**
     * 2.15. Признак иностранного юридического лица = 1
     *
     * @var string $foreignerFact1
     */
    private $foreignerFact1 = null;

    /**
     * Gets as countryCode
     *
     * 2.1. Код страны по ОКСМ
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
     * 2.1. Код страны по ОКСМ
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
     * 2.2. Наименование иной страны
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
     * 2.2. Наименование иной страны
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
     * 2.3. Номер адреса в ГАР
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
     * 2.3. Номер адреса в ГАР
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
     * 2.4. Код населенного пункта по ОКАТО
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
     * 2.4. Код населенного пункта по ОКАТО
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
     * 2.5. Иной населенный пункт
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
     * 2.5. Иной населенный пункт
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
     * 2.6. Улица
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
     * 2.6. Улица
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
     * 2.7. Дом
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
     * 2.7. Дом
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
     * 2.8. Владение
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
     * 2.8. Владение
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
     * 2.9. Корпус
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
     * 2.9. Корпус
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
     * 2.10. Строение
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
     * 2.10. Строение
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
     * 2.11. Помещение (офис)
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
     * 2.11. Помещение (офис)
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
     * Adds as phoneGroupUL2Address
     *
     * @param PhoneGroupUL2AddressAType $phoneGroupUL2Address
     * @return self
     */
    public function addToPhoneGroupUL2Address(PhoneGroupUL2AddressAType $phoneGroupUL2Address)
    {
        $this->phoneGroupUL2Address[] = $phoneGroupUL2Address;
        return $this;
    }

    /**
     * isset phoneGroupUL2Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneGroupUL2Address($index)
    {
        return isset($this->phoneGroupUL2Address[$index]);
    }

    /**
     * unset phoneGroupUL2Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneGroupUL2Address($index)
    {
        unset($this->phoneGroupUL2Address[$index]);
    }

    /**
     * Gets as phoneGroupUL2Address
     *
     * @return PhoneGroupUL2AddressAType[]
     */
    public function getPhoneGroupUL2Address()
    {
        return $this->phoneGroupUL2Address;
    }

    /**
     * Sets a new phoneGroupUL2Address
     *
     * @param PhoneGroupUL2AddressAType[] $phoneGroupUL2Address
     * @return self
     */
    public function setPhoneGroupUL2Address(array $phoneGroupUL2Address = null)
    {
        $this->phoneGroupUL2Address = $phoneGroupUL2Address;
        return $this;
    }

    /**
     * Adds as email
     *
     * 2.14. Адрес электронной почты
     *
     * @param string $email
     * @return self
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * 2.14. Адрес электронной почты
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * 2.14. Адрес электронной почты
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * 2.14. Адрес электронной почты
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * 2.14. Адрес электронной почты
     *
     * @param string $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as foreignerFact0
     *
     * 2.15. Признак иностранного юридического лица = 0
     *
     * @return string
     */
    public function getForeignerFact0()
    {
        return $this->foreignerFact0;
    }

    /**
     * Sets a new foreignerFact0
     *
     * 2.15. Признак иностранного юридического лица = 0
     *
     * @param string $foreignerFact0
     * @return self
     */
    public function setForeignerFact0($foreignerFact0)
    {
        $this->foreignerFact0 = $foreignerFact0;
        return $this;
    }

    /**
     * Gets as foreignerFact1
     *
     * 2.15. Признак иностранного юридического лица = 1
     *
     * @return string
     */
    public function getForeignerFact1()
    {
        return $this->foreignerFact1;
    }

    /**
     * Sets a new foreignerFact1
     *
     * 2.15. Признак иностранного юридического лица = 1
     *
     * @param string $foreignerFact1
     * @return self
     */
    public function setForeignerFact1($foreignerFact1)
    {
        $this->foreignerFact1 = $foreignerFact1;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'UL_2_Address';
    }

    public function getFields(): array
    {
        return [
            'countryCode' => $this->countryCode,
            'countryOther' => $this->countryOther,
            'regStateNum' => $this->regStateNum,
            'locationCode' => $this->locationCode,
            'locationOther' => $this->locationOther,
            'street' => $this->street,
            'house' => $this->house,
            'estate' => $this->estate,
            'block' => $this->block,
            'build' => $this->build,
            'apart' => $this->apart,
            'email' => implode(',', $this->email),
            'foreignerFact_1' => $this->foreignerFact1,
            'foreignerFact_0' => $this->foreignerFact0,
        ];
    }

    public function getFieldsDescriptions(): array
    {
        return [
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
            'Помещение (офис)' => 'Номер офиса, помещения или комнаты, в которой зарегистрировано лицо.',
            'Адрес электронной почты' => 'Заполняется, если субъект предоставил данные источнику.',
            'Признак иностранного юридического лица 1' => '',
            'Признак иностранного юридического лица 0' => '',
        ];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        return 'Блок 2. Адрес юридического лица в пределах его места нахождения и контактная информация';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $address = $this->sendData->getRegAddress();
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
        if ($address->phone) {
            $this->addToPhoneGroupUL2Address(new PhoneGroupUL2AddressAType($this->template));
        }
        if ($address->email) {
            $this->addToEmail($address->email);
        }
        if($address->foreignerFact){
            $this->foreignerFact0 = null;
            $this->foreignerFact1 = '';
        }else{
            $this->foreignerFact0 = '';
            $this->foreignerFact1 = null;
        }
    }

    public function getXmlAttributes(): array
    {
        return [
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
            'phoneGroupUL2Address',
            'email',
            'foreignerFact_1' => 'foreignerFact1',
            'foreignerFact_0' => 'foreignerFact0',
        ];
    }
}

