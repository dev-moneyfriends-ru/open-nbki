<?php

namespace mfteam\nbch\models;

use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * Отчет КИ
 *
 * @property-read string $reportIssueDateTime
 * @property-read TaxpayerIdReply[] $taxpayerIdReply
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
 * @property-read EntrepReply[] $entrepReply
 * @property-read CapabilityReply[] $capabilityReply
 * @property-read SNILSReply[] $snilsReply
 * @property-read array $subjectAverPaymtReply
 * @property-read SubjectReply[] $subjectReply
 */
class PreplyReport extends BaseObject
{
    public $source = 'НБКИ';
    /**
     * Значения отчета в виде массива
     * @var array
     */
    public $report = [];
    
    /**
     * Инициализированные значения отчета
     * @var array
     */
    protected $data = [];
    
    /**
     * Возвращает значение $name из отчета $report создавая при этом объект, если это возможно
     * @param $name
     * @return string
     */
    public function get($name)
    {
        if(isset($this->data[$name])){
            return $this->data[$name];
        }
        if(!isset($this->report[$name])){
            return null;
        }
        $class = 'mfteam\\nbch\\models\\' . $name;

        if(class_exists($class.'RUTDF')){
            $this->data[$name] = $this->initModels($this->report[$name], $class.'RUTDF');
        }elseif(class_exists($class)){
            $this->data[$name] = $this->initModels($this->report[$name], $class);
        }else{
            $this->data[$name] = $this->report[$name];
        }
        return $this->data[$name];
    }
    
    /**
     * @param $name
     * @return array|string|null
     */
    public function __get($name)
    {
        if($this->get($name) !== null){
            return $this->get($name);
        }
        $attribute = ucfirst($name);
        return $this->get($attribute);
    }
    
    
    /**
     * @param array|object $values
     * @param string $class
     * @return array
     */
    public function initModels($values, string $class): array
    {
        $models = [];
        if (ArrayHelper::isIndexed($values)) {
            foreach ($values as $config) {
                if (is_object($config)) {
                    $models[] = $config;
                    continue;
                }
                /** @var BaseItem $model */
                $model = new $class();
                $model->setAttributes($config, false);
                $models[] = $model;
            }
        } elseif (is_object($values)) {
            $models[] = $values;
        } else {
            /** @var BaseItem $model */
            $model = new $class();
            $model->setAttributes($values, false);
            $models[] = $model;
        }
        return $models;
    }
}
