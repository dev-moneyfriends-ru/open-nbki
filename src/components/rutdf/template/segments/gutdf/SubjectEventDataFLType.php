<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing SubjectEventDataFLType
 *
 * События
 * XSD Type: SubjectEventDataFL
 */
class SubjectEventDataFLType extends SubjectEventDataType
{
    /**
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent11Type[] $fLEvent11
     */
    private $fLEvent11 = [
        
    ];

    /**
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent12Type[] $fLEvent12
     */
    private $fLEvent12 = [
        
    ];

    /**
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent13Type[] $fLEvent13
     */
    private $fLEvent13 = [
        
    ];

    /**
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent14Type[] $fLEvent14
     */
    private $fLEvent14 = [
        
    ];

    /**
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent141Type[] $fLEvent141
     */
    private $fLEvent141 = [
        
    ];

    /**
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent15Type[] $fLEvent15
     */
    private $fLEvent15 = [
        
    ];

    /**
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent16Type[] $fLEvent16
     */
    private $fLEvent16 = [
        
    ];

    /**
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent17Type[] $fLEvent17
     */
    private $fLEvent17 = [
        
    ];

    /**
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent19Type[] $fLEvent19
     */
    private $fLEvent19 = [
        
    ];

    /**
     * Изменились сведения о дееспособности субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent110Type[] $fLEvent110
     */
    private $fLEvent110 = [
        
    ];

    /**
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent112Type[] $fLEvent112
     */
    private $fLEvent112 = [
        
    ];

    /**
     * Изменились сведения об условиях обязательства субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent21Type[] $fLEvent21
     */
    private $fLEvent21 = [
        
    ];

    /**
     * Субъекту передана сумма займа (кредита), предмет лизинга передан лизингополучателю
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent22Type[] $fLEvent22
     */
    private $fLEvent22 = [
        
    ];

    /**
     * Субъект стал принципалом по гарантии или поручителем по сделке
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent221Type[] $fLEvent221
     */
    private $fLEvent221 = [
        
    ];

    /**
     * Изменение задолженности, в том числе ввиду исполнения обязательства, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent23Type[] $fLEvent23
     */
    private $fLEvent23 = [
        
    ];

    /**
     * Изменились сведения об обеспечении исполнения обязательства
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent24Type[] $fLEvent24
     */
    private $fLEvent24 = [
        
    ];

    /**
     * Обязательство субъекта прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent25Type[] $fLEvent25
     */
    private $fLEvent25 = [
        
    ];

    /**
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent26Type[] $fLEvent26
     */
    private $fLEvent26 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника открылось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent281Type[] $fLEvent281
     */
    private $fLEvent281 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent282Type[] $fLEvent282
     */
    private $fLEvent282 = [
        
    ];

    /**
     * Конкурсное производство в отношении источника завершилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent283Type[] $fLEvent283
     */
    private $fLEvent283 = [
        
    ];

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent284Type[] $fLEvent284
     */
    private $fLEvent284 = [
        
    ];

    /**
     * Процесс ликвидации источника начался
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent291Type[] $fLEvent291
     */
    private $fLEvent291 = [
        
    ];

    /**
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent292Type[] $fLEvent292
     */
    private $fLEvent292 = [
        
    ];

    /**
     * Процесс ликвидации источника завершился
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent293Type[] $fLEvent293
     */
    private $fLEvent293 = [
        
    ];

    /**
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent294Type[] $fLEvent294
     */
    private $fLEvent294 = [
        
    ];

    /**
     * Источник прекратил передачу информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent210Type[] $fLEvent210
     */
    private $fLEvent210 = [
        
    ];

    /**
     * Права по обязательству полностью перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent211Type[] $fLEvent211
     */
    private $fLEvent211 = [
        
    ];

    /**
     * Права по обязательству частично перешли к другому лицу
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2111Type[] $fLEvent2111
     */
    private $fLEvent2111 = [
        
    ];

    /**
     * Права по обязательству получены от другого лица
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2112Type[] $fLEvent2112
     */
    private $fLEvent2112 = [
        
    ];

