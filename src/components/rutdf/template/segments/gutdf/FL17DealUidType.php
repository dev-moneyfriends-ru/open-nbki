<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing FL17DealUidType
 *
 * Блок 17. Идентификатор сделки
 * XSD Type: FL_17_DealUid_Type
 */
class FL17DealUidType extends GutdfSegment
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

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_17_DealUid';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'УИд сделки' => 'УИд сделки, по обязательствам из которой формируются блоки 17–39. Если сделка совершена по обращению, УИд сделки должен соответствовать значению показателя 55.4 «УИд обращения» блока 55. Если по одному обращению совершено несколько сделок, только УИд сделки, совершенной первой по времени, должен соответствовать УИд обращения.',
            'Номер сделки' => 'Номер сделки, присвоенный источником. Заполняется, если сделке ранее не был присвоен УИд сделки.',
            'УИд сделки, по которой задолженность была полностью или частично рефинансирована' => 'УИд сделки, задолженность по которой была рефинансирована (если по такой сделке формируется кредитная история) за счет сделки, по которой формируется кредитная история',
            'Дата совершения сделки' => 'Дата совершения сделки, по обязательствам из которой формируется кредитная история',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 17. Идентификатор сделки';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $account = $this->template->sendData->getAccountReplyRUTDF();
        $this->uid = UuidHelper::getUuidWithControl($account->uuid);
        $this->num = $account->acctNum??self::EMPTY_VALUE;
        $this->addToRefUid($account->refUid);
        $this->openDate = $this->formatDate($account->getTrade()->openedDt);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uid',
            'num',
            'refUid',
            'openDate',
        ];
    }
}

