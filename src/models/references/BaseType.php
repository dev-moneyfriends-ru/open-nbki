<?php

namespace mfteam\nbch\models\references;

use yii\helpers\ArrayHelper;

/**
 * Справочник
 */
abstract class BaseType implements \JsonSerializable
{
    /**
     * @var int|string
     */
    protected $key;

    /**
     * @var string
     */
    protected $name;

    /**
     * Список значений в виде именованного массива
     * @return array
     */
    abstract public static function list(): array;

    /**
     * @return int[]|string[]
     */
    public static function keys()
    {
        return array_keys(static::instance()::list());
    }

    /**
     * Возвращает список значений в виде массива объектов
     * @return array
     */
    public static function array()
    {
        return static::instance()->createArray();
    }

    /**
     * Возвращает список значений в виде массива объектов
     * @return array
     */
    private function createArray()
    {
        $array = [];
        foreach (static::list() as $key => $name) {
            $model = new static();
            $model->key = $key;
            $model->name = $name;
            $array[] = $model;
        }
        return $array;
    }

    /**
     * @return static
     */
    private static function instance()
    {
        return new static();
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    private function findValue($key)
    {
        return ArrayHelper::getValue(static::list(), $key);
    }

    /**
     * @param $key
     * @return mixed
     * @throws \Exception
     */
    public static function getText($key)
    {
        return static::instance()->findValue($key);
    }

    /**
     * @return int|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'key' => $this->getKey(),
            'name' => $this->getName(),
        ];
    }

}
