НБКИ модуль
===========
Обмен данными с НБКИ

RUTDF
------------

Коды событий:
-
Коды событий находятся вспомогательном классе `\mfteam\nbch\models\rutdf\NbchEvents`
Список реализованных кодов:
```php
    public const EVENT_1_1 = "1.1";
    public const EVENT_1_2 = "1.2";
    public const EVENT_1_3 = "1.3";
    public const EVENT_1_4 = "1.4";
    public const EVENT_1_4_1 = "1.4.1";
    public const EVENT_1_7 = "1.7";
    public const EVENT_1_9 = "1.9";
    public const EVENT_2_1 = "2.1";
    public const EVENT_2_2 = "2.2";
    public const EVENT_2_3_1 = "2.3.1";
    public const EVENT_2_3_2 = "2.3.2";
    public const EVENT_2_4 = "2.4";
    public const EVENT_2_5_1 = "2.5.1";
    public const EVENT_2_5_2 = "2.5.2";
    public const EVENT_2_6 = "2.6";
    
    public static function list()
    {
        return [
            self::EVENT_1_1 => 'Субъект обратился к источнику с предложением совершить сделку',
            self::EVENT_1_2 => 'Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении',
            self::EVENT_1_3 => 'Источник отказался от совершения сделки по обращению субъекта',
            self::EVENT_1_4 => 'Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для денежного обязательства субъекта',
            self::EVENT_1_4_1 => 'Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю',
            self::EVENT_1_7 => 'Изменились сведения титульной части КИ субъекта',
            self::EVENT_1_9 => 'Изменились сведения о субъекте в основной части КИ, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке',
            self::EVENT_2_1 => 'Изменились сведения об условиях обязательства субъекта для денежного обязательства',
            self::EVENT_2_2 => 'Субъекту передана сумма займа (кредита) либо субъект стал принципалом по гарантии или поручителем по сделке, кроме договора лизинга для денежного обязательства',
            self::EVENT_2_3_1 => 'Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для денежного обязательства',
            self::EVENT_2_3_2 => 'Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для неденежного обязательства',
            self::EVENT_2_4 => 'Изменились сведения об обеспечении исполнения обязательства',
            self::EVENT_2_5_1 => 'Обязательство субъекта прекратилось для денежного обязательства',
            self::EVENT_2_5_2 => 'Обязательство субъекта прекратилось для неденежного обязательства',
            self::EVENT_2_6 => 'Изменились сведения о судебном споре или требовании по обязательству ',
        ];
    }
```

Настройка:
-
Необходимо реализовать интерфейсы:
`\mfteam\nbch\components\file\FileManagerInterface` - компонент реализующий файловое хранилище
`\mfteam\nbch\components\NbchEsignClientInterface` - компонент реализующий подписание файлов

В конфиге прописать:
```php
modules =>[
    ...
    
     'nbch' => [
            'class' => \mfteam\nbch\Module::class,
            'memberCode' => '2I01RR000000',
            'partnerName' => 'ООО «МАНИ ФРЕНДС»',
            'components' => [
                'file' => [
                    'class' => \mfteam\nbch\components\file\FileManagerInterface::class,
                ],
                'rutdf' => [
                    'class' => \mfteam\nbch\components\rutdf\RutdfRequestComponent::class,
                    'userName' => '2I01RR000005',
                    'password' => '2I01rr00',
                    'reportEmail' => 'RUTDF@nbki.ru',
                    'sourceInn' => '6163209391',
                    'sourceOgrn' => '1186196015510'
                ],
                'creditHistory' => [
                    'class' => \mfteam\nbch\components\creditHistory\CreditHistoryComponent::class,
                    'userName' => '2I01RR000005',
                    'password' => '2I01rr00',
                    'apiUrl' => 'https://reports.demo.nbki.ru/products/B2BRequestServlet',
                ],
                'esignClient' => [
                    'class' =>\mfteam\nbch\components\NbchEsignClientInterface::class,
                ],
                'mailer' => [
                    'class' => Mailer::class,
                    'useFileTransport' => false,
                    'messageConfig' => [
                        'charset' => 'UTF-8',
                    ],
                ],
            ],
        ],
    
]
```

Передача сведений:
-
Для передачи сведений в НБКИ необходимо реализовать класс `\mfteam\nbch\models\rutdf\NbchDataInterface`,
который будет возвращать данные по субъекту. 
Пример 1. Передача сведений по событию 2.1а Изменились сведения об условиях обязательства субъекта для денежного обязательства
```php
/**
 * @var \mfteam\nbch\models\rutdf\NbchDataInterface $nbchData
 */

```
Получение КИ:
-