    /**
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent212Type[] $fLEvent212
     */
    private $fLEvent212 = [
        
    ];

    /**
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type[] $fLEvent31
     */
    private $fLEvent31 = [
        
    ];

    /**
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent32Type[] $fLEvent32
     */
    private $fLEvent32 = [
        
    ];

    /**
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent33Type[] $fLEvent33
     */
    private $fLEvent33 = [
        
    ];

    /**
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent34Type[] $fLEvent34
     */
    private $fLEvent34 = [
        
    ];

    /**
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent35Type[] $fLEvent35
     */
    private $fLEvent35 = [
        
    ];

    /**
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type[] $fLEvent41
     */
    private $fLEvent41 = [
        
    ];

    /**
     * Требуется аннулирование записи кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent42Type[] $fLEvent42
     */
    private $fLEvent42 = [
        
    ];

    /**
     * Требуется аннулирование всей кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent43Type[] $fLEvent43
     */
    private $fLEvent43 = [
        
    ];

    /**
     * Adds as fLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent11Type $fLEvent11
     *@return self
     */
    public function addToFLEvent11(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent11Type $fLEvent11)
    {
        $this->fLEvent11[] = $fLEvent11;
        return $this;
    }

    /**
     * isset fLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent11($index)
    {
        return isset($this->fLEvent11[$index]);
    }

    /**
     * unset fLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent11($index)
    {
        unset($this->fLEvent11[$index]);
    }

    /**
     * Gets as fLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent11Type[]
     */
    public function getFLEvent11()
    {
        return $this->fLEvent11;
    }

    /**
     * Sets a new fLEvent11
     *
     * Субъект обратился к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent11Type[] $fLEvent11
     * @return self
     */
    public function setFLEvent11(array $fLEvent11 = null)
    {
        $this->fLEvent11 = $fLEvent11;
        return $this;
    }

    /**
     * Adds as fLEvent12
     *
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent12Type $fLEvent12
     *@return self
     */
    public function addToFLEvent12(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent12Type $fLEvent12)
    {
        $this->fLEvent12[] = $fLEvent12;
        return $this;
    }

    /**
     * isset fLEvent12
     *
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent12($index)
    {
        return isset($this->fLEvent12[$index]);
    }

    /**
     * unset fLEvent12
     *
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent12($index)
    {
        unset($this->fLEvent12[$index]);
    }

    /**
     * Gets as fLEvent12
     *
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent12Type[]
     */
    public function getFLEvent12()
    {
        return $this->fLEvent12;
    }

    /**
     * Sets a new fLEvent12
     *
     * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent12Type[] $fLEvent12
     * @return self
     */
    public function setFLEvent12(array $fLEvent12 = null)
    {
        $this->fLEvent12 = $fLEvent12;
        return $this;
    }

    /**
     * Adds as fLEvent13
     *
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent13Type $fLEvent13
     *@return self
     */
    public function addToFLEvent13(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent13Type $fLEvent13)
    {
        $this->fLEvent13[] = $fLEvent13;
        return $this;
    }

    /**
     * isset fLEvent13
     *
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent13($index)
    {
        return isset($this->fLEvent13[$index]);
    }

    /**
     * unset fLEvent13
     *
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent13($index)
    {
        unset($this->fLEvent13[$index]);
    }

    /**
     * Gets as fLEvent13
     *
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent13Type[]
     */
    public function getFLEvent13()
    {
        return $this->fLEvent13;
    }

    /**
     * Sets a new fLEvent13
     *
     * Источник отказался от совершения сделки по обращению субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent13Type[] $fLEvent13
     * @return self
     */
    public function setFLEvent13(array $fLEvent13 = null)
    {
        $this->fLEvent13 = $fLEvent13;
        return $this;
    }

    /**
     * Adds as fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent14Type $fLEvent14
     *@return self
     */
    public function addToFLEvent14(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent14Type $fLEvent14)
    {
        $this->fLEvent14[] = $fLEvent14;
        return $this;
    }

