<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType;

/**
 * Class representing DataAType
 */
class DataAType
{
    /**
     * Сведения о субъекте - физическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectFLAType[] $subjectFL
     */
    private $subjectFL = [
        
    ];

    /**
     * Сведения о субъекте - юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectULAType[] $subjectUL
     */
    private $subjectUL = [
        
    ];

    /**
     * Adds as subjectFL
     *
     * Сведения о субъекте - физическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectFLAType $subjectFL
     *@return self
     */
    public function addToSubjectFL(\mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectFLAType $subjectFL)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectFLAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectFLAType[] $subjectFL
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectULAType $subjectUL
     *@return self
     */
    public function addToSubjectUL(\mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectULAType $subjectUL)
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
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectULAType[]
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
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\Document\DocumentAType\DataAType\SubjectULAType[] $subjectUL
     * @return self
     */
    public function setSubjectUL(array $subjectUL = null)
    {
        $this->subjectUL = $subjectUL;
        return $this;
    }
}

