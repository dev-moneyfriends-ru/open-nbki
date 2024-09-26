<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\Document;

/**
 * Class representing DocumentAType
 */
class DocumentAType
{
    /**
     * Версия схемы
     *
     * @var string $schemaVersion
     */
    private $schemaVersion = null;

    /**
     * ИНН
     *
     * @var string $inn
     */
    private $inn = null;

    /**
     * ОГРН или ОГРНИП
     *
     * @var string $ogrn
     */
    private $ogrn = null;

    /**
     * ID источника
     *
     * @var string $sourceID
     */
    private $sourceID = null;

    /**
     * Регистрационный номер документа, содержащего кредитную информацию
     *
     * @var string $regNumberDoc
     */
    private $regNumberDoc = null;

    /**
     * Дата документа, содержащего кредитную информацию
     *
     * @var \DateTime $dateDoc
     */
    private $dateDoc = null;

    /**
     * Количество субъектов, сведения о которых указаны в документе, содержащем кредитную информацию
     *
     * @var int $subjectsCount
     */
    private $subjectsCount = null;

    /**
     * Количество групп блоков показателей в документе, содержащем кредитную информацию
     *
     * @var int $groupBlocksCount
     */
    private $groupBlocksCount = null;

    /**
     * Исходящий регистрационный номер документа, содержащего кредитную информацию, с ранее не принятой информацией - для документа, содержащего кредитную информацию, которая ранее была не принята
     *
     * @var string $regNumberDocInaccept
     */
    private $regNumberDocInaccept = null;

    /**
     * Сведения об источнике формирования кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\SourceAType $source
     */
    private $source = null;

    /**
     * Сведения о субъектах и событиях в кредитной истории
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType $data
     */
    private $data = null;

    /**
     * Gets as schemaVersion
     *
     * Версия схемы
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * Sets a new schemaVersion
     *
     * Версия схемы
     *
     * @param string $schemaVersion
     * @return self
     */
    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    /**
     * Gets as inn
     *
     * ИНН
     *
     * @return string
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * Sets a new inn
     *
     * ИНН
     *
     * @param string $inn
     * @return self
     */
    public function setInn($inn)
    {
        $this->inn = $inn;
        return $this;
    }

    /**
     * Gets as ogrn
     *
     * ОГРН или ОГРНИП
     *
     * @return string
     */
    public function getOgrn()
    {
        return $this->ogrn;
    }

    /**
     * Sets a new ogrn
     *
     * ОГРН или ОГРНИП
     *
     * @param string $ogrn
     * @return self
     */
    public function setOgrn($ogrn)
    {
        $this->ogrn = $ogrn;
        return $this;
    }

    /**
     * Gets as sourceID
     *
     * ID источника
     *
     * @return string
     */
    public function getSourceID()
    {
        return $this->sourceID;
    }

    /**
     * Sets a new sourceID
     *
     * ID источника
     *
     * @param string $sourceID
     * @return self
     */
    public function setSourceID($sourceID)
    {
        $this->sourceID = $sourceID;
        return $this;
    }

    /**
     * Gets as regNumberDoc
     *
     * Регистрационный номер документа, содержащего кредитную информацию
     *
     * @return string
     */
    public function getRegNumberDoc()
    {
        return $this->regNumberDoc;
    }

    /**
     * Sets a new regNumberDoc
     *
     * Регистрационный номер документа, содержащего кредитную информацию
     *
     * @param string $regNumberDoc
     * @return self
     */
    public function setRegNumberDoc($regNumberDoc)
    {
        $this->regNumberDoc = $regNumberDoc;
        return $this;
    }

    /**
     * Gets as dateDoc
     *
     * Дата документа, содержащего кредитную информацию
     *
     * @return \DateTime
     */
    public function getDateDoc()
    {
        return $this->dateDoc;
    }

    /**
     * Sets a new dateDoc
     *
     * Дата документа, содержащего кредитную информацию
     *
     * @param \DateTime $dateDoc
     * @return self
     */
    public function setDateDoc(\DateTime $dateDoc)
    {
        $this->dateDoc = $dateDoc;
        return $this;
    }

    /**
     * Gets as subjectsCount
     *
     * Количество субъектов, сведения о которых указаны в документе, содержащем кредитную информацию
     *
     * @return int
     */
    public function getSubjectsCount()
    {
        return $this->subjectsCount;
    }

    /**
     * Sets a new subjectsCount
     *
     * Количество субъектов, сведения о которых указаны в документе, содержащем кредитную информацию
     *
     * @param int $subjectsCount
     * @return self
     */
    public function setSubjectsCount($subjectsCount)
    {
        $this->subjectsCount = $subjectsCount;
        return $this;
    }

    /**
     * Gets as groupBlocksCount
     *
     * Количество групп блоков показателей в документе, содержащем кредитную информацию
     *
     * @return int
     */
    public function getGroupBlocksCount()
    {
        return $this->groupBlocksCount;
    }

    /**
     * Sets a new groupBlocksCount
     *
     * Количество групп блоков показателей в документе, содержащем кредитную информацию
     *
     * @param int $groupBlocksCount
     * @return self
     */
    public function setGroupBlocksCount($groupBlocksCount)
    {
        $this->groupBlocksCount = $groupBlocksCount;
        return $this;
    }

    /**
     * Gets as regNumberDocInaccept
     *
     * Исходящий регистрационный номер документа, содержащего кредитную информацию, с ранее не принятой информацией - для документа, содержащего кредитную информацию, которая ранее была не принята
     *
     * @return string
     */
    public function getRegNumberDocInaccept()
    {
        return $this->regNumberDocInaccept;
    }

    /**
     * Sets a new regNumberDocInaccept
     *
     * Исходящий регистрационный номер документа, содержащего кредитную информацию, с ранее не принятой информацией - для документа, содержащего кредитную информацию, которая ранее была не принята
     *
     * @param string $regNumberDocInaccept
     * @return self
     */
    public function setRegNumberDocInaccept($regNumberDocInaccept)
    {
        $this->regNumberDocInaccept = $regNumberDocInaccept;
        return $this;
    }

    /**
     * Gets as source
     *
     * Сведения об источнике формирования кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\SourceAType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Сведения об источнике формирования кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\SourceAType $source
     * @return self
     */
    public function setSource(\mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\SourceAType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as data
     *
     * Сведения о субъектах и событиях в кредитной истории
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * Сведения о субъектах и событиях в кредитной истории
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType $data
     * @return self
     */
    public function setData(\mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType $data)
    {
        $this->data = $data;
        return $this;
    }
}

