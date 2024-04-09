<?php

namespace mfteam\nbch\models;

/**
 * Сведения о физическом лице, указанные в документе, удостоверяющем его личность, приводятся согласно данному документу.
 * Сведения об индивидуальном предпринимателе, указанные в едином государственном реестре индивидуальных предпринимателей.
 */
class PersonReply extends BasePersonReply
{
    /**
     * Фамилия или предыдущая фамилия, если $isPrevName = 1
     * @var string $name1
     */
    public $name1 = '';
    
    /**
     * Имя или предыдущее имя, если $isPrevName = 1
     * @var string $first
     */
    public $first = '';
    
    /**
     * Отчество или предыдущее отчество, если $isPrevName = 1
     * @var string $paternal
     */
    public $paternal = '';
    
    /**
     * Дата рождения. "dd.MM.yyyy"
     * @var string $birthDt
     */
    public $birthDt = '';
    
    /**
     * Место рождения
     * @var string $placeOfBirth
     */
    public $placeOfBirth = '';
    
    /**
     * Признак наличия предыдущего имени.
     * Код «1» – у субъекта имеется предыдущее имя;
     * код «0» – обстоятельство кода «1» отсутствует.
     * @var int $isPrevName
     */
    public $isPrevName = 0;
    
    /**
     * Формат "дд.мм.гггг". Дата, в которую субъекту выдан документ, удостоверяющий личность.
     * @var string $issueDate
     */
    public $issueDate = '';
    
    /**
     * Цифровой код страны согласно Общероссийскому классификатору стран мира.
     * При отсутствии страны в ОКСМ указывается «999».
     * @var string $oksm
     */
    public $oksm = '';
    
    /**
     * @return string
     */
    public function getOksm(): string
    {
        return $this->oksm;
    }
    
    /**
     * @param string $oksm
     */
    public function setOksm(string $oksm): void
    {
        $this->oksm = $oksm;
    }
}