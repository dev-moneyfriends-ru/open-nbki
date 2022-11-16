<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CreditReportType
 *
 * 
 * XSD Type: CreditReport
 */
class CreditReportType
{

    /**
     * @var \mfteam\nbch\generated\models\SubjectType $subjectReply
     */
    private $subjectReply = null;

    /**
     * @var \mfteam\nbch\generated\models\QBCHSubjectType[] $qbchSubjectReply
     */
    private $qbchSubjectReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PersonType[] $personReply
     */
    private $personReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\IdType[] $idReply
     */
    private $idReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AddressType[] $addressReply
     */
    private $addressReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AddressType[] $addressReplyRUTDF
     */
    private $addressReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PhoneType[] $phoneReply
     */
    private $phoneReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\EmploymentType[] $employmentReply
     */
    private $employmentReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AccountType[] $accountReply
     */
    private $accountReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AccountType[] $accountReplyR2T
     */
    private $accountReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AccountRUTDFType[] $accountReplyT2R
     */
    private $accountReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BankingType[] $bankingReply
     */
    private $bankingReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CollectionType[] $collectionReply
     */
    private $collectionReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\LegalItemType[] $legalItemsReply
     */
    private $legalItemsReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\LegalItemType[] $legalItemsReplyR2T
     */
    private $legalItemsReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InformationPartType[] $informationPartReply
     */
    private $informationPartReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InformationPartType[] $informationPartReplyR2T
     */
    private $informationPartReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InformationPartRUTDFType[] $informationPartReplyT2R
     */
    private $informationPartReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\OfficialInformationType[] $officialInfoReply
     */
    private $officialInfoReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BusinessBankruptcyType[] $bankruptcyReply
     */
    private $bankruptcyReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BusinessBankruptcyType[] $bankruptcyReplyR2T
     */
    private $bankruptcyReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BankruptcyRUTDFType[] $bankruptcyReplyT2R
     */
    private $bankruptcyReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $consumerBankruptcyReply
     */
    private $consumerBankruptcyReply = null;

    /**
     * @var \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $consumerBankruptcyReplyR2T
     */
    private $consumerBankruptcyReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[] $consumerBankruptcyReplyT2R
     */
    private $consumerBankruptcyReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ClosedForCauseType[] $closedForCauseReply
     */
    private $closedForCauseReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ReturnedItemType[] $returnedItemReply
     */
    private $returnedItemReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ConsumerStatementType[] $consumerStatementReply
     */
    private $consumerStatementReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BusinessType[] $businessReply
     */
    private $businessReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ClassificationType[] $classificationReply
     */
    private $classificationReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InquiryType[] $inquiryReply
     */
    private $inquiryReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyR2T
     */
    private $inquiryReplyR2T = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyT2R
     */
    private $inquiryReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyRUTDF
     */
    private $inquiryReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\OwnInquiryType[] $ownInquiries
     */
    private $ownInquiries = null;

    /**
     * @var \mfteam\nbch\generated\models\OwnAccountType[] $ownAccounts
     */
    private $ownAccounts = null;

    /**
     * @var \mfteam\nbch\generated\models\OwnIPRecordType[] $ownIPRecords
     */
    private $ownIPRecords = null;

    /**
     * @var \mfteam\nbch\generated\models\OwnAccountRUTDFType[] $ownAccountsRUTDF
     */
    private $ownAccountsRUTDF = null;

    /**
     * @var \mfteam\nbch\generated\models\OwnIPRecordRUTDFType[] $ownIPRecordsRUTDF
     */
    private $ownIPRecordsRUTDF = null;

    /**
     * @var \mfteam\nbch\generated\models\AddOnsType $addOns
     */
    private $addOns = null;

    /**
     * @var \mfteam\nbch\generated\models\CalculationsType $calc
     */
    private $calc = null;

    /**
     * @var \mfteam\nbch\generated\models\AccountGroupReplyType[] $groups
     */
    private $groups = null;

    /**
     * @var string $inqControlNum
     */
    private $inqControlNum = null;

    /**
     * @var string $suppressionStatus
     */
    private $suppressionStatus = null;

    /**
     * @var string $memberCode
     */
    private $memberCode = null;

    /**
     * @var string $memberCodeStatus
     */
    private $memberCodeStatus = null;

    /**
     * @var string $returnCode
     */
    private $returnCode = null;

    /**
     * @var \DateTime $replyDateTime
     */
    private $replyDateTime = null;

    /**
     * @var string $rawReply
     */
    private $rawReply = null;

    /**
     * @var \mfteam\nbch\generated\models\RegnumType[] $regnumReply
     */
    private $regnumReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SnilsType[] $sNILSReply
     */
    private $sNILSReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ContactType[] $contactReply
     */
    private $contactReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\EntrepType[] $entrepReply
     */
    private $entrepReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\CapabilityType[] $capabilityReply
     */
    private $capabilityReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[] $consumerBankruptcyReplyRUTDF
     */
    private $consumerBankruptcyReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SettledType[] $settledReply
     */
    private $settledReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\SettledType[] $settledReplyT2R
     */
    private $settledReplyT2R = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PKRType $pKRReply
     */
    private $pKRReply = null;

    /**
     * @var \mfteam\nbch\generated\models\ScoreType[] $scoreReply
     */
    private $scoreReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\AccountRUTDFType[] $accountReplyRUTDF
     */
    private $accountReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\QBCHAverPaymtType[] $qBCHAverPaymtReply
     */
    private $qBCHAverPaymtReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\OtherLegalItemsType[] $otherLegalItemsReply
     */
    private $otherLegalItemsReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\InformationPartRUTDFType[] $informationPartReplyRUTDF
     */
    private $informationPartReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\TaxpayerIdType[] $taxpayerIdReply
     */
    private $taxpayerIdReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\ReorgType[] $reorgReply
     */
    private $reorgReply = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\BankruptcyRUTDFType[] $bankruptcyReplyRUTDF
     */
    private $bankruptcyReplyRUTDF = [
        
    ];

    /**
     * @var \mfteam\nbch\generated\models\PrevCredType[] $prevCredReply
     */
    private $prevCredReply = [
        
    ];

    /**
     * @var string $rqUuid
     */
    private $rqUuid = null;

    /**
     * @var \DateTime $reportIssueDateTime
     */
    private $reportIssueDateTime = null;

    /**
     * Gets as subjectReply
     *
     * @return \mfteam\nbch\generated\models\SubjectType
     */
    public function getSubjectReply()
    {
        return $this->subjectReply;
    }

    /**
     * Sets a new subjectReply
     *
     * @param \mfteam\nbch\generated\models\SubjectType $subjectReply
     * @return self
     */
    public function setSubjectReply(\mfteam\nbch\generated\models\SubjectType $subjectReply)
    {
        $this->subjectReply = $subjectReply;
        return $this;
    }

    /**
     * Adds as qbchSubjectReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\QBCHSubjectType $qbchSubjectReply
     */
    public function addToQbchSubjectReply(\mfteam\nbch\generated\models\QBCHSubjectType $qbchSubjectReply)
    {
        $this->qbchSubjectReply[] = $qbchSubjectReply;
        return $this;
    }

    /**
     * isset qbchSubjectReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQbchSubjectReply($index)
    {
        return isset($this->qbchSubjectReply[$index]);
    }

    /**
     * unset qbchSubjectReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQbchSubjectReply($index)
    {
        unset($this->qbchSubjectReply[$index]);
    }

    /**
     * Gets as qbchSubjectReply
     *
     * @return \mfteam\nbch\generated\models\QBCHSubjectType[]
     */
    public function getQbchSubjectReply()
    {
        return $this->qbchSubjectReply;
    }

    /**
     * Sets a new qbchSubjectReply
     *
     * @param \mfteam\nbch\generated\models\QBCHSubjectType[] $qbchSubjectReply
     * @return self
     */
    public function setQbchSubjectReply(array $qbchSubjectReply)
    {
        $this->qbchSubjectReply = $qbchSubjectReply;
        return $this;
    }

    /**
     * Adds as personReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PersonType $personReply
     */
    public function addToPersonReply(\mfteam\nbch\generated\models\PersonType $personReply)
    {
        $this->personReply[] = $personReply;
        return $this;
    }

    /**
     * isset personReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonReply($index)
    {
        return isset($this->personReply[$index]);
    }

    /**
     * unset personReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonReply($index)
    {
        unset($this->personReply[$index]);
    }

    /**
     * Gets as personReply
     *
     * @return \mfteam\nbch\generated\models\PersonType[]
     */
    public function getPersonReply()
    {
        return $this->personReply;
    }

    /**
     * Sets a new personReply
     *
     * @param \mfteam\nbch\generated\models\PersonType[] $personReply
     * @return self
     */
    public function setPersonReply(array $personReply)
    {
        $this->personReply = $personReply;
        return $this;
    }

    /**
     * Adds as idReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\IdType $idReply
     */
    public function addToIdReply(\mfteam\nbch\generated\models\IdType $idReply)
    {
        $this->idReply[] = $idReply;
        return $this;
    }

