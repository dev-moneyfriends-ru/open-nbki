<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ProductRequestType
 *
 * 
 * XSD Type: ProductRequest
 */
class ProductRequestType
{

    /**
     * @var \mfteam\nbch\generated\models\CreditReportRequestType $req
     */
    private $req = null;

    /**
     * Gets as req
     *
     * @return \mfteam\nbch\generated\models\CreditReportRequestType
     */
    public function getReq()
    {
        return $this->req;
    }

    /**
     * Sets a new req
     *
     * @param \mfteam\nbch\generated\models\CreditReportRequestType $req
     * @return self
     */
    public function setReq(\mfteam\nbch\generated\models\CreditReportRequestType $req)
    {
        $this->req = $req;
        return $this;
    }


}