    /**
     * isset fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent14($index)
    {
        return isset($this->fLEvent14[$index]);
    }

    /**
     * unset fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent14($index)
    {
        unset($this->fLEvent14[$index]);
    }

    /**
     * Gets as fLEvent14
     *
     * Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent14Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent14Type[] $fLEvent14
     * @return self
     */
    public function setFLEvent14(array $fLEvent14 = null)
    {
        $this->fLEvent14 = $fLEvent14;
        return $this;
    }

    /**
     * Adds as fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent141Type $fLEvent141
     *@return self
     */
    public function addToFLEvent141(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent141Type $fLEvent141)
    {
        $this->fLEvent141[] = $fLEvent141;
        return $this;
    }

    /**
     * isset fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent141($index)
    {
        return isset($this->fLEvent141[$index]);
    }

    /**
     * unset fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent141($index)
    {
        unset($this->fLEvent141[$index]);
    }

    /**
     * Gets as fLEvent141
     *
     * Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent141Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent141Type[] $fLEvent141
     * @return self
     */
    public function setFLEvent141(array $fLEvent141 = null)
    {
        $this->fLEvent141 = $fLEvent141;
        return $this;
    }

    /**
     * Adds as fLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent15Type $fLEvent15
     *@return self
     */
    public function addToFLEvent15(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent15Type $fLEvent15)
    {
        $this->fLEvent15[] = $fLEvent15;
        return $this;
    }

    /**
     * isset fLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent15($index)
    {
        return isset($this->fLEvent15[$index]);
    }

    /**
     * unset fLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent15($index)
    {
        unset($this->fLEvent15[$index]);
    }

    /**
     * Gets as fLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent15Type[]
     */
    public function getFLEvent15()
    {
        return $this->fLEvent15;
    }

    /**
     * Sets a new fLEvent15
     *
     * Для принудительного исполнения передано требование о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent15Type[] $fLEvent15
     * @return self
     */
    public function setFLEvent15(array $fLEvent15 = null)
    {
        $this->fLEvent15 = $fLEvent15;
        return $this;
    }

    /**
     * Adds as fLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent16Type $fLEvent16
     *@return self
     */
    public function addToFLEvent16(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent16Type $fLEvent16)
    {
        $this->fLEvent16[] = $fLEvent16;
        return $this;
    }

    /**
     * isset fLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent16($index)
    {
        return isset($this->fLEvent16[$index]);
    }

    /**
     * unset fLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent16($index)
    {
        unset($this->fLEvent16[$index]);
    }

    /**
     * Gets as fLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent16Type[]
     */
    public function getFLEvent16()
    {
        return $this->fLEvent16;
    }

    /**
     * Sets a new fLEvent16
     *
     * Изменились сведения о взыскании долга по алиментам, платы за жилое помещение, коммунальные услуги или услуги связи либо указанное требование погашено
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent16Type[] $fLEvent16
     * @return self
     */
    public function setFLEvent16(array $fLEvent16 = null)
    {
        $this->fLEvent16 = $fLEvent16;
        return $this;
    }

    /**
     * Adds as fLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent17Type $fLEvent17
     *@return self
     */
    public function addToFLEvent17(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent17Type $fLEvent17)
    {
        $this->fLEvent17[] = $fLEvent17;
        return $this;
    }

    /**
     * isset fLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent17($index)
    {
        return isset($this->fLEvent17[$index]);
    }

    /**
     * unset fLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent17($index)
    {
        unset($this->fLEvent17[$index]);
    }

    /**
     * Gets as fLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent17Type[]
     */
    public function getFLEvent17()
    {
        return $this->fLEvent17;
    }

    /**
     * Sets a new fLEvent17
     *
     * Изменились сведения титульной части кредитной истории субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent17Type[] $fLEvent17
     * @return self
     */
    public function setFLEvent17(array $fLEvent17 = null)
    {
        $this->fLEvent17 = $fLEvent17;
        return $this;
    }

    /**
     * Adds as fLEvent19
     *
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent19Type $fLEvent19
     *@return self
     */
    public function addToFLEvent19(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent19Type $fLEvent19)
    {
        $this->fLEvent19[] = $fLEvent19;
        return $this;
    }

