<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL25GuaranteeType
 *
 * Блок 25. Сведения о независимой гарантии
 * XSD Type: UL_25_Guarantee_Type
 */
class UL25GuaranteeType
{
    /**
     * 25.1. Признак наличия независимой гарантии = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 25.1. Признак наличия независимой гарантии = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType[] $uidGroupUL25Guarantee
     */
    private $uidGroupUL25Guarantee = [
        
    ];

    /**
     * Gets as exist0
     *
     * 25.1. Признак наличия независимой гарантии = 0
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
     * 25.1. Признак наличия независимой гарантии = 0
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
     * 25.1. Признак наличия независимой гарантии = 1
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
     * 25.1. Признак наличия независимой гарантии = 1
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
     * Adds as uidGroupUL25Guarantee
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType $uidGroupUL25Guarantee
     *@return self
     */
    public function addToUidGroupUL25Guarantee(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType $uidGroupUL25Guarantee)
    {
        $this->uidGroupUL25Guarantee[] = $uidGroupUL25Guarantee;
        return $this;
    }

    /**
     * isset uidGroupUL25Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUidGroupUL25Guarantee($index)
    {
        return isset($this->uidGroupUL25Guarantee[$index]);
    }

    /**
     * unset uidGroupUL25Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUidGroupUL25Guarantee($index)
    {
        unset($this->uidGroupUL25Guarantee[$index]);
    }

    /**
     * Gets as uidGroupUL25Guarantee
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType[]
     */
    public function getUidGroupUL25Guarantee()
    {
        return $this->uidGroupUL25Guarantee;
    }

    /**
     * Sets a new uidGroupUL25Guarantee
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType[] $uidGroupUL25Guarantee
     * @return self
     */
    public function setUidGroupUL25Guarantee(array $uidGroupUL25Guarantee = null)
    {
        $this->uidGroupUL25Guarantee = $uidGroupUL25Guarantee;
        return $this;
    }
}

