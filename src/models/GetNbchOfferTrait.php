<?php

namespace mfteam\nbch\models;

use mfteam\nbch\Env;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;

/**
 * @property $offerUuid
 */
trait GetNbchOfferTrait
{
    /**
     * @var NbchOfferInterface|null
     */
    private $_offer;
    
    /**
     * @return NbchOfferInterface|null
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public function getOffer(): ?NbchOfferInterface
    {
        if($this->_offer === null){
            /** @var NbchOfferInterface $offerClass */
            $offerClass = Env::ensure()->module->offerClass;
            $this->_offer = $offerClass::findByUuid($this->offerUuid);
        }
        return $this->_offer;
    }
}