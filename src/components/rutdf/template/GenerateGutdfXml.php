<?php

namespace mfteam\nbch\components\rutdf\template;

use DOMDocument;
use DOMElement;
use mfteam\nbch\components\rutdf\template\segments\gutdf\Document;
use mfteam\nbch\components\rutdf\template\segments\gutdf\GutdfSegment;

class GenerateGutdfXml
{
    /**
     * @var string
     */
    public $version = '1.0';
    /**
     * @var string
     */
    public $encoding = 'UTF-8';

    /**
     * @param Document $document
     * @return false|string
     * @throws \DOMException
     */
    public function execute(Document $document)
    {
        $dom = new DOMDocument($this->version, $this->encoding);
        $dom->formatOutput = true;
        $root = $this->getDOMElement($document);
        $dom->appendChild($root);
        $this->addProperties($document, $root);
        $this->buildXml($root, $document);
        return $dom->saveXML();
    }

    /**
     * @return DOMElement
     * @throws \DOMException
     */
    private function getDOMElement(GutdfSegment $segment): DOMElement
    {
        return new DOMElement($segment->getSegmentName());
    }

    /**
     * @param DOMElement $element
     * @param GutdfSegment $parentSegment
     * @return void
     * @throws \DOMException
     */
    private function buildXml(DOMElement $element, GutdfSegment $parentSegment): void
    {
        if (empty($parentSegment->getXmlAttributes())) {
            return;
        }
        foreach ($parentSegment->getXmlAttributes() as $xmlName => $attribute) {
            $method = 'get' . ucfirst($attribute);
            $value = $parentSegment->$method();
            if ($value === null) {
                continue;
            }
            if ($value instanceof GutdfSegment) {
                $childElement = $this->getDOMElement($value);
                $element->appendChild($childElement);
                $this->addProperties($value, $childElement);
                $this->buildXml($childElement, $value);
                continue;
            }
            if (is_array($value)) {
                $subElement = null;
                if (is_string($xmlName)) {
                    $subElement = new DOMElement($xmlName);
                    $element->appendChild($subElement);
                }
                foreach ($value as $item) {

                    if ($item instanceof GutdfSegment) {
                        $childElement = $this->getDOMElement($item);
                        if ($subElement !== null) {
                            $subElement->appendChild($childElement);
                        } else {
                            $element->appendChild($childElement);
                        }

                        $this->addProperties($item, $childElement);
                        $this->buildXml($childElement, $item);
                    }
                }
                continue;
            }
            if (!is_object($value) && !is_array($value)) {
                if (is_int($xmlName)) {
                    $xmlName = $attribute;
                }
                $childElement = new DOMElement($xmlName, $value);
                $element->appendChild($childElement);
            }
        }
    }

    /**
     * @param GutdfSegment $segment
     * @param DOMElement $element
     * @return void
     * @throws \Exception
     */
    private function addProperties(GutdfSegment $segment, DOMElement $element): void
    {
        if (!empty($segment->getProperties())) {
            foreach ($segment->getProperties() as $property) {
                $method = 'get' . ucfirst($property);
                $value = $segment->$method();
                if ($value === null) {
                    continue;
                }
                $element->setAttribute($property, $value);
            }
        }
    }
}
