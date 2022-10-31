<?php

namespace mfteam\nbch\exceptions;

class UnknownEventException extends \yii\base\Exception
{
    public function getName()
    {
        return "Unknown event";
    }
}