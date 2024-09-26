<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type;

/**
 * Class representing FL42SourceLiquidationAType
 */
class FL42SourceLiquidationAType
{
    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationCurrent
     */
    private $fL42SourceLiquidationCurrent = null;

    /**
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationNew
     */
    private $fL42SourceLiquidationNew = null;

    /**
     * Gets as fL42SourceLiquidationCurrent
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType
     */
    public function getFL42SourceLiquidationCurrent()
    {
        return $this->fL42SourceLiquidationCurrent;
    }

    /**
     * Sets a new fL42SourceLiquidationCurrent
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationCurrent
     * @return self
     */
    public function setFL42SourceLiquidationCurrent(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationCurrent = null)
    {
        $this->fL42SourceLiquidationCurrent = $fL42SourceLiquidationCurrent;
        return $this;
    }

    /**
     * Gets as fL42SourceLiquidationNew
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType
     */
    public function getFL42SourceLiquidationNew()
    {
        return $this->fL42SourceLiquidationNew;
    }

    /**
     * Sets a new fL42SourceLiquidationNew
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationNew
     * @return self
     */
    public function setFL42SourceLiquidationNew(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL42SourceLiquidationType $fL42SourceLiquidationNew = null)
    {
        $this->fL42SourceLiquidationNew = $fL42SourceLiquidationNew;
        return $this;
    }
}

