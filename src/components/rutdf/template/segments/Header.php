<?php

namespace mfteam\nbch\components\rutdf\template\segments;

use mfteam\nbch\components\rutdf\template\RutdfTemplate;
use mfteam\nbch\Env;

/**
 * Блок заголовка документа HEADER
 */
class Header extends \mfteam\nbch\components\BaseSegment
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
        return "HEADER";
    }
    
    /**
     * @inheritDoc
     */
    public function getFields(): array
    {
        return [
            $this->getSegmentName(),
            Env::ensure()->module->rutdf->sourceInn,
            Env::ensure()->module->rutdf->sourceOgrn,
            $this->template->getBaseName(),
            $this->formatDate(time()),
            $this->emptyValue,
            Env::ensure()->module->rutdf->userName,
            Env::ensure()->module->rutdf->password,
            RutdfTemplate::FORMAT_VERSION,
            $this->emptyValue,
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'ИНН источника.',
            'ОГРН источника.',
            'Уникальный исходящий регистрационный номер документа (совпадает с именем файла без расширений).',
            'Регистрационная дата документа (указанная в имени файла).',
            "Поле не используется",
            "Имя пользователя для передачи данных.",
            "Пароль, предоставленный НБКИ.",
            "Версия формата.",
            "Исходящий регистрационный номер документа, не принятого ранее",
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return "ИНН и ОГРН сообщаются источником информационно, не используются для его идентификации.
         Для этого используется поле 6 «Имя пользователя для передачи данных», передачей которого источник
          инициирует автоматическое заполнение сведений в закрытой части КИ, исходя из данных, предоставленных
           им о себе при заключении Договора.";
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return "Блок заголовка документа HEADER";
    }
}