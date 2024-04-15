<?php

namespace mfteam\nbch\components\rutdf\template\segments;


use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\models\rutdf\NbchEvents;
use yii\helpers\Json;

/**
 * Блок 0. Заголовок группы блоков – 0_GROUPHEADER
 * @property-read RutdfTemplate $template
 */
class GroupHeader extends BaseSegment
{
    /**
     * Источник направляет кредитную информацию о субъекте или его отдельном обязательстве,
     * или об отдельном обращении субъекта к источнику с предложением совершить сделку (далее – обращение) впервые;
     */
    public const CODE_A = 'A';
    
    /**
     * Кредитная информация дополняется;
     */
    public const CODE_B = 'B';
    
    /**
     * Исправляется ошибка в кредитной информации (изменение показателей кредитной истории);
     */
    public const CODE_C1 = 'C.1';
    
    /**
     * Исправляется ошибка в кредитной информации (исключение информации из кредитной истории);
     */
    public const CODE_C2 = 'C.2';
    
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании решения суда, вступившего в силу;
     */
    public const CODE_D1 = 'D.1';
    
    /**
     * Аннулируется запись и (или) иные данные кредитной истории по результатам рассмотрения указанного в части 3 статьи 8
     * Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации, 2005, № 1, ст. 44; 2020, № 31, ст. 5061)
     * заявления субъекта в случае, если по результатам рассмотрения такого заявления принято решение о полном оспаривании информации,
     * содержащейся в его кредитной истории;
     */
    public const CODE_D2 = 'D.2';
    
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании обращения источника,
     * получившего копию акта Банка России о проведении контрольного мероприятия,
     * предусмотренного частями четвертой и восьмой статьи 731-1 и частями седьмой и десятой статьи 765 Федерального закона
     * от 10 июля 2002 года № 86-ФЗ «О Центральном банке Российской Федерации (Банке России)» (Собрание законодательства
     * Российской Федерации, 2002, № 28, ст. 2790; 2013, № 30, ст. 4084; 2018, № 31, ст. 4852; 2019, № 29, ст. 385),
     * в случае, если в рамках проведения такого контрольного мероприятия совершены действия, информация о которых подлежит направлению в бюро;
     */
    public const CODE_D3 = 'D.3';
    
    /**
     * Аннулируется запись и (или) иные данные кредитной истории на основании обращения источника в случаях,
     * установленных частью 7 статьи 5 Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации,
     * 2005, №1, ст.44; 2018, №1, ст.65; 2020, № 31, ст.5061).
     */
    public const CODE_D4 = 'D.4';
    
    
    /**
     * Порядковый номер группы в документе (файле)
     * @var int
     */
    protected $number = 1;
    
