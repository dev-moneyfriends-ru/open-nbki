<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\BaseTemplate;

/**
 * Class representing EventDataType
 *
 * Сопроводительные атрибуты
 * XSD Type: EventData
 */
abstract class EventDataType extends GutdfSegment
{
    /**
     * Источник направляет кредитную информацию о субъекте или его отдельном обязательстве,
     * или об отдельном обращении субъекта к источнику с предложением совершить сделку (далее – обращение) впервые;
     */
    public const OPERATION_CODE_A = 'A';
    /**
     * Кредитная информация дополняется;
     */
    public const OPERATION_CODE_B = 'B';
    /**
     * Исправляется ошибка в кредитной информации (изменение показателей кредитной истории);
     */
    public const OPERATION_CODE_C1 = 'C.1';
    /**
     * Исправляется ошибка в кредитной информации (исключение информации из кредитной истории);
     */
    public const OPERATION_CODE_C2 = 'C.2';
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании решения суда, вступившего в силу
     */
    public const OPERATION_CODE_D1 = 'D.1';
    /**
     * Аннулируется запись и (или) иные данные кредитной истории по результатам рассмотрения указанного в части 3
     * статьи 8 Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации, 2005,
     * № 1, ст. 44; 2020, № 31, ст. 5061) заявления субъекта в случае, если по результатам рассмотрения такого заявления
     * принято решение о полном оспаривании информации, содержащейся в его кредитной истории;
     */
    public const OPERATION_CODE_D2 = 'D.2';
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании обращения источника,
     * получившего копию акта Банка России о проведении контрольного мероприятия, предусмотренного
     * частями четвертой и восьмой статьи 731-1 и частями седьмой и десятой статьи 765 Федерального
     * закона от 10 июля 2002 года № 86-ФЗ «О Центральном банке Российской Федерации (Банке России)»
     * (Собрание законодательства Российской Федерации, 2002, № 28, ст. 2790; 2013, № 30, ст. 4084; 2018, № 31, ст. 4852; 2019, № 29, ст. 385),
     * в случае, если в рамках проведения такого контрольного мероприятия совершены действия, информация о которых подлежит направлению в бюро;
     */
    public const OPERATION_CODE_D3 = 'D.3';
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании обращения источника в случаях,
     * установленных частью 7 статьи 5 Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации, 2005, №1, ст.44; 2018, №1, ст.65; 2020, № 31, ст.5061).
     */
    public const OPERATION_CODE_D4 = 'D.4';
    /**
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @var string $eventComment
     */
    private $eventComment = "";

    /**
     * Порядковый номер записи в файле
     *
     * @var int $orderNum
     */
    private $orderNum = null;

    /**
     * Дата события
     *
     * @var \DateTime $eventDate
     */
    private $eventDate = null;

    /**
     * Время события
     *
     * @var \DateTime $eventTime
     */
    private $eventTime = null;

    /**
     * @var null|string
     */
    protected $eventId = null;

    /**
     * @param BaseTemplate $template
     * @param $eventId
     */
    public function __construct(BaseTemplate $template, $eventId)
    {
        $this->eventId = $eventId;
        parent::__construct($template);
    }

    /**
     * Gets as eventComment
     *
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * @return string
     */
    public function getEventComment()
    {
        return $this->eventComment;
    }

    /**
     * Sets a new eventComment
     *
     * Комментарий с пояснением причины представления группы блоков показателей
     *
     * Строка, необязательный. Символы табуляции и переноса строки запрещены. Может содержать переменные в формате json:
     * comment - произвольный необязательный комментарий, не более 500 символов.
     * guar_num - уникальный идентификатор договора поручительства. Должен быть заполнен при наличии в группе блока FL_33_Warranty или UL_24_Warranty
     * «Сведения о поручительстве» и отсутствии показателя ФЛ_33.2/ЮЛ_24.2 «УИд договора поручительства», а также в случае,
     * если ранее договору поручительства не был присвоен УИд. Не более 35 символов.
     * indepguar_num - уникальный идентификатор договора независимой гарантии. Должен быть заполнен при наличии
     * в группе блока FL_34_Guarantee или UL_25_Guarantee «Сведения о независимой гарантии» и отсутствии
     * показателя ФЛ_34.2/ЮЛ_25.2 «УИд договора независимой гарантии», а также в случае, если ранее договору
     * независимой гарантии не был присвоен УИд. Не более 35 символов.
     * restruct – в случае полного прощения долга в соответствии с рекомендациями, изложенными
     * в Информационном письме Банка России № ИН-03-59/82 от 21.04.2025, кредитной организации
     * в рамках события 2.5 «Обязательство субъекта прекратилось» следует указать значение «21.04.2025 ИН-03-59/82».
     * obligpt_num – произвольный уникальный идентификатор сведений об участии в обязательстве.
     * Укажите его, только если не заполнены показатели ФЛ_56.3 и ЮЛ_46.3 «УИд сделки»,
     * а также ФЛ_56.4 и ЮЛ_46.4 «Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства».
     * В противном случае будет невозможно идентифицировать конкретные сведения об участии в обязательстве. Не более 35 символов.
     * cid – уникальный в рамках источника идентификатор группы, указываемый в квитанциях для сверки непринятых групп.
     * Вместо двойных кавычек в формате JSON внутри атрибута элемента XML используйте &quot;
     * Пример заполнения JSON-строки:
     * eventComment = “{&quot;comment&quot;:&quot;Это мой комментарий&quot;, &quot;cid&quot;:&quot;765-234&quot;}”
 *
     * @param string $eventComment
     * @return self
     */
    public function setEventComment($eventComment)
    {
        $this->eventComment = $eventComment;
        return $this;
    }

    /**
     * Gets as orderNum
     *
     * Порядковый номер записи в файле
     *
     * @return int
     */
    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * Sets a new orderNum
     *
     * Порядковый номер записи в файле
     *
     * @param int $orderNum
     * @return self
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum = $orderNum;
        return $this;
    }

    /**
     * Gets as eventDate
     *
     * Дата события
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Sets a new eventDate
     *
     * Дата события
     *
     * @param \DateTime $eventDate
     * @return self
     */
    public function setEventDate(\DateTime $eventDate)
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    /**
     * Gets as eventTime
     *
     * Время события
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Sets a new eventTime
     *
     * Время события
     *
     * @param \DateTime $eventTime
     * @return self
     */
    public function setEventTime(\DateTime $eventTime)
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    abstract public function getOperationCode();

    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        return [
            'eventComment',
            'eventDate',
            'operationCode',
            'orderNum'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        $props = [];
        foreach ($this->getProperties() as $property) {
            $props[] = "$property = " . $this->$property;
        }
        return implode(', ', $props);
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->eventDate = $this->formatDate($this->sendData->getReportingDt());
        $this->initAttributes();
    }

    abstract protected function initAttributes();

}