    /**
     * isset fLEvent19
     *
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent19($index)
    {
        return isset($this->fLEvent19[$index]);
    }

    /**
     * unset fLEvent19
     *
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent19($index)
    {
        unset($this->fLEvent19[$index]);
    }

    /**
     * Gets as fLEvent19
     *
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent19Type[]
     */
    public function getFLEvent19()
    {
        return $this->fLEvent19;
    }

    /**
     * Sets a new fLEvent19
     *
     * Изменились сведения о субъекте в основной части кредитной истории, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent19Type[] $fLEvent19
     * @return self
     */
    public function setFLEvent19(array $fLEvent19 = null)
    {
        $this->fLEvent19 = $fLEvent19;
        return $this;
    }

    /**
     * Adds as fLEvent110
     *
     * Изменились сведения о дееспособности субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent110Type $fLEvent110
     *@return self
     */
    public function addToFLEvent110(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent110Type $fLEvent110)
    {
        $this->fLEvent110[] = $fLEvent110;
        return $this;
    }

    /**
     * isset fLEvent110
     *
     * Изменились сведения о дееспособности субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent110($index)
    {
        return isset($this->fLEvent110[$index]);
    }

    /**
     * unset fLEvent110
     *
     * Изменились сведения о дееспособности субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent110($index)
    {
        unset($this->fLEvent110[$index]);
    }

    /**
     * Gets as fLEvent110
     *
     * Изменились сведения о дееспособности субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent110Type[]
     */
    public function getFLEvent110()
    {
        return $this->fLEvent110;
    }

    /**
     * Sets a new fLEvent110
     *
     * Изменились сведения о дееспособности субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent110Type[] $fLEvent110
     * @return self
     */
    public function setFLEvent110(array $fLEvent110 = null)
    {
        $this->fLEvent110 = $fLEvent110;
        return $this;
    }

    /**
     * Adds as fLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent112Type $fLEvent112
     *@return self
     */
    public function addToFLEvent112(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent112Type $fLEvent112)
    {
        $this->fLEvent112[] = $fLEvent112;
        return $this;
    }

    /**
     * isset fLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent112($index)
    {
        return isset($this->fLEvent112[$index]);
    }

    /**
     * unset fLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent112($index)
    {
        unset($this->fLEvent112[$index]);
    }

    /**
     * Gets as fLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent112Type[]
     */
    public function getFLEvent112()
    {
        return $this->fLEvent112;
    }

    /**
     * Sets a new fLEvent112
     *
     * Изменились сведения по делу о банкротстве субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent112Type[] $fLEvent112
     * @return self
     */
    public function setFLEvent112(array $fLEvent112 = null)
    {
        $this->fLEvent112 = $fLEvent112;
        return $this;
    }

    /**
     * Adds as fLEvent21
     *
     * Изменились сведения об условиях обязательства субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent21Type $fLEvent21
     * @return self
     */
    public function addToFLEvent21(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent21Type $fLEvent21)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent21Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent21Type[] $fLEvent21
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent22Type $fLEvent22
     *@return self
     */
    public function addToFLEvent22(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent22Type $fLEvent22)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent22Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent22Type[] $fLEvent22
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent221Type $fLEvent221
     * @return self
     */
    public function addToFLEvent221(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent221Type $fLEvent221)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent221Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent221Type[] $fLEvent221
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent23Type $fLEvent23
     * @return self
     */
    public function addToFLEvent23(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent23Type $fLEvent23)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent23Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent23Type[] $fLEvent23
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent24Type $fLEvent24
     * @return self
     */
    public function addToFLEvent24(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent24Type $fLEvent24)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent24Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent24Type[] $fLEvent24
     * @return self
     */
    public function setFLEvent24(array $fLEvent24 = null)
    {
        $this->fLEvent24 = $fLEvent24;
        return $this;
    }

    /**
     * Adds as fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent25Type $fLEvent25
     * @return self
     */
    public function addToFLEvent25(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent25Type $fLEvent25)
    {
        $this->fLEvent25[] = $fLEvent25;
        return $this;
    }

