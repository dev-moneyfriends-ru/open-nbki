<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL10ContactType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing PhoneGroupFL10ContactAType
 */
class PhoneGroupFL10ContactAType extends GutdfSegment
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Phone_group_FL_10_Contact';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Номер телефона' => 'Контактный номер телефона.',
            'Комментарий к номеру телефона' => 'Пояснительные сведения о номере телефона.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Номер телефона';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $address = $this->template->sendData->getRegAddress();
        $this->phone = $address->phone;
        $this->phoneComment = $address->phoneComment;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'phone',
            'phoneComment',
        ];
    }
}

