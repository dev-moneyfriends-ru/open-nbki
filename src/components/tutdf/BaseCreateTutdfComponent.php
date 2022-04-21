<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\components\tutdf\CreateTutdfComponentInterface;
use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\tutdf\NbchTutdfRequest;

/**
 * Создание файла tutdf
 *
 * @property-read \mfteam\nbch\components\tutdf\template\TutdfTemplate $tutdfTemplate
 * @property-read \mfteam\nbch\models\tutdf\NbchTutdfRequest $tutdfRequest
 */
abstract class BaseCreateTutdfComponent extends \yii\base\BaseObject implements CreateTutdfComponentInterface
{
    /**
     * @var \mfteam\nbch\models\tutdf\NbchTutdfRequest
     */
    protected $_tutdfRequest;
    
    /**
     * @param NbchTutdfRequest|null $tutdfRequest
     * @param array $config
     */
    public function __construct(?NbchTutdfRequest $tutdfRequest, $config = [])
    {
        $this->_tutdfRequest = $tutdfRequest;
        parent::__construct($config);
    }
    
    /**
     * @return NbchTutdfRequest
     */
    public function getTutdfRequest(): NbchTutdfRequest
    {
        return $this->_tutdfRequest;
    }
    
    /**
     * Действия перед генерацией файла. Если возвращает false генерация не запускается
     * @return bool
     */
    protected function beforeGenerate():bool
    {
        return true;
    }
    
    /**
     * Генерация файла
     * @return bool
     */
    public function run(): bool
    {
        if(!$this->beforeGenerate()){
            return false;
        }
        $this->generate();
        
        return $this->afterGenerate();
    }
    
    /**
     * Выполняется после успешной генерации файла
     * @return bool
     */
    protected function afterGenerate(): bool
    {
        return true;
    }
    
    /**
     * Генерация файла
     * @return void
     */
    abstract protected function generate():void;
    
    /**
     * @param $val
     * @return string|null
     * @throws \yii\base\InvalidConfigException
     */
    public function asDateOrNull($val): ?string
    {
        if($val === null){
            return null;
        }
        return \Yii::$app->formatter->asDate($val, 'yyyy-MM-dd');
    }
    
     /**
     * @return TutdfTemplate
     */
    abstract public function getTutdfTemplate(): TutdfTemplate;
}