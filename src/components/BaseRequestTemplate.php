<?php

namespace mfteam\nbch\components;


use mfteam\nbch\models\NbchOfferInterface;
use mfteam\nbch\models\NbchSubjectInterface;
use Yii;
use yii\base\BaseObject;

/**
 * Шаблон передачи данных в НБКИ
 *
 * @property-read NbchOfferInterface $offer
 * @property-read NbchSubjectInterface $subject
 */
abstract class BaseRequestTemplate extends BaseObject
{
    /**
     * @var NbchSubjectInterface
     */
    private $_subject;
    
    /**
     * Содержимое файла отчета
     * @var string
     */
    protected $_fileContent;
    
    /**
     * @var string
     */
    protected $_content;
    
    /**
     * @var NbchOfferInterface
     */
    private $_offer;
    
    /**
     * @param NbchSubjectInterface $subject
     * @param NbchOfferInterface $offer
     * @param $config
     */
    public function __construct(NbchSubjectInterface $subject, NbchOfferInterface $offer, $config = [])
    {
        $this->_subject = $subject;
        $this->_offer = $offer;
        parent::__construct($config);
    }
    
    /**
     * @return NbchSubjectInterface
     */
    public function getSubject(): NbchSubjectInterface
    {
        return $this->_subject;
    }
    
    /**
     * @return NbchOfferInterface
     */
    public function getOffer(): NbchOfferInterface
    {
        return $this->_offer;
    }
    
    /**
     * @return false|string|null
     */
    public function saveAsTemp()
    {
        $path = tempnam(sys_get_temp_dir(), '');
        return $this->saveAs($path) === true ? $path : null;
    }
    
    /**
     * @param string $path
     * @return bool
     */
    private function saveAs(string $path)
    {
        if(empty($this->_content)){
            $this->loadContent();
        }
        return file_put_contents($path, $this->_content) !== false;
    }
    
    /**
     * @return void
     */
    public function loadContent()
    {
        $controller = Yii::$app->controller;
        $this->_content = $controller->renderPartial($this->getTemplatePath(), $this->getTokenList());
        $this->_content = mb_convert_encoding($this->_content, 'cp1251');
    }
    
    /**
     * @return string
     */
    abstract public function getTemplatePath(): string;
    
    /**
     * @return array
     */
    abstract public function getTokenList(): array;
}