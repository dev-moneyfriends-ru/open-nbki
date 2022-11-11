<?php

namespace mfteam\nbch\components;

use mfteam\nbch\components\creditHistory\NbchXmlFormatter;
use yii\httpclient\Client;

/**
 * HTTP компонент для запросов к НБКИ API
 *
 */
class NbchClient extends Client
{
    public $formatters = [
        parent::FORMAT_XML => [
            'class' => NbchXmlFormatter::class,
            'rootTag' => 'product',
            'encoding' => 'Windows-1251'
        ]
    ];
}