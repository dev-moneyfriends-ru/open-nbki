<?php

namespace mfteam\nbch\components\tutdf\template\segments;

use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\Guarantor;

/**
 * Сегмент Дополнительные поручители (GR)
 */
class GRSegment extends BaseSegment
{
    /**
     * @var string
     */
    private $sequenceNumber;
    /**
     * @var Guarantor
     */
    private $guarantor;
    
    public function __construct(TutdfTemplate $template, string $sequenceNumber, Guarantor $guarantor, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->guarantor = $guarantor;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if(!$this->guarantor->validate()){
            $this->_errors = $this->guarantor->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'GR'. $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
       return [
           $this->getSegmentName(),
           $this->agreementNumber(),
           $this->guarantor->guaranteeVolumeCode,
           $this->guarantor->guaranteeAmt,
           $this->guarantor->guaranteeTerm,
           $this->guarantor->currencyCode
       ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => 'Должен содержать буквы и цифры GR01 для первого дополнительного поручителя, GR02 для второго и т.д. Допустимо до 99 сегментов GR на каждую запись.',
            'Идентификатор поручительства' => 'Сквозной уникальный идентификатор записи о поручительстве.',
            'Объем обязательства, обеспечиваемого поручительством' => 'Полностью = F;Частично = P',
            'Сумма поручительства' => 'Сумма составляет положительное целое число.',
            'Срок поручительства' => 'Дата истечения предоставленного поручительства.',
            'Код валюты' => 'В поле передается код валюты суммы поручительства, по стандарту ISO.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '*	используйте данный сегмент только для передачи данных о дополнительных поручителях по кредиту. Данные по основному (или единственному) поручителю передавайте в сегменте Сделка (TR)<br>
                *	рекомендации по выгрузке информации в случае, когда валюта обеспечения отличается от валюты займа (кредита), указаны в соответствующих Разъяснениях, в Приложении C<br>
                *	сегмент может передаваться только вместе с сегментом Сделка (TR) и находиться в записи до него<br>
                *	по заемщику – сегмент обязателен только при наличии второго, третьего и т.д. поручителя и только при наличии изменений, то есть если ранее уже были выгружены сведения по поручителю, то повторно передавать ту же информацию без изменений не требуется<br>
                *	по поручителю – сегмент не передается, все данные должны быть переданы в сегменте Сделка (TR)<br>
                *	по принципалу – сегмент не передается
                ';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
       return 'Сегмент Дополнительные поручители (GR)';
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