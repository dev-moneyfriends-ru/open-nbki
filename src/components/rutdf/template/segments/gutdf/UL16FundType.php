<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\BaseSegment;

/**
 * Class representing UL16FundType
 *
 * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
 * XSD Type: UL_16_Fund_Type
 */
class UL16FundType extends GutdfSegment
{
    /**
     * 16.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var string $date
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
     * 16.4. Валюта задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * Gets as date
     *
     * 16.1. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return string
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
     * @param string $date
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

    /**
     * Gets as currency
     *
     * 16.4. Валюта задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * 16.4. Валюта задолженности на дату передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
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
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_16_Fund';
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
        return 'Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства';
    }

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function init(): void
    {
        $fund = $this->sendData->getAccountReplyRUTDF()->getFundDateRUTDF()[$this->idx];
        $this->setDate($this->formatDate($fund->fundDate));
        $this->setNum($fund->trancheNum);
        $this->setStartSum($this->formatCurrency($fund->startSum));
        $this->setCurrency($fund->getFundCurrency());
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
            'currency',
        ];
    }
}

