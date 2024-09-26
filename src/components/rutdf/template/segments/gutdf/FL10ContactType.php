<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL10ContactType
 *
 * Блок 10. Контактные данные
 * XSD Type: FL_10_Contact_Type
 */
class FL10ContactType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType[] $phoneGroupFL10Contact
     */
    private $phoneGroupFL10Contact = [
        
    ];

    /**
     * 10.3. Адрес электронной почты
     *
     * @var string[] $email
     */
    private $email = [
        
    ];

    /**
     * Adds as phoneGroupFL10Contact
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType $phoneGroupFL10Contact
     *@return self
     */
    public function addToPhoneGroupFL10Contact(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType $phoneGroupFL10Contact)
    {
        $this->phoneGroupFL10Contact[] = $phoneGroupFL10Contact;
        return $this;
    }

    /**
     * isset phoneGroupFL10Contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneGroupFL10Contact($index)
    {
        return isset($this->phoneGroupFL10Contact[$index]);
    }

    /**
     * unset phoneGroupFL10Contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneGroupFL10Contact($index)
    {
        unset($this->phoneGroupFL10Contact[$index]);
    }

    /**
     * Gets as phoneGroupFL10Contact
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType[]
     */
    public function getPhoneGroupFL10Contact()
    {
        return $this->phoneGroupFL10Contact;
    }

    /**
     * Sets a new phoneGroupFL10Contact
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType[] $phoneGroupFL10Contact
     * @return self
     */
    public function setPhoneGroupFL10Contact(array $phoneGroupFL10Contact = null)
    {
        $this->phoneGroupFL10Contact = $phoneGroupFL10Contact;
        return $this;
    }

    /**
     * Adds as email
     *
     * 10.3. Адрес электронной почты
     *
     * @return self
     * @param string $email
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * 10.3. Адрес электронной почты
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
     * 10.3. Адрес электронной почты
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
     * 10.3. Адрес электронной почты
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
     * 10.3. Адрес электронной почты
     *
     * @param string $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }
}

