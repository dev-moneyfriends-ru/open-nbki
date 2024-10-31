<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL12AmountType
 *
 * Блок 12. Сумма и валюта обязательства
 * XSD Type: UL_12_Amount_Type
 */
class UL12AmountType extends GutdfSegment
{
    /**
     * 12.1. Сумма обязательства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 12.2. Валюта обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 12.6. Дата расчета
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as sum
     *
     * 12.1. Сумма обязательства
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
     * 12.1. Сумма обязательства
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
     * 12.2. Валюта обязательства
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
     * 12.2. Валюта обязательства
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
     * Gets as calcDate
     *
     * 12.6. Дата расчета
     *
     * @return string
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 12.6. Дата расчета
     *
     * @param \DateTime $calcDate
     * @return self
     */
    public function setCalcDate(\DateTime $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_12_Amount';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Сумма обязательства' => 'Заполняется согласно условиям сделки. Для договора займа (кредита) указывается сумма займа (кредита) либо расходный лимит. Для договора поручительства указывается размер ответственности поручителя. Для независимой гарантии указывается сумма, которую принципал обязуется возместить гаранту по выплаченной гарантии (при наличии такой суммы). Для договора лизинга указывается сумма лизинговых платежей. В случае частичной передачи права кредитора по обязательству в результате уступки права (требования) другому лицу источник, получивший право требования по обязательству, по показателю 19.1 «Сумма обязательства» указывает сумму обязательства, право требования по которому он получил согласно условиям договора уступки права (требования). В случае если условия сделки не изменяются, показатели 19.1 «Сумма обязательства» и 19.2 «Валюта обязательства» остаются неизменными.',
            'Валюта обязательства' => 'Заполняется согласно условиям сделки.',
            'Дата расчета' => 'Определяется датой, по состоянию на которую сформирован блок.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 12. Сумма и валюта обязательства';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $accountAmt = $this->template->sendData->getAccountReplyRUTDF()->getAccountAmt();
        if($accountAmt === null){
            return;
        }
        $this->sum = $this->formatCurrency($accountAmt->creditLimit);
        $this->currency = $accountAmt->currencyCode;
        $this->calcDate= $this->formatDate($accountAmt->amtDate);
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'sum',
            'currency',
            'calcDate',
        ];
    }
}