    /**
     * isset fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent25($index)
    {
        return isset($this->fLEvent25[$index]);
    }

    /**
     * unset fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent25($index)
    {
        unset($this->fLEvent25[$index]);
    }

    /**
     * Gets as fLEvent25
     *
     * Обязательство субъекта прекратилось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent25Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent25Type[] $fLEvent25
     * @return self
     */
    public function setFLEvent25(array $fLEvent25 = null)
    {
        $this->fLEvent25 = $fLEvent25;
        return $this;
    }

    /**
     * Adds as fLEvent26
     *
     * Изменились сведения о судебном споре или требовании по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent26Type $fLEvent26
     * @return self
     */
    public function addToFLEvent26(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent26Type $fLEvent26)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent26Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent26Type[] $fLEvent26
     * @return self
     */
    public function setFLEvent26(array $fLEvent26 = null)
    {
        $this->fLEvent26 = $fLEvent26;
        return $this;
    }

    /**
     * Adds as fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent281Type $fLEvent281
     * @return self
     */
    public function addToFLEvent281(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent281Type $fLEvent281)
    {
        $this->fLEvent281[] = $fLEvent281;
        return $this;
    }

    /**
     * isset fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent281($index)
    {
        return isset($this->fLEvent281[$index]);
    }

    /**
     * unset fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent281($index)
    {
        unset($this->fLEvent281[$index]);
    }

    /**
     * Gets as fLEvent281
     *
     * Конкурсное производство в отношении источника открылось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent281Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent281Type[] $fLEvent281
     * @return self
     */
    public function setFLEvent281(array $fLEvent281 = null)
    {
        $this->fLEvent281 = $fLEvent281;
        return $this;
    }

    /**
     * Adds as fLEvent282
     *
     * Конкурсное производство в отношении источника: В ходе конкурсного производства изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent282Type $fLEvent282
     * @return self
     */
    public function addToFLEvent282(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent282Type $fLEvent282)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent282Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent282Type[] $fLEvent282
     * @return self
     */
    public function setFLEvent282(array $fLEvent282 = null)
    {
        $this->fLEvent282 = $fLEvent282;
        return $this;
    }

    /**
     * Adds as fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent283Type $fLEvent283
     * @return self
     */
    public function addToFLEvent283(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent283Type $fLEvent283)
    {
        $this->fLEvent283[] = $fLEvent283;
        return $this;
    }

    /**
     * isset fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent283($index)
    {
        return isset($this->fLEvent283[$index]);
    }

    /**
     * unset fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent283($index)
    {
        unset($this->fLEvent283[$index]);
    }

    /**
     * Gets as fLEvent283
     *
     * Конкурсное производство в отношении источника завершилось
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent283Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent283Type[] $fLEvent283
     * @return self
     */
    public function setFLEvent283(array $fLEvent283 = null)
    {
        $this->fLEvent283 = $fLEvent283;
        return $this;
    }

    /**
     * Adds as fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent284Type $fLEvent284
     * @return self
     */
    public function addToFLEvent284(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent284Type $fLEvent284)
    {
        $this->fLEvent284[] = $fLEvent284;
        return $this;
    }

    /**
     * isset fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent284($index)
    {
        return isset($this->fLEvent284[$index]);
    }

    /**
     * unset fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent284($index)
    {
        unset($this->fLEvent284[$index]);
    }

    /**
     * Gets as fLEvent284
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent284Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent284Type[] $fLEvent284
     * @return self
     */
    public function setFLEvent284(array $fLEvent284 = null)
    {
        $this->fLEvent284 = $fLEvent284;
        return $this;
    }

    /**
     * Adds as fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent291Type $fLEvent291
     * @return self
     */
    public function addToFLEvent291(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent291Type $fLEvent291)
    {
        $this->fLEvent291[] = $fLEvent291;
        return $this;
    }

    /**
     * isset fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent291($index)
    {
        return isset($this->fLEvent291[$index]);
    }

    /**
     * unset fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent291($index)
    {
        unset($this->fLEvent291[$index]);
    }

    /**
     * Gets as fLEvent291
     *
     * Процесс ликвидации источника начался
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent291Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent291Type[] $fLEvent291
     * @return self
     */
    public function setFLEvent291(array $fLEvent291 = null)
    {
        $this->fLEvent291 = $fLEvent291;
        return $this;
    }

