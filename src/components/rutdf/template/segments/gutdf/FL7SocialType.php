<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL7SocialType
 *
 * Блок 7. СНИЛС
 * XSD Type: FL_7_Social_Type
 */
class FL7SocialType extends GutdfSegment
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

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'FL_7_Social';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            "СНИЛС" => 'Страховой номер индивидуального лицевого счета (далее – СНИЛС) физического лица. Номер указывается согласно документу, подтверждающему регистрацию физического лица в системе индивидуального (персонифицированного) учета. Заполняется, если субъект предоставил СНИЛС источнику.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 7. СНИЛС';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $snils = $this->sendData->getSNILSReply();
        if($snils === null){
            return;
        }
        $this->socialNum = $snils->snils;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'socialNum'
        ];
    }
}

