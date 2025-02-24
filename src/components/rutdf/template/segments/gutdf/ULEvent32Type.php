<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\NbchEvents;

/**
 * Class representing ULEvent32Type
 *
 * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
 * XSD Type: UL_Event_3_2_Type
 */
class ULEvent32Type extends EventDataType
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
     * @var ?string$startDate
     */
    private $startDate = null;

    /**
     * Блок 10. Идентификатор сделки
     *
     * @var UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @var ULEvent14Type $uLEvent14
     */
    private $uLEvent14 = null;

    /**
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @var ULEvent141Type $uLEvent141
     */
    private $uLEvent141 = null;

    /**
     * Конкурсное производство в отношении источника открылось
     *
     * @var ULEvent281Type $uLEvent281
     */
    private $uLEvent281 = null;

    /**
     * Процесс ликвидации источника начался
     *
     * @var ULEvent291Type $uLEvent291
     */
    private $uLEvent291 = null;

    /**
     * Права кредитора по обязательству получены от другого лица
     *
     * @var ULEvent2112Type $uLEvent2112
     */
    private $uLEvent2112 = null;

    /**
     * Изменились сведения об условиях обязательства субъекта
     *
     * @var ULEvent21Type[] $uLEvent21
     */
    private $uLEvent21 = [
        
    ];

    /**
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @var ULEvent22Type[] $uLEvent22
     */
    private $uLEvent22 = [
        
    ];

    /**
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @var ULEvent221Type[] $uLEvent221
     */
    private $uLEvent221 = [
        
    ];

    /**
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @var ULEvent23Type[] $uLEvent23
     */
    private $uLEvent23 = [
        
    ];

    /**
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @var ULEvent24Type[] $uLEvent24
     */
    private $uLEvent24 = [
        
    ];

    /**
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @var ULEvent26Type[] $uLEvent26
     */
    private $uLEvent26 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var ULEvent282Type[] $uLEvent282
     */
    private $uLEvent282 = [
        
    ];

    /**
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var ULEvent292Type[] $uLEvent292
     */
    private $uLEvent292 = [
        
    ];

    /**
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @var ULEvent2111Type[] $uLEvent2111
     */
    private $uLEvent2111 = [
        
    ];

    /**
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @var ULEvent212Type[] $uLEvent212
     */
    private $uLEvent212 = [
        
    ];

    /**
     * Источник прекратил передачу информации по обязательству
     *
     * @var ULEvent210Type $uLEvent210
     */
    private $uLEvent210 = null;

    /**
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @var ULEvent211Type $uLEvent211
     */
    private $uLEvent211 = null;

    /**
     * Обязательство субъекта прекратилось
     *
     * @var ULEvent25Type $uLEvent25
     */
    private $uLEvent25 = null;

    /**
     * Конкурсное производство в отношении источника завершилось
     *
     * @var ULEvent283Type $uLEvent283
     */
    private $uLEvent283 = null;

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var ULEvent284Type $uLEvent284
     */
    private $uLEvent284 = null;

    /**
     * Процесс ликвидации источника завершился
     *
     * @var ULEvent293Type $uLEvent293
     */
    private $uLEvent293 = null;

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var ULEvent294Type $uLEvent294
     */
    private $uLEvent294 = null;

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
     * Gets as uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @return UL10DealUidType
     */
    public function getUL10DealUid()
    {
        return $this->uL10DealUid;
    }

    /**
     * Sets a new uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @param UL10DealUidType $uL10DealUid
     * @return self
     */
    public function setUL10DealUid(UL10DealUidType $uL10DealUid)
    {
        $this->uL10DealUid = $uL10DealUid;
        return $this;
    }

    /**
     * Gets as uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @return ULEvent14Type
     */
    public function getULEvent14()
    {
        return $this->uLEvent14;
    }

    /**
     * Sets a new uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param ULEvent14Type $uLEvent14
     * @return self
     */
    public function setULEvent14(?ULEvent14Type $uLEvent14 = null)
    {
        $this->uLEvent14 = $uLEvent14;
        return $this;
    }

    /**
     * Gets as uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @return ULEvent141Type
     */
    public function getULEvent141()
    {
        return $this->uLEvent141;
    }

    /**
     * Sets a new uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param ULEvent141Type $uLEvent141
     * @return self
     */
    public function setULEvent141(?ULEvent141Type $uLEvent141 = null)
    {
        $this->uLEvent141 = $uLEvent141;
        return $this;
    }

    /**
     * Gets as uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @return ULEvent281Type
     */
    public function getULEvent281()
    {
        return $this->uLEvent281;
    }

    /**
     * Sets a new uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param ULEvent281Type $uLEvent281
     * @return self
     */
    public function setULEvent281(?ULEvent281Type $uLEvent281 = null)
    {
        $this->uLEvent281 = $uLEvent281;
        return $this;
    }

    /**
     * Gets as uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @return ULEvent291Type
     */
    public function getULEvent291()
    {
        return $this->uLEvent291;
    }

    /**
     * Sets a new uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param ULEvent291Type $uLEvent291
     * @return self
     */
    public function setULEvent291(?ULEvent291Type $uLEvent291 = null)
    {
        $this->uLEvent291 = $uLEvent291;
        return $this;
    }

    /**
     * Gets as uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @return ULEvent2112Type
     */
    public function getULEvent2112()
    {
        return $this->uLEvent2112;
    }

    /**
     * Sets a new uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @param ULEvent2112Type $uLEvent2112
     * @return self
     */
    public function setULEvent2112(?ULEvent2112Type $uLEvent2112 = null)
    {
        $this->uLEvent2112 = $uLEvent2112;
        return $this;
    }

    /**
     * Adds as uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param ULEvent21Type $uLEvent21
     * @return self
     */
    public function addToULEvent21(ULEvent21Type $uLEvent21)
    {
        $this->uLEvent21[] = $uLEvent21;
        return $this;
    }

    /**
     * isset uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent21($index)
    {
        return isset($this->uLEvent21[$index]);
    }

    /**
     * unset uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent21($index)
    {
        unset($this->uLEvent21[$index]);
    }

    /**
     * Gets as uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @return ULEvent21Type[]
     */
    public function getULEvent21()
    {
        return $this->uLEvent21;
    }

    /**
     * Sets a new uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param ULEvent21Type[] $uLEvent21
     * @return self
     */
    public function setULEvent21(array $uLEvent21 = null)
    {
        $this->uLEvent21 = $uLEvent21;
        return $this;
    }

    /**
     * Adds as uLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param ULEvent22Type $uLEvent22
     * @return self
     */
    public function addToULEvent22(ULEvent22Type $uLEvent22)
    {
        $this->uLEvent22[] = $uLEvent22;
        return $this;
    }

    /**
     * isset uLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent22($index)
    {
        return isset($this->uLEvent22[$index]);
    }

    /**
     * unset uLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent22($index)
    {
        unset($this->uLEvent22[$index]);
    }

    /**
     * Gets as uLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @return ULEvent22Type[]
     */
    public function getULEvent22()
    {
        return $this->uLEvent22;
    }

    /**
     * Sets a new uLEvent22
     *
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @param ULEvent22Type[] $uLEvent22
     * @return self
     */
    public function setULEvent22(array $uLEvent22 = null)
    {
        $this->uLEvent22 = $uLEvent22;
        return $this;
    }

    /**
     * Adds as uLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param ULEvent221Type $uLEvent221
     * @return self
     */
    public function addToULEvent221(ULEvent221Type $uLEvent221)
    {
        $this->uLEvent221[] = $uLEvent221;
        return $this;
    }

    /**
     * isset uLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent221($index)
    {
        return isset($this->uLEvent221[$index]);
    }

    /**
     * unset uLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent221($index)
    {
        unset($this->uLEvent221[$index]);
    }

    /**
     * Gets as uLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @return ULEvent221Type[]
     */
    public function getULEvent221()
    {
        return $this->uLEvent221;
    }

    /**
     * Sets a new uLEvent221
     *
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @param ULEvent221Type[] $uLEvent221
     * @return self
     */
    public function setULEvent221(array $uLEvent221 = null)
    {
        $this->uLEvent221 = $uLEvent221;
        return $this;
    }

    /**
     * Adds as uLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param ULEvent23Type $uLEvent23
     * @return self
     */
    public function addToULEvent23(ULEvent23Type $uLEvent23)
    {
        $this->uLEvent23[] = $uLEvent23;
        return $this;
    }

    /**
     * isset uLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent23($index)
    {
        return isset($this->uLEvent23[$index]);
    }

    /**
     * unset uLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent23($index)
    {
        unset($this->uLEvent23[$index]);
    }

    /**
     * Gets as uLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @return ULEvent23Type[]
     */
    public function getULEvent23()
    {
        return $this->uLEvent23;
    }

    /**
     * Sets a new uLEvent23
     *
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @param ULEvent23Type[] $uLEvent23
     * @return self
     */
    public function setULEvent23(array $uLEvent23 = null)
    {
        $this->uLEvent23 = $uLEvent23;
        return $this;
    }

    /**
     * Adds as uLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param ULEvent24Type $uLEvent24
     * @return self
     */
    public function addToULEvent24(ULEvent24Type $uLEvent24)
    {
        $this->uLEvent24[] = $uLEvent24;
        return $this;
    }

    /**
     * isset uLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent24($index)
    {
        return isset($this->uLEvent24[$index]);
    }

    /**
     * unset uLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent24($index)
    {
        unset($this->uLEvent24[$index]);
    }

    /**
     * Gets as uLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @return ULEvent24Type[]
     */
    public function getULEvent24()
    {
        return $this->uLEvent24;
    }

    /**
     * Sets a new uLEvent24
     *
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @param ULEvent24Type[] $uLEvent24
     * @return self
     */
    public function setULEvent24(array $uLEvent24 = null)
    {
        $this->uLEvent24 = $uLEvent24;
        return $this;
    }

    /**
     * Adds as uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param ULEvent26Type $uLEvent26
     * @return self
     */
    public function addToULEvent26(ULEvent26Type $uLEvent26)
    {
        $this->uLEvent26[] = $uLEvent26;
        return $this;
    }

    /**
     * isset uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent26($index)
    {
        return isset($this->uLEvent26[$index]);
    }

    /**
     * unset uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent26($index)
    {
        unset($this->uLEvent26[$index]);
    }

    /**
     * Gets as uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @return ULEvent26Type[]
     */
    public function getULEvent26()
    {
        return $this->uLEvent26;
    }

    /**
     * Sets a new uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param ULEvent26Type[] $uLEvent26
     * @return self
     */
    public function setULEvent26(array $uLEvent26 = null)
    {
        $this->uLEvent26 = $uLEvent26;
        return $this;
    }

    /**
     * Adds as uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param ULEvent282Type $uLEvent282
     * @return self
     */
    public function addToULEvent282(ULEvent282Type $uLEvent282)
    {
        $this->uLEvent282[] = $uLEvent282;
        return $this;
    }

    /**
     * isset uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent282($index)
    {
        return isset($this->uLEvent282[$index]);
    }

    /**
     * unset uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent282($index)
    {
        unset($this->uLEvent282[$index]);
    }

    /**
     * Gets as uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @return ULEvent282Type[]
     */
    public function getULEvent282()
    {
        return $this->uLEvent282;
    }

    /**
     * Sets a new uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param ULEvent282Type[] $uLEvent282
     * @return self
     */
    public function setULEvent282(array $uLEvent282 = null)
    {
        $this->uLEvent282 = $uLEvent282;
        return $this;
    }

    /**
     * Adds as uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param ULEvent292Type $uLEvent292
     * @return self
     */
    public function addToULEvent292(ULEvent292Type $uLEvent292)
    {
        $this->uLEvent292[] = $uLEvent292;
        return $this;
    }

    /**
     * isset uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent292($index)
    {
        return isset($this->uLEvent292[$index]);
    }

    /**
     * unset uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent292($index)
    {
        unset($this->uLEvent292[$index]);
    }

    /**
     * Gets as uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @return ULEvent292Type[]
     */
    public function getULEvent292()
    {
        return $this->uLEvent292;
    }

    /**
     * Sets a new uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param ULEvent292Type[] $uLEvent292
     * @return self
     */
    public function setULEvent292(array $uLEvent292 = null)
    {
        $this->uLEvent292 = $uLEvent292;
        return $this;
    }

    /**
     * Adds as uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @param ULEvent2111Type $uLEvent2111
     *@return self
     */
    public function addToULEvent2111(ULEvent2111Type $uLEvent2111)
    {
        $this->uLEvent2111[] = $uLEvent2111;
        return $this;
    }

    /**
     * isset uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent2111($index)
    {
        return isset($this->uLEvent2111[$index]);
    }

    /**
     * unset uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent2111($index)
    {
        unset($this->uLEvent2111[$index]);
    }

    /**
     * Gets as uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @return ULEvent2111Type[]
     */
    public function getULEvent2111()
    {
        return $this->uLEvent2111;
    }

    /**
     * Sets a new uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @param ULEvent2111Type[] $uLEvent2111
     * @return self
     */
    public function setULEvent2111(array $uLEvent2111 = null)
    {
        $this->uLEvent2111 = $uLEvent2111;
        return $this;
    }

    /**
     * Adds as uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param ULEvent212Type $uLEvent212
     * @return self
     */
    public function addToULEvent212(ULEvent212Type $uLEvent212)
    {
        $this->uLEvent212[] = $uLEvent212;
        return $this;
    }

    /**
     * isset uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent212($index)
    {
        return isset($this->uLEvent212[$index]);
    }

    /**
     * unset uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent212($index)
    {
        unset($this->uLEvent212[$index]);
    }

    /**
     * Gets as uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @return ULEvent212Type[]
     */
    public function getULEvent212()
    {
        return $this->uLEvent212;
    }

    /**
     * Sets a new uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param ULEvent212Type[] $uLEvent212
     * @return self
     */
    public function setULEvent212(array $uLEvent212 = null)
    {
        $this->uLEvent212 = $uLEvent212;
        return $this;
    }

    /**
     * Gets as uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @return ULEvent210Type
     */
    public function getULEvent210()
    {
        return $this->uLEvent210;
    }

    /**
     * Sets a new uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param ULEvent210Type $uLEvent210
     * @return self
     */
    public function setULEvent210(?ULEvent210Type $uLEvent210 = null)
    {
        $this->uLEvent210 = $uLEvent210;
        return $this;
    }

    /**
     * Gets as uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @return ULEvent211Type
     */
    public function getULEvent211()
    {
        return $this->uLEvent211;
    }

    /**
     * Sets a new uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @param ULEvent211Type $uLEvent211
     * @return self
     */
    public function setULEvent211(?ULEvent211Type $uLEvent211 = null)
    {
        $this->uLEvent211 = $uLEvent211;
        return $this;
    }

    /**
     * Gets as uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @return ULEvent25Type
     */
    public function getULEvent25()
    {
        return $this->uLEvent25;
    }

    /**
     * Sets a new uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param ULEvent25Type $uLEvent25
     * @return self
     */
    public function setULEvent25(?ULEvent25Type $uLEvent25 = null)
    {
        $this->uLEvent25 = $uLEvent25;
        return $this;
    }

    /**
     * Gets as uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @return ULEvent283Type
     */
    public function getULEvent283()
    {
        return $this->uLEvent283;
    }

    /**
     * Sets a new uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param ULEvent283Type $uLEvent283
     * @return self
     */
    public function setULEvent283(?ULEvent283Type $uLEvent283 = null)
    {
        $this->uLEvent283 = $uLEvent283;
        return $this;
    }

    /**
     * Gets as uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return ULEvent284Type
     */
    public function getULEvent284()
    {
        return $this->uLEvent284;
    }

    /**
     * Sets a new uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param ULEvent284Type $uLEvent284
     * @return self
     */
    public function setULEvent284(?ULEvent284Type $uLEvent284 = null)
    {
        $this->uLEvent284 = $uLEvent284;
        return $this;
    }

    /**
     * Gets as uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @return ULEvent293Type
     */
    public function getULEvent293()
    {
        return $this->uLEvent293;
    }

    /**
     * Sets a new uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param ULEvent293Type $uLEvent293
     * @return self
     */
    public function setULEvent293(?ULEvent293Type $uLEvent293 = null)
    {
        $this->uLEvent293 = $uLEvent293;
        return $this;
    }

    /**
     * Gets as uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return ULEvent294Type
     */
    public function getULEvent294()
    {
        return $this->uLEvent294;
    }

    /**
     * Sets a new uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param ULEvent294Type $uLEvent294
     * @return self
     */
    public function setULEvent294(?ULEvent294Type $uLEvent294 = null)
    {
        $this->uLEvent294 = $uLEvent294;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_3_2';
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
    protected function initAttributes()
    {
        $this->startDate = $this->formatDate($this->sendData->getStartDate());
        $this->setUL10DealUid(new UL10DealUidType($this->template));
        $cnt = 1;
        foreach ($this->sendData->getCorrectionData() as $correctionData) {
            $this->template->setCorrectionData($correctionData);
            $eventClassName = NbchEvents::getEventClass($correctionData->getCorrectionEventId(), true);
            if ($eventClassName === null) {
                continue;
            }
            $event = new $eventClassName($this->template, $correctionData->getCorrectionEventId());
            $event->setOrderNum($cnt);
            $cnt++;

            $method = str_replace('_', '', $event->getSegmentName());
            if(method_exists($this, "addTo$method")) {
                $method = "addTo$method";
                $this->$method($event);
            }else{
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
            'ul10DealUid',
            'uLEvent14',
            'uLEvent141',
            'uLEvent281',
            'uLEvent291',
            'uLEvent2112',
            'uLEvent21',
            'uLEvent22',
            'uLEvent221',
            'uLEvent23',
            'uLEvent24',
            'uLEvent26',
            'uLEvent282',
            'uLEvent292',
            'uLEvent2111',
            'uLEvent212',
            'uLEvent210',
            'uLEvent211',
            'uLEvent25',
            'uLEvent283',
            'uLEvent284',
            'uLEvent293',
            'uLEvent294',
        ];
    }
}

