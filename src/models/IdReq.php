<?php

namespace mfteam\nbch\models;

/**
 * Документ, удостоверяющий личность
 */
class IdReq extends IdReply
{
    /**
     * Поля для заполнения
     * @inheritDoc
     */
    public function fields()
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
