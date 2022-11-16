<?php
/**
 * @var $preplyReport PreplyReport
 * @var $this View
 */

use mfteam\nbch\models\PreplyReport;
use yii\base\View;

?>
<div class="container">
    <div class="row">
        <div class="col" style="text-align: right">

        </div>
    </div>
    <div class="row">
        <div class="col" style="text-align: right">
            <b>Дата создания отчёта:</b> <?=Yii::$app->formatter->asDatetime($preplyReport->subjectReply->fileSinceDt, 'dd.MM.yyyy HH:mm:ss')?>
        </div>
    </div>
</div>
