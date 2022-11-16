<?php

namespace mfteam\nbch\models;

use yii\helpers\ArrayHelper;

/**
 * Отчет КИ
 *
 * @property-read \mfteam\nbch\models\SubjectReply $subjectReply
 */
class PreplyReport extends \yii\base\BaseObject
{
    /**
     * @var array
     */
    public $report = [];
    
    /**
     * Даты формирования КИ
     * @return SubjectReply
     * @throws \Exception
     */
    public function getSubjectReply()
    {
        return new SubjectReply(ArrayHelper::getValue($this->report, 'SubjectReply', []));
    }
}