<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FLEvent113Type
 *
 * Рассчитан индивидуальный рейтинг субъекта (вследствие обращения за его рейтингом или кредитным отчетом)
 * XSD Type: FL_Event_1_13_Type
 */
class FLEvent113Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = null;

    /**
     * Блок 15. Индивидуальный рейтинг субъекта
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType $fL15IndividualBorrowerRating
     */
    private $fL15IndividualBorrowerRating = null;

    /**
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer
     */
    private $fL49OrgCustomer = null;

    /**
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer
     */
    private $fL50PersonCustomer = null;

    /**
     * Gets as operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @return string
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }

    /**
     * Sets a new operationCode
     *
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @param string $operationCode
     * @return self
     */
    public function setOperationCode($operationCode)
    {
        $this->operationCode = $operationCode;
        return $this;
    }

    /**
     * Gets as fL15IndividualBorrowerRating
     *
     * Блок 15. Индивидуальный рейтинг субъекта
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType
     */
    public function getFL15IndividualBorrowerRating()
    {
        return $this->fL15IndividualBorrowerRating;
    }

    /**
     * Sets a new fL15IndividualBorrowerRating
     *
     * Блок 15. Индивидуальный рейтинг субъекта
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType $fL15IndividualBorrowerRating
     * @return self
     */
    public function setFL15IndividualBorrowerRating(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL15IndividualBorrowerRatingType $fL15IndividualBorrowerRating)
    {
        $this->fL15IndividualBorrowerRating = $fL15IndividualBorrowerRating;
        return $this;
    }

    /**
     * Gets as fL49OrgCustomer
     *
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType
     */
    public function getFL49OrgCustomer()
    {
        return $this->fL49OrgCustomer;
    }

    /**
     * Sets a new fL49OrgCustomer
     *
     * Блок 49. Сведения о пользователе – юридическом лице
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer
     * @return self
     */
    public function setFL49OrgCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL49OrgCustomerType $fL49OrgCustomer = null)
    {
        $this->fL49OrgCustomer = $fL49OrgCustomer;
        return $this;
    }

    /**
     * Gets as fL50PersonCustomer
     *
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType
     */
    public function getFL50PersonCustomer()
    {
        return $this->fL50PersonCustomer;
    }

    /**
     * Sets a new fL50PersonCustomer
     *
     * Блок 50. Сведения о пользователе – индивидуальном предпринимателе
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer
     * @return self
     */
    public function setFL50PersonCustomer(?\mfteam\nbch\components\rutdf\template\segments\gutdf\FL50PersonCustomerType $fL50PersonCustomer = null)
    {
        $this->fL50PersonCustomer = $fL50PersonCustomer;
        return $this;
    }
}

