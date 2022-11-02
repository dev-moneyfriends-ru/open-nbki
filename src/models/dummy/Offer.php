<?php

namespace mfteam\nbch\models\dummy;

use mfteam\nbch\models\BankGuarantee;
use mfteam\nbch\models\Collateral;
use mfteam\nbch\models\Guarantor;
use mfteam\nbch\models\NbchOfferInterface;
use mfteam\nbch\models\Payment;
use mfteam\nbch\models\Trade;

class Offer implements \mfteam\nbch\models\NbchOfferInterface
{
    /**
     * @var string
     */
    protected $uuid;
    
    /**
     * @var Guarantor[]
     */
    protected $guarantorArray = [];
    
    /**
     * @var Collateral[]
     */
    protected $collateralArray = [];
    
    /**
     * @var Payment[]
     */
    protected $paymentArray = [];
    
    /**
     * @var BankGuarantee[]
     */
    protected $bankGuaranteeArray = [];
    
    /**
     * @var Trade
     */
    protected $trade;
    
    /**
     * @inheritDoc
     */
    public static function findByUuid(string $uuid): NbchOfferInterface
    {
        return new self();
    }
    
    /**
     * @inheritDoc
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    
    
    /**
     * @param string $uuid
     * @return Offer
     */
    public function setUuid(string $uuid): Offer
    {
        $this->uuid = $uuid;
        return $this;
    }
    
    /**
     * @param Guarantor[] $guarantorArray
     * @return Offer
     */
    public function setGuarantorArray(array $guarantorArray): Offer
    {
        $this->guarantorArray = $guarantorArray;
        return $this;
    }
    
    /**
     * @param Collateral[] $collateralArray
     * @return Offer
     */
    public function setCollateralArray(array $collateralArray): Offer
    {
        $this->collateralArray = $collateralArray;
        return $this;
    }
    
    /**
     * @param Payment[] $paymentArray
     * @return Offer
     */
    public function setPaymentArray(array $paymentArray): Offer
    {
        $this->paymentArray = $paymentArray;
        return $this;
    }
    
    /**
     * @param array|BankGuarantee $bankGuaranteeArray
     * @return Offer
     */
    public function setBankGuaranteeArray($bankGuaranteeArray)
    {
        $this->bankGuaranteeArray = $bankGuaranteeArray;
        return $this;
    }
    
    /**
     * @return Guarantor[]
     */
    public function getGuarantorArray(): array
    {
        return $this->guarantorArray;
    }
    
    /**
     * @return Collateral[]
     */
    public function getCollateralArray(): array
    {
        return $this->collateralArray;
    }
    
    /**
     * @return Payment[]
     */
    public function getPaymentArray(): array
    {
        return $this->paymentArray;
    }
    
    /**
     * @return BankGuarantee[]
     */
    public function getBankGuaranteeArray(): array
    {
        return $this->bankGuaranteeArray;
    }
    
    /**
     * @return Trade
     */
    public function getTrade(): Trade
    {
        return $this->trade;
    }
    
}