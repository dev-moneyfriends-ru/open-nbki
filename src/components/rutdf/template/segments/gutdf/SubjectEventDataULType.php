<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing SubjectEventDataULType
 *
 * События
 * XSD Type: SubjectEventDataUL
 */
class SubjectEventDataULType extends SubjectEventDataType
{
    /**
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent11Type[] $uLEvent11
     */
    private $uLEvent11 = [
        
    ];

    /**
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent12Type[] $uLEvent12
     */
    private $uLEvent12 = [
        
    ];

    /**
     * Источник отказался от совершения сделки по обращению
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent13Type[] $uLEvent13
     */
    private $uLEvent13 = [
        
    ];

    /**
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent14Type[] $uLEvent14
     */
    private $uLEvent14 = [
        
    ];

    /**
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent141Type[] $uLEvent141
     */
    private $uLEvent141 = [
        
    ];

    /**
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent15Type[] $uLEvent15
     */
    private $uLEvent15 = [
        
    ];

    /**
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent16Type[] $uLEvent16
     */
    private $uLEvent16 = [
        
    ];

    /**
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent17Type[] $uLEvent17
     */
    private $uLEvent17 = [
        
    ];

    /**
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent112Type[] $uLEvent112
     */
    private $uLEvent112 = [
        
    ];

    /**
     * Изменились сведения об условиях обязательства субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent21Type[] $uLEvent21
     */
    private $uLEvent21 = [
        
    ];

    /**
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent22Type[] $uLEvent22
     */
    private $uLEvent22 = [
        
    ];

    /**
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent221Type[] $uLEvent221
     */
    private $uLEvent221 = [
        
    ];

    /**
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent23Type[] $uLEvent23
     */
    private $uLEvent23 = [
        
    ];

    /**
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent24Type[] $uLEvent24
     */
    private $uLEvent24 = [
        
    ];

    /**
     * Обязательство субъекта прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent25Type[] $uLEvent25
     */
    private $uLEvent25 = [
        
    ];

    /**
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent26Type[] $uLEvent26
     */
    private $uLEvent26 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника открылось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent281Type[] $uLEvent281
     */
    private $uLEvent281 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent282Type[] $uLEvent282
     */
    private $uLEvent282 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника завершилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent283Type[] $uLEvent283
     */
    private $uLEvent283 = [
        
    ];

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent284Type[] $uLEvent284
     */
    private $uLEvent284 = [
        
    ];

    /**
     * Процесс ликвидации источника начался
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent291Type[] $uLEvent291
     */
    private $uLEvent291 = [
        
    ];

    /**
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent292Type[] $uLEvent292
     */
    private $uLEvent292 = [
        
    ];

    /**
     * Процесс ликвидации источника завершился
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent293Type[] $uLEvent293
     */
    private $uLEvent293 = [
        
    ];

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent294Type[] $uLEvent294
     */
    private $uLEvent294 = [
        
    ];

    /**
     * Источник прекратил передачу информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent210Type[] $uLEvent210
     */
    private $uLEvent210 = [
        
    ];

    /**
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent211Type[] $uLEvent211
     */
    private $uLEvent211 = [
        
    ];

    /**
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2111Type[] $uLEvent2111
     */
    private $uLEvent2111 = [
        
    ];

    /**
     * Права кредитора по обязательству получены от другого лица
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2112Type[] $uLEvent2112
     */
    private $uLEvent2112 = [
        
    ];

    /**
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent212Type[] $uLEvent212
     */
    private $uLEvent212 = [
        
    ];

    /**
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type[] $uLEvent31
     */
    private $uLEvent31 = [
        
    ];

    /**
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent32Type[] $uLEvent32
     */
    private $uLEvent32 = [
        
    ];

    /**
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent33Type[] $uLEvent33
     */
    private $uLEvent33 = [
        
    ];

    /**
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent34Type[] $uLEvent34
     */
    private $uLEvent34 = [
        
    ];

    /**
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent35Type[] $uLEvent35
     */
    private $uLEvent35 = [
        
    ];

