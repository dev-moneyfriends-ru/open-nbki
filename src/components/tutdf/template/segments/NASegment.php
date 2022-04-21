<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 14:16
 */

namespace mfteam\nbch\components\tutdf\template\segments;

/**
 * Сегмент имени
 * Class NASegment
 * @package common\modules\nbki\components\templates\segments
 */
class NASegment extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $person = $this->_template->subject->getPerson();
        if($person === null){
            $this->_errors[] = 'Нет данных по ФЛ или ИП';
            return false;
        }
        if(empty($person->name1)){
            $this->_errors[] = 'Отсутствует фамилия';
        }
        if(empty($person->paternal)){
            $this->_errors[] = 'Отсутствует отчество';
        }
        if(empty($person->first)){
            $this->_errors[] = 'Отсутствует имя';
        }
        if(empty($person->birthDt)){
            $this->_errors[] = 'Отсутствует дата рождения';
        }
        if(empty($person->placeOfBirth)){
            $this->_errors[] = 'Отсутствует место рождения';
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'NA01';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->_template->subject->getPerson()->name1,
            $this->_template->subject->getPerson()->paternal,
            $this->_template->subject->getPerson()->first,
            $this->emptyValue,
            $this->formatDate($this->_template->subject->getPerson()->birthDt),
            $this->_template->subject->getPerson()->placeOfBirth,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
            $this->emptyValue,
        ];
    }
    
    public function getFieldsDescriptions(): array
    {
        return [
            'Название сегмента' => 'Данное поле должно содержать значение NA01.',
            'Фамилия' => 'Содержит фамилию клиента. ',
            'Отчество' => 'Содержит отчество. ',
            'Имя' => 'Содержит имя клиента. ',
            '5.Поле не используется' => 'Оставьте поле пустым',
            'Дата рождения' => 'Данное поле должно содержать фактическую дату по календарю в формате ГГГГММДД. Дата рождения должна соответствовать возрасту не моложе 14 лет и не старше 110 лет на Дату открытия счета (сегмент «Сделка»). Должна быть не позднее даты выдачи документа сегмента ID.',
            'Место рождения' => 'Место рождения. Введите город или населённый пункт, как указано в паспорте. Если в документе отсутствует город/населенный пункт, то передавать данные согласно документу (район, край/область). Если в документе не указано место рождения, то передать в этом поле текст: «Данные о месте рождения в документе отсутствуют».',
            '8.Поле не используется' => 'Оставьте поле пустым',
            '9.Поле не используется' => 'Оставьте поле пустым',
            '10.Поле не используется' => 'Оставьте поле пустым',
            'Примечания' => 'Допустимыми значениями являются: 1= Умерший',
            'Фамилия до изменения' => 'Если клиент поменял фамилию, и его новая фамилия упоминается в поле Фамилия (позиция 2) в первый раз, то в данном поле должна быть указана фамилия до изменения. Если данное поле заполнено неправильно, то вводимая запись будет отвергнута. ',
            'Имя до изменения' => 'Если клиент поменял имя, и его новое имя упоминается в поле Имя (позиция 4) в первый раз, то в данном поле должно быть указано имя до изменения. Если данное поле заполнено неправильно, то вводимая запись будет отвергнута. Желательно, чтобы имя было указано полностью. Инициалы будут приняты, но их использование нежелательно. ',
        ];
    }
    
    public function getDescription(): string
    {
        return 'Сегмент NA содержит данные о частном лице и: <br>
            Является обязательным сегментом при предоставлении информации о физлице или ПБОЮЛ.<br>
            Может встречаться в записи только один раз.<br>';
    }
    
    public function getTitle(): string
    {
        return 'Сегмент имени (NA)';
    }
}