<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\document;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing SourceAType
 */
class SourceType extends GutdfSegment
{
    /**
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @var FL46UL36OrgSourceType $fL46UL36OrgSource
     */
    private $fL46UL36OrgSource = null;

    /**
     * Gets as fL46UL36OrgSource
     *
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @return FL46UL36OrgSourceType
     */
    public function getFL46UL36OrgSource()
    {
        return $this->fL46UL36OrgSource;
    }

    /**
     * Sets a new fL46UL36OrgSource
     *
     * Блок 46. Сведения об источнике – юридическом лице
     *
     * @param FL46UL36OrgSourceType $fL46UL36OrgSource
     * @return self
     */
    public function setFL46UL36OrgSource(?FL46UL36OrgSourceType $fL46UL36OrgSource = null)
    {
        $this->fL46UL36OrgSource = $fL46UL36OrgSource;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'Source';
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
        return 'Сведения об источнике формирования кредитной истории»';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $this->fL46UL36OrgSource = new FL46UL36OrgSourceType($this->template);
    }

    public function getXmlAttributes(): array
    {
        return [
            'fL46UL36OrgSource'
        ];
    }
}