    /**
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type[] $uLEvent41
     */
    private $uLEvent41 = [
        
    ];

    /**
     * Требуется аннулирование записи кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent42Type[] $uLEvent42
     */
    private $uLEvent42 = [
        
    ];

    /**
     * Требуется аннулирование всей кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent43Type[] $uLEvent43
     */
    private $uLEvent43 = [
        
    ];

    /**
     * Adds as uLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent11Type $uLEvent11
     *@return self
     */
    public function addToULEvent11(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent11Type $uLEvent11)
    {
        $this->uLEvent11[] = $uLEvent11;
        return $this;
    }

    /**
     * isset uLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent11($index)
    {
        return isset($this->uLEvent11[$index]);
    }

    /**
     * unset uLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent11($index)
    {
        unset($this->uLEvent11[$index]);
    }

    /**
     * Gets as uLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent11Type[]
     */
    public function getULEvent11()
    {
        return $this->uLEvent11;
    }

    /**
     * Sets a new uLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent11Type[] $uLEvent11
     * @return self
     */
    public function setULEvent11(array $uLEvent11 = null)
    {
        $this->uLEvent11 = $uLEvent11;
        return $this;
    }

    /**
     * Adds as uLEvent12
     *
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent12Type $uLEvent12
     *@return self
     */
    public function addToULEvent12(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent12Type $uLEvent12)
    {
        $this->uLEvent12[] = $uLEvent12;
        return $this;
    }

    /**
     * isset uLEvent12
     *
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent12($index)
    {
        return isset($this->uLEvent12[$index]);
    }

    /**
     * unset uLEvent12
     *
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent12($index)
    {
        unset($this->uLEvent12[$index]);
    }

    /**
     * Gets as uLEvent12
     *
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent12Type[]
     */
    public function getULEvent12()
    {
        return $this->uLEvent12;
    }

    /**
     * Sets a new uLEvent12
     *
     * Источник одобрил обращение (направил ему оферту) или изменились сведения об обращении
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent12Type[] $uLEvent12
     * @return self
     */
    public function setULEvent12(array $uLEvent12 = null)
    {
        $this->uLEvent12 = $uLEvent12;
        return $this;
    }

    /**
     * Adds as uLEvent13
     *
     * Источник отказался от совершения сделки по обращению
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent13Type $uLEvent13
     *@return self
     */
    public function addToULEvent13(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent13Type $uLEvent13)
    {
        $this->uLEvent13[] = $uLEvent13;
        return $this;
    }

    /**
     * isset uLEvent13
     *
     * Источник отказался от совершения сделки по обращению
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent13($index)
    {
        return isset($this->uLEvent13[$index]);
    }

    /**
     * unset uLEvent13
     *
     * Источник отказался от совершения сделки по обращению
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent13($index)
    {
        unset($this->uLEvent13[$index]);
    }

    /**
     * Gets as uLEvent13
     *
     * Источник отказался от совершения сделки по обращению
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent13Type[]
     */
    public function getULEvent13()
    {
        return $this->uLEvent13;
    }

    /**
     * Sets a new uLEvent13
     *
     * Источник отказался от совершения сделки по обращению
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent13Type[] $uLEvent13
     * @return self
     */
    public function setULEvent13(array $uLEvent13 = null)
    {
        $this->uLEvent13 = $uLEvent13;
        return $this;
    }

    /**
     * Adds as uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent14Type $uLEvent14
     *@return self
     */
    public function addToULEvent14(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent14Type $uLEvent14)
    {
        $this->uLEvent14[] = $uLEvent14;
        return $this;
    }

    /**
     * isset uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent14($index)
    {
        return isset($this->uLEvent14[$index]);
    }

    /**
     * unset uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent14($index)
    {
        unset($this->uLEvent14[$index]);
    }

    /**
     * Gets as uLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent14Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent14Type[] $uLEvent14
     * @return self
     */
    public function setULEvent14(array $uLEvent14 = null)
    {
        $this->uLEvent14 = $uLEvent14;
        return $this;
    }

