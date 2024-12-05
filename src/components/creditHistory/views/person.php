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
            <b>Дата создания отчёта:</b> <?=Yii::$app->formatter->asDatetime($preplyReport->subjectReply[0]->fileSinceDt, 'dd.MM.yyyy HH:mm:ss')?>
            <b>Идентификатор отчёта:</b> <?=$preplyReport->rqUuid?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col" style="text-align: center">
            <h1>Информация по субъекту кредитной истории</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?=$this->render('_personReply', [
                'personReply' => $preplyReport->personReply,
                'regnumReply' => $preplyReport->regnumReply,
                'snilsReply' => $preplyReport->snilsReply,
                'idReply' => $preplyReport->idReply,
                'entrepReply' => $preplyReport->entrepReply,
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
            <?=$this->render('_personReplyChange', [
                'personReply' => $preplyReport->personReply,
                'regnumReply' => $preplyReport->regnumReply,
                'snilsReply' => $preplyReport->snilsReply,
                'idReply' => $preplyReport->idReply,
                'entrepReply' => $preplyReport->entrepReply,
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
                'accountReplyRUTDF' => $preplyReport->accountReplyRUTDF??[],
            ])?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col" style="text-align: center">
            <h1>Детальная информация по договорам</h1>
        </div>
    </div>
    <?=$this->render('_accounts', [
        'accountReplyRUTDF' => $preplyReport->accountReplyRUTDF??[],
    ])?>
</div>
