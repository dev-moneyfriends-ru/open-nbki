<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use DateTime;
use Exception;
use mfteam\nbch\components\rutdf\template\BaseTemplate;
use mfteam\nbch\components\rutdf\template\segments\BaseSegment;

abstract class GutdfSegment extends BaseSegment
{
    /**
     * Значение пустого поля
     */
    public const EMPTY_VALUE = null;
    public const DATE_FORMAT = 'yyyy-MM-dd';

    /**
     * Индекс множественного сегмента
     * @var int|null
     */
    protected $idx = null;

    public function __construct(BaseTemplate $template, ?int $idx = null)
    {
        $this->idx = $idx;
        parent::__construct($template);
    }
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }

    /**
     * Инициализация значений
     * @return void
     */
    public function init(): void
    {
        // use to inicialize values
    }

    /**
     * Атрибуты для генерации xml
     * @return array
     */
    abstract public function getXmlAttributes(): array;

    /**
     * Поля сегмента
     * @return array
     * @throws Exception
     */
    public function getProperties(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $fields = [];
        foreach ($this->getXmlAttributes() as $key => $attribute){
            if(is_int($key)){
                $fields[$attribute] = $this->$attribute;
            }else{
                $fields[$key] = $this->$attribute;
            }
        }
        return $fields;
    }

    /**
     * @param mixed $value
     * @return string
     */
    public function formatCurrency($value): ?string
    {
        if($value === null){
            return static::EMPTY_VALUE;
        }
        return number_format(round((float)$value, 2), 2, '.', '');
    }

}
