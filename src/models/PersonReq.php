<?php

namespace mfteam\nbch\models;

/**
 * Данные о субъекте, предоставившем согласие
 */
class PersonReq extends PersonReply
{
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'name1',
            'first',
            'paternal',
            'birthDt',
            'placeOfBirth',
        ];
    }
}