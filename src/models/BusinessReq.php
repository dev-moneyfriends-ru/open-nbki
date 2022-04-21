<?php

namespace mfteam\nbch\models;


class BusinessReq extends Business
{
    public function rules()
    {
        return [
            [
                [
                    'businessName',
                ], 'required',
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
}