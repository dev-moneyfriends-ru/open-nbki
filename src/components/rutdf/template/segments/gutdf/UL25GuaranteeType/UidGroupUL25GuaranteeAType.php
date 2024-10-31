<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;
use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing UidGroupUL25GuaranteeAType
 */
class UidGroupUL25GuaranteeAType extends GutdfSegment
{
    /**
     * 25.2. УИд независимой гарантии
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 25.3. Сумма независимой гарантии
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 25.4. Валюта независимой гарантии
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 25.5. Дата выдачи независимой гарантии
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 25.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 25.7. Дата фактического прекращения независимой гарантии
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 25.8. Код причины прекращения независимой гарантии
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as uid
     *
     * 25.2. УИд независимой гарантии
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
     * 25.2. УИд независимой гарантии
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
     * Gets as sum
     *
     * 25.3. Сумма независимой гарантии
     *
     * @return string
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 25.3. Сумма независимой гарантии
     *
     * @param string $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }

    /**
     * Gets as currency
     *
     * 25.4. Валюта независимой гарантии
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * 25.4. Валюта независимой гарантии
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Gets as openDate
     *
     * 25.5. Дата выдачи независимой гарантии
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
     * 25.5. Дата выдачи независимой гарантии
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
     * Gets as endDate
     *
     * 25.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * 25.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @param string $endDate
     * @return self
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as factEndDate
     *
     * 25.7. Дата фактического прекращения независимой гарантии
     *
     * @return \DateTime
     */
    public function getFactEndDate()
    {
        return $this->factEndDate;
    }

    /**
     * Sets a new factEndDate
     *
     * 25.7. Дата фактического прекращения независимой гарантии
     *
     * @param \DateTime $factEndDate
     * @return self
     */
    public function setFactEndDate(?\DateTime $factEndDate = null)
    {
        $this->factEndDate = $factEndDate;
        return $this;
    }

    /**
     * Gets as endCode
     *
     * 25.8. Код причины прекращения независимой гарантии
     *
     * @return int
     */
    public function getEndCode()
    {
        return $this->endCode;
    }

    /**
     * Sets a new endCode
     *
     * 25.8. Код причины прекращения независимой гарантии
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'Uid_group_UL_25_Guarantee';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'УИд независимой гарантии' => 'Заполняется, если по обязательству принципала формируется КИ. Значение указанного показателя должно соответствовать значению показателя 17.1 «УИд сделки» блока 17 в КИ принципала – физического лица или показателя 10.1 «УИд сделки» блока 10 в КИ принципала – юридического лица.',
            'Сумма независимой гарантии' => '',
            'Валюта независимой гарантии' => '',
            'Дата выдачи независимой гарантии' => '',
            'Дата окончания независимой гарантии согласно ее условиям' => '',
            'Дата фактического прекращения независимой гарантии' => '',
            'Код причины прекращения независимой гарантии' => 'Заполняется по справочнику 4.2.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Независимая гарантия';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $guaranty = $this->template->sendData->getAccountReplyRUTDF()->getIndepGuarantor()[$this->idx];

        $this->uid = UuidHelper::getUuidWithControl($guaranty->indepGuaranteeUuid);
        $this->sum = $this->formatCurrency($guaranty->indepGuaranteeVolume);
        $this->currency = $guaranty->currencyCode;
        $this->openDate = $this->formatDate($guaranty->indepGuaranteeDt);
        $this->endDate = $this->formatDate($guaranty->indepGuaranteeExpirationDate);
        $this->factEndDate = $this->formatDate($guaranty->indepGuaranteeFactExpirationDate);
        $this->endCode = $guaranty->indepGuaranteeEndReason;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uid',
            'sum',
            'currency',
            'openDate',
            'endDate',
            'factEndDate',
            'endCode',
        ];
    }
}

