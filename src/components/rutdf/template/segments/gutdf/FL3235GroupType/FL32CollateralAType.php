<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType;

use DateTime;
use mfteam\nbch\components\rutdf\template\segments\gutdf\FL3235GroupType\FL32CollateralAType\SumGroupFL3235GroupAType;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL32CollateralAType
 */
class FL32CollateralAType extends GutdfSegment
{
    /**
     * 32.2. Код предмета залога
     *
     * @var string $code
     */
    private $code = null;

    /**
     * 32.4. Дата заключения договора залога
     *
     * @var string $date
     */
    private $date = null;

    /**
     * Оценки предмета залога
     *
     * @var SumGroupFL3235GroupAType[] $sumGroupFL3235Group
     */
    private $sumGroupFL3235Group = [
        
    ];

    /**
     * 32.9, Дата прекращения залога согласно договору
     *
     * @var DateTime $collateralEndDate
     */
    private $collateralEndDate = null;

    /**
     * 32.10. Дата фактического прекращения залога
     *
     * @var DateTime $collateralFactEndDate
     */
    private $collateralFactEndDate = null;

    /**
     * 32.11. Код причины прекращения залога
     *
     * @var int $endReason
     */
    private $endReason = null;

    /**
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @var float $contractTotalSum
     */
    private $contractTotalSum = null;

    /**
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @var int $contractCount
     */
    private $contractCount = null;

    /**
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @var string $location
     */
    private $location = null;

    /**
     * 32.16. Актуальная стоимость предмета залога
     *
     * @var float $actualCost
     */
    private $actualCost = null;

    /**
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @var DateTime $calcDate
     */
    private $calcDate = null;

    /**
     * Gets as code
     *
     * 32.2. Код предмета залога
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * 32.2. Код предмета залога
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as date
     *
     * 32.4. Дата заключения договора залога
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 32.4. Дата заключения договора залога
     *
     * @param string $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as sumGroupFL3235Group
     *
     * Оценки предмета залога
     *
     * @return self
     * @param SumGroupFL3235GroupAType $sumGroupFL3235Group
     */
    public function addToSumGroupFL3235Group(SumGroupFL3235GroupAType $sumGroupFL3235Group)
    {
        $this->sumGroupFL3235Group[] = $sumGroupFL3235Group;
        return $this;
    }

    /**
     * isset sumGroupFL3235Group
     *
     * Оценки предмета залога
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSumGroupFL3235Group($index)
    {
        return isset($this->sumGroupFL3235Group[$index]);
    }

    /**
     * unset sumGroupFL3235Group
     *
     * Оценки предмета залога
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSumGroupFL3235Group($index)
    {
        unset($this->sumGroupFL3235Group[$index]);
    }

    /**
     * Gets as sumGroupFL3235Group
     *
     * Оценки предмета залога
     *
     * @return SumGroupFL3235GroupAType[]
     */
    public function getSumGroupFL3235Group()
    {
        return $this->sumGroupFL3235Group;
    }

    /**
     * Sets a new sumGroupFL3235Group
     *
     * Оценки предмета залога
     *
     * @param SumGroupFL3235GroupAType[] $sumGroupFL3235Group
     * @return self
     */
    public function setSumGroupFL3235Group(array $sumGroupFL3235Group = null)
    {
        $this->sumGroupFL3235Group = $sumGroupFL3235Group;
        return $this;
    }

    /**
     * Gets as collateralEndDate
     *
     * 32.9, Дата прекращения залога согласно договору
     *
     * @return DateTime
     */
    public function getCollateralEndDate()
    {
        return $this->collateralEndDate;
    }

    /**
     * Sets a new collateralEndDate
     *
     * 32.9, Дата прекращения залога согласно договору
     *
     * @param DateTime $collateralEndDate
     * @return self
     */
    public function setCollateralEndDate(?DateTime $collateralEndDate = null)
    {
        $this->collateralEndDate = $collateralEndDate;
        return $this;
    }

    /**
     * Gets as collateralFactEndDate
     *
     * 32.10. Дата фактического прекращения залога
     *
     * @return DateTime
     */
    public function getCollateralFactEndDate()
    {
        return $this->collateralFactEndDate;
    }

    /**
     * Sets a new collateralFactEndDate
     *
     * 32.10. Дата фактического прекращения залога
     *
     * @param DateTime $collateralFactEndDate
     * @return self
     */
    public function setCollateralFactEndDate(?DateTime $collateralFactEndDate = null)
    {
        $this->collateralFactEndDate = $collateralFactEndDate;
        return $this;
    }

    /**
     * Gets as endReason
     *
     * 32.11. Код причины прекращения залога
     *
     * @return int
     */
    public function getEndReason()
    {
        return $this->endReason;
    }

