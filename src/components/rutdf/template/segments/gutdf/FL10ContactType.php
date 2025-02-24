<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType\PhoneGroupFL10ContactAType;

/**
 * Class representing FL10ContactType
 *
 * Блок 10. Контактные данные
 * XSD Type: FL_10_Contact_Type
 */
class FL10ContactType extends GutdfSegment
{
    /**
     * @var PhoneGroupFL10ContactAType[] $phoneGroupFL10Contact
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
     * @return self
     * @param PhoneGroupFL10ContactAType $phoneGroupFL10Contact
     */
    public function addToPhoneGroupFL10Contact(PhoneGroupFL10ContactAType $phoneGroupFL10Contact)
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
     * @return PhoneGroupFL10ContactAType[]
     */
    public function getPhoneGroupFL10Contact()
    {
        return $this->phoneGroupFL10Contact;
    }

    /**
     * Sets a new phoneGroupFL10Contact
     *
     * @param PhoneGroupFL10ContactAType[] $phoneGroupFL10Contact
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

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_10_Contact';
    }

    public function getFields(): array
    {
        return [
            'email' => $this->email
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Адрес электронной почты' => ''
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 10. Контактные данные';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $address = $this->sendData->getRegAddress();
        if(!empty($address->phone)){
            $this->addToPhoneGroupFL10Contact(new PhoneGroupFL10ContactAType($this->template));
        }
        $this->addToEmail($address->email);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'phoneGroupFL10Contact',
            'email'
        ];
    }
}

