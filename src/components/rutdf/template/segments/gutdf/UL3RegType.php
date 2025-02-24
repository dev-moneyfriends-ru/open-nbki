<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing UL3RegType
 *
 * Блок 3. Регистрационный номер
 * XSD Type: UL_3_Reg_Type
 */
class UL3RegType extends GutdfSegment
{
    /**
     * 3.1. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 3.2. Идентификатор LEI
     *
     * @var string $lei
     */
    private $lei = null;

    /**
     * Gets as regNum
     *
     * 3.1. Регистрационный номер
     *
     * @return string
     */
    public function getRegNum()
    {
        return $this->regNum;
    }

    /**
     * Sets a new regNum
     *
     * 3.1. Регистрационный номер
     *
     * @param string $regNum
     * @return self
     */
    public function setRegNum($regNum)
    {
        $this->regNum = $regNum;
        return $this;
    }

    /**
     * Gets as lei
     *
     * 3.2. Идентификатор LEI
     *
     * @return string
     */
    public function getLei()
    {
        return $this->lei;
    }

    /**
     * Sets a new lei
     *
     * 3.2. Идентификатор LEI
     *
     * @param string $lei
     * @return self
     */
    public function setLei($lei)
    {
        $this->lei = $lei;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'UL_3_Reg';
    }

    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Регистрационный номер' => 'Для российского юридического лица указывается ОГРН в соответствии с пунктом 2 статьи 4 Федерального закона от 8 августа 2001 года № 129-ФЗ «О государственной регистрации юридических лиц и индивидуальных предпринимателей» (Собрание законодательства Российской Федерации, 2001, № 33, ст. 3431; 2011, № 27, ст. 3880).
                                    Для иностранного юридического лица указывается регистрационный номер в стране регистрации (инкорпорации) или его аналог.
                                    ',
            'Идентификатор LEI' => 'Международный код идентификации юридического лица (Legal Entity Identifier, LEI) (далее ‒ идентификатор LEI). Значение указанного показателя приводится в соответствии с международным стандартом ISO 17442:2012 «Финансовые услуги. Идентификатор юридического лица».'
        ];
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return '';
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 3. Регистрационный номер';
    }

    /**
     * @inheritDoc
     */
    public function getProperties(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $this->regNum = $this->sendData->getRegnumReply()->regNum;
        $this->lei = $this->sendData->getRegnumReply()->lei ?? self::EMPTY_VALUE;
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'regNum',
            'lei',
        ];
    }
}

