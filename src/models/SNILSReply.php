<?php

namespace mfteam\nbch\models;

class SNILSReply extends SNILSReq
{
    /**
     * @param $val
     * @return void
     */
    public function setSNILS($val)
    {
        $this->number = $val;
    }
}