    /**
     * Adds as uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent141Type $uLEvent141
     *@return self
     */
    public function addToULEvent141(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent141Type $uLEvent141)
    {
        $this->uLEvent141[] = $uLEvent141;
        return $this;
    }

    /**
     * isset uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent141($index)
    {
        return isset($this->uLEvent141[$index]);
    }

    /**
     * unset uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent141($index)
    {
        unset($this->uLEvent141[$index]);
    }

    /**
     * Gets as uLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent141Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent141Type[] $uLEvent141
     * @return self
     */
    public function setULEvent141(array $uLEvent141 = null)
    {
        $this->uLEvent141 = $uLEvent141;
        return $this;
    }

    /**
     * Adds as uLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent15Type $uLEvent15
     *@return self
     */
    public function addToULEvent15(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent15Type $uLEvent15)
    {
        $this->uLEvent15[] = $uLEvent15;
        return $this;
    }

    /**
     * isset uLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent15($index)
    {
        return isset($this->uLEvent15[$index]);
    }

    /**
     * unset uLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent15($index)
    {
        unset($this->uLEvent15[$index]);
    }

    /**
     * Gets as uLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent15Type[]
     */
    public function getULEvent15()
    {
        return $this->uLEvent15;
    }

    /**
     * Sets a new uLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent15Type[] $uLEvent15
     * @return self
     */
    public function setULEvent15(array $uLEvent15 = null)
    {
        $this->uLEvent15 = $uLEvent15;
        return $this;
    }

    /**
     * Adds as uLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent16Type $uLEvent16
     *@return self
     */
    public function addToULEvent16(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent16Type $uLEvent16)
    {
        $this->uLEvent16[] = $uLEvent16;
        return $this;
    }

    /**
     * isset uLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent16($index)
    {
        return isset($this->uLEvent16[$index]);
    }

    /**
     * unset uLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent16($index)
    {
        unset($this->uLEvent16[$index]);
    }

    /**
     * Gets as uLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent16Type[]
     */
    public function getULEvent16()
    {
        return $this->uLEvent16;
    }

    /**
     * Sets a new uLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent16Type[] $uLEvent16
     * @return self
     */
    public function setULEvent16(array $uLEvent16 = null)
    {
        $this->uLEvent16 = $uLEvent16;
        return $this;
    }

    /**
     * Adds as uLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent17Type $uLEvent17
     *@return self
     */
    public function addToULEvent17(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent17Type $uLEvent17)
    {
        $this->uLEvent17[] = $uLEvent17;
        return $this;
    }

    /**
     * isset uLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent17($index)
    {
        return isset($this->uLEvent17[$index]);
    }

    /**
     * unset uLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent17($index)
    {
        unset($this->uLEvent17[$index]);
    }

    /**
     * Gets as uLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent17Type[]
     */
    public function getULEvent17()
    {
        return $this->uLEvent17;
    }

    /**
     * Sets a new uLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent17Type[] $uLEvent17
     * @return self
     */
    public function setULEvent17(array $uLEvent17 = null)
    {
        $this->uLEvent17 = $uLEvent17;
        return $this;
    }

    /**
     * Adds as uLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent112Type $uLEvent112
     *@return self
     */
    public function addToULEvent112(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent112Type $uLEvent112)
    {
        $this->uLEvent112[] = $uLEvent112;
        return $this;
    }

    /**
     * isset uLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent112($index)
    {
        return isset($this->uLEvent112[$index]);
    }

    /**
     * unset uLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent112($index)
    {
        unset($this->uLEvent112[$index]);
    }

    /**
     * Gets as uLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent112Type[]
     */
    public function getULEvent112()
    {
        return $this->uLEvent112;
    }

    /**
     * Sets a new uLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent112Type[] $uLEvent112
     * @return self
     */
    public function setULEvent112(array $uLEvent112 = null)
    {
        $this->uLEvent112 = $uLEvent112;
        return $this;
    }

