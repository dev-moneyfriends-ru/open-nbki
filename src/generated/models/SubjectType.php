<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing SubjectType
 *
 * 
 * XSD Type: Subject
 */
class SubjectType
{

    /**
     * @var int $fid
     */
    private $fid = null;

    /**
     * @var string $displaySubj
     */
    private $displaySubj = null;

    /**
     * @var \DateTime $lastUpdatedDt
     */
    private $lastUpdatedDt = null;

    /**
     * @var \DateTime $fileSinceDt
     */
    private $fileSinceDt = null;

    /**
     * Gets as fid
     *
     * @return int
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Sets a new fid
     *
     * @param int $fid
     * @return self
     */
    public function setFid($fid)
    {
        $this->fid = $fid;
        return $this;
    }

    /**
     * Gets as displaySubj
     *
     * @return string
     */
    public function getDisplaySubj()
    {
        return $this->displaySubj;
    }

    /**
     * Sets a new displaySubj
     *
     * @param string $displaySubj
     * @return self
     */
    public function setDisplaySubj($displaySubj)
    {
        $this->displaySubj = $displaySubj;
        return $this;
    }

    /**
     * Gets as lastUpdatedDt
     *
     * @return \DateTime
     */
    public function getLastUpdatedDt()
    {
        return $this->lastUpdatedDt;
    }

    /**
     * Sets a new lastUpdatedDt
     *
     * @param \DateTime $lastUpdatedDt
     * @return self
     */
    public function setLastUpdatedDt(\DateTime $lastUpdatedDt)
    {
        $this->lastUpdatedDt = $lastUpdatedDt;
        return $this;
    }

    /**
     * Gets as fileSinceDt
     *
     * @return \DateTime
     */
    public function getFileSinceDt()
    {
        return $this->fileSinceDt;
    }

    /**
     * Sets a new fileSinceDt
     *
     * @param \DateTime $fileSinceDt
     * @return self
     */
    public function setFileSinceDt(\DateTime $fileSinceDt)
    {
        $this->fileSinceDt = $fileSinceDt;
        return $this;
    }


}

