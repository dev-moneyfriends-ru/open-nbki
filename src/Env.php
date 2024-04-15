<?php

namespace mfteam\nbch;

use Yii;
use yii\base\BaseObject;
use yii\base\InvalidConfigException;
use yii\di\NotInstantiableException;

/**
 * @property-read Module|null $module
 */
class Env extends BaseObject
{
    /**
     * Таблица хранящая отправленные в НБКИ TUTDF отчеты
     * @var string
     */
    public $nbchTutdfRequestTableName = '{{%nbch_tutdf_request}}';
    /**
     * Таблица хранящая отправленные в НБКИ TUTDF отчеты
     * @var string
     */
    public $nbchRutdfRequestTableName = '{{%nbch_rutdf_request}}';
    
    /**
     * Таблица для хранения согласий
     * @var string
     */
    public $nbchConsentTableName = '{{%nbch_consent}}';
    
    /**
     * Таблица для хранения связей согласий
     * @var string
     */
    public $nbchConsentRelationsTableName = '{{%nbch_consent_relations}}';
    
    /**
     * Таблица для хранения контрольных данных
     * @var string
     */
    public $nbchControlTableName = '{{%nbch_control}}';
    
    /**
     * @return Env|object
     * @throws InvalidConfigException
     * @throws NotInstantiableException
     */
    public static function ensure()
    {
        return Yii::$container->get(static::class);
    }
    
    /**
     * @return Module
     */
    public function getModule(): Module
    {
        return Module::getInstance();
    }
}