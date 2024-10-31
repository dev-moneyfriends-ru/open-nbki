<?php

namespace mfteam\nbch\components\rutdf\template;

use mfteam\nbch\components\rutdf\template\segments\gutdf\Document;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

/**
 * Шаблон GUTDF
 */
class GutdfTemplate extends BaseTemplate
{
    public const ENTITY = "GutdfTemplate";

    public const FILE_EXTENSION = '';
    /**
     * @var Document
     */
    private $document;

    /**
     * @inheritDoc
     */
    public function loadContent()
    {
        $this->document = new Document($this);
        $this->content = (new GenerateGutdfXml())->execute($this->document);
    }

    /**
     * @inheritDoc
     */
    public function createSegments(): void
    {
        $this->segments[] = $this->document;
        $this->exctractSegments($this->document);
    }

    private function exctractSegments(GutdfSegment $parentSegment)
    {
        foreach ($parentSegment->getXmlAttributes() as $attribute){
            if($parentSegment->$attribute instanceof GutdfSegment){
                $this->segments[] = $parentSegment->$attribute;
                $this->exctractSegments($parentSegment->$attribute);
            }
        }
    }
}
