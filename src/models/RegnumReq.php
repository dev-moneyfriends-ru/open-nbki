<?php

namespace mfteam\nbch\models;

/**
 * Регистрационный номер, номер налогоплательщика субъекта, предоставившего согласие
 */
class RegnumReq extends RegnumReply
{
    /**
     * @inheritDoc
     */
    public function fields()
    {
        return [
            'taxpayerNum',
            'taxpayerCode',
            'regNum',
            'regNumCode',
        ];
    }
}