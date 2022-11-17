<?php
/**
 * @var $preplyReport PreplyReport
 * @var $this View
 */

use mfteam\nbch\models\PreplyReport;
use yii\base\View;

?>
<div class="container-fluid" style="background-color: #ffffff">
    <div class="row">
        <div class="col" style="text-align: right">
            <b>Дата создания отчёта:</b> <?=Yii::$app->formatter->asDatetime($preplyReport->subjectReply->fileSinceDt, 'dd.MM.yyyy HH:mm:ss')?>
            <b>Идентификатор отчёта:</b> <?=$preplyReport->rqUuid?>
        </div>
    </div>
    <div class="row">
        <div class="col" style="text-align: center">
            <h1>Информация по субъекту кредитной истории</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?=$this->render('_businessReply', [
                'businessReply' => $preplyReport->businessReply,
                'regnumReply' => $preplyReport->regnumReply,
                'taxpayerIdReply' => $preplyReport->taxpayerIdReply,
            ])?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col" style="text-align: center">
            <h1>Изменения по титульной части</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?=$this->render('_businessReplyChange', [
                'businessReply' => $preplyReport->businessReply,
            ])?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col" style="text-align: center">
            <h1>Суммарная информация по договорам</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?=$this->render('_summaryAccounts', [
                'accountReply' => $preplyReport->accountReply,
                'accountReplyRUTDF' => $preplyReport->accountReplyRUTDF,
            ])?>
        </div>
    </div>
</div>
