<?php

namespace mfteam\nbch\components\tutdf\template\segments;

use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Collateral;

/**
 * Сегмент Дополнительные залоги (CL)
 */
class CLSegment extends BaseSegment
{
    /**
     * @var string
     */
    private $sequenceNumber;
    /**
     * @var Collateral
     */
    private $collateral;
    
    public function __construct(TutdfTemplate $template, string $sequenceNumber, Collateral $collateral, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->collateral = $collateral;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if ($this->collateral->validate()) {
            $this->_errors = $this->collateral->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'CL' . $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->agreementNumber(),
            $this->collateral->collateralCode,
            $this->collateral->collateralValue,
            $this->formatDate($this->collateral->collateralDate),
            $this->formatDate($this->collateral->collateralExpirationDate),
            $this->collateral->currencyCode,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => 'Должен содержать буквы и цифры CL01 для первого дополнительного залога, CL02 для второго и т.д. Допустимо до 99 сегментов CL на каждую запись.',
            'Идентификатор залога' => 'Сквозной уникальный идентификатор записи о залоге.',
            'Код залога' => 'Активы, используемые в качестве обеспечения для данной сделки, в том числе для поручителя.',
            'Оценочная стоимость залога' => 'Оценка предмета залога. Значение может быть только неотрицательным.',
            'Дата оценки стоимости залога' => 'Дата проведения оценки предмета залога.',
            'Срок действия договора залога' => 'Дата окончания срока действия договора залога.',
            'Код валюты' => 'В поле передается код валюты оценочной стоимости залога, по стандарту ISO.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '*	используйте данный сегмент только для передачи информации о дополнительных залогах. Данные по основному (или единственному) залогу передавайте в сегменте Сделка (TR) <br>
                *	рекомендации по выгрузке информации в случае, когда валюта обеспечения отличается от валюты займа (кредита), указаны в соответствующих Разъяснениях, в Приложении C<br>
                *	сегмент может передаваться только вместе с сегментом Сделка (TR) и находиться в записи до него<br>
                *	по заемщику – сегмент обязателен только при наличии второго, третьего и т.д. залога и только при наличии изменений, то есть если ранее уже были выгружены сведения по залогу, то повторно передавать ту же информацию без изменений не требуется<br>
                *	по поручителю – сегмент не передается до даты начала выполнения им обязательств заемщика, после наступления этой даты – обязательно при наличии второго, третьего и т.д. залога у поручителя<br>
                *	по принципалу – сегмент не передается
                ';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Сегмент Дополнительные залоги (CL)';
    }
    
    /**
     * Сквозной уникальный идентификатор записи о залоге.
     * @return string
     */
    private function agreementNumber(): string
    {
        $fields = $this->fields;
        unset($fields[1]);
        return md5(implode($fields));
    }
}