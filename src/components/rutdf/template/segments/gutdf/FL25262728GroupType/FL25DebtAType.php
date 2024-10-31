<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25262728GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL25DebtAType
 */
class FL25DebtAType extends GutdfSegment
{
    /**
     * 25.1. Признак наличия задолженности = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 25.1. Признак наличия задолженности = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 25.4. Сумма задолженности
     *
     * @var float $debtSum
     */
    private $debtSum = null;

    /**
     * 25.5. Сумма задолженности по основному долгу
     *
     * @var float $debtMainSum
     */
    private $debtMainSum = null;

    /**
     * 25.6. Сумма задолженности по процентам
     *
     * @var float $debtPercentSum
     */
    private $debtPercentSum = null;

    /**
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @var float $debtOtherSum
     */
    private $debtOtherSum = null;

    /**
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @var string $graceUnconfExist0
     */
    private $graceUnconfExist0 = null;

    /**
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @var string $graceUnconfExist1
     */
    private $graceUnconfExist1 = null;

    /**
     * Gets as exist0
     *
     * 25.1. Признак наличия задолженности = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 25.1. Признак наличия задолженности = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 25.1. Признак наличия задолженности = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 25.1. Признак наличия задолженности = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Gets as debtSum
     *
     * 25.4. Сумма задолженности
     *
     * @return float
     */
    public function getDebtSum()
    {
        return $this->debtSum;
    }

    /**
     * Sets a new debtSum
     *
     * 25.4. Сумма задолженности
     *
     * @param float $debtSum
     * @return self
     */
    public function setDebtSum($debtSum)
    {
        $this->debtSum = $debtSum;
        return $this;
    }

    /**
     * Gets as debtMainSum
     *
     * 25.5. Сумма задолженности по основному долгу
     *
     * @return float
     */
    public function getDebtMainSum()
    {
        return $this->debtMainSum;
    }

    /**
     * Sets a new debtMainSum
     *
     * 25.5. Сумма задолженности по основному долгу
     *
     * @param float $debtMainSum
     * @return self
     */
    public function setDebtMainSum($debtMainSum)
    {
        $this->debtMainSum = $debtMainSum;
        return $this;
    }

    /**
     * Gets as debtPercentSum
     *
     * 25.6. Сумма задолженности по процентам
     *
     * @return float
     */
    public function getDebtPercentSum()
    {
        return $this->debtPercentSum;
    }

    /**
     * Sets a new debtPercentSum
     *
     * 25.6. Сумма задолженности по процентам
     *
     * @param float $debtPercentSum
     * @return self
     */
    public function setDebtPercentSum($debtPercentSum)
    {
        $this->debtPercentSum = $debtPercentSum;
        return $this;
    }

    /**
     * Gets as debtOtherSum
     *
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @return float
     */
    public function getDebtOtherSum()
    {
        return $this->debtOtherSum;
    }

    /**
     * Sets a new debtOtherSum
     *
     * 25.7. Сумма задолженности по иным требованиям
     *
     * @param float $debtOtherSum
     * @return self
     */
    public function setDebtOtherSum($debtOtherSum)
    {
        $this->debtOtherSum = $debtOtherSum;
        return $this;
    }

    /**
     * Gets as graceUnconfExist0
     *
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @return string
     */
    public function getGraceUnconfExist0()
    {
        return $this->graceUnconfExist0;
    }

    /**
     * Sets a new graceUnconfExist0
     *
     * 25.9. Признак неподтвержденного льготного периода = 0
     *
     * @param string $graceUnconfExist0
     * @return self
     */
    public function setGraceUnconfExist0($graceUnconfExist0)
    {
        $this->graceUnconfExist0 = $graceUnconfExist0;
        return $this;
    }

    /**
     * Gets as graceUnconfExist1
     *
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @return string
     */
    public function getGraceUnconfExist1()
    {
        return $this->graceUnconfExist1;
    }

    /**
     * Sets a new graceUnconfExist1
     *
     * 25.9. Признак неподтвержденного льготного периода = 1
     *
     * @param string $graceUnconfExist1
     * @return self
     */
    public function setGraceUnconfExist1($graceUnconfExist1)
    {
        $this->graceUnconfExist1 = $graceUnconfExist1;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_25_Debt';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия задолженности' => 'Код «1» – у субъекта имеется задолженность перед источником; код «0» – обстоятельство кода «1» отсутствует (в частности, если субъекту не передана сумма займа (кредита), ответственность субъекта-поручителя не наступила, обязательство принципала возместить выплаченную по независимой гарантии сумму не возникло). Если по показателю 25.1 «Признак наличия задолженности» указан код «0», иные показатели блока 25 Показателей КИ ФЛ не заполняются.',
            'Сумма задолженности' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по основному долгу' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по процентам' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Сумма задолженности по иным требованиям' => 'Сумма определяется на момент наступления каждого события, которое указано по показателю 17.3 «Признак расчета по последнему платежу». Если показатель 17.3 «Признак расчета по последнему платежу» не заполнен, то сумма указывается на дату их изменения вследствие иных событий согласно Приложению 2. В валюте, которая указана по показателю 12.2 «Валюта обязательства».',
            'Признак неподтвержденного льготного периода' => 'Код «1» – льготный период для заемщика признан неустановленным согласно части 29 статьи 6 Федерального закона от 3 апреля 2020 года № 106-ФЗ «О внесении изменений в Федеральный закон «О Центральном банке Российской Федерации (Банке России)» и отдельные законодательные акты Российской Федерации в части особенностей изменения условий кредитного договора, договора займа» (Собрание законодательства Российской Федерации, 2020, № 14, ст. 2036) (далее – Федеральный закон от 3 апреля 2020 года № 106-ФЗ), части 17 статьи 1 Федерального закона от 7 октября 2022 года № 377-ФЗ «Об особенностях исполнения обязательств по кредитным договорам (договорам займа) лицами, призванными на военную службу по мобилизации в Вооруженные Силы Российской Федерации, лицами, принимающими участие в специальной военной операции, а также членами их семей и о внесении изменений в отдельные законодательные акты Российской Федерации» (Собрание законодательства Российской Федерации, 2022, №41, ст. 6939)»; код «0» – обстоятельство кода «1» отсутствует.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 25. Сведения о задолженности';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $debt = $this->template->sendData->getAccountReplyRUTDF()->getArrear();
        if($debt === null || empty($debt->amtOutstanding)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $this->exist0 = null;
        $this->exist1 = '';
        $this->debtSum = $this->formatCurrency($debt->amtOutstanding);
        $this->debtMainSum = $this->formatCurrency($debt->principalOutstanding);
        $this->debtPercentSum = $this->formatCurrency($debt->intOutstanding);
        $this->debtOtherSum = $this->formatCurrency($debt->otherAmtOutstanding);

        if($debt->unconfirmGrace){
            $this->graceUnconfExist0 = null;
            $this->graceUnconfExist1 = '';
        }else{
            $this->graceUnconfExist1 = null;
            $this->graceUnconfExist0 = '';
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'debtSum',
            'debtMainSum',
            'debtPercentSum',
            'debtOtherSum',
            'graceUnconfExist_0' => 'graceUnconfExist0',
            'graceUnconfExist_1' => 'graceUnconfExist1',
        ];
    }
}