    /**
     * isset idReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdReply($index)
    {
        return isset($this->idReply[$index]);
    }

    /**
     * unset idReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdReply($index)
    {
        unset($this->idReply[$index]);
    }

    /**
     * Gets as idReply
     *
     * @return \mfteam\nbch\generated\models\IdType[]
     */
    public function getIdReply()
    {
        return $this->idReply;
    }

    /**
     * Sets a new idReply
     *
     * @param \mfteam\nbch\generated\models\IdType[] $idReply
     * @return self
     */
    public function setIdReply(array $idReply)
    {
        $this->idReply = $idReply;
        return $this;
    }

    /**
     * Adds as addressReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AddressType $addressReply
     */
    public function addToAddressReply(\mfteam\nbch\generated\models\AddressType $addressReply)
    {
        $this->addressReply[] = $addressReply;
        return $this;
    }

    /**
     * isset addressReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressReply($index)
    {
        return isset($this->addressReply[$index]);
    }

    /**
     * unset addressReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressReply($index)
    {
        unset($this->addressReply[$index]);
    }

    /**
     * Gets as addressReply
     *
     * @return \mfteam\nbch\generated\models\AddressType[]
     */
    public function getAddressReply()
    {
        return $this->addressReply;
    }

    /**
     * Sets a new addressReply
     *
     * @param \mfteam\nbch\generated\models\AddressType[] $addressReply
     * @return self
     */
    public function setAddressReply(array $addressReply)
    {
        $this->addressReply = $addressReply;
        return $this;
    }

    /**
     * Adds as addressReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AddressType $addressReplyRUTDF
     */
    public function addToAddressReplyRUTDF(\mfteam\nbch\generated\models\AddressType $addressReplyRUTDF)
    {
        $this->addressReplyRUTDF[] = $addressReplyRUTDF;
        return $this;
    }

    /**
     * isset addressReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressReplyRUTDF($index)
    {
        return isset($this->addressReplyRUTDF[$index]);
    }

    /**
     * unset addressReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressReplyRUTDF($index)
    {
        unset($this->addressReplyRUTDF[$index]);
    }

    /**
     * Gets as addressReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\AddressType[]
     */
    public function getAddressReplyRUTDF()
    {
        return $this->addressReplyRUTDF;
    }

    /**
     * Sets a new addressReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\AddressType[] $addressReplyRUTDF
     * @return self
     */
    public function setAddressReplyRUTDF(array $addressReplyRUTDF)
    {
        $this->addressReplyRUTDF = $addressReplyRUTDF;
        return $this;
    }

    /**
     * Adds as phoneReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PhoneType $phoneReply
     */
    public function addToPhoneReply(\mfteam\nbch\generated\models\PhoneType $phoneReply)
    {
        $this->phoneReply[] = $phoneReply;
        return $this;
    }

    /**
     * isset phoneReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhoneReply($index)
    {
        return isset($this->phoneReply[$index]);
    }

    /**
     * unset phoneReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhoneReply($index)
    {
        unset($this->phoneReply[$index]);
    }

    /**
     * Gets as phoneReply
     *
     * @return \mfteam\nbch\generated\models\PhoneType[]
     */
    public function getPhoneReply()
    {
        return $this->phoneReply;
    }

    /**
     * Sets a new phoneReply
     *
     * @param \mfteam\nbch\generated\models\PhoneType[] $phoneReply
     * @return self
     */
    public function setPhoneReply(array $phoneReply)
    {
        $this->phoneReply = $phoneReply;
        return $this;
    }

    /**
     * Adds as employmentReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\EmploymentType $employmentReply
     */
    public function addToEmploymentReply(\mfteam\nbch\generated\models\EmploymentType $employmentReply)
    {
        $this->employmentReply[] = $employmentReply;
        return $this;
    }

    /**
     * isset employmentReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmploymentReply($index)
    {
        return isset($this->employmentReply[$index]);
    }

    /**
     * unset employmentReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmploymentReply($index)
    {
        unset($this->employmentReply[$index]);
    }

    /**
     * Gets as employmentReply
     *
     * @return \mfteam\nbch\generated\models\EmploymentType[]
     */
    public function getEmploymentReply()
    {
        return $this->employmentReply;
    }

    /**
     * Sets a new employmentReply
     *
     * @param \mfteam\nbch\generated\models\EmploymentType[] $employmentReply
     * @return self
     */
    public function setEmploymentReply(array $employmentReply)
    {
        $this->employmentReply = $employmentReply;
        return $this;
    }

    /**
     * Adds as accountReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountType $accountReply
     */
    public function addToAccountReply(\mfteam\nbch\generated\models\AccountType $accountReply)
    {
        $this->accountReply[] = $accountReply;
        return $this;
    }

    /**
     * isset accountReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountReply($index)
    {
        return isset($this->accountReply[$index]);
    }

    /**
     * unset accountReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountReply($index)
    {
        unset($this->accountReply[$index]);
    }

    /**
     * Gets as accountReply
     *
     * @return \mfteam\nbch\generated\models\AccountType[]
     */
    public function getAccountReply()
    {
        return $this->accountReply;
    }

    /**
     * Sets a new accountReply
     *
     * @param \mfteam\nbch\generated\models\AccountType[] $accountReply
     * @return self
     */
    public function setAccountReply(array $accountReply)
    {
        $this->accountReply = $accountReply;
        return $this;
    }

    /**
     * Adds as accountReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountType $accountReplyR2T
     */
    public function addToAccountReplyR2T(\mfteam\nbch\generated\models\AccountType $accountReplyR2T)
    {
        $this->accountReplyR2T[] = $accountReplyR2T;
        return $this;
    }

    /**
     * isset accountReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountReplyR2T($index)
    {
        return isset($this->accountReplyR2T[$index]);
    }

    /**
     * unset accountReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountReplyR2T($index)
    {
        unset($this->accountReplyR2T[$index]);
    }

    /**
     * Gets as accountReplyR2T
     *
     * @return \mfteam\nbch\generated\models\AccountType[]
     */
    public function getAccountReplyR2T()
    {
        return $this->accountReplyR2T;
    }

    /**
     * Sets a new accountReplyR2T
     *
     * @param \mfteam\nbch\generated\models\AccountType[] $accountReplyR2T
     * @return self
     */
    public function setAccountReplyR2T(array $accountReplyR2T)
    {
        $this->accountReplyR2T = $accountReplyR2T;
        return $this;
    }

    /**
     * Adds as accountReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountRUTDFType $accountReplyT2R
     */
    public function addToAccountReplyT2R(\mfteam\nbch\generated\models\AccountRUTDFType $accountReplyT2R)
    {
        $this->accountReplyT2R[] = $accountReplyT2R;
        return $this;
    }

    /**
     * isset accountReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountReplyT2R($index)
    {
        return isset($this->accountReplyT2R[$index]);
    }

    /**
     * unset accountReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountReplyT2R($index)
    {
        unset($this->accountReplyT2R[$index]);
    }

    /**
     * Gets as accountReplyT2R
     *
     * @return \mfteam\nbch\generated\models\AccountRUTDFType[]
     */
    public function getAccountReplyT2R()
    {
        return $this->accountReplyT2R;
    }

    /**
     * Sets a new accountReplyT2R
     *
     * @param \mfteam\nbch\generated\models\AccountRUTDFType[] $accountReplyT2R
     * @return self
     */
    public function setAccountReplyT2R(array $accountReplyT2R)
    {
        $this->accountReplyT2R = $accountReplyT2R;
        return $this;
    }

    /**
     * Adds as bankingReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BankingType $bankingReply
     */
    public function addToBankingReply(\mfteam\nbch\generated\models\BankingType $bankingReply)
    {
        $this->bankingReply[] = $bankingReply;
        return $this;
    }

    /**
     * isset bankingReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankingReply($index)
    {
        return isset($this->bankingReply[$index]);
    }

    /**
     * unset bankingReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankingReply($index)
    {
        unset($this->bankingReply[$index]);
    }

    /**
     * Gets as bankingReply
     *
     * @return \mfteam\nbch\generated\models\BankingType[]
     */
    public function getBankingReply()
    {
        return $this->bankingReply;
    }

    /**
     * Sets a new bankingReply
     *
     * @param \mfteam\nbch\generated\models\BankingType[] $bankingReply
     * @return self
     */
    public function setBankingReply(array $bankingReply)
    {
        $this->bankingReply = $bankingReply;
        return $this;
    }

    /**
     * Adds as collectionReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CollectionType $collectionReply
     */
    public function addToCollectionReply(\mfteam\nbch\generated\models\CollectionType $collectionReply)
    {
        $this->collectionReply[] = $collectionReply;
        return $this;
    }

    /**
     * isset collectionReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectionReply($index)
    {
        return isset($this->collectionReply[$index]);
    }

    /**
     * unset collectionReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectionReply($index)
    {
        unset($this->collectionReply[$index]);
    }

    /**
     * Gets as collectionReply
     *
     * @return \mfteam\nbch\generated\models\CollectionType[]
     */
    public function getCollectionReply()
    {
        return $this->collectionReply;
    }

