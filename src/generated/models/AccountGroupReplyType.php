<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AccountGroupReplyType
 *
 * XSD Type: AccountGroupReply
 */
class AccountGroupReplyType
{

    /**
     * @var string $key
     */
    private $key = null;

    /**
     * @var \mfteam\nbch\generated\models\AccountType[] $value
     */
    private $value = [
        
    ];

    /**
     * Gets as key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * @param string $key
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Adds as value
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountType $value
     */
    public function addToValue(\mfteam\nbch\generated\models\AccountType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * @return \mfteam\nbch\generated\models\AccountType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \mfteam\nbch\generated\models\AccountType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

