<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL3BirthType
 *
 * Блок 3. Дата и место рождения
 * XSD Type: FL_3_Birth_Type
 */
class FL3BirthType extends GutdfSegment
{
    /**
     * 3.1. Дата рождения
     *
     * @var string $birthDate
     */
    private $birthDate = null;

    /**
     * 3.2. Код страны по ОКСМ
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * 3.3. Место рождения
     *
     * @var string $birthPlace
     */
    private $birthPlace = null;

    /**
     * Gets as birthDate
     *
     * 3.1. Дата рождения
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
     * 3.1. Дата рождения
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
     * Gets as countryCode
     *
     * 3.2. Код страны по ОКСМ
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
     * 3.2. Код страны по ОКСМ
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
     * Gets as birthPlace
     *
     * 3.3. Место рождения
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
     * 3.3. Место рождения
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_3_Birth';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            "Дата рождения" => '',
            "Код страны по ОКСМ" => 'Цифровой код страны согласно Общероссийскому классификатору стран мира. При отсутствии страны в ОКСМ указывается «999».',
            "Место рождения" => 'Заполняется согласно документу, удостоверяющему личность.'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 3. Дата и место рождения';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $person = $this->sendData->getPersonReply();
        if($person === null){
            return;
        }
        $this->birthDate = $this->formatDate($person->birthDt);
        $this->countryCode = $person->oksm;
        $this->birthPlace = $this->formatString($person->placeOfBirth);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'birthDate',
            'countryCode',
            'birthPlace',
        ];
    }
}

