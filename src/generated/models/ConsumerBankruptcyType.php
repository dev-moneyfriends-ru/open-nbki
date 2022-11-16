<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ConsumerBankruptcyType
 *
 * 
 * XSD Type: ConsumerBankruptcyType
 */
class ConsumerBankruptcyType
{

    /**
     * @var \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $bankruptcy
     */
    private $bankruptcy = [
        
    ];

    /**
     * Adds as bankruptcy
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType $bankruptcy
     */
    public function addToBankruptcy(\mfteam\nbch\generated\models\ConsumerBankruptcyType $bankruptcy)
    {
        $this->bankruptcy[] = $bankruptcy;
        return $this;
    }

    /**
     * isset bankruptcy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankruptcy($index)
    {
        return isset($this->bankruptcy[$index]);
    }

    /**
     * unset bankruptcy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankruptcy($index)
    {
        unset($this->bankruptcy[$index]);
    }

    /**
     * Gets as bankruptcy
     *
     * @return \mfteam\nbch\generated\models\ConsumerBankruptcyType[]
     */
    public function getBankruptcy()
    {
        return $this->bankruptcy;
    }

    /**
     * Sets a new bankruptcy
     *
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $bankruptcy
     * @return self
     */
    public function setBankruptcy(array $bankruptcy)
    {
        $this->bankruptcy = $bankruptcy;
        return $this;
    }


}

