<?php

namespace mfteam\nbch\exceptions;

/**
 * Ошибка создания запроса
 */
class CreateNbchRutdfRequestException extends \yii\base\Exception
{
    public function getName()
    {
        return "Create request error";
    }
}