<?php

namespace mfteam\nbch\models;

use yii\base\Model;
use yii\helpers\ArrayHelper;

abstract class BaseItem extends \yii\base\Model
{
    /**
     * @var int
     */
    public $fid;
    
    /**
     * Уникальный идентификатор записи в БД НБКИ (обязательный)
     * @var string
     */
    public $serialNum;
    
    /**
     * Дата спора
     * @var string
     */
    public $disputedDate;
    
    /**
     * User comments for dispute
     * @var string
     */
    public $disputedRemarks;
    
    /**
     * Identifies whether segment is under dispute.
     * @var string
     */
    public $disputedStatus;
    
    /**
     * Reason of dispute. Only appears if there is a dispute
     * @var string
     */
    public $disputedStatusText;
    
    /**
     * The date the record was first inserted into the iCRS database. Valid format: YYYY-MM-DD.
     * @var string
     */
    public $fileSinceDt;
    
    /**
     * Possible values 0 or 1. 1 indicates true, which means the segment is frozen and no updates can be made to this segment.
     * @var int
     */
    public $freezeFlag;
    
    /**
     * @var int
     */
    public $suppressFlag;
    
    /**
     * Дата обновления данных
     * @var string
     */
    public $lastUpdatedDt;
    
    /**
     * Дата формирования кредитной информации (обязательный для единичных дополняемых блоков,
     * в которых может отсутствовать дата события – блоки payment «Сведения о внесении платежей»
     * по ФЛ и ЮЛ, не обязательный для остальных блоков)
     * @var string
     */
    public $reportingDt;
    
    /**
     * Условный рейтинг надежности источника (не обязательный)
     * @var string
     */
    public $partnerRating;
    
    /**
     * @var string
     */
    public $partnerStartDate;
    
    /**
     * @var string
     */
    public $businessCategory;
    
    /**
     * @var string
     */
    public $acctSerialNum;
    
    /**
     * @var string $suppressStrDt
     */
    public $suppressStrDt = null;
    
    /**
     * @var string $suppressEndDt
     */
    public $suppressEndDt = null;
    
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
    
    
    public function rules()
    {
        return [
            [[
                'fid',
            ], 'integer'],
            [[
                'serialNum',
                'disputedDate',
                'disputedRemarks',
                'disputedStatus',
                'disputedStatusText',
                'fileSinceDt',
                'lastUpdatedDt',
                'serialNum',
            ], 'string'],
            [
                ['freezeFlag'], 'in', 'range' => [0, 1],
            ],
        ];
    }
    
    public static function disputeReasonsList()
    {
        return [
            'A2' => 'Ownership dispute',
            'A3' => 'Incorrect/Similar Applicant',
            'A4' => 'Not liable for account',
            'A5' => 'Unknown collection',
            'A6' => 'Balance dispute',
            'A7' => 'Settlement made',
            'A9' => 'Account related issues',
            'B2' => 'Insurance claim delayed',
            'B3' => 'Late due to change of address',
            'B4' => 'Account included in bankruptcy',
            'B5' => 'Account excluded from bankruptcy',
            'B6' => 'Bankruptcy of another person',
            'B7' => 'Other',
            'B8' => 'Account Date issues (Account age issue)',
            'B9' => 'Account closed',
            'C1' => 'Natural disaster victim',
            'C2' => 'Account closed by consumer',
            'C3' => 'Terms or type dispute',
            'C4' => 'Incorrect Line of Credit/High Credit',
            'C5' => 'Account cancelled by consumer',
            'C6' => 'Account in legal proceedings',
            'C7' => 'Updated information being processed',
            'C8' => 'Account expected to be deleted',
            'C9' => 'Inaccurate information',
            'D2' => 'Fraud: identity theft',
            'D3' => 'Fraud: account takeover',
            'E1' => 'Collections dispute',
            'E2' => 'Military duty',
            'E3' => 'Account deferred',
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
     * @param array $data
     * @param string $class
     * @return array
     */
    public function initPropertyModels(array $data, string $class)
    {
        $models = [];
        if (ArrayHelper::isIndexed($data)) {
            foreach ($data as $config) {
                /** @var Model $model */
                $model = new $class();
                $model->setAttributes($config, false);
                $models[] = $model;
            }
        } else {
            /** @var Model $model */
            $model = new $class();
            $model->setAttributes($data, false);
            $models[] = $model;
        }
        return $models;
    }
}