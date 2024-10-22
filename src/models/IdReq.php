<?php

namespace mfteam\nbch\models;

class IdReq extends Identification
{
    public function fields(): array
    {
        return [
            'idNum',
            'idType',
            'idTypeText',
            'seriesNumber',
            'issueDate',
            'OKSM',
            'issueAuthority',
            'divCode',
        ];
    }
}
