<?php


/* @var $this View */
/* @var $model AccountReplyRUTDF */

use mfteam\nbch\models\AccountReplyRUTDF;
use mfteam\nbch\models\LoanKind;
use mfteam\nbch\models\TradeRUTDF;
use mfteam\nbch\models\TradeType;
use yii\web\View;

$pastdueArrear = $model->getPastdueArrear();
$amtPastDue = $pastdueArrear->amtPastDue ?? 0;
$payment = $model->getPayment()?$model->getPayment()[count($model->getPayment()) - 1]:null;
$daysPastDue = $payment->daysPastDue ?? 0;
$trade = $model->getTrade()??(new TradeRUTDF());
$accountAmt = $model->getAccountAmt();
$dueArrear = $model->getDueArrear();
$maxAmtPastDue = 0;
$maxPatDue = 0;
$maxPatDueStyle = '';
foreach ($model->getPastdueArrearArray() as $item) {
    if ($maxAmtPastDue < (float)$item->amtPastDue) {
        $maxAmtPastDue = (float)$item->amtPastDue;
    }
}
foreach ($model->getPayment() as $item) {
    if(empty($item->daysPastDue)){
        continue;
    }
    if ($maxPatDue < (int)$item->daysPastDue) {
        $maxPatDue = (int)$item->daysPastDue;
    }
}
if ($maxPatDue <= 7 && $maxPatDue > 0) {
    $maxPatDueStyle = 'background-color: #28a745 !important';
}
if ($maxPatDue <= 30 && $maxPatDue > 7) {
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
        <?= $trade->loanKindCode ?>
    </td>
    <td><?= $accountAmt?Yii::$app->formatter->asDecimal((float)$accountAmt->creditLimit, 2):'-' ?></td>
    <td><?= $accountAmt?$accountAmt->currencyCode:'-'?></td>
    <td><?= Yii::$app->formatter->asDate($trade->openedDt, 'dd.MM.yyyy') ?></td>
    <td><?= Yii::$app->formatter->asDate($trade->closeDt, 'dd.MM.yyyy') ?></td>
    <td><?= $dueArrear?Yii::$app->formatter->asDecimal((float)$dueArrear->amtOutstanding, 2):'-' ?></td>
    <td class="<?= $amtPastDue ? 'text-danger' : 'text-success' ?>"><?= Yii::$app->formatter->asDecimal(
            (float)$amtPastDue,
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

