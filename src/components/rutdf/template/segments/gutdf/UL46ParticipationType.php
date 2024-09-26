<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL46ParticipationType
 *
 * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
 * XSD Type: UL_46_Participation_Type
 */
class UL46ParticipationType
{
    /**
     * 46.1. Код вида участия в сделке
     *
     * @var int $role
     */
    private $role = null;

    /**
     * 46.2. Код вида займа (кредита)
     *
     * @var int $kindCode
     */
    private $kindCode = null;

    /**
     * 46.3. УИд сделки
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \DateTime $fundDate
     */
    private $fundDate = null;

    /**
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @var string $overdueExist0
     */
    private $overdueExist0 = null;

    /**
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @var string $overdueExist1
     */
    private $overdueExist1 = null;

    /**
     * 46.6. Признак прекращения обязательства = 0
     *
     * @var string $stopExist0
     */
    private $stopExist0 = null;

    /**
     * 46.6. Признак прекращения обязательства = 1
     *
     * @var string $stopExist1
     */
    private $stopExist1 = null;

    /**
     * Gets as role
     *
     * 46.1. Код вида участия в сделке
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * 46.1. Код вида участия в сделке
     *
     * @param int $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as kindCode
     *
     * 46.2. Код вида займа (кредита)
     *
     * @return int
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * Sets a new kindCode
     *
     * 46.2. Код вида займа (кредита)
     *
     * @param int $kindCode
     * @return self
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
        return $this;
    }

    /**
     * Gets as uid
     *
     * 46.3. УИд сделки
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 46.3. УИд сделки
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as fundDate
     *
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return \DateTime
     */
    public function getFundDate()
    {
        return $this->fundDate;
    }

    /**
     * Sets a new fundDate
     *
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param \DateTime $fundDate
     * @return self
     */
    public function setFundDate(?\DateTime $fundDate = null)
    {
        $this->fundDate = $fundDate;
        return $this;
    }

    /**
     * Gets as overdueExist0
     *
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @return string
     */
    public function getOverdueExist0()
    {
        return $this->overdueExist0;
    }

    /**
     * Sets a new overdueExist0
     *
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @param string $overdueExist0
     * @return self
     */
    public function setOverdueExist0($overdueExist0)
    {
        $this->overdueExist0 = $overdueExist0;
        return $this;
    }

    /**
     * Gets as overdueExist1
     *
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @return string
     */
    public function getOverdueExist1()
    {
        return $this->overdueExist1;
    }

    /**
     * Sets a new overdueExist1
     *
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @param string $overdueExist1
     * @return self
     */
    public function setOverdueExist1($overdueExist1)
    {
        $this->overdueExist1 = $overdueExist1;
        return $this;
    }

    /**
     * Gets as stopExist0
     *
     * 46.6. Признак прекращения обязательства = 0
     *
     * @return string
     */
    public function getStopExist0()
    {
        return $this->stopExist0;
    }

    /**
     * Sets a new stopExist0
     *
     * 46.6. Признак прекращения обязательства = 0
     *
     * @param string $stopExist0
     * @return self
     */
    public function setStopExist0($stopExist0)
    {
        $this->stopExist0 = $stopExist0;
        return $this;
    }

    /**
     * Gets as stopExist1
     *
     * 46.6. Признак прекращения обязательства = 1
     *
     * @return string
     */
    public function getStopExist1()
    {
        return $this->stopExist1;
    }

    /**
     * Sets a new stopExist1
     *
     * 46.6. Признак прекращения обязательства = 1
     *
     * @param string $stopExist1
     * @return self
     */
    public function setStopExist1($stopExist1)
    {
        $this->stopExist1 = $stopExist1;
        return $this;
    }
}

