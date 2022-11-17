<?php


/* @var $this View */
/* @var $model AccountReplyRUTDF */

use mfteam\nbch\models\AccountReplyRUTDF;
use mfteam\nbch\models\TradeType;
use yii\web\View;

$pastdueArrear = $model->getPastdueArrear() ? $model->getPastdueArrear()[count($model->getPastdueArrear()) - 1] : null;
$amtPastDue = $pastdueArrear ? $pastdueArrear->amtPastDue : 0;
$payment = $model->getPayment()[count($model->getPayment()) - 1];
$daysPastDue = (int)$payment->daysPastDue;
$trade = $model->getTrade()[0];
$accountAmt = $model->getAccountAmt()[count($model->getAccountAmt()) - 1];
$dueArrear = $model->getDueArrear()[count($model->getDueArrear()) - 1];
$maxAmtPastDue = 0;
$maxPatDue = 0;
$maxPatDueStyle = '';
foreach ($model->getPastdueArrear() as $item) {
    if ($maxAmtPastDue < (float)$item->amtPastDue) {
        $maxAmtPastDue = (float)$item->amtPastDue;
    }
}
foreach ($model->getPayment() as $item) {
    if ($maxPatDue < (int)$item->daysPastDue) {
        $maxPatDue = (int)$item->daysPastDue;
    }
}
if ($maxPatDue <= 7 && $maxPatDue > 0) {
    $maxPatDueStyle = 'background-color: #28a745 !important';
}
if ($maxPatDue <= 30) {
    $maxPatDueStyle = 'background-color: #ffc107 !important';
}
if ($maxPatDue > 30) {
    $maxPatDueStyle = 'background-color: #dc3545 !important';
}
?>
<tr>
    <td><?= $model->uuid ?? $model->serialNum ?></td>
    <td><?= $model->businessCategory ?></td>
    <td>
        <?= TradeType::getText($trade->tradeTypeCode) ?>
        <?= TradeType::getText($trade->loanKindCode) ?>
    </td>
    <td><?= Yii::$app->formatter->asDecimal((float)$accountAmt->creditLimit, 2) ?></td>
    <td><?= $accountAmt->currencyCode ?></td>
    <td><?= Yii::$app->formatter->asDate($trade->openedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDate($trade->closedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDecimal((float)$dueArrear->amtOutstanding, 2) ?></td>
    <td class="<?= $amtPastDue ? 'text-danger' : 'text-success' ?>"><?= Yii::$app->formatter->asDecimal(
            (float)$model->amtPastDue,
            2
        ) ?></td>
    <td class="<?= $daysPastDue ? 'text-danger' : 'text-success' ?>"><?= $daysPastDue ?></td>
    <td class="<?= $maxAmtPastDue ? 'text-danger' : 'text-success' ?>"><?= Yii::$app->formatter->asDecimal(
            $maxAmtPastDue,
            2
        ) ?></td>
    <td><?= Yii::$app->formatter->asDate($model->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy') ?></td>
    <td style="<?= $maxPatDueStyle ?>"><?= $maxPatDue ?> дней</td>
</tr>

