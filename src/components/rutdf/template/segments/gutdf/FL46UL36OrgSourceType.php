<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use DateTime;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL46UL36OrgSourceType\TaxNumGroupFL46UL36OrgSourceAType;
use mfteam\nbch\Env;

/**
 * Class representing FL46UL36OrgSourceType
 *
 * Блок 46. Сведения об источнике – юридическом лице
 * XSD Type: FL_46_UL_36_OrgSource_Type
 */
class FL46UL36OrgSourceType extends GutdfSegment
{
    /**
     * 46.1., 36.1. Код источника
     *
     * @var int $sourceCode
     */
    private $sourceCode = null;

    /**
     * 46.2., 36.2. Признак регистрации в РФ = 0
     *
     * @var string $sourceRegistrationFact0
     */
    private $sourceRegistrationFact0 = null;

    /**
     * 46.2., 36.2. Признак регистрации в РФ = 1
     *
     * @var string $sourceRegistrationFact1
     */
    private $sourceRegistrationFact1 = null;

    /**
     * 46.3., 36.3. Полное наименование
     *
     * @var string $fullName
     */
    private $fullName = null;

    /**
     * 46.4., 36.4. Сокращенное наименование
     *
     * @var string $shortName
     */
    private $shortName = null;

    /**
     * 46.5., 36.5. Иное наименование
     *
     * @var string $otherName
     */
    private $otherName = null;

    /**
     * 46.6., 36.6. Идентификатор LEI
     *
     * @var string $sourceIdLei
     */
    private $sourceIdLei = null;

    /**
     * 46.7., 36.7. Дата создания источника
     *
     * @var string $sourceDateStart
     */
    private $sourceDateStart = null;

    /**
     * 46.8., 36.8. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * Номера налогоплательщика
     *
     * @var TaxNumGroupFL46UL36OrgSourceAType[] $taxNumGroupFL46UL36OrgSource
     */
    private $taxNumGroupFL46UL36OrgSource = [

    ];

    /**
     * 46.11., 36.11. Дата признания источника банкротом
     *
     * @var string $beginDateSourceBankruptcy
     */
    private $beginDateSourceBankruptcy = null;

    /**
     * 46.12., 36.12. Дата окончания конкурсного производства
     *
     * @var string $endDateSourceBankruptcy
     */
    private $endDateSourceBankruptcy = null;

    /**
     * 46.13., 36.13. Дата начала ликвидации источника
     *
     * @var string $beginDateSourceLiquidation
     */
    private $beginDateSourceLiquidation = null;

    /**
     * 46.14., 36.14. Дата окончания ликвидации источника
     *
     * @var string $endDateSourceLiquidation
     */
    private $endDateSourceLiquidation = null;

    /**
     * 46.15., 36.15.Дата формирования кредитной информации
     *
     * @var string $sourceCreditInfoDate
     */
    private $sourceCreditInfoDate = null;

    /**
     * Gets as sourceCode
     *
     * 46.1., 36.1. Код источника
     *
     * @return int
     */
    public function getSourceCode()
    {
        return $this->sourceCode;
    }

    /**
     * Sets a new sourceCode
     *
     * 46.1., 36.1. Код источника
     *
     * @param int $sourceCode
     * @return self
     */
    public function setSourceCode($sourceCode)
    {
        $this->sourceCode = $sourceCode;
        return $this;
    }

    /**
     * Gets as sourceRegistrationFact0
     *
     * 46.2., 36.2. Признак регистрации в РФ = 0
     *
     * @return string
     */
    public function getSourceRegistrationFact0()
    {
        return $this->sourceRegistrationFact0;
    }

    /**
     * Sets a new sourceRegistrationFact0
     *
     * 46.2., 36.2. Признак регистрации в РФ = 0
     *
     * @param string $sourceRegistrationFact0
     * @return self
     */
    public function setSourceRegistrationFact0($sourceRegistrationFact0)
    {
        $this->sourceRegistrationFact0 = $sourceRegistrationFact0;
        return $this;
    }

    /**
     * Gets as sourceRegistrationFact1
     *
     * 46.2., 36.2. Признак регистрации в РФ = 1
     *
     * @return string
     */
    public function getSourceRegistrationFact1()
    {
        return $this->sourceRegistrationFact1;
    }

    /**
     * Sets a new sourceRegistrationFact1
     *
     * 46.2., 36.2. Признак регистрации в РФ = 1
     *
     * @param string $sourceRegistrationFact1
     * @return self
     */
    public function setSourceRegistrationFact1($sourceRegistrationFact1)
    {
        $this->sourceRegistrationFact1 = $sourceRegistrationFact1;
        return $this;
    }

