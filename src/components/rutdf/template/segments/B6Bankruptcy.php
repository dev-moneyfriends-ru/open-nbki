<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 *Блок 6. Сведения по делу о несостоятельности (банкротстве) B6_BANKRUPTCY
 */
class B6Bankruptcy extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return "B6_BANKRUPTCY";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            0,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
            self::EMPTY_VALUE,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Название' => '',
            'Признак дела о банкротстве' => '',
            'Код стадии рассмотрения дела' => '',
            'Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела' => '',
            'Ссылка на публикацию в ЕФРСБ' => '',
            'Признак неправомерных действий в деле' => '',
            'Дата публикации в ЕФРСБ сообщения о неправомерных действиях' => '',
            'Признак преднамеренного или фиктивного банкротства' => '',
            'Дата публикации в ЕФРСБ сообщения о признаках преднамеренного или фиктивного банкротства' => '',
            'Дополнительные сведения по делу' => '',
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 6. Сведения по делу о несостоятельности (банкротстве) B6_BANKRUPTCY';
    }
    
    public function validate(): bool
    {
        return true;
    }
    
    public function getDescription(): string
    {
        return 'Блок передается только арбитражным управляющим';
    }
}