    /**
     * Adds as uLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent21Type $uLEvent21
     *@return self
     */
    public function addToULEvent21(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent21Type $uLEvent21)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent21Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent21Type[] $uLEvent21
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent22Type $uLEvent22
     *@return self
     */
    public function addToULEvent22(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent22Type $uLEvent22)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent22Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent22Type[] $uLEvent22
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent221Type $uLEvent221
     *@return self
     */
    public function addToULEvent221(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent221Type $uLEvent221)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent221Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent221Type[] $uLEvent221
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent23Type $uLEvent23
     *@return self
     */
    public function addToULEvent23(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent23Type $uLEvent23)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent23Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent23Type[] $uLEvent23
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent24Type $uLEvent24
     * @return self
     */
    public function addToULEvent24(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent24Type $uLEvent24)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent24Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent24Type[] $uLEvent24
     * @return self
     */
    public function setULEvent24(array $uLEvent24 = null)
    {
        $this->uLEvent24 = $uLEvent24;
        return $this;
    }

    /**
     * Adds as uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent25Type $uLEvent25
     * @return self
     */
    public function addToULEvent25(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent25Type $uLEvent25)
    {
        $this->uLEvent25[] = $uLEvent25;
        return $this;
    }

    /**
     * isset uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent25($index)
    {
        return isset($this->uLEvent25[$index]);
    }

    /**
     * unset uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent25($index)
    {
        unset($this->uLEvent25[$index]);
    }

    /**
     * Gets as uLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent25Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent25Type[] $uLEvent25
     * @return self
     */
    public function setULEvent25(array $uLEvent25 = null)
    {
        $this->uLEvent25 = $uLEvent25;
        return $this;
    }

    /**
     * Adds as uLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent26Type $uLEvent26
     * @return self
     */
    public function addToULEvent26(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent26Type $uLEvent26)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent26Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent26Type[] $uLEvent26
     * @return self
     */
    public function setULEvent26(array $uLEvent26 = null)
    {
        $this->uLEvent26 = $uLEvent26;
        return $this;
    }

    /**
     * Adds as uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent281Type $uLEvent281
     * @return self
     */
    public function addToULEvent281(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent281Type $uLEvent281)
    {
        $this->uLEvent281[] = $uLEvent281;
        return $this;
    }

    /**
     * isset uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent281($index)
    {
        return isset($this->uLEvent281[$index]);
    }

    /**
     * unset uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent281($index)
    {
        unset($this->uLEvent281[$index]);
    }

    /**
     * Gets as uLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent281Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent281Type[] $uLEvent281
     * @return self
     */
    public function setULEvent281(array $uLEvent281 = null)
    {
        $this->uLEvent281 = $uLEvent281;
        return $this;
    }

    /**
     * Adds as uLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent282Type $uLEvent282
     * @return self
     */
    public function addToULEvent282(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent282Type $uLEvent282)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent282Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent282Type[] $uLEvent282
     * @return self
     */
    public function setULEvent282(array $uLEvent282 = null)
    {
        $this->uLEvent282 = $uLEvent282;
        return $this;
    }

    /**
     * Adds as uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent283Type $uLEvent283
     * @return self
     */
    public function addToULEvent283(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent283Type $uLEvent283)
    {
        $this->uLEvent283[] = $uLEvent283;
        return $this;
    }

    /**
     * isset uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent283($index)
    {
        return isset($this->uLEvent283[$index]);
    }

    /**
     * unset uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent283($index)
    {
        unset($this->uLEvent283[$index]);
    }

    /**
     * Gets as uLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent283Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent283Type[] $uLEvent283
     * @return self
     */
    public function setULEvent283(array $uLEvent283 = null)
    {
        $this->uLEvent283 = $uLEvent283;
        return $this;
    }

    /**
     * Adds as uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent284Type $uLEvent284
     * @return self
     */
    public function addToULEvent284(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent284Type $uLEvent284)
    {
        $this->uLEvent284[] = $uLEvent284;
        return $this;
    }

