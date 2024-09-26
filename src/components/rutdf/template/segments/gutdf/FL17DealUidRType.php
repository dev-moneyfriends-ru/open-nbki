<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL17DealUidRType
 *
 * Блок 17. Идентификатор сделки (необязательный УИд сделки)
 * XSD Type: FL_17_DealUid_R_Type
 */
class FL17DealUidRType
{
    /**
     * 17.1. УИд сделки
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 17.2. Номер сделки
     *
     * @var string $num
     */
    private $num = null;

    /**
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @var string[] $refUid
     */
    private $refUid = [
        
    ];

    /**
     * 17.4. Дата совершения сделки
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * Gets as uid
     *
     * 17.1. УИд сделки
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
     * 17.1. УИд сделки
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
     * Gets as num
     *
     * 17.2. Номер сделки
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 17.2. Номер сделки
     *
     * @param string $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Adds as refUid
     *
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @return self
     * @param string $refUid
     */
    public function addToRefUid($refUid)
    {
        $this->refUid[] = $refUid;
        return $this;
    }

    /**
     * isset refUid
     *
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefUid($index)
    {
        return isset($this->refUid[$index]);
    }

    /**
     * unset refUid
     *
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefUid($index)
    {
        unset($this->refUid[$index]);
    }

    /**
     * Gets as refUid
     *
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @return string[]
     */
    public function getRefUid()
    {
        return $this->refUid;
    }

    /**
     * Sets a new refUid
     *
     * 17.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @param string $refUid
     * @return self
     */
    public function setRefUid(array $refUid = null)
    {
        $this->refUid = $refUid;
        return $this;
    }

    /**
     * Gets as openDate
     *
     * 17.4. Дата совершения сделки
     *
     * @return string
     */
    public function getOpenDate()
    {
        return $this->openDate;
    }

    /**
     * Sets a new openDate
     *
     * 17.4. Дата совершения сделки
     *
     * @param string $openDate
     * @return self
     */
    public function setOpenDate($openDate)
    {
        $this->openDate = $openDate;
        return $this;
    }
}

