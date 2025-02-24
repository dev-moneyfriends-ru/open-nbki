<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing ULEvent26Type
 *
 * Изменились сведения о судебном споре или требовании по обязательству
 * XSD Type: UL_Event_2_6_Type
 */
class ULEvent26Type extends EventDataType
{
    /**
     * Код операции, в рамках которой сформирована группа блоков показателей
     *
     * @var string $operationCode
     */
    private $operationCode = EventDataType::OPERATION_CODE_B;

    /**
     * Блок 10. Идентификатор сделки
     *
     * @var UL10DealUidType $uL10DealUid
     */
    private $uL10DealUid = null;

    /**
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @var UL30CourtType[] $uL30Court
     */
    private $uL30Court = [
        
    ];

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
     * Gets as uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @return UL10DealUidType
     */
    public function getUL10DealUid()
    {
        return $this->uL10DealUid;
    }

    /**
     * Sets a new uL10DealUid
     *
     * Блок 10. Идентификатор сделки
     *
     * @param UL10DealUidType $uL10DealUid
     * @return self
     */
    public function setUL10DealUid(UL10DealUidType $uL10DealUid)
    {
        $this->uL10DealUid = $uL10DealUid;
        return $this;
    }

    /**
     * Adds as uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param UL30CourtType $uL30Court
     * @return self
     */
    public function addToUL30Court(UL30CourtType $uL30Court)
    {
        $this->uL30Court[] = $uL30Court;
        return $this;
    }

    /**
     * isset uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUL30Court($index)
    {
        return isset($this->uL30Court[$index]);
    }

    /**
     * unset uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUL30Court($index)
    {
        unset($this->uL30Court[$index]);
    }

    /**
     * Gets as uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @return UL30CourtType[]
     */
    public function getUL30Court()
    {
        return $this->uL30Court;
    }

    /**
     * Sets a new uL30Court
     *
     * Блок 30. Сведения о судебном споре или требовании по обязательству
     *
     * @param UL30CourtType[] $uL30Court
     * @return self
     */
    public function setUL30Court(array $uL30Court)
    {
        $this->uL30Court = $uL30Court;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_Event_2_6';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Изменились сведения о судебном споре или требовании по обязательству';
    }

    protected function initAttributes()
    {
        $this->uL10DealUid = new UL10DealUidType($this->template);
        foreach ($this->sendData->getAccountReplyRUTDF()->getLegalItems() as $key => $item) {
            $this->addToUL30Court(new UL30CourtType($this->template, $key));
        }
        if(empty($this->uL30Court)){
            $this->addToUL30Court(new UL30CourtType($this->template));
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'uL10DealUid',
            'uL30Court',
        ];
    }
}

