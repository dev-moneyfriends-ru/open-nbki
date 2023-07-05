<?php


/* @var $this View */

/* @var $model AccountReplyRUTDF */

use mfteam\nbch\models\AccountRelationship;
use mfteam\nbch\models\AccountReplyRUTDF;
use mfteam\nbch\models\LoanKind;
use yii\helpers\ArrayHelper;
use yii\web\View;

$status = 'Активный';
if (!empty($model->loanIndicator)) {
    $status = 'Закрыт';
}
if (!empty($model->getAcquirerIndivid()) || !empty($model->getAcquirerLegal())) {
    $status = 'Передан';
}

$maxAmtPastDue = 0;
foreach ($model->getPastdueArrear() as $item) {
    if ($maxAmtPastDue < (float)$item->amtPastDue) {
        $maxAmtPastDue = (float)$item->amtPastDue;
    }
}

$payment = $model->getPayment()?$model->getPayment()[count($model->getPayment()) - 1]:null;
$collatRepay = $model->getCollatRepay() ? $model->getCollatRepay()[count($model->getCollatRepay()) - 1] : null;
$overallVal = $model->getOverallVal() ? $model->getOverallVal()[count($model->getOverallVal()) - 1] : null;
$trade = $model->getTrade()?$model->getTrade()[0]:(new \mfteam\nbch\models\TradeRUTDF());
$accountAmt = $model->getAccountAmt()?$model->getAccountAmt()[count($model->getAccountAmt()) - 1]:null;
$dueArrear = $model->getDueArrear()?$model->getDueArrear()[count($model->getDueArrear()) - 1]:null;
$pastdueArrear = $model->getPastdueArrear() ? $model->getPastdueArrear()[count($model->getPastdueArrear()) - 1] : null;
$amtPastDue = $pastdueArrear ? $pastdueArrear->amtPastDue : 0;
?>
<div class="row" style="margin-top: 50px">
    <div class="col">
        <h2 style="text-align: center">Информация по договору: <?= $model->uuid ?? $model->serialNum ?></h2>
    </div>
</div>
<table class="table table-bordered table-condensed">
    <tbody>
    <tr>
        <td style="font-weight: bold">Состояние договора</td>
        <td style="text-align: center"><?= $status ?></td>
        <td style="font-weight: bold">Специальный статус договора</td>
        <td style="text-align: center"></td>
        <td style="font-weight: bold">
            Макс. сумма просроченной задолженности
        </td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)$maxAmtPastDue, 2) ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата перехода в состояние</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Дата актуальности информации</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Тип источника информации</td>
        <td style="text-align: center"><?= $model->businessCategory ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">
            Уникальный идентификатор договора
        </td>
        <td style="text-align: center"><?= $model->uuid ?></td>
        <td style="font-weight: bold">Вид отображения задолженности</td>
        <td style="text-align: center">С учетом % и пени</td>
        <td style="font-weight: bold">Дата начала выгрузок в БКИ</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->fileSinceDt, 'dd.MM.yyyy') ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">ID Договора</td>
        <td style="text-align: center"><?= $model->serialNum ?></td>
        <td style="font-weight: bold">Сумма погашенного основного долга</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal(
                (float)ArrayHelper::getValue($payment, 'principalTotalAmt'),
                2
            ) ?></td>
        <td style="font-weight: bold">Полная стоимость кредита</td>
        <td style="text-align: center">
            <?= $overallVal ? Yii::$app->formatter->asDecimal(
                (float)$overallVal->creditTotalAmt,
                2
            ) : 0 ?>%
        </td>
    </tr>
    <tr>
        <td style="font-weight: bold">Отношение к договору</td>
        <td style="text-align: center"><?= AccountRelationship::getText($trade->ownerIndic) ?></td>
        <td style="font-weight: bold">Общая выплаченная сумма</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal(
                (float)ArrayHelper::getValue($payment, 'totalAmt'), 2)
            ?></td>
        <td style="font-weight: bold">Погашение за счет обеспечения</td>
        <td style="text-align: center"><?= $collatRepay ? 'Погашен' : 'Не было' ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">Тип договора</td>
        <td style="text-align: center"><?= LoanKind::getText($trade->loanKindCode) ?></td>
        <td style="font-weight: bold">Сумма последнего платежа</td>
        <td style="text-align: center"><?= $payment?Yii::$app->formatter->asDecimal(
                (float)$payment->principalPaymtAmt + (float)$payment->intPaymtAmt + (float)$payment->otherPaymtAmt,
                2
            ):0 ?></td>
        <td style="font-weight: bold">Аннуитет</td>
        <td style="text-align: center">-</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата начала договора</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($trade->openedDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Дата последнего платежа</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate(ArrayHelper::getValue($payment, 'paymtDate'), 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Дата уплаты процентов</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($trade->closedDt, 'dd.MM.yyyy') ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата окончания договора</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($trade->closedDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Текущая задолженность</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($dueArrear, 'amtOutstanding'), 2) ?></td>
        <td style="font-weight: bold">Количество пролонгаций</td>
        <td style="text-align: center">-</td>
    </tr>
    <tr>
        <td style="font-weight: bold"></td>
        <td style="text-align: center"></td>
        <td style="font-weight: bold"></td>
        <td style="text-align: center"></td>
        <td style="font-weight: bold"></td>
        <td style="text-align: center"></td>
    </tr>
    </tbody>
</table>
<table class="table table-bordered table-condensed">
    <tbody>
    <tr>
        <td style="font-weight: bold">Сумма обязательств по договору</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($accountAmt, 'creditLimit'), 2) ?></td>
        <td style="font-weight: bold">Текущий неиспользованный лимит</td>
        <td style="text-align: center">-</td>
        <td style="font-weight: bold;text-align: center" colspan="3">Количество просрочек</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Первоначальный лимит</td>
        <td><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($accountAmt, 'creditLimit'), 2) ?></td>
        <td style="font-weight: bold">Текущая просроченная задолженность</td>
        <td><?= Yii::$app->formatter->asDecimal((float)$amtPastDue, 2) ?></td>
        <td style="font-weight: bold;text-align: center">от 30 до 59 дней</td>
        <td style="font-weight: bold;text-align: center">от 60 до 89 дней</td>
        <td style="font-weight: bold;text-align: center">более 90 дней</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Статус кредитной линии</td>
        <td>-</td>
        <td style="font-weight: bold">Текущая просроченная задолженность, дней</td>
        <td><?= (int)ArrayHelper::getValue($payment, 'daysPastDue') ?></td>
        <td style="font-weight: bold;text-align: center">-</td>
        <td style="font-weight: bold;text-align: center">-</td>
        <td style="font-weight: bold;text-align: center">-</td>
    </tr>
    </tbody>