    /**
     * Sets a new collectionReply
     *
     * @param \mfteam\nbch\generated\models\CollectionType[] $collectionReply
     * @return self
     */
    public function setCollectionReply(array $collectionReply)
    {
        $this->collectionReply = $collectionReply;
        return $this;
    }

    /**
     * Adds as legalItemsReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\LegalItemType $legalItemsReply
     */
    public function addToLegalItemsReply(\mfteam\nbch\generated\models\LegalItemType $legalItemsReply)
    {
        $this->legalItemsReply[] = $legalItemsReply;
        return $this;
    }

    /**
     * isset legalItemsReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegalItemsReply($index)
    {
        return isset($this->legalItemsReply[$index]);
    }

    /**
     * unset legalItemsReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegalItemsReply($index)
    {
        unset($this->legalItemsReply[$index]);
    }

    /**
     * Gets as legalItemsReply
     *
     * @return \mfteam\nbch\generated\models\LegalItemType[]
     */
    public function getLegalItemsReply()
    {
        return $this->legalItemsReply;
    }

    /**
     * Sets a new legalItemsReply
     *
     * @param \mfteam\nbch\generated\models\LegalItemType[] $legalItemsReply
     * @return self
     */
    public function setLegalItemsReply(array $legalItemsReply)
    {
        $this->legalItemsReply = $legalItemsReply;
        return $this;
    }

    /**
     * Adds as legalItemsReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\LegalItemType $legalItemsReplyR2T
     */
    public function addToLegalItemsReplyR2T(\mfteam\nbch\generated\models\LegalItemType $legalItemsReplyR2T)
    {
        $this->legalItemsReplyR2T[] = $legalItemsReplyR2T;
        return $this;
    }

    /**
     * isset legalItemsReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLegalItemsReplyR2T($index)
    {
        return isset($this->legalItemsReplyR2T[$index]);
    }

    /**
     * unset legalItemsReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLegalItemsReplyR2T($index)
    {
        unset($this->legalItemsReplyR2T[$index]);
    }

    /**
     * Gets as legalItemsReplyR2T
     *
     * @return \mfteam\nbch\generated\models\LegalItemType[]
     */
    public function getLegalItemsReplyR2T()
    {
        return $this->legalItemsReplyR2T;
    }

    /**
     * Sets a new legalItemsReplyR2T
     *
     * @param \mfteam\nbch\generated\models\LegalItemType[] $legalItemsReplyR2T
     * @return self
     */
    public function setLegalItemsReplyR2T(array $legalItemsReplyR2T)
    {
        $this->legalItemsReplyR2T = $legalItemsReplyR2T;
        return $this;
    }

    /**
     * Adds as informationPartReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InformationPartType $informationPartReply
     */
    public function addToInformationPartReply(\mfteam\nbch\generated\models\InformationPartType $informationPartReply)
    {
        $this->informationPartReply[] = $informationPartReply;
        return $this;
    }

    /**
     * isset informationPartReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationPartReply($index)
    {
        return isset($this->informationPartReply[$index]);
    }

    /**
     * unset informationPartReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationPartReply($index)
    {
        unset($this->informationPartReply[$index]);
    }

    /**
     * Gets as informationPartReply
     *
     * @return \mfteam\nbch\generated\models\InformationPartType[]
     */
    public function getInformationPartReply()
    {
        return $this->informationPartReply;
    }

    /**
     * Sets a new informationPartReply
     *
     * @param \mfteam\nbch\generated\models\InformationPartType[] $informationPartReply
     * @return self
     */
    public function setInformationPartReply(array $informationPartReply)
    {
        $this->informationPartReply = $informationPartReply;
        return $this;
    }

    /**
     * Adds as informationPartReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InformationPartType $informationPartReplyR2T
     */
    public function addToInformationPartReplyR2T(\mfteam\nbch\generated\models\InformationPartType $informationPartReplyR2T)
    {
        $this->informationPartReplyR2T[] = $informationPartReplyR2T;
        return $this;
    }

    /**
     * isset informationPartReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationPartReplyR2T($index)
    {
        return isset($this->informationPartReplyR2T[$index]);
    }

    /**
     * unset informationPartReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationPartReplyR2T($index)
    {
        unset($this->informationPartReplyR2T[$index]);
    }

    /**
     * Gets as informationPartReplyR2T
     *
     * @return \mfteam\nbch\generated\models\InformationPartType[]
     */
    public function getInformationPartReplyR2T()
    {
        return $this->informationPartReplyR2T;
    }

    /**
     * Sets a new informationPartReplyR2T
     *
     * @param \mfteam\nbch\generated\models\InformationPartType[] $informationPartReplyR2T
     * @return self
     */
    public function setInformationPartReplyR2T(array $informationPartReplyR2T)
    {
        $this->informationPartReplyR2T = $informationPartReplyR2T;
        return $this;
    }

    /**
     * Adds as informationPartReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InformationPartRUTDFType $informationPartReplyT2R
     */
    public function addToInformationPartReplyT2R(\mfteam\nbch\generated\models\InformationPartRUTDFType $informationPartReplyT2R)
    {
        $this->informationPartReplyT2R[] = $informationPartReplyT2R;
        return $this;
    }

    /**
     * isset informationPartReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationPartReplyT2R($index)
    {
        return isset($this->informationPartReplyT2R[$index]);
    }

    /**
     * unset informationPartReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationPartReplyT2R($index)
    {
        unset($this->informationPartReplyT2R[$index]);
    }

    /**
     * Gets as informationPartReplyT2R
     *
     * @return \mfteam\nbch\generated\models\InformationPartRUTDFType[]
     */
    public function getInformationPartReplyT2R()
    {
        return $this->informationPartReplyT2R;
    }

    /**
     * Sets a new informationPartReplyT2R
     *
     * @param \mfteam\nbch\generated\models\InformationPartRUTDFType[] $informationPartReplyT2R
     * @return self
     */
    public function setInformationPartReplyT2R(array $informationPartReplyT2R)
    {
        $this->informationPartReplyT2R = $informationPartReplyT2R;
        return $this;
    }

    /**
     * Adds as officialInfoReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OfficialInformationType $officialInfoReply
     */
    public function addToOfficialInfoReply(\mfteam\nbch\generated\models\OfficialInformationType $officialInfoReply)
    {
        $this->officialInfoReply[] = $officialInfoReply;
        return $this;
    }

    /**
     * isset officialInfoReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfficialInfoReply($index)
    {
        return isset($this->officialInfoReply[$index]);
    }

    /**
     * unset officialInfoReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfficialInfoReply($index)
    {
        unset($this->officialInfoReply[$index]);
    }

    /**
     * Gets as officialInfoReply
     *
     * @return \mfteam\nbch\generated\models\OfficialInformationType[]
     */
    public function getOfficialInfoReply()
    {
        return $this->officialInfoReply;
    }

    /**
     * Sets a new officialInfoReply
     *
     * @param \mfteam\nbch\generated\models\OfficialInformationType[] $officialInfoReply
     * @return self
     */
    public function setOfficialInfoReply(array $officialInfoReply)
    {
        $this->officialInfoReply = $officialInfoReply;
        return $this;
    }

    /**
     * Adds as bankruptcyReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BusinessBankruptcyType $bankruptcyReply
     */
    public function addToBankruptcyReply(\mfteam\nbch\generated\models\BusinessBankruptcyType $bankruptcyReply)
    {
        $this->bankruptcyReply[] = $bankruptcyReply;
        return $this;
    }

    /**
     * isset bankruptcyReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankruptcyReply($index)
    {
        return isset($this->bankruptcyReply[$index]);
    }

    /**
     * unset bankruptcyReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankruptcyReply($index)
    {
        unset($this->bankruptcyReply[$index]);
    }

    /**
     * Gets as bankruptcyReply
     *
     * @return \mfteam\nbch\generated\models\BusinessBankruptcyType[]
     */
    public function getBankruptcyReply()
    {
        return $this->bankruptcyReply;
    }

    /**
     * Sets a new bankruptcyReply
     *
     * @param \mfteam\nbch\generated\models\BusinessBankruptcyType[] $bankruptcyReply
     * @return self
     */
    public function setBankruptcyReply(array $bankruptcyReply)
    {
        $this->bankruptcyReply = $bankruptcyReply;
        return $this;
    }

    /**
     * Adds as bankruptcyReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BusinessBankruptcyType $bankruptcyReplyR2T
     */
    public function addToBankruptcyReplyR2T(\mfteam\nbch\generated\models\BusinessBankruptcyType $bankruptcyReplyR2T)
    {
        $this->bankruptcyReplyR2T[] = $bankruptcyReplyR2T;
        return $this;
    }

    /**
     * isset bankruptcyReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankruptcyReplyR2T($index)
    {
        return isset($this->bankruptcyReplyR2T[$index]);
    }

    /**
     * unset bankruptcyReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankruptcyReplyR2T($index)
    {
        unset($this->bankruptcyReplyR2T[$index]);
    }

    /**
     * Gets as bankruptcyReplyR2T
     *
     * @return \mfteam\nbch\generated\models\BusinessBankruptcyType[]
     */
    public function getBankruptcyReplyR2T()
    {
        return $this->bankruptcyReplyR2T;
    }

