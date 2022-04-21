<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 30.05.2020
 * Time: 11:20
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Address;

/**
 * Сегмент адреса
 * Class ADSegment
 * @package common\modules\nbki\components\templates\segments
 */
class ADSegment extends BaseSegment
{
    
    /**
     * @var string
     */
    private $sequenceNumber;
    
    /**
     * @var Address
     */
    private $address;
    
    
    public function __construct(TUTDFTemplate $template, string $sequenceNumber, Address $address, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->address = $address;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $this->address->validate();
        if($this->address->hasErrors()){
            $this->_errors = $this->address->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'AD' . $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->address->addressType,
            $this->address->postal??$this->emptyValue,
            $this->address->countryCode??$this->emptyValue,
            $this->address->prov??$this->emptyValue,
            $this->emptyValue,
            $this->address->district??$this->emptyValue,
            $this->address->city,
            $this->address->streetType??$this->emptyValue,
            $this->address->street??$this->emptyValue,
            $this->address->houseNumber??$this->emptyValue,
            $this->address->block??$this->emptyValue,
            $this->address->building??$this->emptyValue,
            $this->address->apartment??$this->emptyValue,
            $this->address->resStat??$this->emptyValue,
            $this->address->addrSinceDt??$this->emptyValue,
        ];
    }
    
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => 'Данное поле должно содержать буквы AD01 для первого адреса и AD02 для второго адреса ',
            'Тип адреса' => 'Допустимыми значениями являются:
                            1= Адрес регистрации (только для физлиц)
                            2= Адрес фактического местожительства (только для физлиц)
                            3= Юридический адрес (только для юрлиц)
                            4= Фактический адрес (только для юрлиц)
                            ',
            'Почтовый индекс' => 'Должен состоять из шести цифр. Не заполняется для иностранных адресов.',
            'Страна' => 'Страна',
            'Регион' => 'Регион',
            '6.Поле не используется' => 'Оставьте поле пустым',
            'Район' => 'Содержит наименование района',
            'Местоположение' => 'Содержит город или населённый пункт.',
            'Тип улицы' => 'Тип улицы ',
            'Улица' => 'Название улицы. Поле будет удалено, если передаваемые данные некорректны. См. раздел «Искажение данных». В случае отсутствия улиц в населенном пункте продублировать его название из поля «Местоположение».',
            'Номер дома' => 'Номер дома',
            'Корпус' => 'Корпус',
            'Строение' => 'Строение',
            'Квартира' => 'Квартира',
            'Статус' => 'Статус адреса. Допустимыми значениями являются:
                        1 = Собственность
                        2 = Аренда дома/квартиры
                        3 = Предоставлено/Оплачено государством/Муниципальная собственность
                        4 = Предоставлено/Оплачено третьей стороной
                        5 = Другое
                        ',
            'Дата прописки/ регистрации' => 'Дата прописки физического лица или же дата регистрации предприятия по данному адресу.',
        ];
    }
    
    public function getDescription(): string
    {
        return 'Сегмент (сегменты) AD включает (включают) в себя известные адреса субъектов и:<br>
                Является обязательным сегментом.<br>
                Должен включать адрес прописки и адрес проживания физического лица (сегмент NA)<br>
                Должен включать фактический адрес юридического лица (сегмент BU)';
    }
    
    public function getTitle(): string
    {
        return 'Сегмент адреса (AD)';
    }
    
}