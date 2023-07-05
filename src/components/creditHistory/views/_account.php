<?php

/* @var $this View */

/* @var $model AccountReply */

use mfteam\nbch\models\AccountReply;
use mfteam\nbch\models\BankGuarantee;
use mfteam\nbch\models\Guarantor;
use yii\web\View;

$payment = $model->getPayment() ? $model->getPayment()[count($model->getPayment()) - 1] : null;
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
        <td style="text-align: center"><?= $model->accountRatingText ?></td>
        <td style="font-weight: bold">Специальный статус договора</td>
        <td style="text-align: center"></td>
        <td style="font-weight: bold">
            Макс. сумма просроченной задолженности
        </td>
        <td style="text-align: center">-</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата перехода в состояние</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->accountRatingDate, 'dd.MM.yyyy') ?></td>
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
                (float)$model->creditLimit - (float)$model->principalOutstanding,
                2
            ) ?></td>
        <td style="font-weight: bold">Полная стоимость кредита</td>
        <td style="text-align: center">
            <?= Yii::$app->formatter->asDecimal((float)$model->creditTotalAmt, 2) ?>%
        </td>
    </tr>
    <tr>
        <td style="font-weight: bold">Отношение к договору</td>
        <td style="text-align: center"><?= $model->ownerIndicText ?></td>
        <td style="font-weight: bold">Общая выплаченная сумма</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)$model->curBalanceAmt, 2) ?></td>
        <td style="font-weight: bold">Погашение за счет обеспечения</td>
        <td style="text-align: center"><?= (int)$model->accountRating === 12 ? 'Погашен' : 'Не было' ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">Тип договора</td>
        <td style="text-align: center"><?= $model->acctTypeText ?></td>
        <td style="font-weight: bold">Сумма последнего платежа</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal(
                $payment ? (float)$payment->paymtAmt : 0,
                2
            ) ?></td>
        <td style="font-weight: bold">Аннуитет</td>
        <td style="text-align: center">-</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата начала договора</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->openedDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Дата последнего платежа</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->paymentDueDate, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Дата уплаты процентов</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate(
                $model->interestPaymentDueDate,
                'dd.MM.yyyy'
            ) ?></td>
    </tr>
    <tr>
        <td style="font-weight: bold">Дата окончания договора</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDate($model->closedDt, 'dd.MM.yyyy') ?></td>
        <td style="font-weight: bold">Текущая задолженность</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)$model->amtOutstanding, 2) ?></td>
        <td style="font-weight: bold">Количество пролонгаций</td>
        <td style="text-align: center">-</td>
    </tr>
    </tbody>
</table>
<table class="table table-bordered table-condensed">
    <tbody>
    <tr>
        <td style="font-weight: bold">Сумма обязательств по договору</td>
        <td style="text-align: center"><?= Yii::$app->formatter->asDecimal((float)$model->creditLimit, 2) ?></td>
        <td style="font-weight: bold">Текущий неиспользованный лимит</td>
        <td style="text-align: center">-</td>
        <td style="font-weight: bold;text-align: center" colspan="3">Количество просрочек</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Первоначальный лимит</td>
        <td><?= Yii::$app->formatter->asDecimal((float)$model->creditLimit, 2) ?></td>
        <td style="font-weight: bold">Текущая просроченная задолженность</td>
        <td><?= Yii::$app->formatter->asDecimal((float)$model->amtPastDue, 2) ?></td>
        <td style="font-weight: bold;text-align: center">от 30 до 59 дней</td>
        <td style="font-weight: bold;text-align: center">от 60 до 89 дней</td>
        <td style="font-weight: bold;text-align: center">более 90 дней</td>
    </tr>
    <tr>
        <td style="font-weight: bold">Статус кредитной линии</td>
        <td>-</td>
        <td style="font-weight: bold">Текущая просроченная задолженность, дней</td>
        <td>-</td>
        <td style="font-weight: bold;text-align: center"><?= $model->numDays30 ?></td>
        <td style="font-weight: bold;text-align: center"><?= $model->numDays60 ?></td>
        <td style="font-weight: bold;text-align: center"><?= $model->numDays90 ?></td>
    </tr>
    </tbody>
</table>

<?php
if (
    ($model->guaranteeVolumeCode && $model->guaranteeVolumeCode === Guarantor::CODE_YES) ||
    !empty($model->getGuarantor())
) {
    echo $this->render('_guarantee', ['model' => $model]);
}

if (
    ($model->bankGuaranteeIndicatorCode && $model->bankGuaranteeIndicatorCode === BankGuarantee::CODE_YES) ||
    !empty($model->bankGuaranteeVolumeCode)
) {
    echo $this->render('_bankGuarantee', ['model' => $model]);
}

if (!empty($model->collateralCode) || !empty($model->getCollateral())) {
    echo $this->render('_collateral', ['model' => $model]);
}
?>
<hr>
