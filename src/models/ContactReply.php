<?php

namespace mfteam\nbch\models;


/**
 * Контактные данные
 */
class ContactReply extends BaseItem
{
    /**
     * Номер телефона
     * Контактный номер телефона.
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $phone
     */
    public $phone = null;

    /**
     * Комментарий к номеру телефона
     * Пояснительные сведения о номере телефона
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $phoneComment
     */
    public $phoneComment = null;

    /**
     * Адрес электронной почты
     * Заполняется, если субъект предоставил данные источнику.
     * @var string $email
     */
    public $email = null;
}