    /**
     * Sets a new endReason
     *
     * 32.11. Код причины прекращения залога
     *
     * @param int $endReason
     * @return self
     */
    public function setEndReason($endReason)
    {
        $this->endReason = $endReason;
        return $this;
    }

    /**
     * Gets as contractTotalSum
     *
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @return float
     */
    public function getContractTotalSum()
    {
        return $this->contractTotalSum;
    }

    /**
     * Sets a new contractTotalSum
     *
     * 32.13. Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога
     *
     * @param float $contractTotalSum
     * @return self
     */
    public function setContractTotalSum($contractTotalSum)
    {
        $this->contractTotalSum = $contractTotalSum;
        return $this;
    }

    /**
     * Gets as contractCount
     *
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @return int
     */
    public function getContractCount()
    {
        return $this->contractCount;
    }

    /**
     * Sets a new contractCount
     *
     * 32.14. Количество договоров, исполнение обязательств по которым обеспечено предметом залога
     *
     * @param int $contractCount
     * @return self
     */
    public function setContractCount($contractCount)
    {
        $this->contractCount = $contractCount;
        return $this;
    }

    /**
     * Gets as location
     *
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * 32.15. Код местонахождения залога по ОКАТО
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as actualCost
     *
     * 32.16. Актуальная стоимость предмета залога
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->actualCost;
    }

    /**
     * Sets a new actualCost
     *
     * 32.16. Актуальная стоимость предмета залога
     *
     * @param float $actualCost
     * @return self
     */
    public function setActualCost($actualCost)
    {
        $this->actualCost = $actualCost;
        return $this;
    }

    /**
     * Gets as calcDate
     *
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @return DateTime
     */
    public function getCalcDate()
    {
        return $this->calcDate;
    }

    /**
     * Sets a new calcDate
     *
     * 32.17. Дата расчета актуальной стоимости предмета залога
     *
     * @param DateTime $calcDate
     * @return self
     */
    public function setCalcDate(?DateTime $calcDate = null)
    {
        $this->calcDate = $calcDate;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_32_Collateral';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Код предмета залога' => 'Заполняется по справочнику 4.1.',
            'Дата заключения договора залога' => '',
            'Дата прекращения залога согласно договору' => '',
            'Дата фактического прекращения залога' => '',
            'Код причины прекращения залога' => 'Заполняется по справочнику 4.2.',
            'Вид стоимости предмета залога' => 'Заполняется по справочнику 4.1.1 Вид стоимости предмета залога, указанной по показателю 23.5 «Стоимость предмета залога».',
            'Сумма обязательств по всем договорам, исполнение которых обеспечено предметом залога' => 'Общая сумма обязательств по всем договорам, исполнение которых обеспечивается одним и тем же предметом залога. Указывается в валюте, которая указана по показателю «Валюта стоимости предмета залога».',
            'Количество договоров, исполнение обязательств по которым обеспечено предметом залога' => 'Количество договоров, обязательства из которых обеспечиваются одним и тем же предметом залога.',
            'Код места нахождения залога по ОКАТО' => 'Код субъекта Российской Федерации, на территории которого находится предмет залога, согласно ОКАТО. При отсутствии в ОКАТО кода населенного пункта по показателю «Код места нахождения залога по ОКАТО» указывается «99 999 999 999»',
            'Актуальная стоимость предмета залога' => 'Последняя рассчитанная стоимость предмета залога.',
            'Дата расчета актуальной стоимости предмета залога' => 'Последняя дата, по состоянию на которую рассчитана стоимость предмета залога.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 32. Сведения о залоге';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $collateral = $this->sendData->getAccountReplyRUTDF()->getCollateral()[$this->idx];

        $this->code = $collateral->collateralCode;

        $this->date = $this->formatDate($collateral->collateralAgreementDt);
        $this->collateralEndDate = $this->formatDate($collateral->collateralExpirationDate);
        $this->collateralFactEndDate = $this->formatDate($collateral->collateralFactExpirationDate);
        $this->calcDate = $this->formatDate($collateral->calcDate);

        $this->addToSumGroupFL3235Group(new SumGroupFL3235GroupAType($this->template, $this->idx));

        $this->endReason = $collateral->collateralEndReason ?: null;
        $this->contractTotalSum = $this->formatCurrency($collateral->collateralcommAmt);
        $this->actualCost = $this->formatCurrency($collateral->actualCost);
        $this->contractCount = $collateral->collateralcontCnt;
        $this->location = $collateral->location;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'code',
            'date',
            'sumGroupFL3235Group',
            'collateralEndDate',
            'collateralFactEndDate',
            'endReason',
            'contractTotalSum',
            'contractCount',
            'location',
            'actualCost',
            'calcDate',
        ];
    }
}

