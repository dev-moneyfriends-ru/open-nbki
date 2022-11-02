<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\models\dummy\Passport;
use mfteam\nbch\models\Identification;

/**
 * Блок 4. Документ, удостоверяющий личность - C4_ID
 */
class C4Id extends \mfteam\nbch\components\BaseSegment
{
    /**
     * @var Identification
     */
    protected $identification;
    
    public function init()
    {
        $passport = $this->template->subject->getPassport();
        if ($passport === null) {
            $this->errors[] = "Отсутствуют паспортные данные";
            $passport = new Passport();
        }
        $this->identification = new Identification([
            'oksm' => $passport->getOksm(),
            'idType' => Identification::TYPE_PASSPORT,
            'seriesNumber' => $passport->getSeries(),
            'idNum' => $passport->getNumber(),
            'issueDate' => $passport->getIssueDate(),
            'divCode' => $passport->getIssueCode(),
            'issueAuthority' => $passport->getIssueAuthority(),
        ]);
        parent::init();
    }
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        if (empty($this->identification->oksm)) {
            $this->errors[] = "Отсутствуют Код страны гражданства по ОКСМ";
        }
        if (empty($this->identification->seriesNumber)) {
            $this->errors[] = "Отсутствуют Серия документа";
        }
        if (empty($this->identification->idNum)) {
            $this->errors[] = "Отсутствуют Номер документа";
        }
        if (empty($this->identification->issueDate)) {
            $this->errors[] = "Отсутствуют Дата выдачи документа";
        }
        if (empty($this->identification->divCode)) {
            $this->errors[] = "Отсутствуют Код подразделения";
        }
        if (empty($this->identification->issueAuthority)) {
            $this->errors[] = "Отсутствуют Кем выдан документ";
        }
        return $this->isEmptyErrors;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "C4_ID";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->segmentName,
            $this->identification->oksm,
            $this->emptyValue,
            $this->identification->idType,
            $this->identification->seriesNumber,
            $this->identification->idNum,
            $this->formatNewDate($this->identification->issueDate),
            $this->identification->issueAuthority,
            $this->identification->divCode,
            $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            "Код страны гражданства по ОКСМ",
            "Наименование иной страны",
            "Код документа",
            "Наименование иного документа",
            "Серия документа",
            "Номер документа",
            "Дата выдачи документа",
            "Кем выдан документ",
            "Код подразделения",
            "Дата окончания срока действия документа",
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок 4. Документ, удостоверяющий личность - C4_ID";
    }
}