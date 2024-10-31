<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType\DateGroupFL13BankruptcyAType;

/**
 * Class representing FL13BankruptcyType
 *
 * Блок 13. Сведения по делу о несостоятельности (банкротстве)
 * XSD Type: FL_13_Bankruptcy_Type
 */
class FL13BankruptcyType extends GutdfSegment
{
    /**
     * 13.1. Признак дела о банкротстве = 0
     *
     * @var string $bankruptcyFact0
     */
    private $bankruptcyFact0 = null;

    /**
     * 13.1. Признак дела о банкротстве = 1
     *
     * @var string $bankruptcyFact1
     */
    private $bankruptcyFact1 = null;

    /**
     * @var DateGroupFL13BankruptcyAType[] $dateGroupFL13Bankruptcy
     */
    private $dateGroupFL13Bankruptcy = [
        
    ];

    /**
     * 13.5. Признак неправомерных действий в деле = 0
     *
     * @var string $illegalActExist0
     */
    private $illegalActExist0 = null;

    /**
     * 13.5. Признак неправомерных действий в деле = 1
     *
     * @var string $illegalActExist1
     */
    private $illegalActExist1 = null;

    /**
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @var string[] $illegalActDate
     */
    private $illegalActDate = [
        
    ];

    /**
     * 13.7. Признак преднамеренного или фиктивного банкротства = 0
     *
     * @var string $fakeActExist0
     */
    private $fakeActExist0 = null;

    /**
     * 13.7. Признак преднамеренного или фиктивного банкротства = 1
     *
     * @var string $fakeActExist1
     */
    private $fakeActExist1 = null;

    /**
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @var string[] $fakeActDate
     */
    private $fakeActDate = [
        
    ];

    /**
     * 13.9. Дополнительные сведения по делу
     *
     * @var string $info
     */
    private $info = null;

    /**
     * Gets as bankruptcyFact0
     *
     * 13.1. Признак дела о банкротстве = 0
     *
     * @return string
     */
    public function getBankruptcyFact0()
    {
        return $this->bankruptcyFact0;
    }

    /**
     * Sets a new bankruptcyFact0
     *
     * 13.1. Признак дела о банкротстве = 0
     *
     * @param string $bankruptcyFact0
     * @return self
     */
    public function setBankruptcyFact0($bankruptcyFact0)
    {
        $this->bankruptcyFact0 = $bankruptcyFact0;
        return $this;
    }

    /**
     * Gets as bankruptcyFact1
     *
     * 13.1. Признак дела о банкротстве = 1
     *
     * @return string
     */
    public function getBankruptcyFact1()
    {
        return $this->bankruptcyFact1;
    }

    /**
     * Sets a new bankruptcyFact1
     *
     * 13.1. Признак дела о банкротстве = 1
     *
     * @param string $bankruptcyFact1
     * @return self
     */
    public function setBankruptcyFact1($bankruptcyFact1)
    {
        $this->bankruptcyFact1 = $bankruptcyFact1;
        return $this;
    }

    /**
     * Adds as dateGroupFL13Bankruptcy
     *
     * @return self
     * @param DateGroupFL13BankruptcyAType $dateGroupFL13Bankruptcy
     */
    public function addToDateGroupFL13Bankruptcy(DateGroupFL13BankruptcyAType $dateGroupFL13Bankruptcy)
    {
        $this->dateGroupFL13Bankruptcy[] = $dateGroupFL13Bankruptcy;
        return $this;
    }

    /**
     * isset dateGroupFL13Bankruptcy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDateGroupFL13Bankruptcy($index)
    {
        return isset($this->dateGroupFL13Bankruptcy[$index]);
    }

    /**
     * unset dateGroupFL13Bankruptcy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDateGroupFL13Bankruptcy($index)
    {
        unset($this->dateGroupFL13Bankruptcy[$index]);
    }

    /**
     * Gets as dateGroupFL13Bankruptcy
     *
     * @return DateGroupFL13BankruptcyAType[]
     */
    public function getDateGroupFL13Bankruptcy()
    {
        return $this->dateGroupFL13Bankruptcy;
    }

    /**
     * Sets a new dateGroupFL13Bankruptcy
     *
     * @param DateGroupFL13BankruptcyAType[] $dateGroupFL13Bankruptcy
     * @return self
     */
    public function setDateGroupFL13Bankruptcy(array $dateGroupFL13Bankruptcy = null)
    {
        $this->dateGroupFL13Bankruptcy = $dateGroupFL13Bankruptcy;
        return $this;
    }

