<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 31.05.2020
 * Time: 12:51
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Phone;

/**
 * Сегмент телефона
 * Class PNSegment
 * @package common\modules\nbki\components\templates\segments
 */
class PNSegment extends BaseSegment
{
    /**
     * @var string
     */
    private $sequenceNumber;
    /**
     * @var Phone
     */
    private $phone;
    
    public function __construct(TUTDFTemplate $template, string $sequenceNumber, Phone $phone, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->phone = $phone;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if(!$this->phone->validate()){
            $this->errors = $this->phone->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'PN' . $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->phone->number,
            $this->phone->phoneType,
        ];
    }
    
    public function getFieldsDescriptions(): array
    {
        return  [
            'Наименование сегмента' => 'Данное поле должно содержать PN01 для первого телефона, PN02 для второго телефона и т.д.',
            'Номер' => 'Данное поле должно состоять минимум из 5 цифр. Дополнительный код/код STD может быть указан в качестве префикса. ',
            'Тип' => 'Тип телефона. Если поле не заполнено, значением по умолчанию считается 5. Допустимые значения:
                        1 = Рабочий
                        2 = Домашний
                        3 = Факс
                        4 = Сотовый
                        5 = Другое
                        ',
        ];
    }
    
    public function getDescription(): string
    {
        return 'Сегмент (сегменты) PN включает (включают) номер телефона субъекта кредитной истории и:<br>
                Является необязательным сегментом для физического лица (сегмент NA)<br>
                Является обязательным сегментом для юридического лица (сегмент BU). <br>
                Для юридических лиц обязателен хотя бы один телефон с типом 1 (Рабочий). Остальные типы допустимы.<br>
                Допустимо не более 5 сегментов PN в одной записи';
    }
    
    public function getTitle(): string
    {
        return 'Сегмент телефона (PN)';
    }
}