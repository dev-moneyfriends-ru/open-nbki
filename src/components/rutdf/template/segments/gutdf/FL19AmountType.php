<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL19AmountType
 *
 * Блок 19. Сумма и валюта обязательства
 * XSD Type: FL_19_Amount_Type
 */
class FL19AmountType extends GutdfSegment
{
    /**
     * 19.1. Сумма обязательства
     *
     * @var string $sum
     */
    private $sum = null;

    /**
     * 19.2. Валюта обязательства
     *
     * @var string $currency
     */
    private $currency = null;

    /**
     * 19.6. Дата расчета
     *
     * @var string $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as sum
     *
     * 19.1. Сумма обязательства
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
     * 19.1. Сумма обязательства
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
     * 19.2. Валюта обязательства
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
     * 19.2. Валюта обязательства
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
     * 19.6. Дата расчета
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
     * 19.6. Дата расчета
     *
     * @param string $calcDate
     * @return self
     */
    public function setCalcDate(string $calcDate)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_19_Amount';
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
        return 'Блок 19. Сумма и валюта обязательства';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $accountAmt = $this->sendData->getAccountReplyRUTDF()->getAccountAmt();
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