    /**
     * Gets as illegalActExist0
     *
     * 13.5. Признак неправомерных действий в деле = 0
     *
     * @return string
     */
    public function getIllegalActExist0()
    {
        return $this->illegalActExist0;
    }

    /**
     * Sets a new illegalActExist0
     *
     * 13.5. Признак неправомерных действий в деле = 0
     *
     * @param string $illegalActExist0
     * @return self
     */
    public function setIllegalActExist0($illegalActExist0)
    {
        $this->illegalActExist0 = $illegalActExist0;
        return $this;
    }

    /**
     * Gets as illegalActExist1
     *
     * 13.5. Признак неправомерных действий в деле = 1
     *
     * @return string
     */
    public function getIllegalActExist1()
    {
        return $this->illegalActExist1;
    }

    /**
     * Sets a new illegalActExist1
     *
     * 13.5. Признак неправомерных действий в деле = 1
     *
     * @param string $illegalActExist1
     * @return self
     */
    public function setIllegalActExist1($illegalActExist1)
    {
        $this->illegalActExist1 = $illegalActExist1;
        return $this;
    }

    /**
     * Adds as illegalActDate
     *
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @return self
     * @param string $illegalActDate
     */
    public function addToIllegalActDate($illegalActDate)
    {
        $this->illegalActDate[] = $illegalActDate;
        return $this;
    }

    /**
     * isset illegalActDate
     *
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIllegalActDate($index)
    {
        return isset($this->illegalActDate[$index]);
    }

    /**
     * unset illegalActDate
     *
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIllegalActDate($index)
    {
        unset($this->illegalActDate[$index]);
    }

    /**
     * Gets as illegalActDate
     *
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @return string[]
     */
    public function getIllegalActDate()
    {
        return $this->illegalActDate;
    }

    /**
     * Sets a new illegalActDate
     *
     * 13.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @param string $illegalActDate
     * @return self
     */
    public function setIllegalActDate(array $illegalActDate = null)
    {
        $this->illegalActDate = $illegalActDate;
        return $this;
    }

    /**
     * Gets as fakeActExist0
     *
     * 13.7. Признак преднамеренного или фиктивного банкротства = 0
     *
     * @return string
     */
    public function getFakeActExist0()
    {
        return $this->fakeActExist0;
    }

    /**
     * Sets a new fakeActExist0
     *
     * 13.7. Признак преднамеренного или фиктивного банкротства = 0
     *
     * @param string $fakeActExist0
     * @return self
     */
    public function setFakeActExist0($fakeActExist0)
    {
        $this->fakeActExist0 = $fakeActExist0;
        return $this;
    }

    /**
     * Gets as fakeActExist1
     *
     * 13.7. Признак преднамеренного или фиктивного банкротства = 1
     *
     * @return string
     */
    public function getFakeActExist1()
    {
        return $this->fakeActExist1;
    }

    /**
     * Sets a new fakeActExist1
     *
     * 13.7. Признак преднамеренного или фиктивного банкротства = 1
     *
     * @param string $fakeActExist1
     * @return self
     */
    public function setFakeActExist1($fakeActExist1)
    {
        $this->fakeActExist1 = $fakeActExist1;
        return $this;
    }

    /**
     * Adds as fakeActDate
     *
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @return self
     * @param string $fakeActDate
     */
    public function addToFakeActDate($fakeActDate)
    {
        $this->fakeActDate[] = $fakeActDate;
        return $this;
    }

    /**
     * isset fakeActDate
     *
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFakeActDate($index)
    {
        return isset($this->fakeActDate[$index]);
    }

    /**
     * unset fakeActDate
     *
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFakeActDate($index)
    {
        unset($this->fakeActDate[$index]);
    }

    /**
     * Gets as fakeActDate
     *
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @return string[]
     */
    public function getFakeActDate()
    {
        return $this->fakeActDate;
    }

    /**
     * Sets a new fakeActDate
     *
     * 13.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @param string $fakeActDate
     * @return self
     */
    public function setFakeActDate(array $fakeActDate = null)
    {
        $this->fakeActDate = $fakeActDate;
        return $this;
    }

    /**
     * Gets as info
     *
     * 13.9. Дополнительные сведения по делу
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * 13.9. Дополнительные сведения по делу
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_13_Bankruptcy';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        // TODO: Implement getFieldsDescriptions() method.
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 13. Сведения по делу о несостоятельности (банкротстве)';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        // TODO: Implement init() method.
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        // TODO: Implement getXmlAttributes() method.
    }
}

