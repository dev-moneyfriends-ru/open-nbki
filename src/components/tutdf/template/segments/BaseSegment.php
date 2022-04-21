<?php

namespace mfteam\nbch\components\tutdf\template\segments;

use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use yii\base\InvalidConfigException;
use yii\base\InvalidValueException;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;

/**
 * Сегмент данных файла TUTDF
 *
 * @property-read bool $isEmptyErrors
 * @property-read string $description
 * @property-read string $errorsAsString
 * @property-read array $fields
 * @property-read string $title
 * @property-read array $fieldsDescriptions
 * @property-read string $segmentName
 */
abstract class BaseSegment extends \yii\base\BaseObject
{
    /**
     * @var TUTDFTemplate
     */
    protected $_template;
    
    /**
     * @var array
     */
    protected $_errors = [];
    
    /**
     * Значение пустого поля
     * @var string
     */
    protected $emptyValue = '';
    
    /**
     * @var array
     */
    protected $_fieldValues;
    
    /**
     * BaseSegment constructor.
     * @param TUTDFTemplate $template
     * @param array $config
     */
    public function __construct(TUTDFTemplate $template, $config = [])
    {
        $this->_template = $template;
        parent::__construct($config);
    }
    
    /**
     * @param $date
     * @return string
     * @throws InvalidConfigException
     */
    public function formatDate($date): string
    {
        return \Yii::$app->formatter->asDate($date, 'yyyyMMdd');
    }
    
    /**
     * @param $value
     * @return false|float
     */
    public function formatCurrency($value)
    {
        return round((float)$value, 0,PHP_ROUND_HALF_UP);
    }
    
    /**
     * Метод должен генерировать строку содержащую данные сегмента
     * @return string
     */
    public function render(): string
    {
        if (!$this->validate() || count($this->_errors) > 0) {
            \Yii::error($this->_errors);
            $this->throwError();
        }
        return implode("\t", $this->getFields()) . PHP_EOL;
    }
    
    /**
     * @return bool
     */
    public function getIsEmptyErrors(): bool
    {
        return count($this->_errors) === 0;
    }
    
    /**
     * Проверка данных на правильность
     * @return bool
     */
    abstract public function validate(): bool;
    
    /**
     * Возвращает название сегмента. Например 'TUTDF' или 'ID01'
     * @return string
     */
    abstract public function getSegmentName(): string;
    
    /**
     * Сохранение информации об ошибке в логи и генерация исключения
     */
    protected function throwError(): void
    {
        throw new InvalidValueException(
            'Ошибка в сегменте данных: ' . $this->getSegmentName() . ' ' . $this->getErrorsAsString()
        );
    }
    
    /**
     * Поля сегмента
     * @return array
     */
    abstract public function getFields(): array;
    
    /**
     * Описание полей
     * @return array
     */
    abstract public function getFieldsDescriptions(): array;
    
    /**
     * Описание сегмента
     * @return string
     */
    abstract public function getDescription(): string;
    
    /**
     * Заголовок
     * @return string
     */
    abstract public function getTitle(): string;
    
    /**
     * @return string
     */
    protected function getErrorsAsString()
    {
        return VarDumper::dumpAsString($this->_errors);
    }
    
    /**
     * Возвращает данные поля из файла TUTDF
     * @param int $index Номер поля по порядку
     * @return mixed|null
     * @throws \Exception
     */
    public function getFieldFromFile(int $index)
    {
        if($this->_fieldValues === null){
            $this->loadFieldValues();
        }
        return ArrayHelper::getValue($this->_fieldValues, $index);
    }
    
    /**
     * Загружаем значения полей из файла
     */
    private function loadFieldValues(): void
    {
        $this->_fieldValues = [];
        if(empty($this->_template->fileContent)){
            return;
        }
        $lines = explode("\n", $this->_template->fileContent);
        foreach ($lines as $str){
            if(strpos($str,$this->getSegmentName()) === 0){
                $this->_fieldValues = explode("\t", $str);
                break;
            }
        }
    }
    
}