<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing ProductReplyType
 *
 * 
 * XSD Type: ProductReply
 */
class ProductReplyType
{

    /**
     * @var \mfteam\nbch\generated\models\PcrReportType $pcr
     */
    private $pcr = null;

    /**
     * @var \mfteam\nbch\generated\models\CreditReportType $report
     */
    private $report = null;

    /**
     * @var \mfteam\nbch\generated\models\CreditReportLogType $log
     */
    private $log = null;

    /**
     * @var \mfteam\nbch\generated\models\CodeTextType[] $err
     */
    private $err = null;

    /**
     * Gets as pcr
     *
     * @return \mfteam\nbch\generated\models\PcrReportType
     */
    public function getPcr()
    {
        return $this->pcr;
    }

    /**
     * Sets a new pcr
     *
     * @param \mfteam\nbch\generated\models\PcrReportType $pcr
     * @return self
     */
    public function setPcr(\mfteam\nbch\generated\models\PcrReportType $pcr)
    {
        $this->pcr = $pcr;
        return $this;
    }

    /**
     * Gets as report
     *
     * @return \mfteam\nbch\generated\models\CreditReportType
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Sets a new report
     *
     * @param \mfteam\nbch\generated\models\CreditReportType $report
     * @return self
     */
    public function setReport(\mfteam\nbch\generated\models\CreditReportType $report)
    {
        $this->report = $report;
        return $this;
    }

    /**
     * Gets as log
     *
     * @return \mfteam\nbch\generated\models\CreditReportLogType
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Sets a new log
     *
     * @param \mfteam\nbch\generated\models\CreditReportLogType $log
     * @return self
     */
    public function setLog(\mfteam\nbch\generated\models\CreditReportLogType $log)
    {
        $this->log = $log;
        return $this;
    }

    /**
     * Adds as ctErr
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CodeTextType $ctErr
     */
    public function addToErr(\mfteam\nbch\generated\models\CodeTextType $ctErr)
    {
        $this->err[] = $ctErr;
        return $this;
    }

    /**
     * isset err
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErr($index)
    {
        return isset($this->err[$index]);
    }

    /**
     * unset err
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErr($index)
    {
        unset($this->err[$index]);
    }

    /**
     * Gets as err
     *
     * @return \mfteam\nbch\generated\models\CodeTextType[]
     */
    public function getErr()
    {
        return $this->err;
    }

    /**
     * Sets a new err
     *
     * @param \mfteam\nbch\generated\models\CodeTextType[] $err
     * @return self
     */
    public function setErr(array $err)
    {
        $this->err = $err;
        return $this;
    }


}

