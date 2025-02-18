<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL31NonMonetarySubjectType
 *
 * Блок 31. Сведения о неденежном обязательстве субъекта
 * XSD Type: FL_31_NonMonetarySubject_Type
 */
class FL31NonMonetarySubjectType extends GutdfSegment
{
    /**
     * 31.1. Предмет обязательства
     *
     * @var string $item
     */
    private $item = null;

    /**
     * 31.3. Порядок исполнения обязательства
     *
     * @var string $fulfillment
     */
    private $fulfillment = null;

    /**
     * 31.4. Признак ненадлежащего исполнения обязательства = 0
     *
     * @var string $fulfillmentFailExist0
     */
    private $fulfillmentFailExist0 = null;

    /**
     * 31.4. Признак ненадлежащего исполнения обязательства = 1
     *
     * @var string $fulfillmentFailExist1
     */
    private $fulfillmentFailExist1 = null;

    /**
     * 31.5. Код полученного имущества
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as item
     *
     * 31.1. Предмет обязательства
     *
     * @return string
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * 31.1. Предмет обязательства
     *
     * @param string $item
     * @return self
     */
    public function setItem($item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * 31.3. Порядок исполнения обязательства
     *
     * @return string
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * 31.3. Порядок исполнения обязательства
     *
     * @param string $fulfillment
     * @return self
     */
    public function setFulfillment($fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * Gets as fulfillmentFailExist0
     *
     * 31.4. Признак ненадлежащего исполнения обязательства = 0
     *
     * @return string
     */
    public function getFulfillmentFailExist0()
    {
        return $this->fulfillmentFailExist0;
    }

    /**
     * Sets a new fulfillmentFailExist0
     *
     * 31.4. Признак ненадлежащего исполнения обязательства = 0
     *
     * @param string $fulfillmentFailExist0
     * @return self
     */
    public function setFulfillmentFailExist0($fulfillmentFailExist0)
    {
        $this->fulfillmentFailExist0 = $fulfillmentFailExist0;
        return $this;
    }

    /**
     * Gets as fulfillmentFailExist1
     *
     * 31.4. Признак ненадлежащего исполнения обязательства = 1
     *
     * @return string
     */
    public function getFulfillmentFailExist1()
    {
        return $this->fulfillmentFailExist1;
    }

    /**
     * Sets a new fulfillmentFailExist1
     *
     * 31.4. Признак ненадлежащего исполнения обязательства = 1
     *
     * @param string $fulfillmentFailExist1
     * @return self
     */
    public function setFulfillmentFailExist1($fulfillmentFailExist1)
    {
        $this->fulfillmentFailExist1 = $fulfillmentFailExist1;
        return $this;
    }

    /**
     * Gets as code
     *
     * 31.5. Код полученного имущества
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 31.5. Код полученного имущества
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_31_NonMonetarySubject';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Предмет обязательства' => 'Предмет обязательства субъекта согласно условиям договора.',
            'Порядок исполнения обязательства' => 'Заполняется согласно условиям договора.',
            'Признак ненадлежащего исполнения обязательства 0' => 'код «0» – субъект надлежаще исполняет свое обязательство.',
            'Признак ненадлежащего исполнения обязательства 1' => 'Код «1» – субъект не исполнил свое обязательство или его часть;',
            'Код полученного имущества' => 'Заполняется по справочнику 4.1.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 31. Сведения о неденежном обязательстве субъекта';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if(!isset($this->template->sendData->getAccountReplyRUTDF()->getSubjectNonMonetObligArray()[$this->idx])){
            return;
        }
        $model = $this->template->sendData->getAccountReplyRUTDF()->getSubjectNonMonetObligArray()[$this->idx];
        $this->item = $model->subjNonMonetOblig;
        $this->fulfillment = $model->subjNonMonetObligRegul;
        if($model->subjNonMonetObligAdverseCode){
            $this->fulfillmentFailExist0 = null;
            $this->fulfillmentFailExist1 = '';
        }else{
            $this->fulfillmentFailExist0 = '';
            $this->fulfillmentFailExist1 = null;
        }
        $this->code = $model->receivedpropCode;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'item',
            'fulfillment',
            'fulfillmentFailExist_0' => 'fulfillmentFailExist0',
            'fulfillmentFailExist_1' => 'fulfillmentFailExist1',
            'code'
        ];
    }
}

