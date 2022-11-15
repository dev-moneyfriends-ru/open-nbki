<?php

namespace mfteam\nbch\models;

class AddressReq extends Address
{
    public function fields()
    {
        return [
            'houseNumber',
            'street',
            'OKATO' => 'okato',
            'OKSM' => 'oksm'
        ];
    }
}