    /**
     * Gets as fullName
     *
     * 46.3., 36.3. Полное наименование
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * 46.3., 36.3. Полное наименование
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as shortName
     *
     * 46.4., 36.4. Сокращенное наименование
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * 46.4., 36.4. Сокращенное наименование
     *
     * @param string $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Gets as otherName
     *
     * 46.5., 36.5. Иное наименование
     *
     * @return string
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Sets a new otherName
     *
     * 46.5., 36.5. Иное наименование
     *
     * @param string $otherName
     * @return self
     */
    public function setOtherName($otherName)
    {
        $this->otherName = $otherName;
        return $this;
    }

    /**
     * Gets as sourceIdLei
     *
     * 46.6., 36.6. Идентификатор LEI
     *
     * @return string
     */
    public function getSourceIdLei()
    {
        return $this->sourceIdLei;
    }

    /**
     * Sets a new sourceIdLei
     *
     * 46.6., 36.6. Идентификатор LEI
     *
     * @param string $sourceIdLei
     * @return self
     */
    public function setSourceIdLei($sourceIdLei)
    {
        $this->sourceIdLei = $sourceIdLei;
        return $this;
    }

    /**
     * Gets as sourceDateStart
     *
     * 46.7., 36.7. Дата создания источника
     *
     * @return string
     */
    public function getSourceDateStart()
    {
        return $this->sourceDateStart;
    }

