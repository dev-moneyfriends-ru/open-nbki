<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\PaymentRUTDF;

/**
 * Блок 20. Сведения о внесении платежей – B20_PAYMT
 */
class B20Paymt extends BaseSegment
{
    /**
     * @var PaymentRUTDF
     */
    private $model;
    
    /**
     * @param RutdfTemplate $template
     * @param PaymentRUTDF $model
     */
    public function __construct(RutdfTemplate $template, PaymentRUTDF $model)
    {
        $this->model = $model;
        parent::__construct($template);
    }
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B20_PAYMT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            0 => $this->getSegmentName(),
            1 => $this->formatDate($this->model->paymtDate),
            2 => $this->formatCurrency($this->model->paymtAmt),
            3 => $this->formatCurrency($this->model->principalPaymtAmt),
            4 => $this->formatCurrency($this->model->intPaymtAmt),
            5 => $this->formatCurrency($this->model->otherPaymtAmt),
            6 => $this->formatCurrency($this->model->totalAmt),
            7 => $this->formatCurrency($this->model->principalTotalAmt),
            8 => $this->formatCurrency($this->model->intTotalAmt),
            9 => $this->formatCurrency($this->model->otherTotalAmt),
            10 => $this->model->amtKeepCode,
            11 => $this->model->termsDueCode,
            12 => $this->model->daysPastDue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата последнего внесенного платежа' => '',
            'Сумма последнего внесенного платежа' => 'Если указано значение «0,00», то заполняются только показатели 28.10-28.12, иные показатели блока 28 не заполняются . Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма последнего внесенного платежа по основному долгу' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма последнего внесенного платежа по процентам' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма последнего внесенного платежа по иным требованиям' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма всех внесенных платежей по обязательству' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма внесенных платежей по основному долгу' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма внесенных платежей по процентам' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Сумма внесенных платежей по иным требованиям' => 'Заполняется в валюте, которая указана по показателю 19.2 «Валюта обязательства».',
            'Код соблюдения размера платежей' => 'Заполняется по состоянию на дату формирования блока 28. Заполняется по справочнику 3.6.',
            'Код соблюдения срока внесения платежей' => 'Заполняется по состоянию на дату формирования блока 28. Заполняется по справочнику 3.7.',
            'Продолжительность просрочки' => 'Количество календарных дней, в течение которых субъект нарушает обязанность вносить платежи. Значение указанного показателя определяется методом ФИФО.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 20. Сведения о внесении платежей – B20_PAYMT";
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
    public function getDescription(): string
    {
        return 'Cведения о действиях субъекта по исполнению своего обязательства или его части. Для договора лизинга указываются суммы внесенных лизинговых платежей, пеней и штрафов. В случае если по условиям сделки платеж признается внесенным с момента его принятия источником, в блоке 20 показателей КИ ЮЛ отражаются сведения о принятых источником платежах. Если в одной группе блоков идут несколько блоков 20, то они будут обработаны и отображены в кредитном отчете последовательно. Таким образом, если последнее событие на дату – это полное погашение просрочки, то в последнем блоке 20 одной группы блоков по показателю ЮЛ_20.12 ';
    }
}