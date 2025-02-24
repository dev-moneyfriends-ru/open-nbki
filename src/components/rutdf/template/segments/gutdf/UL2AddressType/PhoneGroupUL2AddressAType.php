<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL2AddressType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing PhoneGroupUL2AddressAType
 */
class PhoneGroupUL2AddressAType extends GutdfSegment
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

    public function getSegmentName(): string
    {
        return 'Phone_group_UL_2_Address';
    }

    public function getFields(): array
    {
        return [
            'phone' => $this->getPhone(),
            'phoneComment' => $this->getPhoneComment()
        ];
    }

    public function getFieldsDescriptions(): array
    {
        return [
            'Номер телефона' => 'Контактный номер телефона.
                                Заполняется, если субъект предоставил данные источнику.
                                ',
            'Комментарий к номеру телефона' => 'Пояснительные сведения о номере телефона
                                Заполняется, если субъект предоставил данные источнику.
                                ',
        ];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        return 'Телефон';
    }

    public function getProperties(): array
    {
       return [];
    }

    public function init(): void
    {
        $address = $this->sendData->getRegAddress();
        $this->phone = $address->phone;
        $this->phoneComment = $address->phoneComment?$this->formatString($address->phoneComment):self::EMPTY_VALUE;
    }

    public function getXmlAttributes(): array
    {
        return [
            'phone',
            'phoneComment'
        ];
    }
}

