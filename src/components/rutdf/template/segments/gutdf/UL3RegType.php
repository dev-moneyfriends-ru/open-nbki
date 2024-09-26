<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL3RegType
 *
 * Блок 3. Регистрационный номер
 * XSD Type: UL_3_Reg_Type
 */
class UL3RegType
{
    /**
     * 3.1. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 3.2. Идентификатор LEI
     *
     * @var string $lei
     */
    private $lei = null;

    /**
     * Gets as regNum
     *
     * 3.1. Регистрационный номер
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 3.1. Регистрационный номер
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as lei
     *
     * 3.2. Идентификатор LEI
     *
     * @return string
     */
    public function getLei()
    {
        return $this->lei;
    }

    /**
     * Sets a new lei
     *
     * 3.2. Идентификатор LEI
     *
     * @param string $lei
     * @return self
     */
    public function setLei($lei)
    {
        $this->lei = $lei;
        return $this;
    }
}

