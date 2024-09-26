<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent12Type
 *
 * Источник одобрил обращение субъекта (направил ему оферту) или изменились сведения об обращении
 * XSD Type: FL_Event_1_2_Type
 */
class FLEvent12Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     */
    private $fL291DebtBurdenInfo = null;

    /**
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application
     */
    private $fL55Application = null;

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * Sets a new operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @param string $operationCode
     * @return self
     */
    public function setOperationCode($operationCode)
    {
        $this->operationCode = $operationCode;
        return $this;
    }

    /**
     * Gets as fL291DebtBurdenInfo
     *
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType
     */
    public function getFL291DebtBurdenInfo()
    {
        return $this->fL291DebtBurdenInfo;
    }

    /**
     * Sets a new fL291DebtBurdenInfo
     *
     * Блок 29(1). Сведения о долговой нагрузке заемщика
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo
     * @return self
     */
    public function setFL291DebtBurdenInfo(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL291DebtBurdenInfoType $fL291DebtBurdenInfo = null)
    {
        $this->fL291DebtBurdenInfo = $fL291DebtBurdenInfo;
        return $this;
    }

    /**
     * Gets as fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType
     */
    public function getFL55Application()
    {
        return $this->fL55Application;
    }

    /**
     * Sets a new fL55Application
     *
     * Блок 55. Сведения об обращении субъекта к источнику с предложением совершить сделку
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application
     * @return self
     */
    public function setFL55Application(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL55ApplicationType $fL55Application)
    {
        $this->fL55Application = $fL55Application;
        return $this;
    }
}

