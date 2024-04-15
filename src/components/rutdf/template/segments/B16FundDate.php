<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 16. Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства – B16_FUNDDATE
 */
class B16FundDate extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B16_FUNDDATE";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->formatDate($this->template->sendData->getAccountReplyRUTDF()->fundDate),
            $this->template->sendData->getAccountReplyRUTDF()->trancheNum ?? self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Дата передачи финансирования субъекту или возникновения обеспечения исполнения обязательства' => 'В КИ заемщика или лизингополучателя указывается дата передачи ему суммы займа (кредита) или каждого предмета лизинга, в КИ принципала по независимой гарантии или поручителя – соответственно дата выдачи гарантии или дата возникновения поручительства. По обязательству источника выдавать сумму займа (кредита) траншами или в пределах расходного лимита указывается дата передачи каждого транша, за исключением выданного с использованием платежной карты, и займа (кредита), предоставленного на условиях овердрафта.',
            'Порядковый номер транша' => 'Заполняется для займа (кредита), который выдается траншами, за исключением выданного с использованием платежной карты, и займа (кредита), предоставленного на условиях овердрафта',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 16. Сведения о передаче финансирования субъекту или о возникновении обеспечения исполнения обязательства – B16_FUNDDATE';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->template->sendData->getAccountReplyRUTDF()->fundDate)) {
            $this->errors[] = 'Отсутствует fundDate';
        }
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }
}