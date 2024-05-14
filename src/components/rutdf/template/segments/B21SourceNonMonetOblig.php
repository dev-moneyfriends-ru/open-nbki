<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 * Блок 21. Сведения о неденежном обязательстве источника - B21_SOURCENONMONETOBLIG
 */
class B21SourceNonMonetOblig extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B21_SOURCENONMONETOBLIG";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        $model = $this->template->sendData->getAccountReplyRUTDF()->getSourceNonMonetOblig();
        $trade = $this->template->sendData->getAccountReplyRUTDF()->getTrade();
        if($trade === null || $trade->isMoneySource){
            return [];
        }
        if ($model === null) {
            throw new \LogicException();
        }
        return [
            $this->getSegmentName(),
            $this->formatString($model->srcNonMonetOblig),
            $model->srcNonMonetObligCode,
            self::EMPTY_VALUE,
            $this->formatDate($model->srcNonMonetObligDt),
            $model->srcNonMonetObligCodeIdent,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Наименование сегмента' => '',
            'Предмет обязательства' => 'Предмет обязательства источника согласно условиям договора.',
            'Код предоставляемого имущества' => 'Заполняется по справочнику 4.1.',
            'Объект предоставления' => 'Не заполняется, начиная с версии 5.0 настоящего формата (на основании Указания Банка России 6300-У). В предыдущих версиях в этом показателе указывалось имущество, которое источник должен передать субъекту.',
            'Дата передачи имущества субъекту' => 'Дата передачи имущества субъекту или возникновения неденежного поручительства.',
            'Идентификационный код предоставляемого имущества' => 'Указывается: кадастровый номер – для имеющей такой номер недвижимости; идентификационный номер транспортного средства (VIN) – для имеющего такой номер транспортного средства; код по Общероссийскому классификатору основных фондов (далее – ОКОФ) или заводской номер – для промышленных машин и оборудования; штриховой код – для имеющего такой код товара;  уникальный идентификатор финансового инструмента в торговой системе (тикер) – для имеющих такой идентификатор ценной бумаги или иного финансового инструмента. Для предметов залога, не поименованных выше, указывается предусмотренное договором обозначение.',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 21. Сведения о неденежном обязательстве источника - B21_SOURCENONMONETOBLIG';
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Блок формируется, если по показателю 11.8 «Признак денежного обязательства источника» блока 11 указан код «0». Сведения указываются согласно условиям сделки. Показатели в блоке не заполняются (обязательные заполняются дефисом) при передаче сведений о поручительстве и независимой гарантии до наступления ответственности поручителя или обязанности принципала возместить гаранту выплаченную сумму соответственно (11.1 = 2 или 3, 11.3 = 6-8 или 9-13, 17.1=0).';
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
}