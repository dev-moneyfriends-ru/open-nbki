<?php

namespace mfteam\nbch\components\rutdf;

use mfteam\nbch\models\AccountReplyRUTDF;
use mfteam\nbch\models\AddressReplyRUTDF;
use mfteam\nbch\models\BusinessReply;
use mfteam\nbch\models\CapabilityReply;
use mfteam\nbch\models\ContactReply;
use mfteam\nbch\models\IdReply;
use mfteam\nbch\models\InformationPartReplyRUTDF;
use mfteam\nbch\models\PersonReply;
use mfteam\nbch\models\RegnumReply;
use mfteam\nbch\models\ReorgReply;
use mfteam\nbch\models\SNILSReply;

/**
 * Данные для передачи.
 * Атрибуты имеющие тип null заполняются в зависимости от типа субъекта кредитной истории (ЮЛ, ФЛ, ИП) или не обязательные.
 */
interface NbchDataInterface
{
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
     * Сведения о правопреемстве при реорганизации.
     * Указываются сведения о наименовании субъекта до перехода к нему прав и обязанностей в рамках универсального правопреемства.
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
     * Контактные данные.
     * Указываются сведения, если субъект предоставил соответствующие контактные данные источнику.
     * @return ContactReply[]
     */
    public function getContactReply(): array;

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

    /**
     * При передаче данных для события 3 или 4 в показателе startDate указать дату события, в составе которого был передан блок с ошибочной информацией
     * (или наиболее раннюю из дат, если таких событий было несколько). Если startDate не указана, значит, обновляется вся история по обязательству
     * @return string|null
     */
    public function getStartDate(): ?string;

    /**
     * Код причины изменения кредитной информации.
     * Обязателен для:
     * - событий 3.* вместе с кодом операции C.1 и C.2:
     * 1 – источником допущена ошибка при формировании записи и (или) иных данных кредитной истории;
     * 2 – запись и (или) иные данные кредитной истории сформированы на основании некорректных сведений, представленных субъектом;
     * - событий 4.* вместе с кодом операции D.1 и D.2::
     * 3 – запись и (или) иные данные кредитной истории сформированы в результате противоправных действий третьих лиц, в том числе признанных мошенническими на основании вступившего в силу решения суда.
     * В иных случаях – не указывается.
     * @return int|null
     */
    public function getChangeReason(): ?int;

    /**
     * При передаче данных по исправлению/аннулированию сведении (NbchDataInterface::getCorrectionData()),
     * передается id события в рамках которого были сформированы данные показатели
     * @return string|null
     */
    public function getCorrectionEventId(): ?string;

    /**
     * Показатели КИ по событиям произошедшим начиная с даты (включая саму дату) указанную в NbchDataInterface::getStartDate().
     * @return array|\mfteam\nbch\components\rutdf\NbchDataInterface[]
     */
    public function getCorrectionData(): array;

    /**
     * @param array $correctionDataArray массив показателей КИ по событиям произошедшим начиная с даты (включая саму дату) указанную в NbchDataInterface::getStartDate()
     * @return void
     */
    public function setCorrectionData(array $correctionDataArray): void;

    /**
     * @param NbchDataInterface $correctionData Показатели КИ по событию произошедшему начиная с даты (включая саму дату) указанную в NbchDataInterface::getStartDate()
     * @return void
     */
    public function addCorrectionData(NbchDataInterface $correctionData): void;
}
