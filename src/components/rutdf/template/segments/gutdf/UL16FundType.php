<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL16FundType
 *
 * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
 * XSD Type: UL_16_Fund_Type
 */
class UL16FundType
{
    /**
     * 16.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 16.2. Порядковый номер транша
     *
     * @var int $num
     */
    private $num = null;

    /**
     * 16.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var string $startSum
     */
    private $startSum = null;

    /**
     * Gets as date
     *
     * 16.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * 16.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * Gets as num
     *
     * 16.2. Порядковый номер транша
     *
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 16.2. Порядковый номер транша
     *
     * @param int $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * Gets as startSum
     *
     * 16.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return string
     */
    public function getStartSum()
    {
        return $this->startSum;
    }

    /**
     * Sets a new startSum
     *
     * 16.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param string $startSum
     * @return self
     */
    public function setStartSum($startSum)
    {
        $this->startSum = $startSum;
        return $this;
    }
}