    /**
     * Adds as fLEvent292
     *
     * Процесс ликвидации источника: В ходе процесса ликвидации изменились сведения об исполнении субъектом своего обязательства или его части либо обязательство прекратилось
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent292Type $fLEvent292
     * @return self
     */
    public function addToFLEvent292(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent292Type $fLEvent292)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent292Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent292Type[] $fLEvent292
     * @return self
     */
    public function setFLEvent292(array $fLEvent292 = null)
    {
        $this->fLEvent292 = $fLEvent292;
        return $this;
    }

    /**
     * Adds as fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent293Type $fLEvent293
     * @return self
     */
    public function addToFLEvent293(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent293Type $fLEvent293)
    {
        $this->fLEvent293[] = $fLEvent293;
        return $this;
    }

    /**
     * isset fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent293($index)
    {
        return isset($this->fLEvent293[$index]);
    }

    /**
     * unset fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent293($index)
    {
        unset($this->fLEvent293[$index]);
    }

    /**
     * Gets as fLEvent293
     *
     * Процесс ликвидации источника завершился
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent293Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent293Type[] $fLEvent293
     * @return self
     */
    public function setFLEvent293(array $fLEvent293 = null)
    {
        $this->fLEvent293 = $fLEvent293;
        return $this;
    }

    /**
     * Adds as fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent294Type $fLEvent294
     * @return self
     */
    public function addToFLEvent294(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent294Type $fLEvent294)
    {
        $this->fLEvent294[] = $fLEvent294;
        return $this;
    }

    /**
     * isset fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent294($index)
    {
        return isset($this->fLEvent294[$index]);
    }

    /**
     * unset fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent294($index)
    {
        unset($this->fLEvent294[$index]);
    }

    /**
     * Gets as fLEvent294
     *
     * Права кредитора по обязательству перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent294Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent294Type[] $fLEvent294
     * @return self
     */
    public function setFLEvent294(array $fLEvent294 = null)
    {
        $this->fLEvent294 = $fLEvent294;
        return $this;
    }

    /**
     * Adds as fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent210Type $fLEvent210
     * @return self
     */
    public function addToFLEvent210(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent210Type $fLEvent210)
    {
        $this->fLEvent210[] = $fLEvent210;
        return $this;
    }

    /**
     * isset fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent210($index)
    {
        return isset($this->fLEvent210[$index]);
    }

    /**
     * unset fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent210($index)
    {
        unset($this->fLEvent210[$index]);
    }

    /**
     * Gets as fLEvent210
     *
     * Источник прекратил передачу информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent210Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent210Type[] $fLEvent210
     * @return self
     */
    public function setFLEvent210(array $fLEvent210 = null)
    {
        $this->fLEvent210 = $fLEvent210;
        return $this;
    }

    /**
     * Adds as fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent211Type $fLEvent211
     * @return self
     */
    public function addToFLEvent211(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent211Type $fLEvent211)
    {
        $this->fLEvent211[] = $fLEvent211;
        return $this;
    }

    /**
     * isset fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent211($index)
    {
        return isset($this->fLEvent211[$index]);
    }

    /**
     * unset fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent211($index)
    {
        unset($this->fLEvent211[$index]);
    }

    /**
     * Gets as fLEvent211
     *
     * Права по обязательству полностью перешли к другому лицу
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent211Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent211Type[] $fLEvent211
     * @return self
     */
    public function setFLEvent211(array $fLEvent211 = null)
    {
        $this->fLEvent211 = $fLEvent211;
        return $this;
    }

    /**
     * Adds as fLEvent2111
     *
     * Права по обязательству частично перешли к другому лицу
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2111Type $fLEvent2111
     * @return self
     */
    public function addToFLEvent2111(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2111Type $fLEvent2111)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2111Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2111Type[] $fLEvent2111
     * @return self
     */
    public function setFLEvent2111(array $fLEvent2111 = null)
    {
        $this->fLEvent2111 = $fLEvent2111;
        return $this;
    }

