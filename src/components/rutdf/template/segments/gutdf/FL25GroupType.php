<?php

namespace mfteam\nbch\components\rutdf\template\segments\gutdf;

/**
 * Class representing FL25GroupType
 *
 * Блок 2,5
 * XSD Type: FL_2_5_Group_Type
 */
class FL25GroupType
{
    /**
     * Блок 2. Предыдущее имя
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL2PrevNameAType $fL2PrevName
     */
    private $fL2PrevName = null;

    /**
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @var \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType[] $fL5PrevDoc
     */
    private $fL5PrevDoc = [
        
    ];

    /**
     * Gets as fL2PrevName
     *
     * Блок 2. Предыдущее имя
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL2PrevNameAType
     */
    public function getFL2PrevName()
    {
        return $this->fL2PrevName;
    }

    /**
     * Sets a new fL2PrevName
     *
     * Блок 2. Предыдущее имя
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL2PrevNameAType $fL2PrevName
     * @return self
     */
    public function setFL2PrevName(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL2PrevNameAType $fL2PrevName)
    {
        $this->fL2PrevName = $fL2PrevName;
        return $this;
    }

    /**
     * Adds as fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType $fL5PrevDoc
     *@return self
     */
    public function addToFL5PrevDoc(\mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType $fL5PrevDoc)
    {
        $this->fL5PrevDoc[] = $fL5PrevDoc;
        return $this;
    }

    /**
     * isset fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFL5PrevDoc($index)
    {
        return isset($this->fL5PrevDoc[$index]);
    }

    /**
     * unset fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFL5PrevDoc($index)
    {
        unset($this->fL5PrevDoc[$index]);
    }

    /**
     * Gets as fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @return \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType[]
     */
    public function getFL5PrevDoc()
    {
        return $this->fL5PrevDoc;
    }

    /**
     * Sets a new fL5PrevDoc
     *
     * Блок 5. Документ, ранее удостоверявший личность
     *
     * @param \mfteam\nbch\components\rutdf\template\segments\gutdf\FL25GroupType\FL5PrevDocAType[] $fL5PrevDoc
     * @return self
     */
    public function setFL5PrevDoc(array $fL5PrevDoc)
    {
        $this->fL5PrevDoc = $fL5PrevDoc;
        return $this;
    }
}

