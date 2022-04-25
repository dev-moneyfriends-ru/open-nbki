<?php

namespace mfteam\nbch\models;

use Yii;
use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

/**
 * @property-read string $formatValue
 */
class BalanceValue extends BaseObject
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $value;
    
    public function __construct($config = [])
    {
        $this->code = ArrayHelper::getValue($config, 'Code', 'RUB');
        $this->value = ArrayHelper::getValue($config, 'Value', '0');
        
        ArrayHelper::remove($config, 'Code');
        ArrayHelper::remove($config, 'Value');
        
        parent::__construct([]);
    }
    
    public function getFormatValue(): string
    {
        $suffix = '';
        if($this->code === 'RUB'){
            $suffix = ' р.';
        }
        return Yii::$app->formatter->asDecimal($this->value, 2). $suffix;
    }
}