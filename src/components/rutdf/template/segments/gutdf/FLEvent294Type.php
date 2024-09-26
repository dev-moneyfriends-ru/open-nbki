<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent294Type
 *
 * Права кредитора по обязательству перешли к другому лицу
 * XSD Type: FL_Event_2_9_4_Type
 */
class FLEvent294Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 17. Идентификатор сделки
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid
     */
    private $fL17DealUid = null;

    /**
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSend
     */
    private $fL45StopSend = null;

    /**
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer
     */
    private $fL51OrgAcquirer = null;

    /**
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer
     */
    private $fL52PersonAcquirer = null;

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
     * Gets as fL17DealUid
     *
     * Блок 17. Идентификатор сделки
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid
     * @return self
     */
    public function setFL17DealUid(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL17DealUidType $fL17DealUid)
    {
        $this->fL17DealUid = $fL17DealUid;
        return $this;
    }

    /**
     * Gets as fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType
     */
    public function getFL45StopSend()
    {
        return $this->fL45StopSend;
    }

    /**
     * Sets a new fL45StopSend
     *
     * Блок 45. Сведения о прекращении передачи информации по обязательству
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSend
     * @return self
     */
    public function setFL45StopSend(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL45StopSendType $fL45StopSend)
    {
        $this->fL45StopSend = $fL45StopSend;
        return $this;
    }

    /**
     * Gets as fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType
     */
    public function getFL51OrgAcquirer()
    {
        return $this->fL51OrgAcquirer;
    }

    /**
     * Sets a new fL51OrgAcquirer
     *
     * Блок 51. Сведения о приобретателе прав – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer
     * @return self
     */
    public function setFL51OrgAcquirer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL51OrgAcquirerType $fL51OrgAcquirer = null)
    {
        $this->fL51OrgAcquirer = $fL51OrgAcquirer;
        return $this;
    }

    /**
     * Gets as fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType
     */
    public function getFL52PersonAcquirer()
    {
        return $this->fL52PersonAcquirer;
    }

    /**
     * Sets a new fL52PersonAcquirer
     *
     * Блок 52. Сведения о приобретателе прав – физическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer
     * @return self
     */
    public function setFL52PersonAcquirer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL52PersonAcquirerType $fL52PersonAcquirer = null)
    {
        $this->fL52PersonAcquirer = $fL52PersonAcquirer;
        return $this;
    }
}

