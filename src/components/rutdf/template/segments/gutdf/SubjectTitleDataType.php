<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing SubjectTitleDataType
 *
 * Технические атрибуты титульной части сведений о субъекте
 * XSD Type: SubjectTitleData
 */
class SubjectTitleDataType
{
    /**
     * Код субъекта кредитной истории
     *
     * @var string $subjectCode
     */
    private $subjectCode = null;

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
}

