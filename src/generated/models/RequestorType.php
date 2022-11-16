<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing RequestorType
 *
 * 
 * XSD Type: Requestor
 */
class RequestorType
{

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var string $orgUnit
     */
    private $orgUnit = null;

    /**
     * @var string $userID
     */
    private $userID = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * Gets as memberCode
     *
     * @return string
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Sets a new memberCode
     *
     * @param string $memberCode
     * @return self
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;
        return $this;
    }

    /**
     * Gets as orgUnit
     *
     * @return string
     */
    public function getOrgUnit()
    {
        return $this->orgUnit;
    }

    /**
     * Sets a new orgUnit
     *
     * @param string $orgUnit
     * @return self
     */
    public function setOrgUnit($orgUnit)
    {
        $this->orgUnit = $orgUnit;
        return $this;
    }

    /**
     * Gets as userID
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

