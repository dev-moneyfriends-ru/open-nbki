<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL14GroupType
 *
 * Блок 1,4
 * XSD Type: FL_1_4_Group_Type
 */
class FL14GroupType
{
    /**
     * Блок 1. Имя
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL1NameAType $fL1Name
     */
    private $fL1Name = null;

    /**
     * Блок 4. Документ, удостоверяющий личность
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType[] $fL4Doc
     */
    private $fL4Doc = [
        
    ];

    /**
     * Gets as fL1Name
     *
     * Блок 1. Имя
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL1NameAType
     */
    public function getFL1Name()
    {
        return $this->fL1Name;
    }

    /**
     * Sets a new fL1Name
     *
     * Блок 1. Имя
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL1NameAType $fL1Name
     * @return self
     */
    public function setFL1Name(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL1NameAType $fL1Name)
    {
        $this->fL1Name = $fL1Name;
        return $this;
    }

    /**
     * Adds as fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType $fL4Doc
     *@return self
     */
    public function addToFL4Doc(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType $fL4Doc)
    {
        $this->fL4Doc[] = $fL4Doc;
        return $this;
    }

    /**
     * isset fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL4Doc($index)
    {
        return isset($this->fL4Doc[$index]);
    }

    /**
     * unset fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL4Doc($index)
    {
        unset($this->fL4Doc[$index]);
    }

    /**
     * Gets as fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType[]
     */
    public function getFL4Doc()
    {
        return $this->fL4Doc;
    }

    /**
     * Sets a new fL4Doc
     *
     * Блок 4. Документ, удостоверяющий личность
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL14GroupType\FL4DocAType[] $fL4Doc
     * @return self
     */
    public function setFL4Doc(array $fL4Doc)
    {
        $this->fL4Doc = $fL4Doc;
        return $this;
    }
}

