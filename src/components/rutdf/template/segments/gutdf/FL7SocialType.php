<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL7SocialType
 *
 * Блок 7. СНИЛС
 * XSD Type: FL_7_Social_Type
 */
class FL7SocialType
{
    /**
     * 7.1. СНИЛС
     *
     * @var string $socialNum
     */
    private $socialNum = null;

    /**
     * Gets as socialNum
     *
     * 7.1. СНИЛС
     *
     * @return string
     */
    public function getSocialNum()
    {
        return $this->socialNum;
    }

    /**
     * Sets a new socialNum
     *
     * 7.1. СНИЛС
     *
     * @param string $socialNum
     * @return self
     */
    public function setSocialNum($socialNum)
    {
        $this->socialNum = $socialNum;
        return $this;
    }
}

