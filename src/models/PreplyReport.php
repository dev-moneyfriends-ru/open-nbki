<?php

namespace mfteam\nbch\models;

use Exception;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Отчет КИ
 *
 * @property-read string $reportIssueDateTime
 * @property-read TaxpayerIdReply $taxpayerIdReply
 * @property-read BusinessReply[] $businessReply
 * @property-read AddressReply[] $addressReply
 * @property-read AccountReplyRUTDF[] $accountReplyRUTDF
 * @property-read string $rqUuid
 * @property-read InquiryReplyRUTDF[] $inquiryReplyRUTDF
 * @property-read AccountReply[] $accountReply
 * @property-read InquiryReply[] $inquiryReply
 * @property-read AddressReplyRUTDF[] $addressReplyRUTDF
 * @property-read RegnumReply[] $regnumReply
 * @property-read PersonReply[] $personReply
 * @property-read IdReply[] $idReply
 * @property-read \mfteam\nbch\models\EntrepReply[] $entrepReply
 * @property-read \mfteam\nbch\models\CapabilityReply[] $capabilityReply
 * @property-read \mfteam\nbch\models\SNILSReply[] $snilsReply
 * @property-read SubjectReply $subjectReply
 */
class PreplyReport extends BaseObject
{
    /**
     * @var array
     */
    public $report = [];
    
    /**
     * Даты формирования КИ
     * @return SubjectReply
     * @throws Exception
     */
    public function getSubjectReply(): SubjectReply
    {
        return new SubjectReply(ArrayHelper::getValue($this->report, 'SubjectReply', []));
    }
    
    /**
     * Сведения об адресах субъекта, полученные в формате TUTDF
     * @return array
     * @throws Exception
     */
    public function getAddressReply(): array
    {
        return $this->loadArrayData('AddressReplyRUTDF', AddressReply::class);
    }
    
    /**
     * Сведения об адресах (в т.ч. эл.почты), полученные в формате RUTDF, телефоны из обоих форматов
     * @return array
     * @throws Exception
     */
    public function getAddressReplyRUTDF(): array
    {
        return $this->loadArrayData('AddressReplyRUTDF', AddressReplyRUTDF::class);
    }
    
    /**
     * Данные о кредитах, полученные в формате TUTDF
     * @return array
     * @throws Exception
     */
    public function getAccountReply(): array
    {
        return $this->loadArrayData('AccountReply', AccountReply::class);
    }
    
    /**
     * Основные сведения о субъекте
     * @return array
     * @throws Exception
     */
    public function getBusinessReply()
    {
        return $this->loadArrayData('BusinessReply', BusinessReply::class);
    }
    
    /**
     * Сведения о запросе информации пользователем в формате TUTDF
     * @return array
     * @throws Exception
     */
    public function getInquiryReply()
    {
        return $this->loadArrayData('InquiryReply', InquiryReply::class);
    }
    
    /**
     * Сведения о запросе информации пользователем в формате RUTDF
     * @return array
     * @throws Exception
     */
    public function getInquiryReplyRUTDF()
    {
        return $this->loadArrayData('InquiryReplyRUTDF', InquiryReplyRUTDF::class);
    }
    
    /**
     * Данные о кредитах, полученные в формате RUTDF
     * @return array
     * @throws Exception
     */
    public function getAccountReplyRUTDF()
    {
        return $this->loadArrayData('AccountReplyRUTDF', AccountReplyRUTDF::class);
    }
    
    /**
     * Основные сведения о субъекте
     * @return array
     * @throws Exception
     */
    public function getPersonReply()
    {
        return $this->loadArrayData('PersonReply', PersonReply::class);
    }
    
    /**
     * Документы, удостоверяющие личность
     * @return array
     * @throws Exception
     */
    public function getIdReply()
    {
        return $this->loadArrayData('IdReply', IdReply::class);
    }
    
    /**
     * Номер налогоплательщика
     * @return TaxpayerIdReply[]
     * @throws Exception
     */
    public function getTaxpayerIdReply()
    {
        return $this->loadArrayData('TaxpayerIdReply', TaxpayerIdReply::class);
    }
    
    /**
     * Регистрационный номер
     * @return RegnumReply[]
     * @throws Exception
     */
    public function getRegnumReply()
    {
        return $this->loadArrayData('RegnumReply', RegnumReply::class);
    }
    
    /**
     * СНИЛС
     * @return SNILSReply[]
     * @throws Exception
     */
    public function getSnilsReply()
    {
        return $this->loadArrayData('SNILSReply', SNILSReply::class);
    }
    
    /**
     * Гос.регистрация в качестве ИП
     * @return EntrepReply[]
     * @throws Exception
     */
    public function getEntrepReply()
    {
        return $this->loadArrayData('EntrepReply', EntrepReply::class);
    }
    
    /**
     * Сведения о дееспособности
     * @return CapabilityReply[]
     * @throws Exception
     */
    public function getCapabilityReply()
    {
        return $this->loadArrayData('CapabilityReply', CapabilityReply::class);
    }
    
    /**
     * Уникальный идентификатор кредитного отчета (обязательный);
     * @return mixed
     * @throws Exception
     */
    public function getRqUuid()
    {
        return ArrayHelper::getValue($this->report, 'rqUuid');
    }
    
    /**
     * Дата и время формирования кредитного отчета (обязательный);
     * @return mixed
     * @throws Exception
     */
    public function getReportIssueDateTime()
    {
        return ArrayHelper::getValue($this->report, 'reportIssueDateTime');
    }
    
    /**
     * @return array
     * @throws Exception
     */
    public function loadArrayData($key, $class): array
    {
        $data = ArrayHelper::getValue($this->report, $key, []);
        if (empty($data)) {
            return [];
        }
        $models = [];
        if (ArrayHelper::isIndexed($data)) {
            foreach ($data as $config) {
                $models[] = new $class($config);
            }
        } else {
            $models[] = new $class($data);
        }
        return $models;
    }
}