<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type;

/**
 * Class representing UL32SourceLiquidationAType
 */
class UL32SourceLiquidationAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationCurrent
     */
    private $uL32SourceLiquidationCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationNew
     */
    private $uL32SourceLiquidationNew = null;

    /**
     * Gets as uL32SourceLiquidationCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType
     */
    public function getUL32SourceLiquidationCurrent()
    {
        return $this->uL32SourceLiquidationCurrent;
    }

    /**
     * Sets a new uL32SourceLiquidationCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationCurrent
     * @return self
     */
    public function setUL32SourceLiquidationCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationCurrent = null)
    {
        $this->uL32SourceLiquidationCurrent = $uL32SourceLiquidationCurrent;
        return $this;
    }

    /**
     * Gets as uL32SourceLiquidationNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType
     */
    public function getUL32SourceLiquidationNew()
    {
        return $this->uL32SourceLiquidationNew;
    }

    /**
     * Sets a new uL32SourceLiquidationNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationNew
     * @return self
     */
    public function setUL32SourceLiquidationNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\UL32SourceLiquidationType $uL32SourceLiquidationNew = null)
    {
        $this->uL32SourceLiquidationNew = $uL32SourceLiquidationNew;
        return $this;
    }
}

