<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\NbchEvents;


/**
 * Class representing FLEvent32Type
 *
 * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
 * XSD Type: FL_Event_3_2_Type
 */
class FLEvent32Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = self::OPERATION_CODE_C1;

    /**
     * Дата, с которой изменения вступают в силу
     *
     * @var string $startDate
     */
    private $startDate = null;

    /**
     * Блок 17. Идентификатор сделки
     *
     * @var FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @var FLEvent14Type $fLEvent14
     */
    private $fLEvent14 = null;

    /**
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @var FLEvent141Type $fLEvent141
     */
    private $fLEvent141 = null;

    /**
     * Конкурсное производство в отношении источника открылось
     *
     * @var FLEvent281Type $fLEvent281
     */
    private $fLEvent281 = null;

    /**
     * Процесс ликвидации источника начался
     *
     * @var FLEvent291Type $fLEvent291
     */
    private $fLEvent291 = null;

    /**
     * Права по обязательству получены от другого лица
     *
     * @var FLEvent2112Type $fLEvent2112
     */
    private $fLEvent2112 = null;

    /**
     * Изменились сведения об условиях обязательства субъекта
     *
     * @var FLEvent21Type[] $fLEvent21
     */
    private $fLEvent21 = [

    ];

    /**
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @var FLEvent22Type[] $fLEvent22
     */
    private $fLEvent22 = [

    ];

    /**
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @var FLEvent221Type[] $fLEvent221
     */
    private $fLEvent221 = [

    ];

    /**
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @var FLEvent23Type[] $fLEvent23
     */
    private $fLEvent23 = [

    ];

    /**
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @var FLEvent24Type[] $fLEvent24
     */
    private $fLEvent24 = [

    ];

    /**
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @var FLEvent26Type[] $fLEvent26
     */
    private $fLEvent26 = [

    ];

    /**
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var FLEvent282Type[] $fLEvent282
     */
    private $fLEvent282 = [

    ];

    /**
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var FLEvent292Type[] $fLEvent292
     */
    private $fLEvent292 = [

    ];

    /**
     * Права по обязательству частично перешли к другому лицу
     *
     * @var FLEvent2111Type[] $fLEvent2111
     */
    private $fLEvent2111 = [

    ];

    /**
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @var FLEvent212Type[] $fLEvent212
     */
    private $fLEvent212 = [

    ];

    /**
     * Источник прекратил передачу информации по обязательству
     *
     * @var FLEvent210Type $fLEvent210
     */
    private $fLEvent210 = null;

    /**
     * Права по обязательству полностью перешли к другому лицу
     *
     * @var FLEvent211Type $fLEvent211
     */
    private $fLEvent211 = null;

    /**
     * Обязательство субъекта прекратилось
     *
     * @var FLEvent25Type $fLEvent25
     */
    private $fLEvent25 = null;

    /**
     * Конкурсное производство в отношении источника завершилось
     *
     * @var FLEvent283Type $fLEvent283
     */
    private $fLEvent283 = null;

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var FLEvent284Type $fLEvent284
     */
    private $fLEvent284 = null;

    /**
     * Процесс ликвидации источника завершился
     *
     * @var FLEvent293Type $fLEvent293
     */
    private $fLEvent293 = null;

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var FLEvent294Type $fLEvent294
     */
    private $fLEvent294 = null;

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * Sets a new operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @param string $operationCode
     * @return self
     */
    public function setOperationCode($operationCode)
    {
        $this->operationCode = $operationCode;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * Дата, с которой изменения вступают в силу
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * Дата, с которой изменения вступают в силу
     *
     * @param string $startDate
     * @return self
     */
    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as fL17DealUid
     *
     * Блок 17. Идентификатор сделки
     *
     * @return FL17DealUidType
     */
    public function getFL17DealUid()
    {
        return $this->fL17DealUid;
    }

    /**
     * Sets a new fL17DealUid
     *
     * Блок 17. Идентификатор сделки
     *
     * @param FL17DealUidType $fL17DealUid
     * @return self
     */
    public function setFL17DealUid(FL17DealUidType $fL17DealUid)
    {
        $this->fL17DealUid = $fL17DealUid;
        return $this;
    }

    /**
     * Gets as fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @return FLEvent14Type
     */
    public function getFLEvent14()
    {
        return $this->fLEvent14;
    }

    /**
     * Sets a new fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param FLEvent14Type $fLEvent14
     * @return self
     */
    public function setFLEvent14(?FLEvent14Type $fLEvent14 = null)
    {
        $this->fLEvent14 = $fLEvent14;
        return $this;
    }

    /**
     * Gets as fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @return FLEvent141Type
     */
    public function getFLEvent141()
    {
        return $this->fLEvent141;
    }

    /**
     * Sets a new fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param FLEvent141Type $fLEvent141
     * @return self
     */
    public function setFLEvent141(?FLEvent141Type $fLEvent141 = null)
    {
        $this->fLEvent141 = $fLEvent141;
        return $this;
    }

    /**
     * Gets as fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @return FLEvent281Type
     */
    public function getFLEvent281()
    {
        return $this->fLEvent281;
    }

    /**
     * Sets a new fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param FLEvent281Type $fLEvent281
     * @return self
     */
    public function setFLEvent281(?FLEvent281Type $fLEvent281 = null)
    {
        $this->fLEvent281 = $fLEvent281;
        return $this;
    }

    /**
     * Gets as fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @return FLEvent291Type
     */
    public function getFLEvent291()
    {
        return $this->fLEvent291;
    }

    /**
     * Sets a new fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param FLEvent291Type $fLEvent291
     * @return self
     */
    public function setFLEvent291(?FLEvent291Type $fLEvent291 = null)
    {
        $this->fLEvent291 = $fLEvent291;
        return $this;
    }

    /**
     * Gets as fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @return FLEvent2112Type
     */
    public function getFLEvent2112()
    {
        return $this->fLEvent2112;
    }

    /**
     * Sets a new fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @param FLEvent2112Type $fLEvent2112
     * @return self
     */
    public function setFLEvent2112(?FLEvent2112Type $fLEvent2112 = null)
    {
        $this->fLEvent2112 = $fLEvent2112;
        return $this;
    }

    /**
     * Adds as fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param FLEvent21Type $fLEvent21
     * @return self
     */
    public function addToFLEvent21(FLEvent21Type $fLEvent21)
    {
        $this->fLEvent21[] = $fLEvent21;
        return $this;
    }

    /**
     * isset fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent21($index)
    {
        return isset($this->fLEvent21[$index]);
    }

    /**
     * unset fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent21($index)
    {
        unset($this->fLEvent21[$index]);
    }

    /**
     * Gets as fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @return FLEvent21Type[]
     */
    public function getFLEvent21()
    {
        return $this->fLEvent21;
    }

    /**
     * Sets a new fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param FLEvent21Type[] $fLEvent21
     * @return self
     */
    public function setFLEvent21(array $fLEvent21 = null)
    {
        $this->fLEvent21 = $fLEvent21;
        return $this;
    }

    /**
     * Adds as fLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param FLEvent22Type $fLEvent22
     * @return self
     */
    public function addToFLEvent22(FLEvent22Type $fLEvent22)
    {
        $this->fLEvent22[] = $fLEvent22;
        return $this;
    }

    /**
     * isset fLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent22($index)
    {
        return isset($this->fLEvent22[$index]);
    }

    /**
     * unset fLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent22($index)
    {
        unset($this->fLEvent22[$index]);
    }

    /**
     * Gets as fLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @return FLEvent22Type[]
     */
    public function getFLEvent22()
    {
        return $this->fLEvent22;
    }

    /**
     * Sets a new fLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param FLEvent22Type[] $fLEvent22
     * @return self
     */
    public function setFLEvent22(array $fLEvent22 = null)
    {
        $this->fLEvent22 = $fLEvent22;
        return $this;
    }

    /**
     * Adds as fLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param FLEvent221Type $fLEvent221
     * @return self
     */
    public function addToFLEvent221(FLEvent221Type $fLEvent221)
    {
        $this->fLEvent221[] = $fLEvent221;
        return $this;
    }

    /**
     * isset fLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent221($index)
    {
        return isset($this->fLEvent221[$index]);
    }

    /**
     * unset fLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent221($index)
    {
        unset($this->fLEvent221[$index]);
    }

    /**
     * Gets as fLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @return FLEvent221Type[]
     */
    public function getFLEvent221()
    {
        return $this->fLEvent221;
    }

    /**
     * Sets a new fLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param FLEvent221Type[] $fLEvent221
     * @return self
     */
    public function setFLEvent221(array $fLEvent221 = null)
    {
        $this->fLEvent221 = $fLEvent221;
        return $this;
    }

    /**
     * Adds as fLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param FLEvent23Type $fLEvent23
     * @return self
     */
    public function addToFLEvent23(FLEvent23Type $fLEvent23)
    {
        $this->fLEvent23[] = $fLEvent23;
        return $this;
    }

    /**
     * isset fLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent23($index)
    {
        return isset($this->fLEvent23[$index]);
    }

    /**
     * unset fLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent23($index)
    {
        unset($this->fLEvent23[$index]);
    }

    /**
     * Gets as fLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @return FLEvent23Type[]
     */
    public function getFLEvent23()
    {
        return $this->fLEvent23;
    }

    /**
     * Sets a new fLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param FLEvent23Type[] $fLEvent23
     * @return self
     */
    public function setFLEvent23(array $fLEvent23 = null)
    {
        $this->fLEvent23 = $fLEvent23;
        return $this;
    }

    /**
     * Adds as fLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param FLEvent24Type $fLEvent24
     * @return self
     */
    public function addToFLEvent24(FLEvent24Type $fLEvent24)
    {
        $this->fLEvent24[] = $fLEvent24;
        return $this;
    }

    /**
     * isset fLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent24($index)
    {
        return isset($this->fLEvent24[$index]);
    }

    /**
     * unset fLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent24($index)
    {
        unset($this->fLEvent24[$index]);
    }

    /**
     * Gets as fLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @return FLEvent24Type[]
     */
    public function getFLEvent24()
    {
        return $this->fLEvent24;
    }

    /**
     * Sets a new fLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param FLEvent24Type[] $fLEvent24
     * @return self
     */
    public function setFLEvent24(array $fLEvent24 = null)
    {
        $this->fLEvent24 = $fLEvent24;
        return $this;
    }

    /**
     * Adds as fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param FLEvent26Type $fLEvent26
     * @return self
     */
    public function addToFLEvent26(FLEvent26Type $fLEvent26)
    {
        $this->fLEvent26[] = $fLEvent26;
        return $this;
    }

    /**
     * isset fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent26($index)
    {
        return isset($this->fLEvent26[$index]);
    }

    /**
     * unset fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent26($index)
    {
        unset($this->fLEvent26[$index]);
    }

    /**
     * Gets as fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @return FLEvent26Type[]
     */
    public function getFLEvent26()
    {
        return $this->fLEvent26;
    }

    /**
     * Sets a new fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param FLEvent26Type[] $fLEvent26
     * @return self
     */
    public function setFLEvent26(array $fLEvent26 = null)
    {
        $this->fLEvent26 = $fLEvent26;
        return $this;
    }

    /**
     * Adds as fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param FLEvent282Type $fLEvent282
     * @return self
     */
    public function addToFLEvent282(FLEvent282Type $fLEvent282)
    {
        $this->fLEvent282[] = $fLEvent282;
        return $this;
    }

    /**
     * isset fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent282($index)
    {
        return isset($this->fLEvent282[$index]);
    }

    /**
     * unset fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent282($index)
    {
        unset($this->fLEvent282[$index]);
    }

    /**
     * Gets as fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @return FLEvent282Type[]
     */
    public function getFLEvent282()
    {
        return $this->fLEvent282;
    }

    /**
     * Sets a new fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param FLEvent282Type[] $fLEvent282
     * @return self
     */
    public function setFLEvent282(array $fLEvent282 = null)
    {
        $this->fLEvent282 = $fLEvent282;
        return $this;
    }

    /**
     * Adds as fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param FLEvent292Type $fLEvent292
     * @return self
     */
    public function addToFLEvent292(FLEvent292Type $fLEvent292)
    {
        $this->fLEvent292[] = $fLEvent292;
        return $this;
    }

    /**
     * isset fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent292($index)
    {
        return isset($this->fLEvent292[$index]);
    }

    /**
     * unset fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent292($index)
    {
        unset($this->fLEvent292[$index]);
    }

    /**
     * Gets as fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @return FLEvent292Type[]
     */
    public function getFLEvent292()
    {
        return $this->fLEvent292;
    }

    /**
     * Sets a new fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param FLEvent292Type[] $fLEvent292
     * @return self
     */
    public function setFLEvent292(array $fLEvent292 = null)
    {
        $this->fLEvent292 = $fLEvent292;
        return $this;
    }

    /**
     * Adds as fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @param FLEvent2111Type $fLEvent2111
     * @return self
     */
    public function addToFLEvent2111(FLEvent2111Type $fLEvent2111)
    {
        $this->fLEvent2111[] = $fLEvent2111;
        return $this;
    }

    /**
     * isset fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent2111($index)
    {
        return isset($this->fLEvent2111[$index]);
    }

    /**
     * unset fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent2111($index)
    {
        unset($this->fLEvent2111[$index]);
    }

    /**
     * Gets as fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @return FLEvent2111Type[]
     */
    public function getFLEvent2111()
    {
        return $this->fLEvent2111;
    }

    /**
     * Sets a new fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @param FLEvent2111Type[] $fLEvent2111
     * @return self
     */
    public function setFLEvent2111(array $fLEvent2111 = null)
    {
        $this->fLEvent2111 = $fLEvent2111;
        return $this;
    }

    /**
     * Adds as fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param FLEvent212Type $fLEvent212
     * @return self
     */
    public function addToFLEvent212(FLEvent212Type $fLEvent212)
    {
        $this->fLEvent212[] = $fLEvent212;
        return $this;
    }

    /**
     * isset fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent212($index)
    {
        return isset($this->fLEvent212[$index]);
    }

    /**
     * unset fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent212($index)
    {
        unset($this->fLEvent212[$index]);
    }

    /**
     * Gets as fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @return FLEvent212Type[]
     */
    public function getFLEvent212()
    {
        return $this->fLEvent212;
    }

    /**
     * Sets a new fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param FLEvent212Type[] $fLEvent212
     * @return self
     */
    public function setFLEvent212(array $fLEvent212 = null)
    {
        $this->fLEvent212 = $fLEvent212;
        return $this;
    }

    /**
     * Gets as fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @return FLEvent210Type
     */
    public function getFLEvent210()
    {
        return $this->fLEvent210;
    }

    /**
     * Sets a new fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param FLEvent210Type $fLEvent210
     * @return self
     */
    public function setFLEvent210(?FLEvent210Type $fLEvent210 = null)
    {
        $this->fLEvent210 = $fLEvent210;
        return $this;
    }

    /**
     * Gets as fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @return FLEvent211Type
     */
    public function getFLEvent211()
    {
        return $this->fLEvent211;
    }

    /**
     * Sets a new fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @param FLEvent211Type $fLEvent211
     * @return self
     */
    public function setFLEvent211(?FLEvent211Type $fLEvent211 = null)
    {
        $this->fLEvent211 = $fLEvent211;
        return $this;
    }

    /**
     * Gets as fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @return FLEvent25Type
     */
    public function getFLEvent25()
    {
        return $this->fLEvent25;
    }

    /**
     * Sets a new fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param FLEvent25Type $fLEvent25
     * @return self
     */
    public function setFLEvent25(?FLEvent25Type $fLEvent25 = null)
    {
        $this->fLEvent25 = $fLEvent25;
        return $this;
    }

    /**
     * Gets as fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @return FLEvent283Type
     */
    public function getFLEvent283()
    {
        return $this->fLEvent283;
    }

    /**
     * Sets a new fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param FLEvent283Type $fLEvent283
     * @return self
     */
    public function setFLEvent283(?FLEvent283Type $fLEvent283 = null)
    {
        $this->fLEvent283 = $fLEvent283;
        return $this;
    }

    /**
     * Gets as fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return FLEvent284Type
     */
    public function getFLEvent284()
    {
        return $this->fLEvent284;
    }

    /**
     * Sets a new fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param FLEvent284Type $fLEvent284
     * @return self
     */
    public function setFLEvent284(?FLEvent284Type $fLEvent284 = null)
    {
        $this->fLEvent284 = $fLEvent284;
        return $this;
    }

    /**
     * Gets as fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @return FLEvent293Type
     */
    public function getFLEvent293()
    {
        return $this->fLEvent293;
    }

    /**
     * Sets a new fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param FLEvent293Type $fLEvent293
     * @return self
     */
    public function setFLEvent293(?FLEvent293Type $fLEvent293 = null)
    {
        $this->fLEvent293 = $fLEvent293;
        return $this;
    }

    /**
     * Gets as fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return FLEvent294Type
     */
    public function getFLEvent294()
    {
        return $this->fLEvent294;
    }

    /**
     * Sets a new fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param FLEvent294Type $fLEvent294
     * @return self
     */
    public function setFLEvent294(?FLEvent294Type $fLEvent294 = null)
    {
        $this->fLEvent294 = $fLEvent294;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_Event_3_2';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории';
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        $properties = parent::getProperties();
        $properties[] = 'startDate';
        return $properties;
    }

    /**
     * @inheritDoc
     */
    protected function initAttributes()
    {
        $this->startDate = $this->formatDate($this->sendData->getStartDate());
        $this->setFL17DealUid(new FL17DealUidType($this->template));
        $cnt = 1;
        foreach ($this->sendData->getCorrectionData() as $correctionData) {
            $this->template->setCorrectionData($correctionData);
            $eventClassName = NbchEvents::getEventClass($correctionData->getCorrectionEventId(), false);
            if ($eventClassName === null) {
                continue;
            }
            $event = new $eventClassName($this->template, $correctionData->getCorrectionEventId());
            $event->setOrderNum($cnt);
            $cnt++;

            $method = str_replace('_', '', $event->getSegmentName());
            if (method_exists($this, "addTo$method")) {
                $method = "addTo$method";
                $this->$method($event);
            } else {
                $method = "setTo$method";
                $this->$method($event);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'fL17DealUid',
            'fLEvent14',
            'fLEvent141',
            'fLEvent281',
            'fLEvent291',
            'fLEvent2112',
            'fLEvent21',
            'fLEvent22',
            'fLEvent221',
            'fLEvent23',
            'fLEvent24',
            'fLEvent26',
            'fLEvent282',
            'fLEvent292',
            'fLEvent2111',
            'fLEvent212',
            'fLEvent210',
            'fLEvent211',
            'fLEvent25',
            'fLEvent283',
            'fLEvent284',
            'fLEvent293',
            'fLEvent294',
        ];
    }
}

