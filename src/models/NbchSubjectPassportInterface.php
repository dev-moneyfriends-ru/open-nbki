<?php

namespace mfteam\nbch\models;

/**
 * Паспорт субъекта
 */
interface NbchSubjectPassportInterface
{
    /**
     * Номер серии
     * @return string
     */
    public function getSeries():string;
    
    /**
     * Номер документа
     * @return string
     */
    public function getNumber():string;
    
    /**
     * Дата выдачи в формате YYYY-MM-DD
     * @return string
     */
    public function getIssueDate():string;
    
    /**
     * Название отделения внутренних дел МВД РФ или другого органа выдачи, код подразделения, выдавшего паспорт
     * @return string
     */
    public function getIssueAuthority():string;
}