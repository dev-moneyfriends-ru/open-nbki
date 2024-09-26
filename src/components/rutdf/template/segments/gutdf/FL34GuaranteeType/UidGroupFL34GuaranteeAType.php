<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType;

/**
 * Class representing UidGroupFL34GuaranteeAType
 */
class UidGroupFL34GuaranteeAType
{
    /**
     * 34.2. УИд независимой гарантии
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 34.3. Сумма независимой гарантии
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 34.4. Валюта независимой гарантии
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 34.5. Дата выдачи независимой гарантии
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 34.7. Дата фактического прекращения независимой гарантии
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 34.8. Код причины прекращения независимой гарантии
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as uid
     *
     * 34.2. УИд независимой гарантии
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
     * 34.2. УИд независимой гарантии
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
     * 34.3. Сумма независимой гарантии
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
     * 34.3. Сумма независимой гарантии
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
     * 34.4. Валюта независимой гарантии
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
     * 34.4. Валюта независимой гарантии
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
     * 34.5. Дата выдачи независимой гарантии
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
     * 34.5. Дата выдачи независимой гарантии
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
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
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
     * 34.6. Дата окончания независимой гарантии согласно ее условиям
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
     * 34.7. Дата фактического прекращения независимой гарантии
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
     * 34.7. Дата фактического прекращения независимой гарантии
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
     * 34.8. Код причины прекращения независимой гарантии
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
     * 34.8. Код причины прекращения независимой гарантии
     *
     * @param int $endCode
     * @return self
     */
    public function setEndCode($endCode)
    {
        $this->endCode = $endCode;
        return $this;
    }
}

