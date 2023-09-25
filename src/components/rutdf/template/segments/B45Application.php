<?php

namespace mfteam\nbch\components\rutdf\template\segments;

class B45Application extends C55Application
{
    /**
     * @inheritDoc
     */
    public function getSegmentName(): string
    {
        return 'B45_APPLICATION';
    }
    
    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return 'Блок 45. Сведения об обращении.';
    }
}