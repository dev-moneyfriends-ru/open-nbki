<?php

namespace mfteam\nbch\models;


/**
 * Авторизационные данные пользователя
 */
class RequestorReq extends BaseItem
{
    /**
     * Код участника Бюро
     * @var string
     */
    public $memberCode = '';
    
    /**
     * Имя пользователя
     * @var string
     */
    public $userID = '';
    
    /**
     * Пароль
     * @var string
     */
    public $password = '';
    
    /**
     * @return string
     */
    public function getMemberCode(): string
    {
        return $this->memberCode;
    }
    
    /**
     * @param string $memberCode
     */
    public function setMemberCode(string $memberCode): void
    {
        $this->memberCode = $memberCode;
    }
    
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
          'MemberCode',
          'UserID',
          'Password',
        ];
    }
    
    /**
     * @return string
     */
    public function getUserID(): string
    {
        return $this->userID;
    }
    
    /**
     * @param string $userID
     */
    public function setUserID(string $userID): void
    {
        $this->userID = $userID;
    }
    
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
}