    /**
     * Adds as fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2112Type $fLEvent2112
     * @return self
     */
    public function addToFLEvent2112(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2112Type $fLEvent2112)
    {
        $this->fLEvent2112[] = $fLEvent2112;
        return $this;
    }

    /**
     * isset fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent2112($index)
    {
        return isset($this->fLEvent2112[$index]);
    }

    /**
     * unset fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent2112($index)
    {
        unset($this->fLEvent2112[$index]);
    }

    /**
     * Gets as fLEvent2112
     *
     * Права по обязательству получены от другого лица
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2112Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent2112Type[] $fLEvent2112
     * @return self
     */
    public function setFLEvent2112(array $fLEvent2112 = null)
    {
        $this->fLEvent2112 = $fLEvent2112;
        return $this;
    }

    /**
     * Adds as fLEvent212
     *
     * Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent212Type $fLEvent212
     * @return self
     */
    public function addToFLEvent212(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent212Type $fLEvent212)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent212Type[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent212Type[] $fLEvent212
     * @return self
     */
    public function setFLEvent212(array $fLEvent212 = null)
    {
        $this->fLEvent212 = $fLEvent212;
        return $this;
    }

    /**
     * Adds as fLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type $fLEvent31
     * @return self
     */
    public function addToFLEvent31(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type $fLEvent31)
    {
        $this->fLEvent31[] = $fLEvent31;
        return $this;
    }

    /**
     * isset fLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent31($index)
    {
        return isset($this->fLEvent31[$index]);
    }

    /**
     * unset fLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent31($index)
    {
        unset($this->fLEvent31[$index]);
    }

    /**
     * Gets as fLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type[]
     */
    public function getFLEvent31()
    {
        return $this->fLEvent31;
    }

    /**
     * Sets a new fLEvent31
     *
     * Требуется внесение изменений в связи с ошибкой в показателях кредитной истории, не связанных с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent31Type[] $fLEvent31
     * @return self
     */
    public function setFLEvent31(array $fLEvent31 = null)
    {
        $this->fLEvent31 = $fLEvent31;
        return $this;
    }

    /**
     * Adds as fLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent32Type $fLEvent32
     * @return self
     */
    public function addToFLEvent32(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent32Type $fLEvent32)
    {
        $this->fLEvent32[] = $fLEvent32;
        return $this;
    }

    /**
     * isset fLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent32($index)
    {
        return isset($this->fLEvent32[$index]);
    }

    /**
     * unset fLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent32($index)
    {
        unset($this->fLEvent32[$index]);
    }

    /**
     * Gets as fLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent32Type[]
     */
    public function getFLEvent32()
    {
        return $this->fLEvent32;
    }

    /**
     * Sets a new fLEvent32
     *
     * Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent32Type[] $fLEvent32
     * @return self
     */
    public function setFLEvent32(array $fLEvent32 = null)
    {
        $this->fLEvent32 = $fLEvent32;
        return $this;
    }

    /**
     * Adds as fLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent33Type $fLEvent33
     */
    public function addToFLEvent33(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent33Type $fLEvent33)
    {
        $this->fLEvent33[] = $fLEvent33;
        return $this;
    }

    /**
     * isset fLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent33($index)
    {
        return isset($this->fLEvent33[$index]);
    }

    /**
     * unset fLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent33($index)
    {
        unset($this->fLEvent33[$index]);
    }

    /**
     * Gets as fLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent33Type[]
     */
    public function getFLEvent33()
    {
        return $this->fLEvent33;
    }

    /**
     * Sets a new fLEvent33
     *
     * Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent33Type[] $fLEvent33
     * @return self
     */
    public function setFLEvent33(array $fLEvent33 = null)
    {
        $this->fLEvent33 = $fLEvent33;
        return $this;
    }

    /**
     * Adds as fLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent34Type $fLEvent34
     */
    public function addToFLEvent34(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent34Type $fLEvent34)
    {
        $this->fLEvent34[] = $fLEvent34;
        return $this;
    }

    /**
     * isset fLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent34($index)
    {
        return isset($this->fLEvent34[$index]);
    }

    /**
     * unset fLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent34($index)
    {
        unset($this->fLEvent34[$index]);
    }

    /**
     * Gets as fLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent34Type[]
     */
    public function getFLEvent34()
    {
        return $this->fLEvent34;
    }

    /**
     * Sets a new fLEvent34
     *
     * Требуется исключение сведений об обращении, сведения о котором отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent34Type[] $fLEvent34
     * @return self
     */
    public function setFLEvent34(array $fLEvent34 = null)
    {
        $this->fLEvent34 = $fLEvent34;
        return $this;
    }

    /**
     * Adds as fLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent35Type $fLEvent35
     */
    public function addToFLEvent35(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent35Type $fLEvent35)
    {
        $this->fLEvent35[] = $fLEvent35;
        return $this;
    }

    /**
     * isset fLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent35($index)
    {
        return isset($this->fLEvent35[$index]);
    }

    /**
     * unset fLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent35($index)
    {
        unset($this->fLEvent35[$index]);
    }

    /**
     * Gets as fLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent35Type[]
     */
    public function getFLEvent35()
    {
        return $this->fLEvent35;
    }

    /**
     * Sets a new fLEvent35
     *
     * Требуется исключение кредитной истории субъекта, сведения о которой отсутствуют у источника формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent35Type[] $fLEvent35
     * @return self
     */
    public function setFLEvent35(array $fLEvent35 = null)
    {
        $this->fLEvent35 = $fLEvent35;
        return $this;
    }

    /**
     * Adds as fLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type $fLEvent41
     */
    public function addToFLEvent41(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type $fLEvent41)
    {
        $this->fLEvent41[] = $fLEvent41;
        return $this;
    }

    /**
     * isset fLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent41($index)
    {
        return isset($this->fLEvent41[$index]);
    }

    /**
     * unset fLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent41($index)
    {
        unset($this->fLEvent41[$index]);
    }

    /**
     * Gets as fLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type[]
     */
    public function getFLEvent41()
    {
        return $this->fLEvent41;
    }

    /**
     * Sets a new fLEvent41
     *
     * Требуется аннулирование отдельных показателей кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent41Type[] $fLEvent41
     * @return self
     */
    public function setFLEvent41(array $fLEvent41 = null)
    {
        $this->fLEvent41 = $fLEvent41;
        return $this;
    }

    /**
     * Adds as fLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent42Type $fLEvent42
     */
    public function addToFLEvent42(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent42Type $fLEvent42)
    {
        $this->fLEvent42[] = $fLEvent42;
        return $this;
    }

    /**
     * isset fLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent42($index)
    {
        return isset($this->fLEvent42[$index]);
    }

    /**
     * unset fLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent42($index)
    {
        unset($this->fLEvent42[$index]);
    }

    /**
     * Gets as fLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent42Type[]
     */
    public function getFLEvent42()
    {
        return $this->fLEvent42;
    }

    /**
     * Sets a new fLEvent42
     *
     * Требуется аннулирование записи кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent42Type[] $fLEvent42
     * @return self
     */
    public function setFLEvent42(array $fLEvent42 = null)
    {
        $this->fLEvent42 = $fLEvent42;
        return $this;
    }

    /**
     * Adds as fLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @return self
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent43Type $fLEvent43
     */
    public function addToFLEvent43(\mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent43Type $fLEvent43)
    {
        $this->fLEvent43[] = $fLEvent43;
        return $this;
    }

    /**
     * isset fLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFLEvent43($index)
    {
        return isset($this->fLEvent43[$index]);
    }

    /**
     * unset fLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFLEvent43($index)
    {
        unset($this->fLEvent43[$index]);
    }

    /**
     * Gets as fLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent43Type[]
     */
    public function getFLEvent43()
    {
        return $this->fLEvent43;
    }

    /**
     * Sets a new fLEvent43
     *
     * Требуется аннулирование всей кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FLEvent43Type[] $fLEvent43
     * @return self
     */
    public function setFLEvent43(array $fLEvent43 = null)
    {
        $this->fLEvent43 = $fLEvent43;
        return $this;
    }
}

