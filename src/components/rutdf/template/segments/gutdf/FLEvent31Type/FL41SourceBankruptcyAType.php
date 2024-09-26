<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type;

/**
 * Class representing FL41SourceBankruptcyAType
 */
class FL41SourceBankruptcyAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyCurrent
     */
    private $fL41SourceBankruptcyCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyNew
     */
    private $fL41SourceBankruptcyNew = null;

    /**
     * Gets as fL41SourceBankruptcyCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType
     */
    public function getFL41SourceBankruptcyCurrent()
    {
        return $this->fL41SourceBankruptcyCurrent;
    }

    /**
     * Sets a new fL41SourceBankruptcyCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyCurrent
     * @return self
     */
    public function setFL41SourceBankruptcyCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyCurrent = null)
    {
        $this->fL41SourceBankruptcyCurrent = $fL41SourceBankruptcyCurrent;
        return $this;
    }

    /**
     * Gets as fL41SourceBankruptcyNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType
     */
    public function getFL41SourceBankruptcyNew()
    {
        return $this->fL41SourceBankruptcyNew;
    }

    /**
     * Sets a new fL41SourceBankruptcyNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyNew
     * @return self
     */
    public function setFL41SourceBankruptcyNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL41SourceBankruptcyType $fL41SourceBankruptcyNew = null)
    {
        $this->fL41SourceBankruptcyNew = $fL41SourceBankruptcyNew;
        return $this;
    }
}