    /**
     * Sets a new bankruptcyReplyR2T
     *
     * @param \mfteam\nbch\generated\models\BusinessBankruptcyType[] $bankruptcyReplyR2T
     * @return self
     */
    public function setBankruptcyReplyR2T(array $bankruptcyReplyR2T)
    {
        $this->bankruptcyReplyR2T = $bankruptcyReplyR2T;
        return $this;
    }

    /**
     * Adds as bankruptcyReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BankruptcyRUTDFType $bankruptcyReplyT2R
     */
    public function addToBankruptcyReplyT2R(\mfteam\nbch\generated\models\BankruptcyRUTDFType $bankruptcyReplyT2R)
    {
        $this->bankruptcyReplyT2R[] = $bankruptcyReplyT2R;
        return $this;
    }

    /**
     * isset bankruptcyReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankruptcyReplyT2R($index)
    {
        return isset($this->bankruptcyReplyT2R[$index]);
    }

    /**
     * unset bankruptcyReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankruptcyReplyT2R($index)
    {
        unset($this->bankruptcyReplyT2R[$index]);
    }

    /**
     * Gets as bankruptcyReplyT2R
     *
     * @return \mfteam\nbch\generated\models\BankruptcyRUTDFType[]
     */
    public function getBankruptcyReplyT2R()
    {
        return $this->bankruptcyReplyT2R;
    }

    /**
     * Sets a new bankruptcyReplyT2R
     *
     * @param \mfteam\nbch\generated\models\BankruptcyRUTDFType[] $bankruptcyReplyT2R
     * @return self
     */
    public function setBankruptcyReplyT2R(array $bankruptcyReplyT2R)
    {
        $this->bankruptcyReplyT2R = $bankruptcyReplyT2R;
        return $this;
    }

    /**
     * Adds as consumerBankruptcy
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType $consumerBankruptcy
     */
    public function addToConsumerBankruptcyReply(\mfteam\nbch\generated\models\ConsumerBankruptcyType $consumerBankruptcy)
    {
        $this->consumerBankruptcyReply[] = $consumerBankruptcy;
        return $this;
    }

    /**
     * isset consumerBankruptcyReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumerBankruptcyReply($index)
    {
        return isset($this->consumerBankruptcyReply[$index]);
    }

    /**
     * unset consumerBankruptcyReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumerBankruptcyReply($index)
    {
        unset($this->consumerBankruptcyReply[$index]);
    }

    /**
     * Gets as consumerBankruptcyReply
     *
     * @return \mfteam\nbch\generated\models\ConsumerBankruptcyType[]
     */
    public function getConsumerBankruptcyReply()
    {
        return $this->consumerBankruptcyReply;
    }

    /**
     * Sets a new consumerBankruptcyReply
     *
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $consumerBankruptcyReply
     * @return self
     */
    public function setConsumerBankruptcyReply(array $consumerBankruptcyReply)
    {
        $this->consumerBankruptcyReply = $consumerBankruptcyReply;
        return $this;
    }

    /**
     * Adds as consumerBankruptcyReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType $consumerBankruptcyReplyR2T
     */
    public function addToConsumerBankruptcyReplyR2T(\mfteam\nbch\generated\models\ConsumerBankruptcyType $consumerBankruptcyReplyR2T)
    {
        $this->consumerBankruptcyReplyR2T[] = $consumerBankruptcyReplyR2T;
        return $this;
    }

    /**
     * isset consumerBankruptcyReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumerBankruptcyReplyR2T($index)
    {
        return isset($this->consumerBankruptcyReplyR2T[$index]);
    }

    /**
     * unset consumerBankruptcyReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumerBankruptcyReplyR2T($index)
    {
        unset($this->consumerBankruptcyReplyR2T[$index]);
    }

    /**
     * Gets as consumerBankruptcyReplyR2T
     *
     * @return \mfteam\nbch\generated\models\ConsumerBankruptcyType[]
     */
    public function getConsumerBankruptcyReplyR2T()
    {
        return $this->consumerBankruptcyReplyR2T;
    }

    /**
     * Sets a new consumerBankruptcyReplyR2T
     *
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyType[] $consumerBankruptcyReplyR2T
     * @return self
     */
    public function setConsumerBankruptcyReplyR2T(array $consumerBankruptcyReplyR2T)
    {
        $this->consumerBankruptcyReplyR2T = $consumerBankruptcyReplyR2T;
        return $this;
    }

    /**
     * Adds as consumerBankruptcyReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType $consumerBankruptcyReplyT2R
     */
    public function addToConsumerBankruptcyReplyT2R(\mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType $consumerBankruptcyReplyT2R)
    {
        $this->consumerBankruptcyReplyT2R[] = $consumerBankruptcyReplyT2R;
        return $this;
    }

    /**
     * isset consumerBankruptcyReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumerBankruptcyReplyT2R($index)
    {
        return isset($this->consumerBankruptcyReplyT2R[$index]);
    }

    /**
     * unset consumerBankruptcyReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumerBankruptcyReplyT2R($index)
    {
        unset($this->consumerBankruptcyReplyT2R[$index]);
    }

    /**
     * Gets as consumerBankruptcyReplyT2R
     *
     * @return \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[]
     */
    public function getConsumerBankruptcyReplyT2R()
    {
        return $this->consumerBankruptcyReplyT2R;
    }

    /**
     * Sets a new consumerBankruptcyReplyT2R
     *
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[] $consumerBankruptcyReplyT2R
     * @return self
     */
    public function setConsumerBankruptcyReplyT2R(array $consumerBankruptcyReplyT2R)
    {
        $this->consumerBankruptcyReplyT2R = $consumerBankruptcyReplyT2R;
        return $this;
    }

    /**
     * Adds as closedForCauseReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ClosedForCauseType $closedForCauseReply
     */
    public function addToClosedForCauseReply(\mfteam\nbch\generated\models\ClosedForCauseType $closedForCauseReply)
    {
        $this->closedForCauseReply[] = $closedForCauseReply;
        return $this;
    }

    /**
     * isset closedForCauseReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClosedForCauseReply($index)
    {
        return isset($this->closedForCauseReply[$index]);
    }

    /**
     * unset closedForCauseReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClosedForCauseReply($index)
    {
        unset($this->closedForCauseReply[$index]);
    }

    /**
     * Gets as closedForCauseReply
     *
     * @return \mfteam\nbch\generated\models\ClosedForCauseType[]
     */
    public function getClosedForCauseReply()
    {
        return $this->closedForCauseReply;
    }

    /**
     * Sets a new closedForCauseReply
     *
     * @param \mfteam\nbch\generated\models\ClosedForCauseType[] $closedForCauseReply
     * @return self
     */
    public function setClosedForCauseReply(array $closedForCauseReply)
    {
        $this->closedForCauseReply = $closedForCauseReply;
        return $this;
    }

    /**
     * Adds as returnedItemReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ReturnedItemType $returnedItemReply
     */
    public function addToReturnedItemReply(\mfteam\nbch\generated\models\ReturnedItemType $returnedItemReply)
    {
        $this->returnedItemReply[] = $returnedItemReply;
        return $this;
    }

    /**
     * isset returnedItemReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnedItemReply($index)
    {
        return isset($this->returnedItemReply[$index]);
    }

    /**
     * unset returnedItemReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnedItemReply($index)
    {
        unset($this->returnedItemReply[$index]);
    }

    /**
     * Gets as returnedItemReply
     *
     * @return \mfteam\nbch\generated\models\ReturnedItemType[]
     */
    public function getReturnedItemReply()
    {
        return $this->returnedItemReply;
    }

    /**
     * Sets a new returnedItemReply
     *
     * @param \mfteam\nbch\generated\models\ReturnedItemType[] $returnedItemReply
     * @return self
     */
    public function setReturnedItemReply(array $returnedItemReply)
    {
        $this->returnedItemReply = $returnedItemReply;
        return $this;
    }

    /**
     * Adds as consumerStatementReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerStatementType $consumerStatementReply
     */
    public function addToConsumerStatementReply(\mfteam\nbch\generated\models\ConsumerStatementType $consumerStatementReply)
    {
        $this->consumerStatementReply[] = $consumerStatementReply;
        return $this;
    }

    /**
     * isset consumerStatementReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumerStatementReply($index)
    {
        return isset($this->consumerStatementReply[$index]);
    }

    /**
     * unset consumerStatementReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumerStatementReply($index)
    {
        unset($this->consumerStatementReply[$index]);
    }

    /**
     * Gets as consumerStatementReply
     *
     * @return \mfteam\nbch\generated\models\ConsumerStatementType[]
     */
    public function getConsumerStatementReply()
    {
        return $this->consumerStatementReply;
    }

    /**
     * Sets a new consumerStatementReply
     *
     * @param \mfteam\nbch\generated\models\ConsumerStatementType[] $consumerStatementReply
     * @return self
     */
    public function setConsumerStatementReply(array $consumerStatementReply)
    {
        $this->consumerStatementReply = $consumerStatementReply;
        return $this;
    }

