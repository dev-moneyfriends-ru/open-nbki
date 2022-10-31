<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 27.05.2020
 * Time: 9:36
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Identification;

/**
 * Идентифицирующий сегмент (ID)
 * Class IDSegment
 * @package common\modules\nbki\components\templates\segments
 *
 * @property string $number
 * @property array $fields
 * @property string $type
 * @property string $issueDate
 * @property string $issueAuthority
 * @property string $seriesNumber
 * @property string $segmentName
 */
abstract class IDSegment extends BaseSegment
{
    /**
     * @var int
     */
    private $sequenceNumber;
    
    /**
     * IDSegment constructor.
     * @param TUTDFTemplate $template
     * @param string $sequenceNumber Порядковый номер поля, должен начинаться минимальное значение 01, максимальное 99
     * @param array $config
     */
    public function __construct(TUTDFTemplate $template, string $sequenceNumber, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        $typeId = (int)$this->getType();
        if ($typeId < 28) {
            if (empty($this->getIssueDate())) {
                $this->errors[] = 'Отсутствует дата выдачи документа'.$this->getIssueDate();
            }
            if (empty($this->getIssueAuthority())) {
                $this->errors[] = 'Отсутствует поле кем выдан документа';
            }
        }
        if (empty($this->seriesNumber) && in_array($typeId, [1, 2, 21, 22])) {
            $this->errors[] = 'Отсутствует поле Серийный номер документа';
        }
        if ($typeId !== 97 && empty($this->number)) {
            $this->errors[] = 'Отсутствует поле номер документа';
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'ID' . $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->getType(),
            $this->getSeriesNumber(),
            $this->getNumber(),
            $this->getIssueDate(),
            $this->getIssueAuthority(),
            $this->emptyValue,
            $this->emptyValue,
        ];
    }
    
    /**
     * Номер типа сегмента. @see Identification::typeList()
     * @return string
     */
    abstract public function getType(): string;
    
    /**
     * Серийный номер.
     * Как указано в официальном юридическом документе. Должен использоваться для ID Type 01, 02, 21 и 22
     * @return string
     */
    public function getSeriesNumber(): string
    {
        return $this->emptyValue;
    }
    
    /**
     * Номер документа как указано в документе. Поле не заполняется (остается пустым) только при указании Типа ID 97 (Без указания СНИЛС)
     * @return string
     */
    abstract public function getNumber(): string;
    
    /**
     * Когда выдан. Это поле должно быть если значение поля ID Type меньше 28. Данное поле должно содержать фактическую дату по календарю в формате ГГГГММДД.
     * Не может быть ранее Даты рождения сегмента имени NA
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->emptyValue;
    }
    
    /**
     * Кем выдан. Название отделения внутренних дел МВД РФ или другого органа выдачи, код подразделения,
     * выдавшего паспорт или иной документ, удостоверяющий личность. Это поле должно быть, если значение поля ID Type меньше 28.
     * @return string
     */
    public function getIssueAuthority(): string
    {
        return $this->emptyValue;
    }
    
    public  function getFieldsDescriptions(): array
    {
        return [
            'Название сегмента' => 'Данное поле должно содержать значение ID01 для первого ID, ID02 для второго ID и далее таким же образом. Максимальное допустимое число ID – 99.',
            'Тип ID' => '',
            'Номер серии' => 'Как указано в официальном юридическом документе. Должен использоваться для ID Type 01, 02, 21 и 22',
            'Номер документа' => 'Как указано в документе. Поле не заполняется (остается пустым) только при указании Типа ID 97 (Без указания СНИЛС)',
            'Когда выдан' => 'Это поле должно быть если значение поля ID Type меньше 28. Данное поле должно содержать фактическую дату по календарю в формате ГГГГММДД. Не может быть ранее Даты рождения сегмента имени NA.',
            'Кем выдан' => 'Название отделения внутренних дел МВД РФ или другого органа выдачи, код подразделения, выдавшего паспорт или иной документ, удостоверяющий личность. Это поле должно быть, если значение поля ID Type меньше 28. Поле будет удалено, если передаваемые данные некорректны. См. раздел «Искажение данных»',
            '7.Поле не используется' => 'Не используется с 31.01.2019.',
            '8.Поле не используется' => 'Оставьте поле пустым.'
        ];
    }
    
    public function getDescription(): string
    {
        return 'Идентифицирующий сегмент ID содержит идентифицирующие номера, присваиваемые физическому лицу, юридическому лицу или частному предпринимателю (ПБЮЛ)';
    }
    
    public function getTitle(): string
    {
        return 'Идентифицирующий сегмент (ID)';
    }
}