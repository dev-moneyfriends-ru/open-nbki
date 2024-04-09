<?php

namespace mfteam\nbch\models;

/**
 * Кредитная оценка (скоринг)
 */
class ScoreReply extends BaseItem
{
    /**
     * @var int $score
     */
    public $score = null;
    
    /**
     * @var string $scoreDate
     */
    public $scoreDate = '';
}