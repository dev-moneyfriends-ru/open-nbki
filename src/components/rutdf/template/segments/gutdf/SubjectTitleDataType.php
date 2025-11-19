<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing SubjectTitleDataType
 *
 * Технические атрибуты титульной части сведений о субъекте
 * XSD Type: SubjectTitleData
 */
abstract class SubjectTitleDataType extends GutdfSegment
{
    /**
     * Код субъекта кредитной истории
     *
     * @var string $subjectCode
     */
    private $subjectCode = null;

    /**
     * Идентификатор субъекта
     *
     * @var string $subjectID
     */
    private $subjectID = null;

    /**
     * Gets as subjectCode
     *
     * Код субъекта кредитной истории
     *
     * @return string
     */
    public function getSubjectCode()
    {
        return $this->subjectCode;
    }

    /**
     * Sets a new subjectCode
     *
     * Код субъекта кредитной истории
     *
     * @param string $subjectCode
     * @return self
     */
    public function setSubjectCode($subjectCode)
    {
        $this->subjectCode = $subjectCode;
        return $this;
    }

    /**
     * Gets as subjectID
     *
     * Идентификатор субъекта
     *
     * @return string
     */
    public function getSubjectID()
    {
        return $this->subjectID;
    }

    /**
     * Sets a new subjectID
     *
     * Идентификатор субъекта
     *
     * @param string $subjectID
     * @return self
     */
    public function setSubjectID($subjectID)
    {
        $this->subjectID = $subjectID;
        return $this;
    }
}

