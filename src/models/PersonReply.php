<?php

namespace mfteam\nbch\models;

class PersonReply extends Person
{
    public function rules()
    {
        return [
            [
                $this->attributes(), 'safe'
            ]
        ];
    }
}