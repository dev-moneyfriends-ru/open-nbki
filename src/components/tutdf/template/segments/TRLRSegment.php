<?php
/**
 * Created by PhpStorm.
 * User: misha.
 * Date: 03.06.2020
 * Time: 16:33
 */

namespace mfteam\nbch\components\tutdf\template\segments;


use mfteam\nbch\components\BaseSegment;

class TRLRSegment extends BaseSegment
{
    
    /**
     * @inheritDoc
     */
    public function validate(): bool
    {
        return true;
    }
    
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'TRLR';
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            $this->getCounter(),
        ];
    }
    
    private function getCounter()
    {
        $tokens = $this->template->getTokenList();
        $counter = 0;
        foreach ($tokens as $value) {
            if (is_array($value)) {
                $counter += count($value);
            } else {
                $counter++;
            }
        }
        return $counter - 1;
    }
    
    public function getFieldsDescriptions(): array
    {
        return [
            'Сегмент «Трейлер»' => 'Должен содержать буквы TRLR.',
            'Счётчик' => 'Контрольное число, указывающее количество сегментов в файле. Должно включать сегмент заголовка и сам сегмент Трейлер. Если значение не совпадает с подсчётом сегментов, то отклоняется весь файл.',
        ];
    }
    
    public function getDescription(): string
    {
        return 'Сегмент TRLR:
    обязательный сегмент.
    Содержит дополнительные сегменты подсчёта контрольной суммы для подтверждения количества полученных сегментов. Если это значение вводится и не совпадает с результатом подсчёта сегментов, отклоняется весь файл.
    в файле обновления допустимо только один раз.
    ';
    }
    
    public function getTitle(): string
    {
        return 'Сегмент «Трейлер» (TRLR)';
    }
}