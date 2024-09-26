<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL34GuaranteeType
 *
 * Блок 34. Сведения о независимой гарантии
 * XSD Type: FL_34_Guarantee_Type
 */
class FL34GuaranteeType
{
    /**
     * 34.1. Признак наличия независимой гарантии = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 34.1. Признак наличия независимой гарантии = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType[] $uidGroupFL34Guarantee
     */
    private $uidGroupFL34Guarantee = [
        
    ];

    /**
     * Gets as exist0
     *
     * 34.1. Признак наличия независимой гарантии = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 34.1. Признак наличия независимой гарантии = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 34.1. Признак наличия независимой гарантии = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 34.1. Признак наличия независимой гарантии = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Adds as uidGroupFL34Guarantee
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType $uidGroupFL34Guarantee
     *@return self
     */
    public function addToUidGroupFL34Guarantee(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType $uidGroupFL34Guarantee)
    {
        $this->uidGroupFL34Guarantee[] = $uidGroupFL34Guarantee;
        return $this;
    }

    /**
     * isset uidGroupFL34Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUidGroupFL34Guarantee($index)
    {
        return isset($this->uidGroupFL34Guarantee[$index]);
    }

    /**
     * unset uidGroupFL34Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUidGroupFL34Guarantee($index)
    {
        unset($this->uidGroupFL34Guarantee[$index]);
    }

    /**
     * Gets as uidGroupFL34Guarantee
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType[]
     */
    public function getUidGroupFL34Guarantee()
    {
        return $this->uidGroupFL34Guarantee;
    }

    /**
     * Sets a new uidGroupFL34Guarantee
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType[] $uidGroupFL34Guarantee
     * @return self
     */
    public function setUidGroupFL34Guarantee(array $uidGroupFL34Guarantee = null)
    {
        $this->uidGroupFL34Guarantee = $uidGroupFL34Guarantee;
        return $this;
    }
}

