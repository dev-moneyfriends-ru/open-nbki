<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL24FundType
 *
 * Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
 * XSD Type: FL_24_Fund_Type
 */
class FL24FundType extends GutdfSegment
{
    /**
     * 24.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * 24.2. Порядковый номер транша
     *
     * @var int $num
     */
    private $num = null;

    /**
     * 24.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var string $startSum
     */
    private $startSum = null;

    /**
     * Gets as date
     *
     * 24.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * 24.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * 24.2. Порядковый номер транша
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
     * 24.2. Порядковый номер транша
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
     * 24.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * 24.3. Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param string $startSum
     * @return self
     */
    public function setStartSum($startSum)
    {
        $this->startSum = $startSum;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_24_Fund';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => 'В КИ заемщика или лизингополучателя указывается дата передачи заёмщику суммы займа (кредита) или дата передачи лизингополучателю каждого предмета лизинга, в КИ принципала по независимой гарантии или поручителя – соответственно дата вступления в силу гарантии или дата возникновения поручительства. По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата передачи каждого транша, за исключением займа (кредита), выданного с использованием платежной карты.',
            'Порядковый номер транша' => 'Заполняется для займа (кредита), который выдается траншами, за исключением выданного с использованием платежной карты, займа (кредита), предоставленного на условиях овердрафта.',
            'Сумма задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => 'Сумма общей задолженности субъекта перед источником по состоянию на дату: передачи суммы займа или каждого транша субъекту-заемщику; передачи каждого предмета лизинга субъекту-лизингополучателю; возникновения поручительства - для субъекта-поручителя; вступления в силу гарантии - для субъекта-принципала.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 24. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $fund = $this->sendData->getAccountReplyRUTDF()->getFundDateRUTDF()[$this->idx];
        $this->date = $this->formatDate($fund->fundDate);
        $this->num = $fund->trancheNum;
        $this->startSum = $this->formatCurrency($fund->startSum);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'date',
            'num',
            'startSum',
        ];
    }
}

