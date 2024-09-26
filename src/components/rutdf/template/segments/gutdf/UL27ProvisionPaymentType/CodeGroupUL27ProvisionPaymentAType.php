<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType;

/**
 * Class representing CodeGroupUL27ProvisionPaymentAType
 */
class CodeGroupUL27ProvisionPaymentAType
{
    /**
     * 27.2. Код использованного обеспечения
     *
     * @var int $code
     */
    private $code = null;

    /**
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 27.4. Сумма требований, погашенных за счет обеспечения
     *
     * @var float $sum
     */
    private $sum = null;

    /**
     * Gets as code
     *
     * 27.2. Код использованного обеспечения
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 27.2. Код использованного обеспечения
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 27.3. Дата погашения требований за счет обеспечения
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sum
     *
     * 27.4. Сумма требований, погашенных за счет обеспечения
     *
     * @return float
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * Sets a new sum
     *
     * 27.4. Сумма требований, погашенных за счет обеспечения
     *
     * @param float $sum
     * @return self
     */
    public function setSum($sum)
    {
        $this->sum = $sum;
        return $this;
    }
}

