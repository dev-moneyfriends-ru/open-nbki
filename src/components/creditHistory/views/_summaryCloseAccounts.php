<?php


/* @var $this \yii\web\View */
/* @var $accountReply \mfteam\nbch\models\AccountReply[] */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */
$creditLimit = 0;
$amtOutstanding = 0;
$amtPastDue = 0;
foreach ($accountReplyRUTDF as $accountRUTDF) {
    if (!empty($accountRUTDF->loanIndicator)) {
        echo $this->render('_summaryAccountRUTDF', [
            'model' => $accountRUTDF,
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
    <td><?=Yii::$app->formatter->asDecimal($creditLimit, 2)?></td>
    <td colspan="3"></td>
    <td><?=Yii::$app->formatter->asDecimal($amtOutstanding, 2)?></td>
    <td class="<?=$amtPastDue?'text-danger':'text-success'?>"><?=Yii::$app->formatter->asDecimal($amtOutstanding, 2)?></td>
    <td colspan="5"></td>
</tr>