    /**
     * Sets a new sourceDateStart
     *
     * 46.7., 36.7. Дата создания источника
     *
     * @param string $sourceDateStart
     * @return self
     */
    public function setSourceDateStart($sourceDateStart)
    {
        $this->sourceDateStart = $sourceDateStart;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 46.8., 36.8. Регистрационный номер
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
     * 46.8., 36.8. Регистрационный номер
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
     * Adds as taxNumGroupFL46UL36OrgSource
     *
     * Номера налогоплательщика
     *
     * @param TaxNumGroupFL46UL36OrgSourceAType $taxNumGroupFL46UL36OrgSource
     * @return self
     */
    public function addToTaxNumGroupFL46UL36OrgSource(TaxNumGroupFL46UL36OrgSourceAType $taxNumGroupFL46UL36OrgSource)
    {
        $this->taxNumGroupFL46UL36OrgSource[] = $taxNumGroupFL46UL36OrgSource;
        return $this;
    }

    /**
     * isset taxNumGroupFL46UL36OrgSource
     *
     * Номера налогоплательщика
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxNumGroupFL46UL36OrgSource($index)
    {
        return isset($this->taxNumGroupFL46UL36OrgSource[$index]);
    }

    /**
     * unset taxNumGroupFL46UL36OrgSource
     *
     * Номера налогоплательщика
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxNumGroupFL46UL36OrgSource($index)
    {
        unset($this->taxNumGroupFL46UL36OrgSource[$index]);
    }

    /**
     * Gets as taxNumGroupFL46UL36OrgSource
     *
     * Номера налогоплательщика
     *
     * @return TaxNumGroupFL46UL36OrgSourceAType[]
     */
    public function getTaxNumGroupFL46UL36OrgSource()
    {
        return $this->taxNumGroupFL46UL36OrgSource;
    }

    /**
     * Sets a new taxNumGroupFL46UL36OrgSource
     *
     * Номера налогоплательщика
     *
     * @param TaxNumGroupFL46UL36OrgSourceAType[] $taxNumGroupFL46UL36OrgSource
     * @return self
     */
    public function setTaxNumGroupFL46UL36OrgSource(array $taxNumGroupFL46UL36OrgSource = null)
    {
        $this->taxNumGroupFL46UL36OrgSource = $taxNumGroupFL46UL36OrgSource;
        return $this;
    }

    /**
     * Gets as beginDateSourceBankruptcy
     *
     * 46.11., 36.11. Дата признания источника банкротом
     *
     * @return string
     */
    public function getBeginDateSourceBankruptcy()
    {
        return $this->beginDateSourceBankruptcy;
    }

    /**
     * Sets a new beginDateSourceBankruptcy
     *
     * 46.11., 36.11. Дата признания источника банкротом
     *
     * @param DateTime $beginDateSourceBankruptcy
     * @return self
     */
    public function setBeginDateSourceBankruptcy(?DateTime $beginDateSourceBankruptcy = null)
    {
        $this->beginDateSourceBankruptcy = $beginDateSourceBankruptcy;
        return $this;
    }

    /**
     * Gets as endDateSourceBankruptcy
     *
     * 46.12., 36.12. Дата окончания конкурсного производства
     *
     * @return string
     */
    public function getEndDateSourceBankruptcy()
    {
        return $this->endDateSourceBankruptcy;
    }

    /**
     * Sets a new endDateSourceBankruptcy
     *
     * 46.12., 36.12. Дата окончания конкурсного производства
     *
     * @param DateTime $endDateSourceBankruptcy
     * @return self
     */
    public function setEndDateSourceBankruptcy(?DateTime $endDateSourceBankruptcy = null)
    {
        $this->endDateSourceBankruptcy = $endDateSourceBankruptcy;
        return $this;
    }

    /**
     * Gets as beginDateSourceLiquidation
     *
     * 46.13., 36.13. Дата начала ликвидации источника
     *
     * @return string
     */
    public function getBeginDateSourceLiquidation()
    {
        return $this->beginDateSourceLiquidation;
    }

    /**
     * Sets a new beginDateSourceLiquidation
     *
     * 46.13., 36.13. Дата начала ликвидации источника
     *
     * @param DateTime $beginDateSourceLiquidation
     * @return self
     */
    public function setBeginDateSourceLiquidation(?DateTime $beginDateSourceLiquidation = null)
    {
        $this->beginDateSourceLiquidation = $beginDateSourceLiquidation;
        return $this;
    }

    /**
     * Gets as endDateSourceLiquidation
     *
     * 46.14., 36.14. Дата окончания ликвидации источника
     *
     * @return string
     */
    public function getEndDateSourceLiquidation()
    {
        return $this->endDateSourceLiquidation;
    }

    /**
     * Sets a new endDateSourceLiquidation
     *
     * 46.14., 36.14. Дата окончания ликвидации источника
     *
     * @param DateTime $endDateSourceLiquidation
     * @return self
     */
    public function setEndDateSourceLiquidation(?DateTime $endDateSourceLiquidation = null)
    {
        $this->endDateSourceLiquidation = $endDateSourceLiquidation;
        return $this;
    }

    /**
     * Gets as sourceCreditInfoDate
     *
     * 46.15., 36.15.Дата формирования кредитной информации
     *
     * @return string
     */
    public function getSourceCreditInfoDate()
    {
        return $this->sourceCreditInfoDate;
    }

    /**
     * Sets a new sourceCreditInfoDate
     *
     * 46.15., 36.15.Дата формирования кредитной информации
     *
     * @param DateTime $sourceCreditInfoDate
     * @return self
     */
    public function setSourceCreditInfoDate(DateTime $sourceCreditInfoDate)
    {
        $this->sourceCreditInfoDate = $sourceCreditInfoDate;
        return $this;
    }

    public function getSegmentName(): string
    {
        return 'FL_46_UL_36_OrgSource';
    }

    public function getFields(): array
    {
        return [
            'sourceCode' => $this->sourceCode,
            'fullName' => $this->fullName,
            'regNum' => $this->regNum,
            'sourceCreditInfoDate' => $this->sourceCreditInfoDate,
        ];
    }

    public function getFieldsDescriptions(): array
    {
        return [
            'Код источника' => 'Заполняется по справочнику 6.1.',
            'Полное наименование' => '',
            'Регистрационный номер' => '',
            'Дата формирования кредитной информации' => '',
        ];
    }

    public function getDescription(): string
    {
        return 'Блок содержит сведения об Источнике, предоставленные им в НБКИ при заключении Договора или при обновлении этих сведений.
Указанные данные входят в дополнительную (закрытую) часть КИ и предоставляются только лицам, имеющим такое право в соответствии со ст.6 218-ФЗ «О кредитных историях».
Если обслуживание денежных требований по договору займа (кредита) осуществляет обслуживающая организация (в случаях, предусмотренных договором между специализированным финансовым обществом (ипотечным агентом) и обслуживающей организацией) в соответствии с частью 54 статьи 5 Федерального закона от 30 декабря 2004 года №218-ФЗ «О кредитных историях» (Собрание законодательства, 2005, №1, ст. 44; 2014, №26, ст. 3395; 2020, №31, ст. 5061), в этом блоке указываются сведения об источнике – специализированном финансовом обществе или ипотечном агенте.
';
    }

    public function getTitle(): string
    {
        return 'Блок 46/36. Сведения об источнике – юридическом лице';
    }

    public function getProperties(): array
    {
        return [];
    }

    public function init(): void
    {
        $rutdf = Env::ensure()->module->rutdf;
        $this->sourceCode = $this->sendData->getAccountReplyRUTDF()->memberTypeCode;
        $this->fullName = $this->sendData->getAccountReplyRUTDF()->memberFullName;
        $this->regNum = $rutdf->sourceOgrn;
        $this->addToTaxNumGroupFL46UL36OrgSource((new TaxNumGroupFL46UL36OrgSourceAType($this->template)));
        $this->sourceCreditInfoDate = $this->formatDate($this->template->generateTime);
        $this->setSourceRegistrationFact0(null);
        $this->setSourceRegistrationFact1('');
        $this->setSourceDateStart($this->formatDate($this->sendData->getAccountReplyRUTDF()->memberStartDt));
    }

    public function getXmlAttributes(): array
    {
        return [
            'sourceCode',
            'sourceRegistrationFact_0' => 'sourceRegistrationFact0',
            'sourceRegistrationFact_1' => 'sourceRegistrationFact1',
            'fullName',
            'sourceDateStart',
            'regNum',
            'taxNumGroupFL46UL36OrgSource',
            'sourceCreditInfoDate',
        ];
    }
}

