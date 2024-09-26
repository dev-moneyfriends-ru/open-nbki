<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\UL6BankruptcyType;

/**
 * Class representing DateGroupUL6BankruptcyAType
 */
class DateGroupUL6BankruptcyAType
{
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
}

