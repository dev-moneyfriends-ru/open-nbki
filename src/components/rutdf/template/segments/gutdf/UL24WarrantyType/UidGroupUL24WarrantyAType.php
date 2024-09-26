<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL24WarrantyType;

/**
 * Class representing UidGroupUL24WarrantyAType
 */
class UidGroupUL24WarrantyAType
{
    /**
     * 24.2. УИд договора поручительства
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 24.3. Размер поручительства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 24.4. Валюта поручительства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 24.5. Дата заключения договора поручительства
     *
     * @var string $openDate
     */
    private $openDate = null;

    /**
     * 24.6. Дата прекращения поручительства согласно договору
     *
     * @var string $endDate
     */
    private $endDate = null;

    /**
     * 24.7. Дата фактического прекращения поручительства
     *
     * @var \DateTime $factEndDate
     */
    private $factEndDate = null;

    /**
     * 24.8. Код причины прекращения поручительства
     *
     * @var int $endCode
     */
    private $endCode = null;

    /**
     * Gets as uid
     *
     * 24.2. УИд договора поручительства
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
     * 24.2. УИд договора поручительства
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
     * 24.3. Размер поручительства
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
     * 24.3. Размер поручительства
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
     * 24.4. Валюта поручительства
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
     * 24.4. Валюта поручительства
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
     * 24.5. Дата заключения договора поручительства
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
     * 24.5. Дата заключения договора поручительства
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
     * 24.6. Дата прекращения поручительства согласно договору
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
     * 24.6. Дата прекращения поручительства согласно договору
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
     * 24.7. Дата фактического прекращения поручительства
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
     * 24.7. Дата фактического прекращения поручительства
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
     * 24.8. Код причины прекращения поручительства
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
     * 24.8. Код причины прекращения поручительства
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

