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
            $this->formatNewDate(time()),
            $this->emptyValue,
            Env::ensure()->module->rutdf->userName,
            Env::ensure()->module->rutdf->password,
            RutdfTemplate::FORMAT_VERSION,
            $this->emptyValue,
            $this->formatNewDate($this->template->offer->getTrade()->reportingDt),
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
            0 => 'Наименование сегмента',
            1 => 'ИНН источника.',
            2 => 'ОГРН источника.',
            3 => 'Уникальный исходящий регистрационный номер документа (совпадает с именем файла без расширений).',
            4 => 'Регистрационная дата документа (указанная в имени файла).',
            5 => "Поле не используется",
            6 => "Имя пользователя для передачи данных.",
            7 => "Пароль, предоставленный НБКИ.",
            8 => "Версия формата.",
            9 => "Исходящий регистрационный номер документа, не принятого ранее",
            10 => "Дата формирования документа, содержащего кредитную информацию",
            11 => "Входящий регистрационный номер документа, указанный в извещении от НБКИ о непринятии кредитной информации - если передаются данные, отвергнутые ранее по причине непрохождения форматно-логического контроля",
            12 => "Дата документа, указанная в извещении от НБКИ о непринятии кредитной информации - если передаются данные, отвергнутые ранее по причине непрохождения форматно-логического контроля.",
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