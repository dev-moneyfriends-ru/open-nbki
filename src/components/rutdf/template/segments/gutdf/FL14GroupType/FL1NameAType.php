<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType;

/**
 * Class representing FL1NameAType
 */
class FL1NameAType
{
    /**
     * 1.1. Фамилия
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 1.2. Имя
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 1.3. Отчество
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * Gets as lastName
     *
     * 1.1. Фамилия
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
     * 1.1. Фамилия
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
     * 1.2. Имя
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
     * 1.2. Имя
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
     * 1.3. Отчество
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
     * 1.3. Отчество
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }
}

