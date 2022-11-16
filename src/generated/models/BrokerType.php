<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing BrokerType
 *
 * 
 * XSD Type: Broker
 */
class BrokerType
{

    /**
     * @var string $brokerId
     */
    private $brokerId = null;

    /**
     * Gets as brokerId
     *
     * @return string
     */
    public function getBrokerId()
    {
        return $this->brokerId;
    }

    /**
     * Sets a new brokerId
     *
     * @param string $brokerId
     * @return self
     */
    public function setBrokerId($brokerId)
    {
        $this->brokerId = $brokerId;
        return $this;
    }


}

