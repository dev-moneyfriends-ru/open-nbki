<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\helpers\UuidHelper;

/**
 * Class representing UL46ParticipationType
 *
 * Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история
 * XSD Type: UL_46_Participation_Type
 */
class UL46ParticipationType extends GutdfSegment
{
    /**
     * 46.1. Код вида участия в сделке
     *
     * @var int $role
     */
    private $role = null;

    /**
     * 46.2. Код вида займа (кредита)
     *
     * @var int $kindCode
     */
    private $kindCode = null;

    /**
     * 46.3. УИд сделки
     *
     * @var string $uid
     */
    private $uid = null;

    /**
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @var \DateTime $fundDate
     */
    private $fundDate = null;

    /**
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @var string $overdueExist0
     */
    private $overdueExist0 = null;

    /**
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @var string $overdueExist1
     */
    private $overdueExist1 = null;

    /**
     * 46.6. Признак прекращения обязательства = 0
     *
     * @var string $stopExist0
     */
    private $stopExist0 = null;

    /**
     * 46.6. Признак прекращения обязательства = 1
     *
     * @var string $stopExist1
     */
    private $stopExist1 = null;

    /**
     * Gets as role
     *
     * 46.1. Код вида участия в сделке
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * 46.1. Код вида участия в сделке
     *
     * @param int $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as kindCode
     *
     * 46.2. Код вида займа (кредита)
     *
     * @return int
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * Sets a new kindCode
     *
     * 46.2. Код вида займа (кредита)
     *
     * @param int $kindCode
     * @return self
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
        return $this;
    }

    /**
     * Gets as uid
     *
     * 46.3. УИд сделки
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Sets a new uid
     *
     * 46.3. УИд сделки
     *
     * @param string $uid
     * @return self
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }

    /**
     * Gets as fundDate
     *
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @return \DateTime
     */
    public function getFundDate()
    {
        return $this->fundDate;
    }

    /**
     * Sets a new fundDate
     *
     * 46.4. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства
     *
     * @param \DateTime $fundDate
     * @return self
     */
    public function setFundDate(?\DateTime $fundDate = null)
    {
        $this->fundDate = $fundDate;
        return $this;
    }

    /**
     * Gets as overdueExist0
     *
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @return string
     */
    public function getOverdueExist0()
    {
        return $this->overdueExist0;
    }

    /**
     * Sets a new overdueExist0
     *
     * 46.5. Признак просрочки должника более 90 дней = 0
     *
     * @param string $overdueExist0
     * @return self
     */
    public function setOverdueExist0($overdueExist0)
    {
        $this->overdueExist0 = $overdueExist0;
        return $this;
    }

    /**
     * Gets as overdueExist1
     *
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @return string
     */
    public function getOverdueExist1()
    {
        return $this->overdueExist1;
    }

    /**
     * Sets a new overdueExist1
     *
     * 46.5. Признак просрочки должника более 90 дней = 1
     *
     * @param string $overdueExist1
     * @return self
     */
    public function setOverdueExist1($overdueExist1)
    {
        $this->overdueExist1 = $overdueExist1;
        return $this;
    }

    /**
     * Gets as stopExist0
     *
     * 46.6. Признак прекращения обязательства = 0
     *
     * @return string
     */
    public function getStopExist0()
    {
        return $this->stopExist0;
    }

    /**
     * Sets a new stopExist0
     *
     * 46.6. Признак прекращения обязательства = 0
     *
     * @param string $stopExist0
     * @return self
     */
    public function setStopExist0($stopExist0)
    {
        $this->stopExist0 = $stopExist0;
        return $this;
    }

    /**
     * Gets as stopExist1
     *
     * 46.6. Признак прекращения обязательства = 1
     *
     * @return string
     */
    public function getStopExist1()
    {
        return $this->stopExist1;
    }

    /**
     * Sets a new stopExist1
     *
     * 46.6. Признак прекращения обязательства = 1
     *
     * @param string $stopExist1
     * @return self
     */
    public function setStopExist1($stopExist1)
    {
        $this->stopExist1 = $stopExist1;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_46_Participation';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код вида участия в сделке' => 'Заполняется по справочнику 2.1.',
            'Код вида займа (кредита)' => 'Заполняется по справочнику 2.3.',
            'УИд сделки' => 'Значение должно соответствовать одному из значений показателя 17.1 «УИд сделки».',
            'Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => 'Должно совпадать со значением показателя 24.1.',
            'Признак просрочки должника более 90 дней 0' => 'Код «1» – должник нарушил срок платежа по займу или лизингу более чем на 90 календарных дней; код «0» – обстоятельство кода «1» отсутствует Продолжительность просрочки определяется методом ФИФО. Значение данного показателя должно соответствовать продолжительности просрочки, которая указана по показателю 28.12 «Продолжительность просрочки».',
            'Признак просрочки должника более 90 дней 1' => 'Код «1» – должник нарушил срок платежа по займу или лизингу более чем на 90 календарных дней; код «0» – обстоятельство кода «1» отсутствует Продолжительность просрочки определяется методом ФИФО. Значение данного показателя должно соответствовать продолжительности просрочки, которая указана по показателю 28.12 «Продолжительность просрочки».',
            'Признак прекращения обязательства 0' => 'Код «1» – взаимные обязательства субъекта и источника прекращены (независимо от основания); код «0» – обстоятельство кода «1» отсутствует.',
            'Признак прекращения обязательства 1' => 'Код «1» – взаимные обязательства субъекта и источника прекращены (независимо от основания); код «0» – обстоятельство кода «1» отсутствует.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 46. Сведения об участии в обязательстве, по которому формируется кредитная история';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $informPart = $this->sendData->getInformationPartRUTDF();
        $this->role = $informPart->flagIndicatorCode;
        $this->kindCode = $informPart->approvedLoanTypeCode;
        $this->uid = UuidHelper::getUuidWithControl($informPart->agreementNumber);
        $this->fundDate = $this->formatDate($informPart->fundDt);

        if($informPart->defaultFlag){
            $this->overdueExist0 = null;
            $this->overdueExist1 = '';
        }else{
            $this->overdueExist0 = '';
            $this->overdueExist1 = null;
        }

        if($informPart->loanIndicator){
            $this->stopExist0 = null;
            $this->stopExist1 = '';
        }else{
            $this->stopExist0 = '';
            $this->stopExist1 = null;
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'role',
            'kindCode',
            'uid',
            'fundDate',
            'overdueExist_0' => 'overdueExist0',
            'overdueExist_1' => 'overdueExist1',
            'stopExist_0' => 'stopExist0',
            'stopExist_1' => 'stopExist1',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок формируется, если на основании сделки субъекту переданы сумма займа (кредита) или предмет лизинга либо возникло обеспечение. Для требований о взыскании платы за жилое помещение, коммунальные услуги или услуги связи в блоке 46 заполняются только показатели 46.1, 46.5 и 46.6. Если показатель 46.3 не заполнен, то в качестве ключа используется показатель 46.4. Если и он не заполнен, укажите произвольный уникальный идентификатор сведений об участии в обязательстве в показателе 0.4 блока 0_GROUPHEADER как значение ключа obligpt_num. Идентификатор будет использован как ключевое поле.';
    }
}