    /**
     * Adds as businessReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BusinessType $businessReply
     */
    public function addToBusinessReply(\mfteam\nbch\generated\models\BusinessType $businessReply)
    {
        $this->businessReply[] = $businessReply;
        return $this;
    }

    /**
     * isset businessReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessReply($index)
    {
        return isset($this->businessReply[$index]);
    }

    /**
     * unset businessReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessReply($index)
    {
        unset($this->businessReply[$index]);
    }

    /**
     * Gets as businessReply
     *
     * @return \mfteam\nbch\generated\models\BusinessType[]
     */
    public function getBusinessReply()
    {
        return $this->businessReply;
    }

    /**
     * Sets a new businessReply
     *
     * @param \mfteam\nbch\generated\models\BusinessType[] $businessReply
     * @return self
     */
    public function setBusinessReply(array $businessReply)
    {
        $this->businessReply = $businessReply;
        return $this;
    }

    /**
     * Adds as classificationReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ClassificationType $classificationReply
     */
    public function addToClassificationReply(\mfteam\nbch\generated\models\ClassificationType $classificationReply)
    {
        $this->classificationReply[] = $classificationReply;
        return $this;
    }

    /**
     * isset classificationReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationReply($index)
    {
        return isset($this->classificationReply[$index]);
    }

    /**
     * unset classificationReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationReply($index)
    {
        unset($this->classificationReply[$index]);
    }

    /**
     * Gets as classificationReply
     *
     * @return \mfteam\nbch\generated\models\ClassificationType[]
     */
    public function getClassificationReply()
    {
        return $this->classificationReply;
    }

    /**
     * Sets a new classificationReply
     *
     * @param \mfteam\nbch\generated\models\ClassificationType[] $classificationReply
     * @return self
     */
    public function setClassificationReply(array $classificationReply)
    {
        $this->classificationReply = $classificationReply;
        return $this;
    }

    /**
     * Adds as inquiryReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InquiryType $inquiryReply
     */
    public function addToInquiryReply(\mfteam\nbch\generated\models\InquiryType $inquiryReply)
    {
        $this->inquiryReply[] = $inquiryReply;
        return $this;
    }

    /**
     * isset inquiryReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInquiryReply($index)
    {
        return isset($this->inquiryReply[$index]);
    }

    /**
     * unset inquiryReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInquiryReply($index)
    {
        unset($this->inquiryReply[$index]);
    }

    /**
     * Gets as inquiryReply
     *
     * @return \mfteam\nbch\generated\models\InquiryType[]
     */
    public function getInquiryReply()
    {
        return $this->inquiryReply;
    }

    /**
     * Sets a new inquiryReply
     *
     * @param \mfteam\nbch\generated\models\InquiryType[] $inquiryReply
     * @return self
     */
    public function setInquiryReply(array $inquiryReply)
    {
        $this->inquiryReply = $inquiryReply;
        return $this;
    }

    /**
     * Adds as inquiryReplyR2T
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InquiryType $inquiryReplyR2T
     */
    public function addToInquiryReplyR2T(\mfteam\nbch\generated\models\InquiryType $inquiryReplyR2T)
    {
        $this->inquiryReplyR2T[] = $inquiryReplyR2T;
        return $this;
    }

    /**
     * isset inquiryReplyR2T
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInquiryReplyR2T($index)
    {
        return isset($this->inquiryReplyR2T[$index]);
    }

    /**
     * unset inquiryReplyR2T
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInquiryReplyR2T($index)
    {
        unset($this->inquiryReplyR2T[$index]);
    }

    /**
     * Gets as inquiryReplyR2T
     *
     * @return \mfteam\nbch\generated\models\InquiryType[]
     */
    public function getInquiryReplyR2T()
    {
        return $this->inquiryReplyR2T;
    }

    /**
     * Sets a new inquiryReplyR2T
     *
     * @param \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyR2T
     * @return self
     */
    public function setInquiryReplyR2T(array $inquiryReplyR2T)
    {
        $this->inquiryReplyR2T = $inquiryReplyR2T;
        return $this;
    }

    /**
     * Adds as inquiryReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InquiryType $inquiryReplyT2R
     */
    public function addToInquiryReplyT2R(\mfteam\nbch\generated\models\InquiryType $inquiryReplyT2R)
    {
        $this->inquiryReplyT2R[] = $inquiryReplyT2R;
        return $this;
    }

    /**
     * isset inquiryReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInquiryReplyT2R($index)
    {
        return isset($this->inquiryReplyT2R[$index]);
    }

    /**
     * unset inquiryReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInquiryReplyT2R($index)
    {
        unset($this->inquiryReplyT2R[$index]);
    }

    /**
     * Gets as inquiryReplyT2R
     *
     * @return \mfteam\nbch\generated\models\InquiryType[]
     */
    public function getInquiryReplyT2R()
    {
        return $this->inquiryReplyT2R;
    }

    /**
     * Sets a new inquiryReplyT2R
     *
     * @param \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyT2R
     * @return self
     */
    public function setInquiryReplyT2R(array $inquiryReplyT2R)
    {
        $this->inquiryReplyT2R = $inquiryReplyT2R;
        return $this;
    }

    /**
     * Adds as inquiryReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InquiryType $inquiryReplyRUTDF
     */
    public function addToInquiryReplyRUTDF(\mfteam\nbch\generated\models\InquiryType $inquiryReplyRUTDF)
    {
        $this->inquiryReplyRUTDF[] = $inquiryReplyRUTDF;
        return $this;
    }

    /**
     * isset inquiryReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInquiryReplyRUTDF($index)
    {
        return isset($this->inquiryReplyRUTDF[$index]);
    }

    /**
     * unset inquiryReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInquiryReplyRUTDF($index)
    {
        unset($this->inquiryReplyRUTDF[$index]);
    }

    /**
     * Gets as inquiryReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\InquiryType[]
     */
    public function getInquiryReplyRUTDF()
    {
        return $this->inquiryReplyRUTDF;
    }

    /**
     * Sets a new inquiryReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\InquiryType[] $inquiryReplyRUTDF
     * @return self
     */
    public function setInquiryReplyRUTDF(array $inquiryReplyRUTDF)
    {
        $this->inquiryReplyRUTDF = $inquiryReplyRUTDF;
        return $this;
    }

    /**
     * Adds as inquiry
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OwnInquiryType $inquiry
     */
    public function addToOwnInquiries(\mfteam\nbch\generated\models\OwnInquiryType $inquiry)
    {
        $this->ownInquiries[] = $inquiry;
        return $this;
    }

    /**
     * isset ownInquiries
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnInquiries($index)
    {
        return isset($this->ownInquiries[$index]);
    }

    /**
     * unset ownInquiries
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnInquiries($index)
    {
        unset($this->ownInquiries[$index]);
    }

    /**
     * Gets as ownInquiries
     *
     * @return \mfteam\nbch\generated\models\OwnInquiryType[]
     */
    public function getOwnInquiries()
    {
        return $this->ownInquiries;
    }

    /**
     * Sets a new ownInquiries
     *
     * @param \mfteam\nbch\generated\models\OwnInquiryType[] $ownInquiries
     * @return self
     */
    public function setOwnInquiries(array $ownInquiries)
    {
        $this->ownInquiries = $ownInquiries;
        return $this;
    }

    /**
     * Adds as account
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OwnAccountType $account
     */
    public function addToOwnAccounts(\mfteam\nbch\generated\models\OwnAccountType $account)
    {
        $this->ownAccounts[] = $account;
        return $this;
    }

    /**
     * isset ownAccounts
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnAccounts($index)
    {
        return isset($this->ownAccounts[$index]);
    }

    /**
     * unset ownAccounts
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnAccounts($index)
    {
        unset($this->ownAccounts[$index]);
    }

    /**
     * Gets as ownAccounts
     *
     * @return \mfteam\nbch\generated\models\OwnAccountType[]
     */
    public function getOwnAccounts()
    {
        return $this->ownAccounts;
    }

    /**
     * Sets a new ownAccounts
     *
     * @param \mfteam\nbch\generated\models\OwnAccountType[] $ownAccounts
     * @return self
     */
    public function setOwnAccounts(array $ownAccounts)
    {
        $this->ownAccounts = $ownAccounts;
        return $this;
    }

    /**
     * Adds as iPRecord
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OwnIPRecordType $iPRecord
     */
    public function addToOwnIPRecords(\mfteam\nbch\generated\models\OwnIPRecordType $iPRecord)
    {
        $this->ownIPRecords[] = $iPRecord;
        return $this;
    }

    /**
     * isset ownIPRecords
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnIPRecords($index)
    {
        return isset($this->ownIPRecords[$index]);
    }

    /**
     * unset ownIPRecords
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnIPRecords($index)
    {
        unset($this->ownIPRecords[$index]);
    }

    /**
     * Gets as ownIPRecords
     *
     * @return \mfteam\nbch\generated\models\OwnIPRecordType[]
     */
    public function getOwnIPRecords()
    {
        return $this->ownIPRecords;
    }