    /**
     * Номер события, вследствие которого сформирована данная группа блоков.
     * Не обязательный при удалении сведений с кодом операции B и annul_reason = 0,
     * иначе - обязателен.
     * @var string
     */
    protected $event;
    
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей.
     * Обязательный. A, B, C, D – буквы латинского алфавита.
     * Допустимые значения:
     * A – источник направляет кредитную информацию о субъекте или его отдельном обязательстве, или об отдельном обращении субъекта
     * к источнику с предложением совершить сделку (далее – обращение) впервые;
     * B – кредитная информация дополняется;
     * C.1 - исправляется ошибка в кредитной информации (изменение показателей кредитной истории);
     * C.2 - исправляется ошибка в кредитной информации (исключение информации из кредитной истории);
     * D.1 - аннулируется запись и (или) иные данные кредитной истории на основании решения суда, вступившего в силу;
     * D.2 - аннулируется запись и (или) иные данные кредитной истории по результатам рассмотрения указанного в части 3 статьи
     * 8 Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации, 2005, № 1, ст. 44; 2020, № 31, ст. 5061)
     * заявления субъекта в случае, если по результатам рассмотрения такого заявления принято решение о полном оспаривании информации,
     * содержащейся в его кредитной истории;
     * D.3 - аннулируется запись и (или) иные данные кредитной истории на основании обращения источника, получившего копию акта Банка России
     * о проведении контрольного мероприятия, предусмотренного частями четвертой и восьмой статьи 731-1 и частями седьмой и десятой статьи 765
     * Федерального закона от 10 июля 2002 года № 86-ФЗ «О Центральном банке Российской Федерации (Банке России)» (Собрание законодательства
     * Российской Федерации, 2002, № 28, ст. 2790; 2013, № 30, ст. 4084; 2018, № 31, ст. 4852; 2019, № 29, ст. 385), в случае,
     * если в рамках проведения такого контрольного мероприятия совершены действия, информация о которых подлежит направлению в бюро;
     * D.4 - аннулируется запись и (или) иные данные кредитной истории на основании обращения источника в случаях, установленных частью 7
     * статьи 5 Федерального закона «О кредитных историях» (Собрание законодательства Российской Федерации, 2005, №1, ст.44; 2018, №1, ст.65; 2020, № 31, ст.5061).
     * @var string
     */
    protected $code = 'A';
    
    /**
     * @var GroupHeaderComment
     */
    protected $comment;
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "0_GROUPHEADER";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $comments = $this->comment->toArray()??[];
        foreach ($comments as $field => $value){
            if(empty($value)){
                unset($comments[$field]);
            }
        }
        
        if(empty($comments) || $this->number > 1){
            $comments = self::EMPTY_VALUE;
        }else{
            $comments = Json::encode($comments);
        }
        
        return [
            $this->getSegmentName(),
            $this->number,
            $this->event ?? self::EMPTY_VALUE,
            $this->code,
            $comments,
            $this->formatDate($this->template->sendData->getReportingDt()),
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            "Порядковый номер группы в документе (файле)" => '',
            "Номер события, вследствие которого сформирована данная группа блоков" => '',
            "Код операции, в рамках которой сформирована группа блоков показателей" => '',
            "Комментарий с пояснением причины представления группы блоков показателей." => '',
            "Дата события, вследствие которого сформирована данная группа блоков" => '',
        ];
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
    public function getTitle(): string
    {
        return "Блок 0. Заголовок группы блоков – 0_GROUPHEADER";
    }
    
    /**
     * @param GroupHeaderComment $comment
     * @return GroupHeader
     */
    public function setComment(GroupHeaderComment $comment): GroupHeader
    {
        $this->comment = $comment;
        $this->fieldValues = null;
        return $this;
    }
    
    /**
     * @param int $number
     * @return GroupHeader
     */
    public function setNumber(int $number): GroupHeader
    {
        $this->number = $number;
        $this->fieldValues = null;
        return $this;
    }
    
    /**
     * @param mixed $event
     * @return GroupHeader
     */
    public function setEvent(string $event): GroupHeader
    {
        switch ($event) {
            case NbchEvents::EVENT_1_4A:
            case NbchEvents::EVENT_1_4B:
            case NbchEvents::EVENT_1_4C:
                {
                    $this->event = '1.4';
                }
                break;
            case NbchEvents::EVENT_2_1A:
            case NbchEvents::EVENT_2_1B:
                {
                    $this->event = '2.1';
                }
                break;
            case NbchEvents::EVENT_2_2A:
            case NbchEvents::EVENT_2_2B:
                {
                    $this->event = '2.2';
                }
                break;
            case NbchEvents::EVENT_2_2_1A:
            case NbchEvents::EVENT_2_2_1B:
                {
                    $this->event = '2.2.1';
                }
                break;
            case NbchEvents::EVENT_2_3A:
            case NbchEvents::EVENT_2_3B:
                {
                    $this->event = '2.3';
                }
                break;
            case NbchEvents::EVENT_2_5A:
            case NbchEvents::EVENT_2_5B:
                {
                    $this->event = '2.5';
                }
                break;
            case NbchEvents::EVENT_2_11_1A:
            case NbchEvents::EVENT_2_11_1B:
                {
                    $this->event = '2.11.1';
                }
                break;
            default:
            {
                $this->event = $event;
            }
        }
        
        $this->fieldValues = null;
        return $this;
    }
    
    /**
     * @param string $code
     * @return GroupHeader
     */
    public function setCode(string $code): GroupHeader
    {
        $this->code = $code;
        $this->fieldValues = null;
        return $this;
    }
}