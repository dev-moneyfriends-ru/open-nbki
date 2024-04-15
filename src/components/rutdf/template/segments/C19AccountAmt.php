<?php

namespace mfteam\nbch\components\rutdf\template\segments;


use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\AccountAmtRUTDF;

/**
 * Блок 19. Сумма и валюта обязательства – C19_ACCOUNTAMT
 */
class C19AccountAmt extends BaseSegment
{
    /**
     * @var AccountAmtRUTDF
     */
    private $accountAmt;
    
    public function __construct(RutdfTemplate $template, AccountAmtRUTDF $accountAmt)
    {
        $this->accountAmt = $accountAmt;
        parent::__construct($template);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C19_ACCOUNTAMT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            0 => $this->getSegmentName(),
            1 => $this->formatCurrency($this->accountAmt->creditLimit),
            2 => $this->accountAmt->currencyCode,
            3 => $this->accountAmt->ensuredAmt ? $this->formatCurrency(
                $this->accountAmt->ensuredAmt
            ) : self::EMPTY_VALUE,
            4 => $this->accountAmt->commitcurrCode ?? self::EMPTY_VALUE,
            5 => $this->accountAmt->commitCode ?? self::EMPTY_VALUE,
            6 => $this->formatDate($this->accountAmt->amtDate),
            7 => $this->accountAmt->commitUuid ? $this->accountAmt->commitUuid . "-" . $this->accountAmt->getUuidControlSum($this->accountAmt->commitUuid): self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Сумма обязательства' => 'Заполняется согласно условиям сделки. Для договора займа (кредита) указывается сумма займа (кредита) либо расходный лимит. Для договора поручительства указывается размер ответственности поручителя. Для независимой гарантии указывается сумма, которую принципал обязуется возместить гаранту по выплаченной гарантии (при наличии такой суммы). Для договора лизинга указывается сумма лизинговых платежей. В случае частичной передачи права кредитора по обязательству в результате уступки права (требования) другому лицу источник, получивший право требования по обязательству, по показателю 19.1 «Сумма обязательства» указывает сумму обязательства, право требования по которому он получил согласно условиям договора уступки права (требования). В случае если условия сделки не изменяются, показатели 19.1 «Сумма обязательства» и 19.2 «Валюта обязательства» остаются неизменными.',
            'Валюта обязательства' => 'Заполняется согласно условиям сделки.',
            'Сумма обеспечиваемого обязательства' => 'Заполняется, если обязательством субъекта обеспечивается исполнение другого обязательства. Отражается сумма задолженности всех видов по обязательству, исполнение которого обеспечено обязательством субъекта, на дату формирования задолженности, изменения суммы задолженности.',
            'Валюта обеспечиваемого обязательства' => 'Заполняется согласно условиям сделки.',
            'Код типа обеспечиваемого обязательства' => 'Заполняется по справочнику 2.2',
            'Дата расчета' => 'Определяется датой, по состоянию на которую сформирован блок 19 Показателей КИ ФЛ.',
            'УИд сделки, в результате которой возникло обеспечиваемое обязательство' => 'Указывается УИд сделки, обязательства из которой обеспечены обязательством субъекта.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок может быть Множественным, если показатель ФЛ_18.1 = 2, 3, 5 или 99. Если показатель ФЛ_18.1 = 1 или 4, то блок Единичный дополняемый.';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 19. Сумма и валюта обязательства – C19_ACCOUNTAMT';
    }
}