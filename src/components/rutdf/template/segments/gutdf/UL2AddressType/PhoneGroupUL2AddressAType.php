<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType;

/**
 * Class representing PhoneGroupUL2AddressAType
 */
class PhoneGroupUL2AddressAType
{
    /**
     * 2.12. Номер телефона
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * 2.13. Комментарий к номеру телефона
     *
     * @var string $phoneComment
     */
    private $phoneComment = null;

    /**
     * Gets as phone
     *
     * 2.12. Номер телефона
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * 2.12. Номер телефона
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as phoneComment
     *
     * 2.13. Комментарий к номеру телефона
     *
     * @return string
     */
    public function getPhoneComment()
    {
        return $this->phoneComment;
    }

    /**
     * Sets a new phoneComment
     *
     * 2.13. Комментарий к номеру телефона
     *
     * @param string $phoneComment
     * @return self
     */
    public function setPhoneComment($phoneComment)
    {
        $this->phoneComment = $phoneComment;
        return $this;
    }
}

