<?php

namespace mfteam\nbch\models;

/**
 * СНИЛС
 */
class SNILSReq extends SNILSReply
{
    /**
     * @return string[]
     */
    public function fields()
    {
        return [
            'SNILS'
        ];
    }
}
