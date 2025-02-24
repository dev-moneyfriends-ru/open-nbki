<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\document;

use mfteam\nbch\components\rutdf\template\segments\gutdf\document\dataType\SubjectFLAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\document\dataType\SubjectULAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing Data
 */
class DataType extends GutdfSegment
{
    /**
     * Сведения о субъекте - физическом лице
     *
     * @var SubjectFLAType[] $subjectFL
     */
    private $subjectFL = [
        
    ];

    /**
     * Сведения о субъекте - юридическом лице
     *
     * @var SubjectULAType[] $subjectUL
     */
    private $subjectUL = [
        
    ];

    /**
     * Adds as subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @param SubjectFLAType $subjectFL
     *@return self
     */
    public function addToSubjectFL(SubjectFLAType $subjectFL)
    {
        $this->subjectFL[] = $subjectFL;
        return $this;
    }

    /**
     * isset subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectFL($index)
    {
        return isset($this->subjectFL[$index]);
    }

    /**
     * unset subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectFL($index)
    {
        unset($this->subjectFL[$index]);
    }

    /**
     * Gets as subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @return SubjectFLAType[]
     */
    public function getSubjectFL()
    {
        return $this->subjectFL;
    }

    /**
     * Sets a new subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @param SubjectFLAType[] $subjectFL
     * @return self
     */
    public function setSubjectFL(array $subjectFL = null)
    {
        $this->subjectFL = $subjectFL;
        return $this;
    }

    /**
     * Adds as subjectUL
     *
     * Сведения о субъекте - юридическом лице
     *
     * @param SubjectULAType $subjectUL
     *@return self
     */
    public function addToSubjectUL(SubjectULAType $subjectUL)
    {
        $this->subjectUL[] = $subjectUL;
        return $this;
    }

    /**
     * isset subjectUL
     *
     * Сведения о субъекте - юридическом лице
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectUL($index)
    {
        return isset($this->subjectUL[$index]);
    }

    /**
     * unset subjectUL
     *
     * Сведения о субъекте - юридическом лице
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectUL($index)
    {
        unset($this->subjectUL[$index]);
    }

    /**
     * Gets as subjectUL
     *
     * Сведения о субъекте - юридическом лице
     *
     * @return SubjectULAType[]
     */
    public function getSubjectUL()
    {
        return $this->subjectUL;
    }

    /**
     * Sets a new subjectUL
     *
     * Сведения о субъекте - юридическом лице
     *
     * @param SubjectULAType[] $subjectUL
     * @return self
     */
    public function setSubjectUL(array $subjectUL = null)
    {
        $this->subjectUL = $subjectUL;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'Data';
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
        return 'Сведения о субъектах и событиях в кредитной истории';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        if($this->sendData->isLegal()){
            $this->addToSubjectUL(new SubjectULAType($this->template));
        }else{
            $this->addToSubjectFL(new SubjectFLAType($this->template));
        }
    }

    public function getXmlAttributes(): array
    {
        return [
            'subjectFL',
            'subjectUL',
        ];
    }
}

