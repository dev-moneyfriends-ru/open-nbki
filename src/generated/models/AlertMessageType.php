<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing AlertMessageType
 *
 * 
 * XSD Type: AlertMessage
 */
class AlertMessageType
{

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $message
     */
    private $message = null;

    /**
     * @var int $category
     */
    private $category = null;

    /**
     * @var int $code
     */
    private $code = null;

    /**
     * @var int $severity
     */
    private $severity = null;

    /**
     * @var string $view
     */
    private $view = null;

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * @param int $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param int $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as severity
     *
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * @param int $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as view
     *
     * @return string
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Sets a new view
     *
     * @param string $view
     * @return self
     */
    public function setView($view)
    {
        $this->view = $view;
        return $this;
    }


}

