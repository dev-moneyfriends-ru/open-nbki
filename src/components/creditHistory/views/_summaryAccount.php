<?php


/* @var $this View */

/* @var $model AccountReply */

use mfteam\nbch\models\AccountReply;
use yii\web\View;

$amtPastDue = (int)$model->amtPastDue;
$maxPatDue = '';
$maxPatDueStyle = '';
if (!empty($model->numDays30)) {
    $maxPatDue = 'от 30 до 59 дней';
    $maxPatDueStyle = 'background-color: #ffc107 !important';
}
if (!empty($model->numDays60)) {
    $maxPatDue = 'от 60 до 89 дней';
    $maxPatDueStyle = 'background-color: #dc3545 !important';
}
if (!empty($model->numDays90)) {
    $maxPatDue = 'более 90';
    $maxPatDueStyle = 'background-color: #dc3545 !important';
}
if (empty($maxPatDue)) {
    $pattern = $model->paymtPat;
    if (mb_strpos($pattern, 'B') !== false) {
        $maxPatDue = 'от 1 до 7 дней';
        $maxPatDueStyle = 'background-color: #28a745 !important';
    }
    if (mb_strpos($pattern, 'A') !== false) {
        $maxPatDue = 'от 1 до 29 дней';
        $maxPatDueStyle = 'background-color: #ffc107 !important';
    }
    if (mb_strpos($pattern, 'C') !== false) {
        $maxPatDue = 'от 8 до 29 дней';
        $maxPatDueStyle = 'background-color: #ffc107 !important';
    }
}
?>
<tr>
    <td><?= $model->uuid ?></td>
    <td><?= $model->businessCategory ?></td>
    <td><?= $model->ownerIndicText ?></td>
    <td><?= Yii::$app->formatter->asDecimal((float)$model->creditLimit, 2) ?></td>
    <td><?= $model->currencyCode ?></td>
    <td><?= Yii::$app->formatter->asDate($model->openedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDate($model->closedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDecimal((float)$model->amtOutstanding, 2) ?></td>
    <td class="<?= $amtPastDue ? 'text-danger' : 'text-success' ?>"><?= Yii::$app->formatter->asDecimal(
            (float)$model->amtPastDue,
            2
        ) ?></td>
    <td>-</td>
    <td>-</td>
    <td><?= Yii::$app->formatter->asDate($model->accountRatingDate, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy') ?></td>
    <td style="<?= $maxPatDueStyle ?>"><?= $maxPatDue ?></td>
</tr>

