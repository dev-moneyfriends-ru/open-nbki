<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ProductType
 *
 * 
 * XSD Type: ProductType
 */
class ProductType
{

    /**
     * @var \mfteam\nbch\generated\models\ProductRequestType $prequest
     */
    private $prequest = null;

    /**
     * @var \mfteam\nbch\generated\models\ProductReplyType $preply
     */
    private $preply = null;

    /**
     * @var \mfteam\nbch\generated\models\ProductReplyType $preply2
     */
    private $preply2 = null;

    /**
     * Gets as prequest
     *
     * @return \mfteam\nbch\generated\models\ProductRequestType
     */
    public function getPrequest()
    {
        return $this->prequest;
    }

    /**
     * Sets a new prequest
     *
     * @param \mfteam\nbch\generated\models\ProductRequestType $prequest
     * @return self
     */
    public function setPrequest(\mfteam\nbch\generated\models\ProductRequestType $prequest)
    {
        $this->prequest = $prequest;
        return $this;
    }

    /**
     * Gets as preply
     *
     * @return \mfteam\nbch\generated\models\ProductReplyType
     */
    public function getPreply()
    {
        return $this->preply;
    }

    /**
     * Sets a new preply
     *
     * @param \mfteam\nbch\generated\models\ProductReplyType $preply
     * @return self
     */
    public function setPreply(\mfteam\nbch\generated\models\ProductReplyType $preply)
    {
        $this->preply = $preply;
        return $this;
    }

    /**
     * Gets as preply2
     *
     * @return \mfteam\nbch\generated\models\ProductReplyType
     */
    public function getPreply2()
    {
        return $this->preply2;
    }

    /**
     * Sets a new preply2
     *
     * @param \mfteam\nbch\generated\models\ProductReplyType $preply2
     * @return self
     */
    public function setPreply2(\mfteam\nbch\generated\models\ProductReplyType $preply2)
    {
        $this->preply2 = $preply2;
        return $this;
    }


}