    /**
     * isset uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent284($index)
    {
        return isset($this->uLEvent284[$index]);
    }

    /**
     * unset uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent284($index)
    {
        unset($this->uLEvent284[$index]);
    }

    /**
     * Gets as uLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent284Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent284Type[] $uLEvent284
     * @return self
     */
    public function setULEvent284(array $uLEvent284 = null)
    {
        $this->uLEvent284 = $uLEvent284;
        return $this;
    }

    /**
     * Adds as uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent291Type $uLEvent291
     * @return self
     */
    public function addToULEvent291(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent291Type $uLEvent291)
    {
        $this->uLEvent291[] = $uLEvent291;
        return $this;
    }

    /**
     * isset uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent291($index)
    {
        return isset($this->uLEvent291[$index]);
    }

    /**
     * unset uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent291($index)
    {
        unset($this->uLEvent291[$index]);
    }

    /**
     * Gets as uLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent291Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent291Type[] $uLEvent291
     * @return self
     */
    public function setULEvent291(array $uLEvent291 = null)
    {
        $this->uLEvent291 = $uLEvent291;
        return $this;
    }

    /**
     * Adds as uLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent292Type $uLEvent292
     * @return self
     */
    public function addToULEvent292(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent292Type $uLEvent292)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent292Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent292Type[] $uLEvent292
     * @return self
     */
    public function setULEvent292(array $uLEvent292 = null)
    {
        $this->uLEvent292 = $uLEvent292;
        return $this;
    }

    /**
     * Adds as uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent293Type $uLEvent293
     * @return self
     */
    public function addToULEvent293(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent293Type $uLEvent293)
    {
        $this->uLEvent293[] = $uLEvent293;
        return $this;
    }

    /**
     * isset uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent293($index)
    {
        return isset($this->uLEvent293[$index]);
    }

    /**
     * unset uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent293($index)
    {
        unset($this->uLEvent293[$index]);
    }

    /**
     * Gets as uLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent293Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent293Type[] $uLEvent293
     * @return self
     */
    public function setULEvent293(array $uLEvent293 = null)
    {
        $this->uLEvent293 = $uLEvent293;
        return $this;
    }

    /**
     * Adds as uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent294Type $uLEvent294
     * @return self
     */
    public function addToULEvent294(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent294Type $uLEvent294)
    {
        $this->uLEvent294[] = $uLEvent294;
        return $this;
    }

    /**
     * isset uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent294($index)
    {
        return isset($this->uLEvent294[$index]);
    }

    /**
     * unset uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent294($index)
    {
        unset($this->uLEvent294[$index]);
    }

    /**
     * Gets as uLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent294Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent294Type[] $uLEvent294
     * @return self
     */
    public function setULEvent294(array $uLEvent294 = null)
    {
        $this->uLEvent294 = $uLEvent294;
        return $this;
    }

    /**
     * Adds as uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent210Type $uLEvent210
     * @return self
     */
    public function addToULEvent210(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent210Type $uLEvent210)
    {
        $this->uLEvent210[] = $uLEvent210;
        return $this;
    }

    /**
     * isset uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent210($index)
    {
        return isset($this->uLEvent210[$index]);
    }

    /**
     * unset uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent210($index)
    {
        unset($this->uLEvent210[$index]);
    }

    /**
     * Gets as uLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent210Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent210Type[] $uLEvent210
     * @return self
     */
    public function setULEvent210(array $uLEvent210 = null)
    {
        $this->uLEvent210 = $uLEvent210;
        return $this;
    }

    /**
     * Adds as uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent211Type $uLEvent211
     * @return self
     */
    public function addToULEvent211(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent211Type $uLEvent211)
    {
        $this->uLEvent211[] = $uLEvent211;
        return $this;
    }

    /**
     * isset uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent211($index)
    {
        return isset($this->uLEvent211[$index]);
    }

    /**
     * unset uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent211($index)
    {
        unset($this->uLEvent211[$index]);
    }

    /**
     * Gets as uLEvent211
     *
     * Права кредитора по обязательству полностью перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent211Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent211Type[] $uLEvent211
     * @return self
     */
    public function setULEvent211(array $uLEvent211 = null)
    {
        $this->uLEvent211 = $uLEvent211;
        return $this;
    }