    /**
     * Sets a new ownIPRecords
     *
     * @param \mfteam\nbch\generated\models\OwnIPRecordType[] $ownIPRecords
     * @return self
     */
    public function setOwnIPRecords(array $ownIPRecords)
    {
        $this->ownIPRecords = $ownIPRecords;
        return $this;
    }

    /**
     * Adds as accountRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OwnAccountRUTDFType $accountRUTDF
     */
    public function addToOwnAccountsRUTDF(\mfteam\nbch\generated\models\OwnAccountRUTDFType $accountRUTDF)
    {
        $this->ownAccountsRUTDF[] = $accountRUTDF;
        return $this;
    }

    /**
     * isset ownAccountsRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnAccountsRUTDF($index)
    {
        return isset($this->ownAccountsRUTDF[$index]);
    }

    /**
     * unset ownAccountsRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnAccountsRUTDF($index)
    {
        unset($this->ownAccountsRUTDF[$index]);
    }

    /**
     * Gets as ownAccountsRUTDF
     *
     * @return \mfteam\nbch\generated\models\OwnAccountRUTDFType[]
     */
    public function getOwnAccountsRUTDF()
    {
        return $this->ownAccountsRUTDF;
    }

    /**
     * Sets a new ownAccountsRUTDF
     *
     * @param \mfteam\nbch\generated\models\OwnAccountRUTDFType[] $ownAccountsRUTDF
     * @return self
     */
    public function setOwnAccountsRUTDF(array $ownAccountsRUTDF)
    {
        $this->ownAccountsRUTDF = $ownAccountsRUTDF;
        return $this;
    }

    /**
     * Adds as iPRecordRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OwnIPRecordRUTDFType $iPRecordRUTDF
     */
    public function addToOwnIPRecordsRUTDF(\mfteam\nbch\generated\models\OwnIPRecordRUTDFType $iPRecordRUTDF)
    {
        $this->ownIPRecordsRUTDF[] = $iPRecordRUTDF;
        return $this;
    }

    /**
     * isset ownIPRecordsRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnIPRecordsRUTDF($index)
    {
        return isset($this->ownIPRecordsRUTDF[$index]);
    }

    /**
     * unset ownIPRecordsRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnIPRecordsRUTDF($index)
    {
        unset($this->ownIPRecordsRUTDF[$index]);
    }

    /**
     * Gets as ownIPRecordsRUTDF
     *
     * @return \mfteam\nbch\generated\models\OwnIPRecordRUTDFType[]
     */
    public function getOwnIPRecordsRUTDF()
    {
        return $this->ownIPRecordsRUTDF;
    }

    /**
     * Sets a new ownIPRecordsRUTDF
     *
     * @param \mfteam\nbch\generated\models\OwnIPRecordRUTDFType[] $ownIPRecordsRUTDF
     * @return self
     */
    public function setOwnIPRecordsRUTDF(array $ownIPRecordsRUTDF)
    {
        $this->ownIPRecordsRUTDF = $ownIPRecordsRUTDF;
        return $this;
    }

    /**
     * Gets as addOns
     *
     * @return \mfteam\nbch\generated\models\AddOnsType
     */
    public function getAddOns()
    {
        return $this->addOns;
    }

    /**
     * Sets a new addOns
     *
     * @param \mfteam\nbch\generated\models\AddOnsType $addOns
     * @return self
     */
    public function setAddOns(\mfteam\nbch\generated\models\AddOnsType $addOns)
    {
        $this->addOns = $addOns;
        return $this;
    }

    /**
     * Gets as calc
     *
     * @return \mfteam\nbch\generated\models\CalculationsType
     */
    public function getCalc()
    {
        return $this->calc;
    }

    /**
     * Sets a new calc
     *
     * @param \mfteam\nbch\generated\models\CalculationsType $calc
     * @return self
     */
    public function setCalc(\mfteam\nbch\generated\models\CalculationsType $calc)
    {
        $this->calc = $calc;
        return $this;
    }

    /**
     * Adds as accounts
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountGroupReplyType $accounts
     */
    public function addToGroups(\mfteam\nbch\generated\models\AccountGroupReplyType $accounts)
    {
        $this->groups[] = $accounts;
        return $this;
    }

    /**
     * isset groups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroups($index)
    {
        return isset($this->groups[$index]);
    }

    /**
     * unset groups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroups($index)
    {
        unset($this->groups[$index]);
    }

    /**
     * Gets as groups
     *
     * @return \mfteam\nbch\generated\models\AccountGroupReplyType[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets a new groups
     *
     * @param \mfteam\nbch\generated\models\AccountGroupReplyType[] $groups
     * @return self
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;
        return $this;
    }

    /**
     * Gets as inqControlNum
     *
     * @return string
     */
    public function getInqControlNum()
    {
        return $this->inqControlNum;
    }

    /**
     * Sets a new inqControlNum
     *
     * @param string $inqControlNum
     * @return self
     */
    public function setInqControlNum($inqControlNum)
    {
        $this->inqControlNum = $inqControlNum;
        return $this;
    }

    /**
     * Gets as suppressionStatus
     *
     * @return string
     */
    public function getSuppressionStatus()
    {
        return $this->suppressionStatus;
    }

    /**
     * Sets a new suppressionStatus
     *
     * @param string $suppressionStatus
     * @return self
     */
    public function setSuppressionStatus($suppressionStatus)
    {
        $this->suppressionStatus = $suppressionStatus;
        return $this;
    }

    /**
     * Gets as memberCode
     *
     * @return string
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Sets a new memberCode
     *
     * @param string $memberCode
     * @return self
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;
        return $this;
    }

    /**
     * Gets as memberCodeStatus
     *
     * @return string
     */
    public function getMemberCodeStatus()
    {
        return $this->memberCodeStatus;
    }

    /**
     * Sets a new memberCodeStatus
     *
     * @param string $memberCodeStatus
     * @return self
     */
    public function setMemberCodeStatus($memberCodeStatus)
    {
        $this->memberCodeStatus = $memberCodeStatus;
        return $this;
    }

    /**
     * Gets as returnCode
     *
     * @return string
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * Sets a new returnCode
     *
     * @param string $returnCode
     * @return self
     */
    public function setReturnCode($returnCode)
    {
        $this->returnCode = $returnCode;
        return $this;
    }

    /**
     * Gets as replyDateTime
     *
     * @return \DateTime
     */
    public function getReplyDateTime()
    {
        return $this->replyDateTime;
    }

    /**
     * Sets a new replyDateTime
     *
     * @param \DateTime $replyDateTime
     * @return self
     */
    public function setReplyDateTime(\DateTime $replyDateTime)
    {
        $this->replyDateTime = $replyDateTime;
        return $this;
    }

    /**
     * Gets as rawReply
     *
     * @return string
     */
    public function getRawReply()
    {
        return $this->rawReply;
    }

    /**
     * Sets a new rawReply
     *
     * @param string $rawReply
     * @return self
     */
    public function setRawReply($rawReply)
    {
        $this->rawReply = $rawReply;
        return $this;
    }

    /**
     * Adds as regnumReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\RegnumType $regnumReply
     */
    public function addToRegnumReply(\mfteam\nbch\generated\models\RegnumType $regnumReply)
    {
        $this->regnumReply[] = $regnumReply;
        return $this;
    }

    /**
     * isset regnumReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegnumReply($index)
    {
        return isset($this->regnumReply[$index]);
    }

    /**
     * unset regnumReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegnumReply($index)
    {
        unset($this->regnumReply[$index]);
    }

    /**
     * Gets as regnumReply
     *
     * @return \mfteam\nbch\generated\models\RegnumType[]
     */
    public function getRegnumReply()
    {
        return $this->regnumReply;
    }

    /**
     * Sets a new regnumReply
     *
     * @param \mfteam\nbch\generated\models\RegnumType[] $regnumReply
     * @return self
     */
    public function setRegnumReply(array $regnumReply)
    {
        $this->regnumReply = $regnumReply;
        return $this;
    }

    /**
     * Adds as sNILSReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SnilsType $sNILSReply
     */
    public function addToSNILSReply(\mfteam\nbch\generated\models\SnilsType $sNILSReply)
    {
        $this->sNILSReply[] = $sNILSReply;
        return $this;
    }

    /**
     * isset sNILSReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSNILSReply($index)
    {
        return isset($this->sNILSReply[$index]);
    }

    /**
     * unset sNILSReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSNILSReply($index)
    {
        unset($this->sNILSReply[$index]);
    }

    /**
     * Gets as sNILSReply
     *
     * @return \mfteam\nbch\generated\models\SnilsType[]
     */
    public function getSNILSReply()
    {
        return $this->sNILSReply;
    }

    /**
     * Sets a new sNILSReply
     *
     * @param \mfteam\nbch\generated\models\SnilsType[] $sNILSReply
     * @return self
     */
    public function setSNILSReply(array $sNILSReply)
    {
        $this->sNILSReply = $sNILSReply;
        return $this;
    }

