<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL36ProvisionPaymentType\CodeGroupFL36ProvisionPaymentAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType;

/**
 * Class representing FL36ProvisionPaymentType
 *
 * Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения
 * XSD Type: FL_36_ProvisionPayment_Type
 */
class FL36ProvisionPaymentType extends GutdfSegment
{
    /**
     * 36.1. Признак погашения требований за счет обеспечения = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 36.1. Признак погашения требований за счет обеспечения = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * @var CodeGroupFL36ProvisionPaymentAType[] $codeGroupFL36ProvisionPayment
     */
    private $codeGroupFL36ProvisionPayment = [
        
    ];

    /**
     * Gets as exist0
     *
     * 36.1. Признак погашения требований за счет обеспечения = 0
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
     * 36.1. Признак погашения требований за счет обеспечения = 0
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
     * 36.1. Признак погашения требований за счет обеспечения = 1
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
     * 36.1. Признак погашения требований за счет обеспечения = 1
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
     * Adds as codeGroupFL36ProvisionPayment
     *
     * @return self
     * @param CodeGroupFL36ProvisionPaymentAType $codeGroupFL36ProvisionPayment
     */
    public function addToCodeGroupFL36ProvisionPayment(CodeGroupFL36ProvisionPaymentAType $codeGroupFL36ProvisionPayment)
    {
        $this->codeGroupFL36ProvisionPayment[] = $codeGroupFL36ProvisionPayment;
        return $this;
    }

    /**
     * isset codeGroupFL36ProvisionPayment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodeGroupFL36ProvisionPayment($index)
    {
        return isset($this->codeGroupFL36ProvisionPayment[$index]);
    }

    /**
     * unset codeGroupFL36ProvisionPayment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodeGroupFL36ProvisionPayment($index)
    {
        unset($this->codeGroupFL36ProvisionPayment[$index]);
    }

    /**
     * Gets as codeGroupFL36ProvisionPayment
     *
     * @return CodeGroupFL36ProvisionPaymentAType[]
     */
    public function getCodeGroupFL36ProvisionPayment()
    {
        return $this->codeGroupFL36ProvisionPayment;
    }

    /**
     * Sets a new codeGroupFL36ProvisionPayment
     *
     * @param CodeGroupFL36ProvisionPaymentAType[] $codeGroupFL36ProvisionPayment
     * @return self
     */
    public function setCodeGroupFL36ProvisionPayment(array $codeGroupFL36ProvisionPayment = null)
    {
        $this->codeGroupFL36ProvisionPayment = $codeGroupFL36ProvisionPayment;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_36_ProvisionPayment';
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
        return 'Блок 36. Сведения о погашении требований кредитора по обязательству за счет обеспечения';
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
            $this->addToCodeGroupFL36ProvisionPayment(new CodeGroupFL36ProvisionPaymentAType($this->template, $key));
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
            'codeGroupFL36ProvisionPayment',
        ];
    }
}