    /**
     * Adds as uLEvent2111
     *
     * Права кредитора по обязательству частично перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2111Type $uLEvent2111
     * @return self
     */
    public function addToULEvent2111(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2111Type $uLEvent2111)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2111Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2111Type[] $uLEvent2111
     * @return self
     */
    public function setULEvent2111(array $uLEvent2111 = null)
    {
        $this->uLEvent2111 = $uLEvent2111;
        return $this;
    }

    /**
     * Adds as uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2112Type $uLEvent2112
     * @return self
     */
    public function addToULEvent2112(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2112Type $uLEvent2112)
    {
        $this->uLEvent2112[] = $uLEvent2112;
        return $this;
    }

    /**
     * isset uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent2112($index)
    {
        return isset($this->uLEvent2112[$index]);
    }

    /**
     * unset uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent2112($index)
    {
        unset($this->uLEvent2112[$index]);
    }

    /**
     * Gets as uLEvent2112
     *
     * Права кредитора по обязательству получены от другого лица
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2112Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent2112Type[] $uLEvent2112
     * @return self
     */
    public function setULEvent2112(array $uLEvent2112 = null)
    {
        $this->uLEvent2112 = $uLEvent2112;
        return $this;
    }

    /**
     * Adds as uLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent212Type $uLEvent212
     * @return self
     */
    public function addToULEvent212(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent212Type $uLEvent212)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent212Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent212Type[] $uLEvent212
     * @return self
     */
    public function setULEvent212(array $uLEvent212 = null)
    {
        $this->uLEvent212 = $uLEvent212;
        return $this;
    }

    /**
     * Adds as uLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type $uLEvent31
     * @return self
     */
    public function addToULEvent31(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type $uLEvent31)
    {
        $this->uLEvent31[] = $uLEvent31;
        return $this;
    }

    /**
     * isset uLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent31($index)
    {
        return isset($this->uLEvent31[$index]);
    }

    /**
     * unset uLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent31($index)
    {
        unset($this->uLEvent31[$index]);
    }

    /**
     * Gets as uLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type[]
     */
    public function getULEvent31()
    {
        return $this->uLEvent31;
    }

    /**
     * Sets a new uLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent31Type[] $uLEvent31
     * @return self
     */
    public function setULEvent31(array $uLEvent31 = null)
    {
        $this->uLEvent31 = $uLEvent31;
        return $this;
    }

    /**
     * Adds as uLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent32Type $uLEvent32
     * @return self
     */
    public function addToULEvent32(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent32Type $uLEvent32)
    {
        $this->uLEvent32[] = $uLEvent32;
        return $this;
    }

    /**
     * isset uLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent32($index)
    {
        return isset($this->uLEvent32[$index]);
    }

    /**
     * unset uLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent32($index)
    {
        unset($this->uLEvent32[$index]);
    }

    /**
     * Gets as uLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent32Type[]
     */
    public function getULEvent32()
    {
        return $this->uLEvent32;
    }

    /**
     * Sets a new uLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent32Type[] $uLEvent32
     * @return self
     */
    public function setULEvent32(array $uLEvent32 = null)
    {
        $this->uLEvent32 = $uLEvent32;
        return $this;
    }

    /**
     * Adds as uLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent33Type $uLEvent33
     * @return self
     */
    public function addToULEvent33(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent33Type $uLEvent33)
    {
        $this->uLEvent33[] = $uLEvent33;
        return $this;
    }

    /**
     * isset uLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent33($index)
    {
        return isset($this->uLEvent33[$index]);
    }

    /**
     * unset uLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent33($index)
    {
        unset($this->uLEvent33[$index]);
    }

    /**
     * Gets as uLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent33Type[]
     */
    public function getULEvent33()
    {
        return $this->uLEvent33;
    }

    /**
     * Sets a new uLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent33Type[] $uLEvent33
     * @return self
     */
    public function setULEvent33(array $uLEvent33 = null)
    {
        $this->uLEvent33 = $uLEvent33;
        return $this;
    }

