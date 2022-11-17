<?php


/* @var $this \yii\web\View */
/* @var $accountReply \mfteam\nbch\models\AccountReply[] */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */
$creditLimit = 0;
$amtOutstanding = 0;
$amtPastDue = 0;
foreach ($accountReplyRUTDF as $model) {
    if (!empty($model->loanIndicator)) {
        $accountAmt = $model->getAccountAmt()[count($model->getAccountAmt()) - 1];
        $dueArrear = $model->getDueArrear()[count($model->getDueArrear()) - 1];
        $pastdueArrear = $model->getPastdueArrear() ? $model->getPastdueArrear()[count(
            $model->getPastdueArrear()
        ) - 1] : null;
        $amtPastDueAccount = $pastdueArrear ? $pastdueArrear->amtPastDue : 0;
        $creditLimit += (float)$accountAmt->creditLimit;
        $amtOutstanding += (float)$dueArrear->amtOutstanding;
        $amtPastDue += (float)$amtPastDueAccount;
        echo $this->render('_summaryAccountRUTDF', [
            'model' => $model,
        ]);
    }
}
foreach ($accountReply as $account) {
    if ((int)$account->accountRating !== 0 && (int)$account->accountRating !== 14) {
        $creditLimit += $account->creditLimit;
        $amtOutstanding += $account->amtOutstanding;
        $amtPastDue += $account->amtPastDue;
        echo $this->render('_summaryAccount', [
            'model' => $account,
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