</table>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Состояние договора</div>
            <div class="col-sm-6"><?= $status ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Специальный статус договора</div>
            <div class="col-sm-4 col-xs-4"></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Макс. сумма просроченной
                задолженности
            </div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDecimal((float)$maxAmtPastDue, 2) ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Дата перехода в состояние</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDate($model->lastUpdatedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Дата актуальности информации</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Тип источника информации</div>
            <div class="col-sm-6"><?= $model->businessCategory ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Уникальный
                идентификатор договора
            </div>
            <div class="col-sm-6"><?= $model->uuid ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Вид отображения задолженности</div>
            <div class="col-sm-4 col-xs-4">С учетом % и пени</div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Дата начала выгрузок в БКИ</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDate($model->fileSinceDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">ID Договора</div>
            <div class="col-sm-6"><?= $model->serialNum ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Сумма погашенного основного долга</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDecimal(
                    (float)ArrayHelper::getValue($payment, 'principalTotalAmt'),
                    2
                ) ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Полная стоимость кредита</div>
            <div class="col-sm-6"><?= $overallVal ? Yii::$app->formatter->asDecimal(
                    (float)$overallVal->creditTotalAmt,
                    2
                ) : 0 ?>%
            </div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Отношение к договору</div>
            <div class="col-sm-6"><?= AccountRelationship::getText($trade->ownerIndic) ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Общая выплаченная сумма</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDecimal(
                    (float)ArrayHelper::getValue($payment, 'totalAmt'), 2)
                ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Погашение за счет обеспечения</div>
            <div class="col-sm-6">
                <?= $collatRepay ? 'Погашен' : 'Не было' ?>
            </div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Тип договора</div>
            <div class="col-sm-6"><?= LoanKind::getText($trade->loanKindCode) ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Сумма последнего платежа</div>
            <div class="col-sm-4 col-xs-4"><?= $payment?Yii::$app->formatter->asDecimal(
                    (float)$payment->principalPaymtAmt + (float)$payment->intPaymtAmt + (float)$payment->otherPaymtAmt,
                    2
                ):0 ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Аннуитет</div>
            <div class="col-sm-6">-</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Дата начала договора</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDate($trade->openedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Дата последнего платежа</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDate(ArrayHelper::getValue($payment, 'paymtDate'), 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Дата уплаты процентов</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDate($trade->closedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Дата окончания договора</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDate($trade->closedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Текущая задолженность</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($dueArrear, 'amtOutstanding'), 2) ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Количество пролонгаций</div>
            <div class="col-sm-6">0</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-6 bg-info">Сумма обязательств по договору</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($accountAmt, 'creditLimit'), 2) ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-8 bg-info">Текущий неиспользованный лимит</div>
            <div class="col-sm-4 col-xs-4">-</div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-12 bg-info">Количество просрочек</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-sm-4 col-xs-4">
        <div class="row">
            <div class="col-sm-6 bg-info">Первоначальный лимит</div>
            <div class="col-sm-6"><?= Yii::$app->formatter->asDecimal((float)ArrayHelper::getValue($accountAmt, 'creditLimit'), 2) ?></div>
        </div>
        <div class="row">
            <div class="col-sm-6 bg-info">Статус кредитной линии</div>
            <div class="col-sm-6">-</div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row">
            <div class="col-sm-8 bg-info">Текущая просроченная задолженность</div>
            <div class="col-sm-4 col-xs-4"><?= Yii::$app->formatter->asDecimal((float)$amtPastDue, 2) ?></div>
        </div>
        <div class="row">
            <div class="col-sm-8 bg-info">Текущая просроченная задолженность, дней</div>
            <div class="col-sm-4 col-xs-4"><?= (int)ArrayHelper::getValue($payment, 'daysPastDue') ?></div>
        </div>
    </div>
    <div class="col-sm-4 col-xs-4">
        <div class="row" style="height: 100%">
            <div class="col-sm-4 col-xs-4 bg-info">от 30 до 59 дней</div>
            <div class="col-sm-4 col-xs-4 bg-info">от 60 до 89 дней</div>
            <div class="col-sm-4 col-xs-4 bg-info">более 90 дней</div>
            <div class="col-sm-4 col-xs-4">-</div>
            <div class="col-sm-4 col-xs-4">-</div>
            <div class="col-sm-4 col-xs-4">-</div>
        </div>
    </div>
</div>
<?php
if (!empty($model->getGuarantor())) {
    echo $this->render('_guaranteeRUTDF', ['models' => $model->getGuarantor()]);
}
if (!empty($model->getCollateral())) {
    echo $this->render('_collateralRUTDF', ['models' => $model->getCollateral()]);
}
?>
<hr>