    /**
     * Adds as contactReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ContactType $contactReply
     */
    public function addToContactReply(\mfteam\nbch\generated\models\ContactType $contactReply)
    {
        $this->contactReply[] = $contactReply;
        return $this;
    }

    /**
     * isset contactReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactReply($index)
    {
        return isset($this->contactReply[$index]);
    }

    /**
     * unset contactReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactReply($index)
    {
        unset($this->contactReply[$index]);
    }

    /**
     * Gets as contactReply
     *
     * @return \mfteam\nbch\generated\models\ContactType[]
     */
    public function getContactReply()
    {
        return $this->contactReply;
    }

    /**
     * Sets a new contactReply
     *
     * @param \mfteam\nbch\generated\models\ContactType[] $contactReply
     * @return self
     */
    public function setContactReply(array $contactReply)
    {
        $this->contactReply = $contactReply;
        return $this;
    }

    /**
     * Adds as entrepReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\EntrepType $entrepReply
     */
    public function addToEntrepReply(\mfteam\nbch\generated\models\EntrepType $entrepReply)
    {
        $this->entrepReply[] = $entrepReply;
        return $this;
    }

    /**
     * isset entrepReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntrepReply($index)
    {
        return isset($this->entrepReply[$index]);
    }

    /**
     * unset entrepReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntrepReply($index)
    {
        unset($this->entrepReply[$index]);
    }

    /**
     * Gets as entrepReply
     *
     * @return \mfteam\nbch\generated\models\EntrepType[]
     */
    public function getEntrepReply()
    {
        return $this->entrepReply;
    }

    /**
     * Sets a new entrepReply
     *
     * @param \mfteam\nbch\generated\models\EntrepType[] $entrepReply
     * @return self
     */
    public function setEntrepReply(array $entrepReply)
    {
        $this->entrepReply = $entrepReply;
        return $this;
    }

    /**
     * Adds as capabilityReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\CapabilityType $capabilityReply
     */
    public function addToCapabilityReply(\mfteam\nbch\generated\models\CapabilityType $capabilityReply)
    {
        $this->capabilityReply[] = $capabilityReply;
        return $this;
    }

    /**
     * isset capabilityReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCapabilityReply($index)
    {
        return isset($this->capabilityReply[$index]);
    }

    /**
     * unset capabilityReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCapabilityReply($index)
    {
        unset($this->capabilityReply[$index]);
    }

    /**
     * Gets as capabilityReply
     *
     * @return \mfteam\nbch\generated\models\CapabilityType[]
     */
    public function getCapabilityReply()
    {
        return $this->capabilityReply;
    }

    /**
     * Sets a new capabilityReply
     *
     * @param \mfteam\nbch\generated\models\CapabilityType[] $capabilityReply
     * @return self
     */
    public function setCapabilityReply(array $capabilityReply)
    {
        $this->capabilityReply = $capabilityReply;
        return $this;
    }

    /**
     * Adds as consumerBankruptcyReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType $consumerBankruptcyReplyRUTDF
     */
    public function addToConsumerBankruptcyReplyRUTDF(\mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType $consumerBankruptcyReplyRUTDF)
    {
        $this->consumerBankruptcyReplyRUTDF[] = $consumerBankruptcyReplyRUTDF;
        return $this;
    }

    /**
     * isset consumerBankruptcyReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumerBankruptcyReplyRUTDF($index)
    {
        return isset($this->consumerBankruptcyReplyRUTDF[$index]);
    }

    /**
     * unset consumerBankruptcyReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumerBankruptcyReplyRUTDF($index)
    {
        unset($this->consumerBankruptcyReplyRUTDF[$index]);
    }

    /**
     * Gets as consumerBankruptcyReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[]
     */
    public function getConsumerBankruptcyReplyRUTDF()
    {
        return $this->consumerBankruptcyReplyRUTDF;
    }

    /**
     * Sets a new consumerBankruptcyReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\ConsumerBankruptcyRUTDFType[] $consumerBankruptcyReplyRUTDF
     * @return self
     */
    public function setConsumerBankruptcyReplyRUTDF(array $consumerBankruptcyReplyRUTDF)
    {
        $this->consumerBankruptcyReplyRUTDF = $consumerBankruptcyReplyRUTDF;
        return $this;
    }

    /**
     * Adds as settledReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SettledType $settledReply
     */
    public function addToSettledReply(\mfteam\nbch\generated\models\SettledType $settledReply)
    {
        $this->settledReply[] = $settledReply;
        return $this;
    }

    /**
     * isset settledReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSettledReply($index)
    {
        return isset($this->settledReply[$index]);
    }

    /**
     * unset settledReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSettledReply($index)
    {
        unset($this->settledReply[$index]);
    }

    /**
     * Gets as settledReply
     *
     * @return \mfteam\nbch\generated\models\SettledType[]
     */
    public function getSettledReply()
    {
        return $this->settledReply;
    }

    /**
     * Sets a new settledReply
     *
     * @param \mfteam\nbch\generated\models\SettledType[] $settledReply
     * @return self
     */
    public function setSettledReply(array $settledReply)
    {
        $this->settledReply = $settledReply;
        return $this;
    }

    /**
     * Adds as settledReplyT2R
     *
     * @return self
     * @param \mfteam\nbch\generated\models\SettledType $settledReplyT2R
     */
    public function addToSettledReplyT2R(\mfteam\nbch\generated\models\SettledType $settledReplyT2R)
    {
        $this->settledReplyT2R[] = $settledReplyT2R;
        return $this;
    }

    /**
     * isset settledReplyT2R
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSettledReplyT2R($index)
    {
        return isset($this->settledReplyT2R[$index]);
    }

    /**
     * unset settledReplyT2R
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSettledReplyT2R($index)
    {
        unset($this->settledReplyT2R[$index]);
    }

    /**
     * Gets as settledReplyT2R
     *
     * @return \mfteam\nbch\generated\models\SettledType[]
     */
    public function getSettledReplyT2R()
    {
        return $this->settledReplyT2R;
    }

    /**
     * Sets a new settledReplyT2R
     *
     * @param \mfteam\nbch\generated\models\SettledType[] $settledReplyT2R
     * @return self
     */
    public function setSettledReplyT2R(array $settledReplyT2R)
    {
        $this->settledReplyT2R = $settledReplyT2R;
        return $this;
    }

    /**
     * Gets as pKRReply
     *
     * @return \mfteam\nbch\generated\models\PKRType
     */
    public function getPKRReply()
    {
        return $this->pKRReply;
    }

    /**
     * Sets a new pKRReply
     *
     * @param \mfteam\nbch\generated\models\PKRType $pKRReply
     * @return self
     */
    public function setPKRReply(\mfteam\nbch\generated\models\PKRType $pKRReply)
    {
        $this->pKRReply = $pKRReply;
        return $this;
    }

    /**
     * Adds as scoreReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ScoreType $scoreReply
     */
    public function addToScoreReply(\mfteam\nbch\generated\models\ScoreType $scoreReply)
    {
        $this->scoreReply[] = $scoreReply;
        return $this;
    }

    /**
     * isset scoreReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScoreReply($index)
    {
        return isset($this->scoreReply[$index]);
    }

    /**
     * unset scoreReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScoreReply($index)
    {
        unset($this->scoreReply[$index]);
    }

    /**
     * Gets as scoreReply
     *
     * @return \mfteam\nbch\generated\models\ScoreType[]
     */
    public function getScoreReply()
    {
        return $this->scoreReply;
    }

    /**
     * Sets a new scoreReply
     *
     * @param \mfteam\nbch\generated\models\ScoreType[] $scoreReply
     * @return self
     */
    public function setScoreReply(array $scoreReply)
    {
        $this->scoreReply = $scoreReply;
        return $this;
    }

    /**
     * Adds as accountReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\AccountRUTDFType $accountReplyRUTDF
     */
    public function addToAccountReplyRUTDF(\mfteam\nbch\generated\models\AccountRUTDFType $accountReplyRUTDF)
    {
        $this->accountReplyRUTDF[] = $accountReplyRUTDF;
        return $this;
    }

    /**
     * isset accountReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountReplyRUTDF($index)
    {
        return isset($this->accountReplyRUTDF[$index]);
    }

    /**
     * unset accountReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountReplyRUTDF($index)
    {
        unset($this->accountReplyRUTDF[$index]);
    }

    /**
     * Gets as accountReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\AccountRUTDFType[]
     */
    public function getAccountReplyRUTDF()
    {
        return $this->accountReplyRUTDF;
    }

    /**
     * Sets a new accountReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\AccountRUTDFType[] $accountReplyRUTDF
     * @return self
     */
    public function setAccountReplyRUTDF(array $accountReplyRUTDF)
    {
        $this->accountReplyRUTDF = $accountReplyRUTDF;
        return $this;
    }

    /**
     * Adds as qBCHAverPaymtReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\QBCHAverPaymtType $qBCHAverPaymtReply
     */
    public function addToQBCHAverPaymtReply(\mfteam\nbch\generated\models\QBCHAverPaymtType $qBCHAverPaymtReply)
    {
        $this->qBCHAverPaymtReply[] = $qBCHAverPaymtReply;
        return $this;
    }

