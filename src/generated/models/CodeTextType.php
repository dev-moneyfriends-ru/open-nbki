<?php

namespace mfteam\nbch\generated\models;

/**
 * Class representing CodeTextType
 *
 * 
 * XSD Type: CodeText
 */
class CodeTextType
{

    /**
     * @var string $code
     */
    private $code = null;

    /**
     * @var string $text
     */
    private $text = null;

    /**
     * @var string[] $tag
     */
    private $tag = [
        
    ];

    /**
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as tag
     *
     * @return self
     * @param string $tag
     */
    public function addToTag($tag)
    {
        $this->tag[] = $tag;
        return $this;
    }

    /**
     * isset tag
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTag($index)
    {
        return isset($this->tag[$index]);
    }

    /**
     * unset tag
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTag($index)
    {
        unset($this->tag[$index]);
    }

    /**
     * Gets as tag
     *
     * @return string[]
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * @param string[] $tag
     * @return self
     */
    public function setTag(array $tag)
    {
        $this->tag = $tag;
        return $this;
    }


}

