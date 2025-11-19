<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL6BankruptcyType
 *
 * Блок 6. Сведения по делу о несостоятельности (банкротстве)
 * XSD Type: UL_6_Bankruptcy_Type
 */
class UL6BankruptcyType extends GutdfSegment
{
    /**
     * 6.1. Признак дела о банкротстве = 0
     *
     * @var string $bankruptcyFact0
     */
    private $bankruptcyFact0 = null;

    /**
     * 6.1. Признак дела о банкротстве = 1
     *
     * @var string $bankruptcyFact1
     */
    private $bankruptcyFact1 = null;

    /**
     * 6.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
     *
     * @var string $date
     */
    private $date = null;

    /**
     * 6.2. Код стадии рассмотрения дела
     *
     * @var string $stage
     */
    private $stage = null;

    /**
     * 6.4. Ссылка на публикацию в ЕФРСБ
     *
     * @var string $link
     */
    private $link = null;

    /**
     * 6.5. Признак неправомерных действий в деле = 0
     *
     * @var string $illegalActExist0
     */
    private $illegalActExist0 = null;

    /**
     * 6.5. Признак неправомерных действий в деле = 1
     *
     * @var string $illegalActExist1
     */
    private $illegalActExist1 = null;

    /**
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
     *
     * @var string[] $illegalActDate
     */
    private $illegalActDate = [
        
    ];

    /**
     * 6.7. Признак преднамеренного или фиктивного банкротства = 0
     *
     * @var string $fakeActExist0
     */
    private $fakeActExist0 = null;

    /**
     * 6.7. Признак преднамеренного или фиктивного банкротства = 1
     *
     * @var string $fakeActExist1
     */
    private $fakeActExist1 = null;

    /**
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
     *
     * @var string[] $fakeActDate
     */
    private $fakeActDate = [
        
    ];

    /**
     * 6.9. Дополнительные сведения по делу
     *
     * @var string $info
     */
    private $info = null;

    /**
     * 6.10. Номер дела о банкротстве
     *
     * @var string $num
     */
    private $num = null;

    /**
     * Gets as bankruptcyFact0
     *
     * 6.1. Признак дела о банкротстве = 0
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
     * 6.1. Признак дела о банкротстве = 0
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
     * 6.1. Признак дела о банкротстве = 1
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
     * 6.1. Признак дела о банкротстве = 1
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
     * Gets as date
     *
     * 6.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
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
     * 6.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
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
     * Gets as stage
     *
     * 6.2. Код стадии рассмотрения дела
     *
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Sets a new stage
     *
     * 6.2. Код стадии рассмотрения дела
     *
     * @param string $stage
     * @return self
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Gets as link
     *
     * 6.4. Ссылка на публикацию в ЕФРСБ
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * 6.4. Ссылка на публикацию в ЕФРСБ
     *
     * @param string $link
     * @return self
     */
    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Gets as illegalActExist0
     *
     * 6.5. Признак неправомерных действий в деле = 0
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
     * 6.5. Признак неправомерных действий в деле = 0
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
     * 6.5. Признак неправомерных действий в деле = 1
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
     * 6.5. Признак неправомерных действий в деле = 1
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
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
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
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
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
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
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
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
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
     * 6.6. Дата публикации в ЕФРСБ сообщения о неправомерных действиях
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
     * 6.7. Признак преднамеренного или фиктивного банкротства = 0
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
     * 6.7. Признак преднамеренного или фиктивного банкротства = 0
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
     * 6.7. Признак преднамеренного или фиктивного банкротства = 1
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
     * 6.7. Признак преднамеренного или фиктивного банкротства = 1
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
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
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
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
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
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
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
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
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
     * 6.8. Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства
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
     * 6.9. Дополнительные сведения по делу
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
     * 6.9. Дополнительные сведения по делу
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
     * Gets as num
     *
     * 6.10. Номер дела о банкротстве
     *
     * @return string
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Sets a new num
     *
     * 6.10. Номер дела о банкротстве
     *
     * @param string $num
     * @return self
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_6_Bankruptcy';
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
        return 'Блок 6. Сведения по делу о несостоятельности (банкротстве)';
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

