<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL13BankruptcyAType
 */
class FL13BankruptcyAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyCurrent
     */
    private $fL13BankruptcyCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyNew
     */
    private $fL13BankruptcyNew = null;

    /**
     * Gets as fL13BankruptcyCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType
     */
    public function getFL13BankruptcyCurrent()
    {
        return $this->fL13BankruptcyCurrent;
    }

    /**
     * Sets a new fL13BankruptcyCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyCurrent
     * @return self
     */
    public function setFL13BankruptcyCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyCurrent = null)
    {
        $this->fL13BankruptcyCurrent = $fL13BankruptcyCurrent;
        return $this;
    }

    /**
     * Gets as fL13BankruptcyNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType
     */
    public function getFL13BankruptcyNew()
    {
        return $this->fL13BankruptcyNew;
    }

    /**
     * Sets a new fL13BankruptcyNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyNew
     * @return self
     */
    public function setFL13BankruptcyNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType $fL13BankruptcyNew = null)
    {
        $this->fL13BankruptcyNew = $fL13BankruptcyNew;
        return $this;
    }
}

