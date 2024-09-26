<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL5ReorgType
 *
 * Блок 5. Сведения о смене наименования либо правопреемстве при реорганизации
 * XSD Type: UL_5_Reorg_Type
 */
class UL5ReorgType
{
    /**
     * 5.2. Признак реорганизации = 0
     *
     * @var string $exist0
     */
    private $exist0 = null;

    /**
     * 5.2. Признак реорганизации = 1
     *
     * @var string $exist1
     */
    private $exist1 = null;

    /**
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @var string[] $fullName
     */
    private $fullName = [
        
    ];

    /**
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @var string[] $shortName
     */
    private $shortName = [
        
    ];

    /**
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 5.6. Дата правопреемства (окончания реорганизации)
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as exist0
     *
     * 5.2. Признак реорганизации = 0
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
     * 5.2. Признак реорганизации = 0
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
     * 5.2. Признак реорганизации = 1
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
     * 5.2. Признак реорганизации = 1
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
     * Adds as fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @return self
     * @param string $fullName
     */
    public function addToFullName($fullName)
    {
        $this->fullName[] = $fullName;
        return $this;
    }

    /**
     * isset fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFullName($index)
    {
        return isset($this->fullName[$index]);
    }

    /**
     * unset fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFullName($index)
    {
        unset($this->fullName[$index]);
    }

    /**
     * Gets as fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @return string[]
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 5.3. Полное наименование лица, от которого перешли права и обязанности
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName(array $fullName = null)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Adds as shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @return self
     * @param string $shortName
     */
    public function addToShortName($shortName)
    {
        $this->shortName[] = $shortName;
        return $this;
    }

    /**
     * isset shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShortName($index)
    {
        return isset($this->shortName[$index]);
    }

    /**
     * unset shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShortName($index)
    {
        unset($this->shortName[$index]);
    }

    /**
     * Gets as shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @return string[]
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 5.4. Сокращенное наименование лица, от которого перешли права и обязанности
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName(array $shortName = null)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
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
     * 5.5. Регистрационный номер лица, от которого перешли права и обязанности
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
     * Gets as date
     *
     * 5.6. Дата правопреемства (окончания реорганизации)
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 5.6. Дата правопреемства (окончания реорганизации)
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }
}