    /**
     * isset qBCHAverPaymtReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQBCHAverPaymtReply($index)
    {
        return isset($this->qBCHAverPaymtReply[$index]);
    }

    /**
     * unset qBCHAverPaymtReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQBCHAverPaymtReply($index)
    {
        unset($this->qBCHAverPaymtReply[$index]);
    }

    /**
     * Gets as qBCHAverPaymtReply
     *
     * @return \mfteam\nbch\generated\models\QBCHAverPaymtType[]
     */
    public function getQBCHAverPaymtReply()
    {
        return $this->qBCHAverPaymtReply;
    }

    /**
     * Sets a new qBCHAverPaymtReply
     *
     * @param \mfteam\nbch\generated\models\QBCHAverPaymtType[] $qBCHAverPaymtReply
     * @return self
     */
    public function setQBCHAverPaymtReply(array $qBCHAverPaymtReply)
    {
        $this->qBCHAverPaymtReply = $qBCHAverPaymtReply;
        return $this;
    }

    /**
     * Adds as otherLegalItemsReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\OtherLegalItemsType $otherLegalItemsReply
     */
    public function addToOtherLegalItemsReply(\mfteam\nbch\generated\models\OtherLegalItemsType $otherLegalItemsReply)
    {
        $this->otherLegalItemsReply[] = $otherLegalItemsReply;
        return $this;
    }

    /**
     * isset otherLegalItemsReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherLegalItemsReply($index)
    {
        return isset($this->otherLegalItemsReply[$index]);
    }

    /**
     * unset otherLegalItemsReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherLegalItemsReply($index)
    {
        unset($this->otherLegalItemsReply[$index]);
    }

    /**
     * Gets as otherLegalItemsReply
     *
     * @return \mfteam\nbch\generated\models\OtherLegalItemsType[]
     */
    public function getOtherLegalItemsReply()
    {
        return $this->otherLegalItemsReply;
    }

    /**
     * Sets a new otherLegalItemsReply
     *
     * @param \mfteam\nbch\generated\models\OtherLegalItemsType[] $otherLegalItemsReply
     * @return self
     */
    public function setOtherLegalItemsReply(array $otherLegalItemsReply)
    {
        $this->otherLegalItemsReply = $otherLegalItemsReply;
        return $this;
    }

    /**
     * Adds as informationPartReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\InformationPartRUTDFType $informationPartReplyRUTDF
     */
    public function addToInformationPartReplyRUTDF(\mfteam\nbch\generated\models\InformationPartRUTDFType $informationPartReplyRUTDF)
    {
        $this->informationPartReplyRUTDF[] = $informationPartReplyRUTDF;
        return $this;
    }

    /**
     * isset informationPartReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationPartReplyRUTDF($index)
    {
        return isset($this->informationPartReplyRUTDF[$index]);
    }

    /**
     * unset informationPartReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationPartReplyRUTDF($index)
    {
        unset($this->informationPartReplyRUTDF[$index]);
    }

    /**
     * Gets as informationPartReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\InformationPartRUTDFType[]
     */
    public function getInformationPartReplyRUTDF()
    {
        return $this->informationPartReplyRUTDF;
    }

    /**
     * Sets a new informationPartReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\InformationPartRUTDFType[] $informationPartReplyRUTDF
     * @return self
     */
    public function setInformationPartReplyRUTDF(array $informationPartReplyRUTDF)
    {
        $this->informationPartReplyRUTDF = $informationPartReplyRUTDF;
        return $this;
    }

    /**
     * Adds as taxpayerIdReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\TaxpayerIdType $taxpayerIdReply
     */
    public function addToTaxpayerIdReply(\mfteam\nbch\generated\models\TaxpayerIdType $taxpayerIdReply)
    {
        $this->taxpayerIdReply[] = $taxpayerIdReply;
        return $this;
    }

    /**
     * isset taxpayerIdReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxpayerIdReply($index)
    {
        return isset($this->taxpayerIdReply[$index]);
    }

    /**
     * unset taxpayerIdReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxpayerIdReply($index)
    {
        unset($this->taxpayerIdReply[$index]);
    }

    /**
     * Gets as taxpayerIdReply
     *
     * @return \mfteam\nbch\generated\models\TaxpayerIdType[]
     */
    public function getTaxpayerIdReply()
    {
        return $this->taxpayerIdReply;
    }

    /**
     * Sets a new taxpayerIdReply
     *
     * @param \mfteam\nbch\generated\models\TaxpayerIdType[] $taxpayerIdReply
     * @return self
     */
    public function setTaxpayerIdReply(array $taxpayerIdReply)
    {
        $this->taxpayerIdReply = $taxpayerIdReply;
        return $this;
    }

    /**
     * Adds as reorgReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\ReorgType $reorgReply
     */
    public function addToReorgReply(\mfteam\nbch\generated\models\ReorgType $reorgReply)
    {
        $this->reorgReply[] = $reorgReply;
        return $this;
    }

    /**
     * isset reorgReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReorgReply($index)
    {
        return isset($this->reorgReply[$index]);
    }

    /**
     * unset reorgReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReorgReply($index)
    {
        unset($this->reorgReply[$index]);
    }

    /**
     * Gets as reorgReply
     *
     * @return \mfteam\nbch\generated\models\ReorgType[]
     */
    public function getReorgReply()
    {
        return $this->reorgReply;
    }

    /**
     * Sets a new reorgReply
     *
     * @param \mfteam\nbch\generated\models\ReorgType[] $reorgReply
     * @return self
     */
    public function setReorgReply(array $reorgReply)
    {
        $this->reorgReply = $reorgReply;
        return $this;
    }

    /**
     * Adds as bankruptcyReplyRUTDF
     *
     * @return self
     * @param \mfteam\nbch\generated\models\BankruptcyRUTDFType $bankruptcyReplyRUTDF
     */
    public function addToBankruptcyReplyRUTDF(\mfteam\nbch\generated\models\BankruptcyRUTDFType $bankruptcyReplyRUTDF)
    {
        $this->bankruptcyReplyRUTDF[] = $bankruptcyReplyRUTDF;
        return $this;
    }

    /**
     * isset bankruptcyReplyRUTDF
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBankruptcyReplyRUTDF($index)
    {
        return isset($this->bankruptcyReplyRUTDF[$index]);
    }

    /**
     * unset bankruptcyReplyRUTDF
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBankruptcyReplyRUTDF($index)
    {
        unset($this->bankruptcyReplyRUTDF[$index]);
    }

    /**
     * Gets as bankruptcyReplyRUTDF
     *
     * @return \mfteam\nbch\generated\models\BankruptcyRUTDFType[]
     */
    public function getBankruptcyReplyRUTDF()
    {
        return $this->bankruptcyReplyRUTDF;
    }

    /**
     * Sets a new bankruptcyReplyRUTDF
     *
     * @param \mfteam\nbch\generated\models\BankruptcyRUTDFType[] $bankruptcyReplyRUTDF
     * @return self
     */
    public function setBankruptcyReplyRUTDF(array $bankruptcyReplyRUTDF)
    {
        $this->bankruptcyReplyRUTDF = $bankruptcyReplyRUTDF;
        return $this;
    }

    /**
     * Adds as prevCredReply
     *
     * @return self
     * @param \mfteam\nbch\generated\models\PrevCredType $prevCredReply
     */
    public function addToPrevCredReply(\mfteam\nbch\generated\models\PrevCredType $prevCredReply)
    {
        $this->prevCredReply[] = $prevCredReply;
        return $this;
    }

    /**
     * isset prevCredReply
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrevCredReply($index)
    {
        return isset($this->prevCredReply[$index]);
    }

    /**
     * unset prevCredReply
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrevCredReply($index)
    {
        unset($this->prevCredReply[$index]);
    }

    /**
     * Gets as prevCredReply
     *
     * @return \mfteam\nbch\generated\models\PrevCredType[]
     */
    public function getPrevCredReply()
    {
        return $this->prevCredReply;
    }

    /**
     * Sets a new prevCredReply
     *
     * @param \mfteam\nbch\generated\models\PrevCredType[] $prevCredReply
     * @return self
     */
    public function setPrevCredReply(array $prevCredReply)
    {
        $this->prevCredReply = $prevCredReply;
        return $this;
    }

    /**
     * Gets as rqUuid
     *
     * @return string
     */
    public function getRqUuid()
    {
        return $this->rqUuid;
    }

    /**
     * Sets a new rqUuid
     *
     * @param string $rqUuid
     * @return self
     */
    public function setRqUuid($rqUuid)
    {
        $this->rqUuid = $rqUuid;
        return $this;
    }

    /**
     * Gets as reportIssueDateTime
     *
     * @return \DateTime
     */
    public function getReportIssueDateTime()
    {
        return $this->reportIssueDateTime;
    }

    /**
     * Sets a new reportIssueDateTime
     *
     * @param \DateTime $reportIssueDateTime
     * @return self
     */
    public function setReportIssueDateTime(\DateTime $reportIssueDateTime)
    {
        $this->reportIssueDateTime = $reportIssueDateTime;
        return $this;
    }


}

