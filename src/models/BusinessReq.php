<?php

namespace mfteam\nbch\models;


/**
 * Данные о субъекте, предоставившем согласие
 */
class BusinessReq extends BusinessReply
{
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'businessName',
            'abbreviatedBusinessName',
            'businessNameAlt',
        ];
    }
}