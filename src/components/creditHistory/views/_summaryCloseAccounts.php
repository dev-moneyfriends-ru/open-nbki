<?php

/* @var $this \yii\web\View */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */
if(empty($accountReplyRUTDF)){
    return;
}
$creditLimit = 0;
$amtOutstanding = 0;
$amtPastDue = 0;
foreach ($accountReplyRUTDF as $model) {
    if (!empty($model->loanIndicator)) {
        $accountAmt = $model->getAccountAmt();
        $dueArrear = $model->getDueArrear();
        $pastdueArrear = $model->getPastdueArrear();
        $amtPastDueAccount = $pastdueArrear->amtPastDue ?? 0;
        $creditLimit += isset($accountAmt->creditLimit) ? floatval($accountAmt->creditLimit) : 0;
        $amtOutstanding += isset($dueArrear->amtOutstanding) ? floatval($dueArrear->amtOutstanding) : 0;
        $amtPastDue += (float)$amtPastDueAccount;
        echo $this->render('_summaryAccountRUTDF', [
            'model' => $model,
        ]);
    }
}
?>
<tr>
    <td colspan="3"><b>Итог:</b></td>
    <td><?= Yii::$app->formatter->asDecimal($creditLimit, 2) ?></td>
    <td colspan="3"></td>
    <td><?= Yii::$app->formatter->asDecimal($amtOutstanding, 2) ?></td>
    <td class="<?= $amtPastDue ? 'text-danger' : 'text-success' ?>"><?= Yii::$app->formatter->asDecimal(
            $amtPastDue,
            2
        ) ?></td>
    <td colspan="5"></td>
</tr>

