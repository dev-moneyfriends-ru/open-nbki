<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Отчет КИ
 *
 * @property-read mixed $reportIssueDateTime
 * @property-read \mfteam\nbch\models\TaxpayerIdReply $taxpayerIdReply
 * @property-read array $businessReply
 * @property-read array $addressReply
 * @property-read array $accountReplyRUTDF
 * @property-read mixed $rqUuid
 * @property-read array $inquiryReplyRUTDF
 * @property-read array $accountReply
 * @property-read array $inquiryReply
 * @property-read array $addressReplyRUTDF
 * @property-read \mfteam\nbch\models\RegnumReply $regnumReply
 * @property-read \mfteam\nbch\models\SubjectReply $subjectReply
 */
class PreplyReport extends \yii\base\BaseObject
{
    /**
     * @var array
     */
    public $report = [];
    
    /**
     * Даты формирования КИ
     * @return SubjectReply
     * @throws \Exception
     */
    public function getSubjectReply(): SubjectReply
    {
        return new SubjectReply(ArrayHelper::getValue($this->report, 'SubjectReply', []));
    }
    
    /**
     * Сведения об адресах субъекта, полученные в формате TUTDF
     * @return array
     * @throws \Exception
     */
    public function getAddressReply(): array
    {
        return $this->loadArrayData('AddressReplyRUTDF', AddressReply::class);
    }
    
    /**
     * Сведения об адресах (в т.ч. эл.почты), полученные в формате RUTDF, телефоны из обоих форматов
     * @return array
     * @throws \Exception
     */
    public function getAddressReplyRUTDF(): array
    {
        return $this->loadArrayData('AddressReplyRUTDF', AddressReplyRUTDF::class);
    }
    
    /**
     * Данные о кредитах, полученные в формате TUTDF
     * @return array
     * @throws \Exception
     */
    public function getAccountReply(): array
    {
        return $this->loadArrayData('AccountReply', AccountReply::class);
    }
    
    /**
     * Основные сведения о субъекте
     * @return array
     * @throws \Exception
     */
    public function getBusinessReply()
    {
        return $this->loadArrayData('BusinessReply', BusinessReply::class);
    }
    
    /**
     * Сведения о запросе информации пользователем в формате TUTDF
     * @return array
     * @throws \Exception
     */
    public function getInquiryReply()
    {
        return $this->loadArrayData('InquiryReply', InquiryReply::class);
    }
    
    /**
     * Сведения о запросе информации пользователем в формате RUTDF
     * @return array
     * @throws \Exception
     */
    public function getInquiryReplyRUTDF()
    {
        return $this->loadArrayData('InquiryReplyRUTDF', InquiryReplyRUTDF::class);
    }
    
    /**
     * Данные о кредитах, полученные в формате RUTDF
     * @return array
     * @throws \Exception
     */
    public function getAccountReplyRUTDF()
    {
        return $this->loadArrayData('AccountReplyRUTDF', AccountReplyRUTDF::class);
    }
    
    /**
     * Номер налогоплательщика
     * @return TaxpayerIdReply
     * @throws \Exception
     */
    public function getTaxpayerIdReply()
    {
        return new TaxpayerIdReply(ArrayHelper::getValue($this->report, 'TaxpayerIdReply', []));
    }
    
    /**
     * Регистрационный номер
     * @return RegnumReply
     * @throws \Exception
     */
    public function getRegnumReply()
    {
        return new RegnumReply(ArrayHelper::getValue($this->report, 'RegnumReply', []));
    }
    
    /**
     * Уникальный идентификатор кредитного отчета (обязательный);
     * @return mixed
     * @throws \Exception
     */
    public function getRqUuid()
    {
        return ArrayHelper::getValue($this->report, 'rqUuid');
    }
    
    /**
     * Дата и время формирования кредитного отчета (обязательный);
     * @return mixed
     * @throws \Exception
     */
    public function getReportIssueDateTime()
    {
        return ArrayHelper::getValue($this->report, 'reportIssueDateTime');
    }
    
    /**
     * @return array
     * @throws \Exception
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