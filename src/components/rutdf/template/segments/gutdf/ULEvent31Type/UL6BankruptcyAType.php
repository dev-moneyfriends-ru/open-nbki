<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL6BankruptcyAType
 */
class UL6BankruptcyAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyCurrent
     */
    private $uL6BankruptcyCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyNew
     */
    private $uL6BankruptcyNew = null;

    /**
     * Gets as uL6BankruptcyCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType
     */
    public function getUL6BankruptcyCurrent()
    {
        return $this->uL6BankruptcyCurrent;
    }

    /**
     * Sets a new uL6BankruptcyCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyCurrent
     * @return self
     */
    public function setUL6BankruptcyCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyCurrent = null)
    {
        $this->uL6BankruptcyCurrent = $uL6BankruptcyCurrent;
        return $this;
    }

    /**
     * Gets as uL6BankruptcyNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType
     */
    public function getUL6BankruptcyNew()
    {
        return $this->uL6BankruptcyNew;
    }

    /**
     * Sets a new uL6BankruptcyNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyNew
     * @return self
     */
    public function setUL6BankruptcyNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType $uL6BankruptcyNew = null)
    {
        $this->uL6BankruptcyNew = $uL6BankruptcyNew;
        return $this;
    }
}

