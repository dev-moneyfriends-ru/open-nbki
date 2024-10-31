<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType;

use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Class representing FL2PrevNameAType
 */
class FL2PrevNameAType extends GutdfSegment
{
    /**
     * 2.1. Признак наличия предыдущего имени = 0
     *
     * @var string $prevNameFlag0
     */
    private $prevNameFlag0 = null;

    /**
     * 2.1. Признак наличия предыдущего имени = 1
     *
     * @var string $prevNameFlag1
     */
    private $prevNameFlag1 = null;

    /**
     * 2.2. Фамилия предыдущая
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * 2.3. Имя предыдущее
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * 2.4. Отчество предыдущее
     *
     * @var string $middleName
     */
    private $middleName = null;

    /**
     * 2.5. Дата выдачи документа с измененным именем
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as prevNameFlag0
     *
     * 2.1. Признак наличия предыдущего имени = 0
     *
     * @return string
     */
    public function getPrevNameFlag0()
    {
        return $this->prevNameFlag0;
    }

    /**
     * Sets a new prevNameFlag0
     *
     * 2.1. Признак наличия предыдущего имени = 0
     *
     * @param string $prevNameFlag0
     * @return self
     */
    public function setPrevNameFlag0($prevNameFlag0)
    {
        $this->prevNameFlag0 = $prevNameFlag0;
        return $this;
    }

    /**
     * Gets as prevNameFlag1
     *
     * 2.1. Признак наличия предыдущего имени = 1
     *
     * @return string
     */
    public function getPrevNameFlag1()
    {
        return $this->prevNameFlag1;
    }

    /**
     * Sets a new prevNameFlag1
     *
     * 2.1. Признак наличия предыдущего имени = 1
     *
     * @param string $prevNameFlag1
     * @return self
     */
    public function setPrevNameFlag1($prevNameFlag1)
    {
        $this->prevNameFlag1 = $prevNameFlag1;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * 2.2. Фамилия предыдущая
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * 2.2. Фамилия предыдущая
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * 2.3. Имя предыдущее
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * 2.3. Имя предыдущее
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * 2.4. Отчество предыдущее
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * 2.4. Отчество предыдущее
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as date
     *
     * 2.5. Дата выдачи документа с измененным именем
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * 2.5. Дата выдачи документа с измененным именем
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(?\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_2_PrevName';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Признак наличия предыдущего имени 0' => 'Код «1» – у субъекта имеется предыдущее имя;  код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 2 не заполняются.',
            'Признак наличия предыдущего имени 1' => 'Код «1» – у субъекта имеется предыдущее имя;  код «0» – обстоятельство кода «1» отсутствует. Если указан код «0», иные показатели блока 2 не заполняются.',
            'Фамилия предыдущая' => '',
            'Имя предыдущее' => '',
            'Отчество предыдущее' => 'Указывается при наличии.',
            'Дата выдачи документа с измененным именем' => 'Дата, в которую субъекту выдан документ, удостоверяющий личность, с именем, которое отличается от указанного в блоке 2. Если источнику известно несколько таких дат, указывается наиболее ранняя из них.'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 2. Предыдущее имя';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $person = $this->template->sendData->getPrevPersonReply();
        if($person === null || empty($person->isPrevName)){
            $this->prevNameFlag0 = '';
            $this->prevNameFlag1 = null;
            return;
        }
        $this->prevNameFlag1 = '';
        $this->prevNameFlag0 = null;
        $this->lastName = $person->name1;
        $this->firstName = $person->first;
        $this->middleName = $person->paternal;

    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'prevNameFlag_0' => 'prevNameFlag0',
            'prevNameFlag_1' => 'prevNameFlag1',
            'lastName',
            'firstName',
            'middleName',
            'date',
        ];
    }
}

