<?php

namespace mfteam\nbch\components\rutdf\template\segments;

/**
 *Блок 6. Сведения по делу о несостоятельности (банкротстве) B6_BANKRUPTCY
 */
class B6Bankruptcy extends \mfteam\nbch\components\BaseSegment
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
          $this->segmentName,
          0,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
          $this->emptyValue,
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
}