    /**
     * Adds as uLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent34Type $uLEvent34
     * @return self
     */
    public function addToULEvent34(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent34Type $uLEvent34)
    {
        $this->uLEvent34[] = $uLEvent34;
        return $this;
    }

    /**
     * isset uLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent34($index)
    {
        return isset($this->uLEvent34[$index]);
    }

    /**
     * unset uLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent34($index)
    {
        unset($this->uLEvent34[$index]);
    }

    /**
     * Gets as uLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent34Type[]
     */
    public function getULEvent34()
    {
        return $this->uLEvent34;
    }

    /**
     * Sets a new uLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent34Type[] $uLEvent34
     * @return self
     */
    public function setULEvent34(array $uLEvent34 = null)
    {
        $this->uLEvent34 = $uLEvent34;
        return $this;
    }

    /**
     * Adds as uLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent35Type $uLEvent35
     */
    public function addToULEvent35(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent35Type $uLEvent35)
    {
        $this->uLEvent35[] = $uLEvent35;
        return $this;
    }

    /**
     * isset uLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent35($index)
    {
        return isset($this->uLEvent35[$index]);
    }

    /**
     * unset uLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent35($index)
    {
        unset($this->uLEvent35[$index]);
    }

    /**
     * Gets as uLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent35Type[]
     */
    public function getULEvent35()
    {
        return $this->uLEvent35;
    }

    /**
     * Sets a new uLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent35Type[] $uLEvent35
     * @return self
     */
    public function setULEvent35(array $uLEvent35 = null)
    {
        $this->uLEvent35 = $uLEvent35;
        return $this;
    }

    /**
     * Adds as uLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type $uLEvent41
     */
    public function addToULEvent41(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type $uLEvent41)
    {
        $this->uLEvent41[] = $uLEvent41;
        return $this;
    }

    /**
     * isset uLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent41($index)
    {
        return isset($this->uLEvent41[$index]);
    }

    /**
     * unset uLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent41($index)
    {
        unset($this->uLEvent41[$index]);
    }

    /**
     * Gets as uLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type[]
     */
    public function getULEvent41()
    {
        return $this->uLEvent41;
    }

    /**
     * Sets a new uLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent41Type[] $uLEvent41
     * @return self
     */
    public function setULEvent41(array $uLEvent41 = null)
    {
        $this->uLEvent41 = $uLEvent41;
        return $this;
    }

    /**
     * Adds as uLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent42Type $uLEvent42
     */
    public function addToULEvent42(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent42Type $uLEvent42)
    {
        $this->uLEvent42[] = $uLEvent42;
        return $this;
    }

    /**
     * isset uLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent42($index)
    {
        return isset($this->uLEvent42[$index]);
    }

    /**
     * unset uLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent42($index)
    {
        unset($this->uLEvent42[$index]);
    }

    /**
     * Gets as uLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent42Type[]
     */
    public function getULEvent42()
    {
        return $this->uLEvent42;
    }

    /**
     * Sets a new uLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent42Type[] $uLEvent42
     * @return self
     */
    public function setULEvent42(array $uLEvent42 = null)
    {
        $this->uLEvent42 = $uLEvent42;
        return $this;
    }

    /**
     * Adds as uLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent43Type $uLEvent43
     */
    public function addToULEvent43(\mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent43Type $uLEvent43)
    {
        $this->uLEvent43[] = $uLEvent43;
        return $this;
    }

    /**
     * isset uLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetULEvent43($index)
    {
        return isset($this->uLEvent43[$index]);
    }

    /**
     * unset uLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetULEvent43($index)
    {
        unset($this->uLEvent43[$index]);
    }

    /**
     * Gets as uLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent43Type[]
     */
    public function getULEvent43()
    {
        return $this->uLEvent43;
    }

    /**
     * Sets a new uLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\ULEvent43Type[] $uLEvent43
     * @return self
     */
    public function setULEvent43(array $uLEvent43 = null)
    {
        $this->uLEvent43 = $uLEvent43;
        return $this;
    }
}

