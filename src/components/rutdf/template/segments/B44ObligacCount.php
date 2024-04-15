<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 44. Сведения об учете обязательства – B44_OBLIGACCOUNT
 */
class B44ObligacCount extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B44_OBLIGACCOUNT";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $trade = $this->template->sendData->getAccountReplyRUTDF();
        return [
            $this->getSegmentName(),
            $trade->obligAccountCode,
            $this->formatCurrency($trade->intRate),
            $trade->obligAccountCode ? self::EMPTY_VALUE : $this->formatCurrency($trade->offbalanceAmt),
            $trade->preferenFinanc,
            $trade->preferenFinancInfo,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Признак учета обязательства' => 'Код «1» – обязательство учтено у источника на балансовых счетах; код «0» – обстоятельство кода «1» отсутствует, в том числе в случае если обязательство частично учтено на внебалансовых счетах.',
            'Процентная ставка' => 'Значение процентной ставки в соответствии с условиями сделки.',
            'Сумма обязательства, учтенная на внебалансовых счетах' => 'Заполняется, в случае если по показателю 54.1 «Признак учета обязательства» указан код «0». Сумма обязательства, которая учтена на внебалансовых счетах источника.',
            'Признак льготного финансирования с государственной поддержкой' => 'код «1» – в случае если заем (кредит) или предмет лизинга получен субъектом в рамках программы льготного финансирования с государственной поддержкой; код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Информация о программе государственной поддержки' => 'Регистрационный номер, дата и наименование нормативного акта, которым утверждена программа льготного финансирования с государственной поддержкой.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 44. Сведения об учете обязательства, о льготном финансировании с государственной поддержкой и процентной ставке – B44_OBLIGACCOUNT";
    }
    
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
    public function getDescription(): string
    {
        return '';
    }
}