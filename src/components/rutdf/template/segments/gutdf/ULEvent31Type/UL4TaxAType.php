<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type;

/**
 * Class representing UL4TaxAType
 */
class UL4TaxAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4TaxCurrent
     */
    private $uL4TaxCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4TaxNew
     */
    private $uL4TaxNew = null;

    /**
     * Adds as taxNumGroupUL4Tax
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax
     *@return self
     */
    public function addToUL4TaxCurrent(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax)
    {
        $this->uL4TaxCurrent[] = $taxNumGroupUL4Tax;
        return $this;
    }

    /**
     * isset uL4TaxCurrent
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL4TaxCurrent($index)
    {
        return isset($this->uL4TaxCurrent[$index]);
    }

    /**
     * unset uL4TaxCurrent
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL4TaxCurrent($index)
    {
        unset($this->uL4TaxCurrent[$index]);
    }

    /**
     * Gets as uL4TaxCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[]
     */
    public function getUL4TaxCurrent()
    {
        return $this->uL4TaxCurrent;
    }

    /**
     * Sets a new uL4TaxCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4TaxCurrent
     * @return self
     */
    public function setUL4TaxCurrent(array $uL4TaxCurrent = null)
    {
        $this->uL4TaxCurrent = $uL4TaxCurrent;
        return $this;
    }

    /**
     * Adds as taxNumGroupUL4Tax
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax
     *@return self
     */
    public function addToUL4TaxNew(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType $taxNumGroupUL4Tax)
    {
        $this->uL4TaxNew[] = $taxNumGroupUL4Tax;
        return $this;
    }

    /**
     * isset uL4TaxNew
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL4TaxNew($index)
    {
        return isset($this->uL4TaxNew[$index]);
    }

    /**
     * unset uL4TaxNew
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL4TaxNew($index)
    {
        unset($this->uL4TaxNew[$index]);
    }

    /**
     * Gets as uL4TaxNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[]
     */
    public function getUL4TaxNew()
    {
        return $this->uL4TaxNew;
    }

    /**
     * Sets a new uL4TaxNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL4TaxType\TaxNumGroupUL4TaxAType[] $uL4TaxNew
     * @return self
     */
    public function setUL4TaxNew(array $uL4TaxNew = null)
    {
        $this->uL4TaxNew = $uL4TaxNew;
        return $this;
    }
}

