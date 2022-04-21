<?php

namespace mfteam\nbch\components\tutdf;

use mfteam\nbch\models\tutdf\NbchTutdfRequest;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

/**
 * Компонент для отправки данных в НБКИ в формате TUTDF с помощью EMAIL
 */
class TutdfRequestComponent extends Component
{
    /**
     * Имя пользователя для передачи данных
     * @var string
     */
    public $userName;
    
    /**
     * Пароль для передачи данных
     * @var string
     */
    public $password;
    
    /**
     * @return object|BaseCreateTutdfComponent
     * @throws InvalidConfigException
     */
    public function getCreateComponent(NbchTutdfRequest $request)
    {
        return Yii::createObject($this->createComponentConfig, [$request]);
    }
    
}