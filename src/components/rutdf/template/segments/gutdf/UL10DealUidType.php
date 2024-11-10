<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing UL10DealUidType
 *
 * Блок 10. Идентификатор сделки
 * XSD Type: UL_10_DealUid_Type
 */
class UL10DealUidType extends GutdfSegment
{
    /**
     * 10.1. УИд сделки
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 10.2. Номер сделки
     *
     * @var string $num
     */
    private $num = null;

    /**
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
     *
     * @var string[] $refUid
     */
    private $refUid = [
        
    ];

    /**
     * 10.4. Дата совершения сделки
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * Gets as uid
     *
     * 10.1. УИд сделки
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
     * 10.1. УИд сделки
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
     * 10.2. Номер сделки
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
     * 10.2. Номер сделки
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
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
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
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
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
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
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
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
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
     * 10.3. УИд сделки, по которой задолженность была полностью или частично рефинансирована
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
     * 10.4. Дата совершения сделки
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
     * 10.4. Дата совершения сделки
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
        return 'UL_10_DealUid';
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            'uid' => $this->getUid(),
            'num' => $this->getNum(),
            'refUid' => implode(',', $this->refUid),
            'openDate' => $this->getOpenDate(),
        ];
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
        return 'Блок 10. Идентификатор сделки';
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

