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
    public const EVENT_1_4A = "1.4A";
    public const EVENT_1_4B = "1.4B";
    public const EVENT_1_4C = "1.4C";
    public const EVENT_1_4_1 = "1.4.1";
    public const EVENT_1_7 = "1.7";
    public const EVENT_1_9 = "1.9";
    public const EVENT_1_10 = "1.10";
    public const EVENT_2_1A = "2.1A";
    public const EVENT_2_1B = "2.1B";
    public const EVENT_2_2A = "2.2A";
    public const EVENT_2_2B = "2.2B";
    public const EVENT_2_2_1A = "2.2.1A";
    public const EVENT_2_2_1B = "2.2.1B";
    public const EVENT_2_3A = "2.3A";
    public const EVENT_2_3B = "2.3B";
    public const EVENT_2_4 = "2.4";
    public const EVENT_2_5A = "2.5A";
    public const EVENT_2_5B = "2.5B";
    public const EVENT_2_6 = "2.6";
    public const EVENT_2_10 = "2.10";
    public const EVENT_2_11 = "2.11";
    public const EVENT_2_11_1A = "2.11.1A";
    public const EVENT_2_11_1B = "2.11.1B";
    public const EVENT_2_12 = "2.12";
    public const EVENT_3_3 = "3.3";
    public const EVENT_4_2 = "4.2";
    
    public static function list()
    {
        return [
            self::EVENT_1_1 => '1.1 Субъект обратился к источнику с предложением совершить сделку',
            self::EVENT_1_2 => '1.2 Источник одобрил обращение (направил ему [субъекту] оферту) или изменились сведения об обращении',
            self::EVENT_1_3 => '1.3 Источник отказался от совершения сделки по обращению',
            self::EVENT_1_4A => '1.4.а Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для денежного обязательства субъекта',
            self::EVENT_1_4B => '1.4.б Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для неденежного обязательства источника',
            self::EVENT_1_4C => '1.4.в Субъект и источник совершили сделку, кроме договора лизинга и поручительства по лизингу для неденежного обязательства субъекта',
            self::EVENT_1_4_1 => '1.4.1 Субъект и источник заключили договор лизинга либо поручительства по лизингу и предмет лизинга передан лизингополучателю',
            self::EVENT_1_7 => '1.7 Изменились сведения титульной части КИ субъекта',
            self::EVENT_1_9 => '1.9 Изменились сведения о субъекте в основной части КИ, кроме сведений о дееспособности, банкротстве, индивидуальном рейтинге и кредитной оценке',
            self::EVENT_1_10 => '1.10 Изменились сведения о дееспособности субъекта',
            self::EVENT_2_1A => '2.1а Изменились сведения об условиях обязательства субъекта для денежного обязательства',
            self::EVENT_2_1B => '2.1б Изменились сведения об условиях обязательства субъекта для неденежного обязательства',
            self::EVENT_2_2A => '2.2а Субъекту передана сумма займа (кредита) для денежного обязательства',
            self::EVENT_2_2B => '2.2б Субъекту передана сумма займа (кредита) для неденежного обязательства',
            self::EVENT_2_2_1A => '2.2.1а Субъект стал принципалом по гарантии или поручителем по сделке для денежного обязательства',
            self::EVENT_2_2_1B => '2.2.1б Субъект стал принципалом по гарантии или поручителем по сделке для неденежного обязательства',
            self::EVENT_2_3A => '2.3а Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для денежного обязательства',
            self::EVENT_2_3B => '2.3б Изменились сведения об исполнении обязательства субъектом, наступила ответственность поручителя или обязательство принципала возместить выплаченную сумму для неденежного обязательства',
            self::EVENT_2_4 => '2.4 Изменились сведения об обеспечении исполнения обязательства',
            self::EVENT_2_5A => '2.5а Обязательство субъекта прекратилось для денежного обязательства',
            self::EVENT_2_5B => '2.5б Обязательство субъекта прекратилось для неденежного обязательства',
            self::EVENT_2_6 => '2.6 Изменились сведения о судебном споре или требовании по обязательству',
            self::EVENT_2_10 => '2.10 Источник прекратил передачу информации по обязательству',
            self::EVENT_2_11 => '2.11 Права кредитора по обязательству полностью перешли к другому лицу',
            self::EVENT_2_11_1A => '2.11.1а Права кредитора по обязательству частично перешли к другому лицу для денежного обязательства',
            self::EVENT_2_11_1B => '2.11.1б Права кредитора по обязательству частично перешли к другому лицу для неденежного обязательства',
            self::EVENT_2_12 => '2.12 Изменились сведения об обслуживающей организации (в частности, заключен, изменен или расторгнут договор обслуживания)',
            self::EVENT_3_3 => '3.3 Требуется исключение записи кредитной истории, сведения о которой отсутствуют у источника формирования кредитной истории',
            self::EVENT_4_2 => '4.2 Требуется аннулирование записи кредитной истории',
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
                //Компонент для работы с файлами
                'file' => [
                    'class' => \mfteam\nbch\components\file\FileManagerInterface::class,
                ],
                //Настройки передачи данных в НБКИ
                'rutdf' => [
                    'class' => \mfteam\nbch\components\rutdf\RutdfRequestComponent::class,
                    'userName' => '2I01RR000005',
                    'password' => '2I01rr00',
                    'reportEmail' => 'RUTDF@nbki.ru',
                    'sourceInn' => '6163209391',
                    'sourceOgrn' => '1186196015510'
                ],
                //Настройки получения кредитных отчетов
                'creditHistory' => [
                    'class' => \mfteam\nbch\components\creditHistory\CreditHistoryComponent::class,
                    'userName' => '2I01RR000005',
                    'password' => '2I01rr00',
                    'apiUrl' => 'https://reports.demo.nbki.ru/products/B2BRequestServlet',
                ],
                //Компонент для работы с сервером подписей
                'esignClient' => [
                    'class' =>\mfteam\nbch\components\NbchEsignClientInterface::class,
                ],
                //Настройки почтового сервера для отправки данных и получения квитанций
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
 * @var \mfteam\nbch\models\rutdf\NbchDataInterface $sendData Данные для отправки в НБКИ
 * @var string $offerUuid Уникальный идентификатор договора
 */

$events = [
    NbchEvents::EVENT_2_1A,
];

//Генерация файла для отправки

$template = new \mfteam\nbch\components\rutdf\template\GutdfTemplate($events, $sendData);
$template->loadContent();

/**
 * Если необходимо можно получить содержимое файла
 * @var string $content
 */
$content = $template->getContent();

/**
 * Или массив блоков
 * @var \mfteam\nbch\components\rutdf\template\segments\BaseSegment[] $segments
 */
$segments = $template->getSegments();

/**
 * Ошибки при генерации
 * @var array $errors
 */
$errors = $template->getErrors();


$component = \mfteam\nbch\Env::ensure()->module->rutdf;

//Создание записи о запросе
$rutdfRequest = $component->createRequest($offerUuid, $events);

//Создание файла для запроса

$component->createFile($template, $request);

//Отправка 

$component->send($request);

```

Исключение и корректировка показателей по событиям, связанным с записью кредитной истории
-
Выполняется через событие 3.2 Требуется внесение изменений в связи с ошибкой в показателях по событиям, связанным с записью кредитной истории.

В данных по сделке, показатели которой надо скорректировать, передается дата, с которой все события будут исключены. А также показатели по каждому событию которые будут добавлены в КИ начиная с даты корректировки.
Если дата корректировки не задана, будут исключены и отправлены корректирующие показатели по всей КИ.

Пример 1. Сведения об обязательстве были направлены ошибочно и должны быть удалены. Также будут удалены все сведения отправленные позднее

```php
/**
 * @var string $offerUuid Уникальный идентификатор договора
 */
 
 /**
 * Данные по сделке показатели которой корректируются
 */
 class NbchData implements \mfteam\nbch\components\rutdf\NbchDataInterface
 {
     //реализация класса
     ...
    public function setStartDate(?string $date) {
        ...
    }
 }
$sendData = new NbchData();
$sendData->setStartDate('2025-02-01');
//заполняем показатели по сделке
...

//Генерация файла для отправки
$template = new \mfteam\nbch\components\rutdf\template\GutdfTemplate([NbchEvents::EVENT_3_2], $sendData);
$template->loadContent();
$component = \mfteam\nbch\Env::ensure()->module->rutdf;
//Создание записи о запросе
$rutdfRequest = $component->createRequest($offerUuid, $events);
//Создание файла для запроса
$component->createFile($template, $request);
//Отправка 
$component->send($request);
```
Пример 2. В сведениях об обязательстве были ошибки, которые необходимо скорректировать. Также необходимо скорректировать все данные отправленные позднее

```php
/**
 * @var string $offerUuid Уникальный идентификатор договора
 */
 
 /**
 * Данные по сделке показатели которой корректируются
 */
 class NbchData implements \mfteam\nbch\components\rutdf\NbchDataInterface
 {
     //реализация класса
     ...
    public function setStartDate(?string $date) {
        ...
    }
    public function setReportingDt(?string $date) {
        ...
    }
    public function setCorrectionEventId(?string $eventId) {
        ...
    }
 }
$sendData = new NbchData();
$sendData->setStartDate('2025-01-01');
//заполняем показатели по сделке
...

$events = [
    NbchEvents::EVENT_2_1A => [
        '2025-01-01',
        '2025-02-01',
        '2025-03-01',
    ],
];
//Добавляем данные по событиям отправленным с даты корректировки
foreach ($events as $eventId => $dates){
    foreach ($dates as $date){
        $correctionData = new NbchData();
        $correctionData->setCorrectionEventId($eventId);
        $correctionData->setReportingDt($date);
        //заполняем остальные данные
        ...
        
        $sendData->addCorrectionData($correctionData);
    }
}
//Генерация файла для отправки
$template = new \mfteam\nbch\components\rutdf\template\GutdfTemplate([NbchEvents::EVENT_3_2], $sendData);
$template->loadContent();
$component = \mfteam\nbch\Env::ensure()->module->rutdf;
//Создание записи о запросе
$rutdfRequest = $component->createRequest($offerUuid, $events);
//Создание файла для запроса
$component->createFile($template, $request);
//Отправка 
$component->send($request);
```
Получение КИ:
-
```php
/**
 * @var \mfteam\nbch\models\creditHistory\NbchConsent $consent Согласие на получение данных КИ пользователя
 */
$component = \mfteam\nbch\Env::ensure()->module->creditHistory;
$nbchChRequest = $component->createRequest($consent);

$prequestReq = new \mfteam\nbch\models\PrequestReq()

// Далее заполняем данными модель запроса $prequestReq
$prequestReq->idReq = new \mfteam\nbch\models\IdReq([
...
])
...
//После заполнения получаем данные
$component->execute($prequestReq);
if($nbchChRequest->status === \mfteam\nbch\models\creditHistory\NbchChRequest::STATE_FINISH){
    /**
    * @var \mfteam\nbch\components\file\NbchFile $fileXml  
    */
    $fileXml = $nbchChRequest->responseXml;
    /**
    * @var \mfteam\nbch\components\file\NbchFile $fileXml  
    */
    $fileHTML = $nbchChRequest->responseHtml;
}
```
