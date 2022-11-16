<?php

namespace mfteam\nbch\models;

/**
 * Сведения об адресах субъекта, полученные в формате RUTDF
 */
class AddressReplyRUTDF extends Address
{
    /**
     * @param $val
     * @return void
     */
    public function setOKATO($val)
    {
        $this->okato = $val;
    }
    
    /**
     * @param $val
     * @return void
     */
    public function setFIAS($val)
    {
        $this->fias = $val;
    }
    
    /**
     * @param $val
     * @return void
     */
    public function setOKSM($val)
    {
        $this->oksm = $val;
    }
}