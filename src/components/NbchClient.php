<?php

namespace mfteam\nbch\components;

use yii\httpclient\Client;
use yii\httpclient\XmlFormatter;

/**
 * HTTP компонент для запросов к НБКИ API
 *
 */
class NbchClient extends Client
{
    public $formatters = [
        parent::FORMAT_XML => [
            'class' => XmlFormatter::class,
            'rootTag' => 'product',
            'encoding' => 'Windows-1251'
        ]
    ];
}