<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CreditReportLogType
 *
 * 
 * XSD Type: CreditReportLog
 */
class CreditReportLogType
{

    /**
     * @var \mfteam\nbch\generated\models\CodeTextType $ctLog
     */
    private $ctLog = null;

    /**
     * Gets as ctLog
     *
     * @return \mfteam\nbch\generated\models\CodeTextType
     */
    public function getCtLog()
    {
        return $this->ctLog;
    }

    /**
     * Sets a new ctLog
     *
     * @param \mfteam\nbch\generated\models\CodeTextType $ctLog
     * @return self
     */
    public function setCtLog(\mfteam\nbch\generated\models\CodeTextType $ctLog)
    {
        $this->ctLog = $ctLog;
        return $this;
    }


}

