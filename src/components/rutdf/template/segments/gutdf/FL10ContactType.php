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
     * 10.1. Номер телефона
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * 10.2. Комментарий к номеру телефона
     *
     * @var string $phoneComment
     */
    private $phoneComment = null;

    /**
     * 10.3. Адрес электронной почты
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as phone
     *
     * 10.1. Номер телефона
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
     * 10.1. Номер телефона
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
     * 10.2. Комментарий к номеру телефона
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
     * 10.2. Комментарий к номеру телефона
     *
     * @param string $phoneComment
     * @return self
     */
    public function setPhoneComment($phoneComment)
    {
        $this->phoneComment = $phoneComment;
        return $this;
    }

    /**
     * Gets as email
     *
     * 10.3. Адрес электронной почты
     *
     * @return string
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
    public function setEmail($email)
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
            'phone' => $this->getPhone(),
            'phoneComment' => $this->getPhoneComment(),
            'email' => $this->getEmail(),
        ];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Номер телефона' => '',
            'Комментарий к номеру телефона' => '',
            'Адрес электронной почты' => '',
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
        $contacts = $this->sendData->getContactReply();
        if(empty($contacts) || empty($contacts[$this->idx])){
            return;
        }
        $contact = $contacts[$this->idx];
        $this->setPhone($contact->phone);
        $this->setPhoneComment($contact->phoneComment);
        $this->setEmail($contact->email);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'phone',
            'phoneComment',
            'email'
        ];
    }
}

