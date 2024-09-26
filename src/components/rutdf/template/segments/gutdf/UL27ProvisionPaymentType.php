<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL27ProvisionPaymentType
 *
 * Блок 27. Сведения о погашении требований кредитора по обязательству за счет обеспечения
 * XSD Type: UL_27_ProvisionPayment_Type
 */
class UL27ProvisionPaymentType
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
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType[] $codeGroupUL27ProvisionPayment
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType $codeGroupUL27ProvisionPayment
     *@return self
     */
    public function addToCodeGroupUL27ProvisionPayment(\mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType $codeGroupUL27ProvisionPayment)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType[]
     */
    public function getCodeGroupUL27ProvisionPayment()
    {
        return $this->codeGroupUL27ProvisionPayment;
    }

    /**
     * Sets a new codeGroupUL27ProvisionPayment
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\UL27ProvisionPaymentType\CodeGroupUL27ProvisionPaymentAType[] $codeGroupUL27ProvisionPayment
     * @return self
     */
    public function setCodeGroupUL27ProvisionPayment(array $codeGroupUL27ProvisionPayment = null)
    {
        $this->codeGroupUL27ProvisionPayment = $codeGroupUL27ProvisionPayment;
        return $this;
    }
}

