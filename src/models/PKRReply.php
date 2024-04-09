<?php

namespace mfteam\nbch\models;

/**
 * Индивидуальный рейтинг субъекта
 */
class PKRReply extends BaseItem
{
    /**
     * @var int $score
     */
    public $score = null;
    
    /**
     * @var string $scoreDate
     */
    public $scoreDate = '';
    
    /**
     * @var int[] $factor
     */
    public $factor = [];
    
    /**
     * @var string[] $factorWeight
     */
    public $factorWeight = [];
    
    /**
     * @var int $exclusionCode
     */
    public $exclusionCode = null;
    
    /**
     * @var string $otherExclusion
     */
    public $otherExclusion = '';
}