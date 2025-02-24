<?php

namespace mfteam\nbch\models\rutdf;

use mfteam\nbch\components\rutdf\template\segments\GroupHeaderComment;
use mfteam\nbch\models\AccountReplyRUTDF;
use mfteam\nbch\models\AddressReplyRUTDF;
use mfteam\nbch\models\BusinessReply;
use mfteam\nbch\models\CapabilityReply;
use mfteam\nbch\models\IdReply;
use mfteam\nbch\models\InformationPartReplyRUTDF;
use mfteam\nbch\models\PersonReply;
use mfteam\nbch\models\RegnumReply;
use mfteam\nbch\models\ReorgReply;
use mfteam\nbch\models\SNILSReply;

/**
 * Данные по субъекту кредитной истории.
 * Атрибуты имеющие тип null заполняются в зависимости от типа субъекта кредитной истории (ЮЛ, ФЛ, ИП) или не обязательные.
 * @deprecated
 * @use \mfteam\nbch\components\rutdf\NbchDataInterface
 */
interface NbchDataInterface
{
    /**
     * Комментарий с пояснением причины представления показателей.
     * @return GroupHeaderComment|null
     */
    public function getGroupHeaderComment(): ?GroupHeaderComment;
    
    /**
     * Источник направляет кредитную информацию о субъекте или его отдельном обязательстве,
     * или об отдельном обращении субъекта к источнику с предложением совершить сделку (далее – обращение) впервые
     * @return bool
     */
    public function isFirst(): bool;
    
    /**
     * Дата события по которому сформированы данные в формате ДД.ММ.ГГГГ
     * @return string
     */
    public function getReportingDt(): string;
    
    /**
     * Возвращает true если данные передаются по ЮЛ и false если по ФЛ/ИП
     * @return bool
     */
    public function isLegal(): bool;
    
    /**
     * Сведения о ФЛ/ИП
     * @return PersonReply|null
     */
    public function getPersonReply(): ?PersonReply;
    /**
     * Предыдущие сведения о ФЛ/ИП. Передаются в случае изменения информации о ФЛ/ИП после начала передачи данных.
     * @return PersonReply|null
     */
    public function getPrevPersonReply(): ?PersonReply;
    
    /**
     * Документ, удостоверяющий личность
     * @return IdReply|null
     */
    public function getIdReply(): ?IdReply;
    
    /**
     * Документ, ранее удостоверявший личность. Передается если документ поменялся после начала передачи данных.
     * @return IdReply|null
     */
    public function getPrevIdReply(): ?IdReply;
    
    /**
     * Наименование юридического лица
     * @return BusinessReply|null
     */
    public function getBusinessReply(): ?BusinessReply;
    
    /**
     * Сведения о правопреемстве при реорганизации
     * Указываются сведения о наименовании субъекта до перехода к нему прав и обязанностей в рамках универсального правопреемства.B15Amendment.php
     * @return ReorgReply|null
     */
    public function getReorgReply(): ?ReorgReply;
    
    /**
     * Номер налогоплательщика, регистрационный номер и признак специального налогового режима
     * @return RegnumReply
     */
    public function getRegnumReply(): RegnumReply;
    
    /**
     * СНИЛС, передается если есть данные.
     * @return SNILSReply|null
     */
    public function getSNILSReply(): ?SNILSReply;
    
    /**
     * Регистрация физического лица по месту жительства, пребывания и контактная информация или
     * Адрес юридического лица в пределах его места нахождения и контактная информация
     * @return AddressReplyRUTDF
     */
    public function getRegAddress(): AddressReplyRUTDF;
    
    /**
     * Фактическое место жительства ФЛ/ИП. Если адрес соответствует getRegAddress() не заполняется
     * @return AddressReplyRUTDF|null
     */
    public function getActualAddress(): ?AddressReplyRUTDF;
    
    /**
     * Сведения о дееспособности
     * @return CapabilityReply
     */
    public function getCapabilityReply(): CapabilityReply;
    
    /**
     * Сделка
     * @return AccountReplyRUTDF
     */
    public function getAccountReplyRUTDF(): AccountReplyRUTDF;
    
    /**
     * Сведения об обращении
     * @return InformationPartReplyRUTDF
     */
    public function getInformationPartRUTDF(): InformationPartReplyRUTDF;
}
