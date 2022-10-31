<?php

namespace mfteam\nbch\components\tutdf\template\segments;

use mfteam\nbch\components\BaseSegment;
use mfteam\nbch\components\tutdf\template\TutdfTemplate;
use mfteam\nbch\models\BankGuarantee;

/**
 * Сегмент Дополнительные банковские гарантии (BG)
 */
class BGSegment extends BaseSegment
{
    /**
     * @var string
     */
    private $sequenceNumber;
    /**
     * @var BankGuarantee
     */
    private $bankGuarantee;
    
    public function __construct(TutdfTemplate $template, string $sequenceNumber, BankGuarantee $bankGuarantee, $config = [])
    {
        $this->sequenceNumber = $sequenceNumber;
        $this->bankGuarantee = $bankGuarantee;
        parent::__construct($template, $config);
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (!$this->bankGuarantee->validate()) {
            $this->errors = $this->bankGuarantee->errors;
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'BG' . $this->sequenceNumber;
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->agreementNumber(),
            $this->bankGuarantee->bankGuaranteeVolumeCode,
            $this->bankGuarantee->bankGuaranteeAmt,
            $this->bankGuarantee->bankGuaranteeTerm,
            $this->bankGuarantee->bankGuaranteeOtherTermination,
            $this->bankGuarantee->currencyCode,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => 'Должен содержать буквы и цифры BG01 для первой дополнительной банковской гарантии, BG02 для второй и т.д. Допустимо до 99 сегментов BG на каждую запись.',
            'Идентификатор банковской гарантии' => 'Сквозной уникальный идентификатор записи о банковской гарантии.',
            'Объем обязательства, обеспечиваемого банковской гарантией' => 'Поле обязательно к передаче, если известно.Полностью = F;Частично = P',
            'Сумма банковской гарантии' => 'Сумма составляет положительное целое число. Если сумма превышает 9,999,999,999, данные сообщаются в виде десяти девяток',
            'Срок банковской гарантии' => 'Срок предоставленной гарантии.
                Если срок банковской гарантии изменяется, в этом поле необходимо передать новую дату.
                Если банковская гарантия прекращена раньше срока, в этом поле необходимо поставить дату ее прекращения.
                ',
            'Иные случаи прекращения банковской гарантии' => 'Информация о прекращении банковской гарантии в иных, отличных от окончания срока гарантии случаях',
            'Код валюты' => 'В поле передается код валюты суммы банковской гарантии, по стандарту ISO.',
        
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '*	используйте данный сегмент только для передачи данных о дополнительных банковских гарантиях по кредиту. Данные по основной (или единственной) банковской гарантии передавайте в сегменте Сделка (TR)
                *	рекомендации по выгрузке информации в случае, когда валюта обеспечения отличается от валюты займа (кредита), указаны в соответствующих Разъяснениях, в Приложении C
                *	сегмент может передаваться только вместе с сегментом Сделка (TR) и находиться в записи до него
                *	по заемщику – сегмент обязателен только при наличии второй, третьей и т.д. банковской гарантии и только при наличии изменений, то есть если ранее уже были выгружены сведения по гарантии, то повторно передавать ту же информацию без изменений не требуется
                *	по поручителю – сегмент не передается до даты начала выполнения им обязательств заемщика, после наступления этой даты – обязательно при наличии второй, третьей и т.д. банковской гарантии у поручителя
                *	по принципалу – сегмент не передается, все данные должны быть переданы в сегменте Сделка (TR) (кроме случая выгрузки информации о прекращении банковской гарантии в иных, отличных от окончания срока гарантии случаях, и если эта информация была ранее передана в сегменте Сделка (TR) – см. Приложение С Разъяснения по выгрузке информации о прекращении банковской гарантии в иных, отличных от окончания срока гарантии случаях)
                ';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Сегмент Дополнительные банковские гарантии (BG)';
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