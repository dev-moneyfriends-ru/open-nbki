<?php

namespace mfteam\nbch\models;

use mfteam\nbch\helpers\UuidHelper;
use yii\base\InvalidCallException;
use yii\base\Model;
use yii\base\UnknownPropertyException;
use yii\helpers\ArrayHelper;

abstract class BaseItem extends \yii\base\Model
{
    /**
     * @var int
     */
    public $fid = null;

    /**
     * Уникальный идентификатор записи в БД НБКИ (обязательный)
     * @var string
     */
    public $serialNum = '';

    /**
     * Дата спора
     * @var string
     */
    public $disputedDate = '';

    /**
     * User comments for dispute
     * @var string
     */
    public $disputedRemarks = '';

    /**
     * Identifies whether segment is under dispute.
     * @var string
     */
    public $disputedStatus = '';

    /**
     * Reason of dispute. Only appears if there is a dispute
     * @var string
     */
    public $disputedStatusText = '';

    /**
     * The date the record was first inserted into the iCRS database. Valid format: YYYY-MM-DD.
     * @var string
     */
    public $fileSinceDt = '';

    /**
     * Possible values 0 or 1. 1 indicates true, which means the segment is frozen and no updates can be made to this segment.
     * @var int
     */
    public $freezeFlag = null;

    /**
     * @var int
     */
    public $suppressFlag = null;

    /**
     * Дата обновления данных
     * @var string
     */
    public $lastUpdatedDt = '';

    /**
     * Дата формирования кредитной информации (обязательный для единичных дополняемых блоков,
     * в которых может отсутствовать дата события – блоки payment «Сведения о внесении платежей»
     * по ФЛ и ЮЛ, не обязательный для остальных блоков)
     * @var string
     */
    public $reportingDt = '';

    /**
     * Условный рейтинг надежности источника (не обязательный)
     * @var string
     */
    public $partnerRating = '';

    /**
     * @var string
     */
    public $partnerStartDate = '';

    /**
     * @var string
     */
    public $businessCategory = '';

    /**
     * @var string
     */
    public $acctSerialNum = '';

    /**
     * @var string $suppressStrDt
     */
    public $suppressStrDt = '';

    /**
     * @var string $suppressEndDt
     */
    public $suppressEndDt = '';

    /**
     * @var string $headerReportingDt
     */
    public $headerReportingDt = '';

    /**
     * @var string $memberCode
     */
    public $memberCode = '';

    /**
     * @var string $memberFullName
     */
    public $memberFullName = '';

    /**
     * @var string $memberShortName
     */
    public $memberShortName = '';

    /**
     * @var string $memberLastName
     */
    public $memberLastName = '';

    /**
     * @var string $memberFirstName
     */
    public $memberFirstName = '';

    /**
     * @var string $memberMiddleName
     */
    public $memberMiddleName = '';

    /**
     * @var string $memberRegNum
     */
    public $memberRegNum = '';

    /**
     * @var string $memberType
     */
    public $memberType = '';

    /**
     * @var string $memberTaxpayerID
     */
    public $memberTaxpayerID = '';

    /**
     * @var string $memberOKPO
     */
    public $memberOKPO = '';

    /**
     * @var string $memberIDIssueAuth
     */
    public $memberIDIssueAuth = '';

    /**
     * @var string $memberIDIssueLoc
     */
    public $memberIDIssueLoc = '';

    /**
     * @var string $memberIDIssueDate
     */
    public $memberIDIssueDate = '';

    /**
     * @var string $memberBusinessCode
     */
    public $memberBusinessCode = '';

    public function attributeLabels()
    {
        return [
            'fid' => 'fid',
            'serialNum' => 'Серийный номер',
            'disputedDate' => 'Дата спора',
            'disputedRemarks' => 'Коментарий к спору',
            'disputedStatus' => 'Идентификатор спора',
            'disputedStatusText' => 'Причина спора',
            'fileSinceDt' => 'Дата создания записи',
            'freezeFlag' => 'Запрет изменения',
            'lastUpdatedDt' => 'Дата обновления',
        ];
    }


    /**
     * @param $config
     */
    public function __construct($config = [])
    {
        foreach ($config as $key => $value) {
            if (is_array($value) && empty($value)) {
                unset($config[$key]);
            }
        }
        parent::__construct($config);
    }

    /**
     * @param array|BaseItem $data
     * @param string $class
     * @return array
     */
    public function initPropertyModels(array $data, string $class)
    {
        $models = [];
        if (ArrayHelper::isIndexed($data)) {
            foreach ($data as $config) {
                if (is_object($config)) {
                    $models[] = $config;
                    continue;
                }
                /** @var BaseItem $model */
                $model = new $class();
                $model->setAttributes($config, false);
                $models[] = $model;
            }
        } elseif (is_object($data)) {
            $models[] = $data;
        } else {
            /** @var BaseItem $model */
            $model = new $class();
            $model->setAttributes($data);
            $models[] = $model;
        }
        return $models;
    }

    /**
     * @param string $attribute
     * @return mixed
     */
    protected function getLastValue(string $attribute)
    {
        $model = null;
        if(empty($this->$attribute)){
            return null;
        }
        foreach ($this->$attribute as $item) {
            if ($model === null) {
                $model = $item;
                continue;
            }
            if (strtotime($item->reportingDt) > strtotime($model->reportingDt)) {
                $model = $item;
            }
        }
        return $model;
    }

    /**
     * @param string $uuid
     * @return string
     */
    public function getUuidControlSum(string $uuid): string
    {
        return UuidHelper::getUuidControlSum($uuid);
    }


    /**
     * Sets value of an object property.
     *
     * Do not call this method directly as it is a PHP magic method that
     * will be implicitly called when executing `$object->property = $value;`.
     * @param string $name the property name or the event name
     * @param mixed $value the property value
     * @throws UnknownPropertyException if the property is not defined
     * @throws InvalidCallException if the property is read-only
     * @see __get()
     */
    public function __set($name, $value)
    {
        $setter = 'set' . $name;
        if (method_exists($this, $setter)) {
            $this->$setter($value);
        }
    }
}
