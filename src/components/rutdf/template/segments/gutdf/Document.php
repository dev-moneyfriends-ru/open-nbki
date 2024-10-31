<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use DateTime;
use Exception;
use mfteam\nbch\components\rutdf\template\segments\gutdf\document\DataType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\document\SourceType;

/**
 * Class representing Document
 *
 * Электронный документ
 * Версия 2.2
 * Сборка 30.07.2024
 */
class Document extends GutdfSegment
{
    /**
     * Версия схемы
     *
     * @var string $schemaVersion
     */
    private $schemaVersion = '2.2';

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
     * @var string $dateDoc
     */
    private $dateDoc = null;

    /**
     * Количество субъектов, сведения о которых указаны в документе, содержащем кредитную информацию
     *
     * @var int $subjectsCount
     */
    private $subjectsCount = 1;

    /**
     * Количество групп блоков показателей в документе, содержащем кредитную информацию
     *
     * @var int $groupBlocksCount
     */
    private $groupBlocksCount = 0;

    /**
     * Исходящий регистрационный номер документа, содержащего кредитную информацию, с ранее не принятой информацией - для документа, содержащего кредитную информацию, которая ранее была не принята
     *
     * @var string $regNumberDocInaccept
     */
    private $regNumberDocInaccept = null;

    /**
     * Сведения об источнике формирования кредитной истории
     *
     * @var SourceType $source
     */
    private $source = null;

    /**
     * Сведения о субъектах и событиях в кредитной истории
     *
     * @var DataType $data
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
     * @return string
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
     * @param DateTime $dateDoc
     * @return self
     */
    public function setDateDoc(DateTime $dateDoc)
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
     * @return SourceType
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
     * @param SourceType $source
     * @return self
     */
    public function setSource(document\SourceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as data
     *
     * Сведения о субъектах и событиях в кредитной истории
     *
     * @return DataType
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
     * @param DataType $data
     * @return self
     */
    public function setData(document\DataType $data)
    {
        $this->data = $data;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'Document';
    }

    public function getFields(): array
    {
        return [];
    }

    public function getFieldsDescriptions(): array
    {
        return [];
    }

    public function getDescription(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        return 'Данные заголовка документа';
    }

    public function getProperties(): array
    {
        return [
          'schemaVersion',
          'inn',
          'ogrn',
          'sourceID',
          'regNumberDoc',
          'dateDoc',
          'subjectsCount',
          'groupBlocksCount',
          'regNumberDocInaccept',
        ];
    }

    /**
     * @return void
     * @throws Exception
     */
    public function init(): void
    {
        $this->inn = $this->template->config->sourceInn;
        $this->ogrn = $this->template->config->sourceOgrn;
        $this->sourceID = $this->template->config->memberCode;
        $this->regNumberDoc = $this->template->getBaseName();
        $this->dateDoc = $this->formatDate($this->template->generateTime);
        $this->source = new SourceType($this->template);
        $this->data = new DataType($this->template);
    }

    public function getXmlAttributes(): array
    {
        return [
            'source',
            'data',
        ];
    }
}

