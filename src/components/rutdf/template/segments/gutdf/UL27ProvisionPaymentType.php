<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType;

/**
 * Class representing UL27ProvisionPaymentType
 *
 * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
 * XSD Type: UL_27_ProvisionPayment_Type
 */
class UL27ProvisionPaymentType extends GutdfSegment
{
    /**
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * @var CodeGroupUL27ProvisionPaymentAType[] $codeGroupUL27ProvisionPayment
     */
    private $codeGroupUL27ProvisionPayment = [
        
    ];

    /**
     * Gets as exist0
     *
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @return string
     */
    public function getExist0()
    {
        return $this->exist0;
    }

    /**
     * Sets a new exist0
     *
     * 27.1. Признак погашения требований за счет обеспечения = 0
     *
     * @param string $exist0
     * @return self
     */
    public function setExist0($exist0)
    {
        $this->exist0 = $exist0;
        return $this;
    }

    /**
     * Gets as exist1
     *
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @return string
     */
    public function getExist1()
    {
        return $this->exist1;
    }

    /**
     * Sets a new exist1
     *
     * 27.1. Признак погашения требований за счет обеспечения = 1
     *
     * @param string $exist1
     * @return self
     */
    public function setExist1($exist1)
    {
        $this->exist1 = $exist1;
        return $this;
    }

    /**
     * Adds as codeGroupUL27ProvisionPayment
     *
     * @param CodeGroupUL27ProvisionPaymentAType $codeGroupUL27ProvisionPayment
     *@return self
     */
    public function addToCodeGroupUL27ProvisionPayment(CodeGroupUL27ProvisionPaymentAType $codeGroupUL27ProvisionPayment)
    {
        $this->codeGroupUL27ProvisionPayment[] = $codeGroupUL27ProvisionPayment;
        return $this;
    }

    /**
     * isset codeGroupUL27ProvisionPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodeGroupUL27ProvisionPayment($index)
    {
        return isset($this->codeGroupUL27ProvisionPayment[$index]);
    }

    /**
     * unset codeGroupUL27ProvisionPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodeGroupUL27ProvisionPayment($index)
    {
        unset($this->codeGroupUL27ProvisionPayment[$index]);
    }

    /**
     * Gets as codeGroupUL27ProvisionPayment
     *
     * @return CodeGroupUL27ProvisionPaymentAType[]
     */
    public function getCodeGroupUL27ProvisionPayment()
    {
        return $this->codeGroupUL27ProvisionPayment;
    }

    /**
     * Sets a new codeGroupUL27ProvisionPayment
     *
     * @param CodeGroupUL27ProvisionPaymentAType[] $codeGroupUL27ProvisionPayment
     * @return self
     */
    public function setCodeGroupUL27ProvisionPayment(array $codeGroupUL27ProvisionPayment = null)
    {
        $this->codeGroupUL27ProvisionPayment = $codeGroupUL27ProvisionPayment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_27_ProvisionPayment';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
          'Признак погашения требований за счет обеспечения 0' => 'Код «1» – в случае если требования источника к субъекту были полностью или частично погашены за счет обеспечения; код «0» – в случае если обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
          'Признак погашения требований за счет обеспечения 1' => 'Код «1» – в случае если требования источника к субъекту были полностью или частично погашены за счет обеспечения; код «0» – в случае если обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
        ];
    }

    public function getFields():array
    {
        return [
            'exist_0' => $this->exist0,
            'exist_1' => $this->exist1,
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $provisions = $this->sendData->getAccountReplyRUTDF()->getCollatRepay();
        if(empty($provisions)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }

        $this->exist0 = '';
        $this->exist1 = null;

        foreach ($provisions as $key => $provision){
            $this->addToCodeGroupUL27ProvisionPayment(new CodeGroupUL27ProvisionPaymentAType($this->template, $key));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'exist_0' => 'exist0',
            'exist_1' => 'exist1',
            'codeGroupUL27ProvisionPayment',
        ];
    }
}

