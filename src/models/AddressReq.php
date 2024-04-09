<?php

namespace mfteam\nbch\models;

class AddressReq extends AddressReplyRUTDF
{
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'street',
            'houseNumber',
            'block',
            'building',
            'apartment',
            'otherCountry',
            'FIAS',
            'OKATO',
            'otherLocation',
            'estate',
            'phone',
            'email',
            'OKSM',
        ];
    }
}