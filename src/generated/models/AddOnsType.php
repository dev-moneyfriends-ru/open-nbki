<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AddOnsType
 *
 * 
 * XSD Type: addOns
 */
class AddOnsType
{

    /**
     * @var \mfteam\nbch\generated\models\AlertMessageType[] $messages
     */
    private $messages = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\DecisionType[] $decisions
     */
    private $decisions = [
        
    ];

    /**
     * Adds as messages
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AlertMessageType $messages
     */
    public function addToMessages(\mfteam\nbch\generated\models\AlertMessageType $messages)
    {
        $this->messages[] = $messages;
        return $this;
    }

    /**
     * isset messages
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessages($index)
    {
        return isset($this->messages[$index]);
    }

    /**
     * unset messages
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessages($index)
    {
        unset($this->messages[$index]);
    }

    /**
     * Gets as messages
     *
     * @return \mfteam\nbch\generated\models\AlertMessageType[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Sets a new messages
     *
     * @param \mfteam\nbch\generated\models\AlertMessageType[] $messages
     * @return self
     */
    public function setMessages(array $messages)
    {
        $this->messages = $messages;
        return $this;
    }

    /**
     * Adds as decisions
     *
     * @return self
     * @param \mfteam\nbch\generated\models\DecisionType $decisions
     */
    public function addToDecisions(\mfteam\nbch\generated\models\DecisionType $decisions)
    {
        $this->decisions[] = $decisions;
        return $this;
    }

    /**
     * isset decisions
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDecisions($index)
    {
        return isset($this->decisions[$index]);
    }

    /**
     * unset decisions
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDecisions($index)
    {
        unset($this->decisions[$index]);
    }

    /**
     * Gets as decisions
     *
     * @return \mfteam\nbch\generated\models\DecisionType[]
     */
    public function getDecisions()
    {
        return $this->decisions;
    }

    /**
     * Sets a new decisions
     *
     * @param \mfteam\nbch\generated\models\DecisionType[] $decisions
     * @return self
     */
    public function setDecisions(array $decisions)
    {
        $this->decisions = $decisions;
        return $this;
    }


}

