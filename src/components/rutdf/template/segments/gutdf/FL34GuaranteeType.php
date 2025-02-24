<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL34GuaranteeType\UidGroupFL34GuaranteeAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\UL25GuaranteeType\UidGroupUL25GuaranteeAType;

/**
 * Class representing FL34GuaranteeType
 *
 * Блок 34. Сведения о независимой гарантии
 * XSD Type: FL_34_Guarantee_Type
 */
class FL34GuaranteeType extends GutdfSegment
{
    /**
     * 34.1. Признак наличия независимой гарантии = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 34.1. Признак наличия независимой гарантии = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * @var UidGroupFL34GuaranteeAType[] $uidGroupFL34Guarantee
     */
    private $uidGroupFL34Guarantee = [
        
    ];

    /**
     * Gets as exist0
     *
     * 34.1. Признак наличия независимой гарантии = 0
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
     * 34.1. Признак наличия независимой гарантии = 0
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
     * 34.1. Признак наличия независимой гарантии = 1
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
     * 34.1. Признак наличия независимой гарантии = 1
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
     * Adds as uidGroupFL34Guarantee
     *
     * @param UidGroupFL34GuaranteeAType $uidGroupFL34Guarantee
     *@return self
     */
    public function addToUidGroupFL34Guarantee(UidGroupFL34GuaranteeAType $uidGroupFL34Guarantee)
    {
        $this->uidGroupFL34Guarantee[] = $uidGroupFL34Guarantee;
        return $this;
    }

    /**
     * isset uidGroupFL34Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUidGroupFL34Guarantee($index)
    {
        return isset($this->uidGroupFL34Guarantee[$index]);
    }

    /**
     * unset uidGroupFL34Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUidGroupFL34Guarantee($index)
    {
        unset($this->uidGroupFL34Guarantee[$index]);
    }

    /**
     * Gets as uidGroupFL34Guarantee
     *
     * @return UidGroupFL34GuaranteeAType[]
     */
    public function getUidGroupFL34Guarantee()
    {
        return $this->uidGroupFL34Guarantee;
    }

    /**
     * Sets a new uidGroupFL34Guarantee
     *
     * @param UidGroupFL34GuaranteeAType[] $uidGroupFL34Guarantee
     * @return self
     */
    public function setUidGroupFL34Guarantee(array $uidGroupFL34Guarantee = null)
    {
        $this->uidGroupFL34Guarantee = $uidGroupFL34Guarantee;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_34_Guarantee';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия независимой гарантии 0' => 'Код «1» – исполнение обязательства обеспечено независимой гарантией; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
            'Признак наличия независимой гарантии 1' => 'Код «1» – исполнение обязательства обеспечено независимой гарантией; код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока не передаются в соответствии со схемой Blocks.xsd.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 34. Сведения о независимой гарантии';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $guaranties = $this->sendData->getAccountReplyRUTDF()->getIndepGuarantor();
        if(empty($guaranties)){
            $this->exist0 = '';
            $this->exist1 = null;
            return;
        }
        $this->exist1 = '';
        $this->exist0 = null;

        foreach ($guaranties as $key => $guaranty){
            $this->addToUidGroupFL34Guarantee(new UidGroupFL34GuaranteeAType($this->template, $key));
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
            'uidGroupFL34Guarantee',
        ];
    }

    public function getFields(): array
    {
        return [
            'exist_0' => $this->exist0,
            'exist_1' => $this->exist1,
        ];
    }
}

