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
use yii\base\InvalidConfigException;

class NbchDataDt extends \yii\base\BaseObject implements NbchDataInterface
{
    /**
     * @var string Дата события по которому сформированы данные в формате ДД.ММ.ГГГГ
     */
    private $reportingDt;
    
    /**
     * @inheritDoc
     */
    public function getReportingDt(): string
    {
        return $this->reportingDt;
    }
    
    /**
     * @inheritDoc
     */
    public function isLegal(): bool
    {
        if (!empty($this->getBusinessReply() && empty($this->getPersonReply()))) {
            return true;
        }
        if (empty($this->getBusinessReply() && !empty($this->getPersonReply()))) {
            return false;
        }
        throw new InvalidConfigException();
    }
    
    /**
     * @inheritDoc
     */
    public function getPersonReply(): ?PersonReply
    {
        // TODO: Implement getPersonReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getPrevPersonReply(): ?PersonReply
    {
        // TODO: Implement getPrevPersonReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getIdReply(): ?IdReply
    {
        // TODO: Implement getIdReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getPrevIdReply(): ?IdReply
    {
        // TODO: Implement getPrevIdReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getBusinessReply(): ?BusinessReply
    {
        // TODO: Implement getBusinessReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getReorgReply(): ?ReorgReply
    {
        // TODO: Implement getReorgReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getRegnumReply(): RegnumReply
    {
        // TODO: Implement getRegnumReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getSNILSReply(): ?SNILSReply
    {
        // TODO: Implement getSNILSReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getRegAddress(): AddressReplyRUTDF
    {
        // TODO: Implement getRegAddress() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getActualAddress(): ?AddressReplyRUTDF
    {
        // TODO: Implement getActualAddress() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getCapabilityReply(): CapabilityReply
    {
        // TODO: Implement getCapabilityReply() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getAccountReplyRUTDF(): AccountReplyRUTDF
    {
        // TODO: Implement getAccountReplyRUTDF() method.
    }
    
    /**
     * @inheritDoc
     */
    public function getInformationPartRUTDF(): InformationPartReplyRUTDF
    {
        // TODO: Implement getInformationPartRUTDF() method.
    }
    
    /**
     * @param string $reportingDt
     * @return NbchDataDt
     */
    public function setReportingDt(string $reportingDt): NbchDataDt
    {
        $this->reportingDt = $reportingDt;
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getGroupHeaderComment(): ?GroupHeaderComment
    {
        // TODO: Implement getGroupHeaderComment() method.
    }
    
    /**
     * @inheritDoc
     */
    public function isFirst(): bool
    {
        // TODO: Implement isFirst() method.
    }
}
