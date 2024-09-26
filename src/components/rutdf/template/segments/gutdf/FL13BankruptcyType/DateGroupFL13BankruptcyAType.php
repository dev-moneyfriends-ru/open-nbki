<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf\FL13BankruptcyType;

/**
 * Class representing DateGroupFL13BankruptcyAType
 */
class DateGroupFL13BankruptcyAType
{
    /**
     * 13.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
     *
     * @var string $date
     */
    private $date = null;

    /**
     * 13.2. Код стадии рассмотрения дела
     *
     * @var string $stage
     */
    private $stage = null;

    /**
     * 13.4. Ссылка на публикацию в ЕФРСБ
     *
     * @var string $link
     */
    private $link = null;

    /**
     * Gets as date
     *
     * 13.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
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
     * 13.3. Дата публикации в ЕФРСБ сведений о стадии рассмотрения дела
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
     * 13.2. Код стадии рассмотрения дела
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
     * 13.2. Код стадии рассмотрения дела
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
     * 13.4. Ссылка на публикацию в ЕФРСБ
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
     * 13.4. Ссылка на публикацию в ЕФРСБ
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

