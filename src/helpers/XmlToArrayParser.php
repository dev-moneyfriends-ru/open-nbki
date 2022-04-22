<?php

namespace mfteam\nbch\helpers;


class XmlToArrayParser
{
    public $encoding = 'WINDOWS-1251';
    
    /**
     * @param $content
     * @return array
     */
    public function parseXml($content)
    {
        $dom = new \DOMDocument('1.0', $this->encoding);
        $dom->loadXML($content, LIBXML_NOCDATA);
        return $this->convertXmlToArray(simplexml_import_dom($dom->documentElement));
    }
    
    /**
     * Converts XML document to array.
     * @param string|\SimpleXMLElement $xml xml to process.
     * @return array XML array representation.
     */
    protected function convertXmlToArray($xml)
    {
        if (is_string($xml)) {
            $sXml = simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
            $xml = $sXml === false?'false parse':$sXml;
        }
        $result = (array) $xml;
        foreach ($result as $key => $value) {
            if (!is_scalar($value)) {
                $result[$key] = $this->convertXmlToArray($value);
            }
        }
        return $result;
    }
}