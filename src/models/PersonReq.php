<?php

namespace mfteam\nbch\models;

class PersonReq extends Person
{
    public function rules()
    {
        return array_merge(parent::rules(),[
            [['first','name1', 'paternal'], 'required']
        ]);
    }
}