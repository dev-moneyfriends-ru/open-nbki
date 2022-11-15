<?php

namespace mfteam\nbch\models;

class AddressReq extends Address
{
    public function fields()
    {
        return [
            'houseNumber',
            'street',
            'okato',
            'oksm'
        ];
    }
}