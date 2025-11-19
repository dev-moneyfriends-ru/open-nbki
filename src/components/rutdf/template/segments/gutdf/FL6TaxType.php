<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

use mfteam\nbch\components\rutdf\template\segments\gutdf\FL6TaxType\TaxNumGroupFL6TaxAType;

/**
 * Class representing FL6TaxType
 *
 * Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима
 * XSD Type: FL_6_Tax_Type
 */
class FL6TaxType extends GutdfSegment
{
    /**
     * Номера налогоплательщика
     *
     * @var TaxNumGroupFL6TaxAType $taxNumGroupFL6Tax
     */
    private $taxNumGroupFL6Tax = null;

    /**
     * 6.3. Регистрационный номер
     *
     * @var string $regNum
     */
    private $regNum = null;

    /**
     * 6.4. Признак специального налогового режима = 0
     *
     * @var string $specialMode0
     */
    private $specialMode0 = null;

    /**
     * 6.4. Признак специального налогового режима = 1
     *
     * @var string $specialMode1
     */
    private $specialMode1 = null;

    /**
     * Gets as taxNumGroupFL6Tax
     *
     * Номера налогоплательщика
     *
     * @return TaxNumGroupFL6TaxAType
     */
    public function getTaxNumGroupFL6Tax()
    {
        return $this->taxNumGroupFL6Tax;
    }

    /**
     * Sets a new taxNumGroupFL6Tax
     *
     * Номера налогоплательщика
     *
     * @param TaxNumGroupFL6TaxAType $taxNumGroupFL6Tax
     * @return self
     */
    public function setTaxNumGroupFL6Tax(?TaxNumGroupFL6TaxAType $taxNumGroupFL6Tax = null)
    {
        $this->taxNumGroupFL6Tax = $taxNumGroupFL6Tax;
        return $this;
    }

    /**
     * Gets as regNum
     *
     * 6.3. Регистрационный номер
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
     * 6.3. Регистрационный номер
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
     * Gets as specialMode0
     *
     * 6.4. Признак специального налогового режима = 0
     *
     * @return string
     */
    public function getSpecialMode0()
    {
        return $this->specialMode0;
    }

    /**
     * Sets a new specialMode0
     *
     * 6.4. Признак специального налогового режима = 0
     *
     * @param string $specialMode0
     * @return self
     */
    public function setSpecialMode0($specialMode0)
    {
        $this->specialMode0 = $specialMode0;
        return $this;
    }

    /**
     * Gets as specialMode1
     *
     * 6.4. Признак специального налогового режима = 1
     *
     * @return string
     */
    public function getSpecialMode1()
    {
        return $this->specialMode1;
    }

    /**
     * Sets a new specialMode1
     *
     * 6.4. Признак специального налогового режима = 1
     *
     * @param string $specialMode1
     * @return self
     */
    public function setSpecialMode1($specialMode1)
    {
        $this->specialMode1 = $specialMode1;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
       return 'FL_6_Tax';
    }

    public function getFields(): array
    {
        return[
            'regNum' => $this->regNum,
            'specialMode_0' => $this->specialMode0,
            'specialMode_1' => $this->specialMode1,
        ];
    }
    /**
     * @inheritDoc
     */
    public function getFieldsDescriptions(): array
    {
        return [
            'Регистрационный номер' => 'Заполняется, если субъект является индивидуальным предпринимателем. Указывается основной государственный регистрационный номер индивидуального предпринимателя (далее – ОГРНИП). Указывается в соответствии с пунктом 2 статьи 4 Федерального закона от 8 августа 2001 года № 129-ФЗ «О государственной регистрации юридических лиц и индивидуальных предпринимателей» (Собрание законодательства Российской Федерации, 2001, № 33, ст. 3431; 2011, № 27, ст. 3880). Для иностранного индивидуального предпринимателя указывается регистрационный номер в стране регистрации (инкорпорации) или его аналог.',
            'Признак специального налогового режима 0' => 'код «1» – в случае если субъект применяет специальный налоговый режим «Налог на профессиональный доход» в соответствии с Федеральным законом от 27 ноября 2018 года № 422-ФЗ «О проведении эксперимента по установлению специального налогового режима «Налог на профессиональный доход» (Собрание законодательства Российской Федерации, 2018, № 49, ст. 7494; 2022, № 27, ст. 4607); код «0» – в случае если обстоятельство кода «1» отсутствует.',
            'Признак специального налогового режима 1' => 'код «1» – в случае если субъект применяет специальный налоговый режим «Налог на профессиональный доход» в соответствии с Федеральным законом от 27 ноября 2018 года № 422-ФЗ «О проведении эксперимента по установлению специального налогового режима «Налог на профессиональный доход» (Собрание законодательства Российской Федерации, 2018, № 49, ст. 7494; 2022, № 27, ст. 4607); код «0» – в случае если обстоятельство кода «1» отсутствует.',
        ];
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 6. Номер налогоплательщика, регистрационный номер и признак специального налогового режима';
    }

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        $tax = $this->sendData->getRegnumReply();
        if ($tax === null) {
            return;
        }

        $this->setTaxNumGroupFL6Tax(new TaxNumGroupFL6TaxAType($this->template));
        $this->setRegNum($tax->regNum);

        if ($tax->spectaxCode) {
            $this->setSpecialMode0(null);
            $this->setSpecialMode1('');
        } else {
            $this->setSpecialMode1(null);
            $this->setSpecialMode0('');
        }
    }

    /**
     * @inheritDoc
     */
    public function getXmlAttributes(): array
    {
        return [
            'taxNumGroupFL6Tax',
            'regNum',
            'specialMode_0' => 'specialMode0',
            'specialMode_1' => 'specialMode1',
        ];
    }
}

