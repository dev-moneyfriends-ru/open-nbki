<?php

namespace mfteam\nbch\models;


/**
 * Данные о субъекте, предоставившем согласие
 */
class BusinessReq extends Business
{
    public function rules()
    {
        return [
            [
                [
                    'businessName',
                    'abbreviatedBusinessName',
                    'oksm'
                ], 'required',
            ],
            [
                [
                    'businessName',
                    'abbreviatedBusinessName'
                ], 'filter', 'filter' => function ($value) {
                return mb_strtoupper($value);
            }
            ],
            [
                [
                    'businessName',
                ],
                'string',
                'max' => 1020,
            ],
        ];
    }

    public function fields()
    {
        return [
            'businessName',
            'abbreviatedBusinessName',
            'OKSM' => 'oksm'
        ];
    }
}
