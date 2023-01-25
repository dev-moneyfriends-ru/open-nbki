<?php

namespace mfteam\nbch\components;

use DateTime;
use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use yii\base\InvalidConfigException;
use yii\base\InvalidValueException;
use yii\helpers\ArrayHelper;
use yii\helpers\VarDumper;

/**
 * Сегмент данных файла НБКИ
 *
 * @property-read bool $isEmptyErrors
 * @property-read string $description
 * @property-read string $errorsAsString
 * @property-read array $fields
 * @property-read string $title
 * @property-read array $fieldsDescriptions
 * @property-read int $fileLine
 * @property-read string $segmentName
 */
abstract class BaseSegment extends \yii\base\BaseObject
{
    /**
     * @var BaseRequestTemplate
     */
    protected $template;
    
    /**
     * @var array
     */
    protected $errors = [];
    
    /**
     * Значение пустого поля
     * @var string
     */
    protected $emptyValue = '';
    
    /**
     * @var array
     */
    protected $fieldValues;
    
    /**
     * BaseSegment constructor.
     * @param TUTDFTemplate $template
     * @param array $config
     */
    public function __construct(BaseRequestTemplate $template, $config = [])
    {
        $this->template = $template;
        parent::__construct($config);
    }
    
    /**
     * @param $date
     * @return string
     * @throws InvalidConfigException
     */
    public function formatDate($date): string
    {
        if (empty($date)) {
            return '';
        }
        return \Yii::$app->formatter->asDate($date, 'yyyyMMdd');
    }
    
    /**
     * @param $date
     * @return string
     * @throws InvalidConfigException
     */
    public function formatNewDate($date): string
    {
        if (empty($date)) {
            return $this->emptyValue;
        }
        return \Yii::$app->formatter->asDate($date, 'dd.MM.yyyy');
    }
    
    /**
     * @param $value
     * @return false|float
     */
    public function formatCurrency($value)
    {
        return number_format(round((float)$value, 2), 2, ',', '');
    }
    
    /**
     * @param $value
     * @return string
     */
    public function formatString($value)
    {
        return mb_strtoupper(trim($value));
    }
    
    /**
     * Метод должен генерировать строку содержащую данные сегмента
     * @return string
     */
    public function render(): string
    {
        if (!$this->validate() || count($this->errors) > 0) {
            \Yii::error($this->errors);
            $this->throwError();
        }
        return implode("\t", $this->getFields()) . PHP_EOL;
    }
    
    /**
     * @return bool
     */
    public function getIsEmptyErrors(): bool
    {
        return count($this->errors) === 0;
    }
    
    /**
     * Проверка данных на правильность
     * @return bool
     */
    public function validate(): bool
    {
        return true;
    }
    
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
    public function getDescription(): string
    {
        return '';
    }
    
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
        return VarDumper::dumpAsString($this->errors);
    }
    
    /**
     * Возвращает данные поля из файла НБКИ
     * @param int $index Номер поля по порядку
     * @return mixed|null
     * @throws \Exception
     */
    public function getFieldFromFile(int $index)
    {
        if ($this->fieldValues === null) {
            $this->loadFieldValues();
        }
        return ArrayHelper::getValue($this->fieldValues, $index);
    }
    
    /**
     * Загружаем значения полей из файла
     */
    private function loadFieldValues(): void
    {
        $this->fieldValues = [];
        if (empty($this->template->fileContent)) {
            return;
        }
        $lines = explode("\n", $this->template->fileContent);
        foreach ($lines as $key => $str) {
            if ($key < $this->template->lineNumber) {
                continue;
            }
            if (strpos($str, $this->getSegmentName()) === 0) {
                $this->fieldValues = explode("\t", $str);
                break;
            }
        }
    }
    
    /**
     * @param string $uuid
     * @return string
     */
    protected function getUuidControlSum(string $uuid)
    {
        $uuid = preg_replace('/[^a-z\d]/i', '', $uuid);
        $chars = str_split($uuid);
        $sum = 0;
        $i = 1;
        foreach ($chars as $char) {
            $number = base_convert($char, 16, 10);
            $sum += $number * $i;
            if ($i === 10) {
                $i = 1;
            } else {
                $i++;
            }
        }
        $key = $sum % 16;
        return base_convert($key, 10, 16);
    }
    
    /**
     * @return false|int
     */
    protected function daysPastDue()
    {
        $daysPastDue = 0;
        if ($this->template->offer->getTrade()->amtPastDue > 0.001) {
            $currentDate = new DateTime();
            $overdueDate = (new DateTime())
                ->setTimestamp(
                    \Yii::$app->formatter->asTimestamp($this->template->getOffer()->getTrade()->pastDueDt)
                );
            
            $interval = $currentDate->diff($overdueDate);
            $daysPastDue = $interval->days;
        }
        return $daysPastDue;
    }
    
    /**
     * @return int
     */
    public function getFileLine()
    {
        return $this->template->lineNumber;
    }
}