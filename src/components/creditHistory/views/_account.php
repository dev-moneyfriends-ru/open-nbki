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
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Состояние договора</div>
            <div class="col-md-6"><?= $model->accountRatingText ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Специальный статус договора</div>
            <div class="col-md-4">-</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Макс. сумма просроченной
                задолженности
            </div>
            <div class="col-md-6">-</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Дата перехода в состояние</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDate($model->accountRatingDate, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Дата актуальности информации</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Тип источника информации</div>
            <div class="col-md-6"><?= $model->businessCategory ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Уникальный
                идентификатор договора
            </div>
            <div class="col-md-6">
                <?= $model->uuid ?>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Вид отображения задолженности</div>
            <div class="col-md-4">С учетом % и пени</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Дата начала выгрузок в БКИ</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDate($model->fileSinceDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">ID Договора</div>
            <div class="col-md-6"><?= $model->serialNum ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Сумма погашенного основного долга</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDecimal(
                    (float)$model->creditLimit - (float)$model->principalOutstanding,
                    2
                ) ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Полная стоимость кредита</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDecimal((float)$model->creditTotalAmt, 2) ?>%</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Отношение к договору</div>
            <div class="col-md-6"><?= $model->ownerIndicText ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Общая выплаченная сумма</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDecimal((float)$model->curBalanceAmt, 2) ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Погашение за счет обеспечения</div>
            <div class="col-md-6"><?= (int)$model->accountRating === 12 ? 'Погашен' : 'Не было' ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Тип договора</div>
            <div class="col-md-6"><?= $model->acctTypeText ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Сумма последнего платежа</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDecimal(
                    $payment ? (float)$payment->paymtAmt : 0,
                    2
                ) ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Аннуитет</div>
            <div class="col-md-6">-</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Дата начала договора</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDate($model->openedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Дата последнего платежа</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDate($model->paymentDueDate, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Дата уплаты процентов</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDate(
                    $model->interestPaymentDueDate,
                    'dd.MM.yyyy'
                ) ?></div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Дата окончания договора</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDate($model->closedDt, 'dd.MM.yyyy') ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Текущая задолженность</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDecimal((float)$model->amtOutstanding, 2) ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Количество пролонгаций</div>
            <div class="col-md-6">0</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-6 bg-info">Сумма обязательств по договору</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDecimal((float)$model->creditLimit, 2) ?></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-8 bg-info">Текущий неиспользованный лимит</div>
            <div class="col-md-4">-</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-12 bg-info">Количество просрочек</div>
        </div>
    </div>
</div>
<div class="row"
     style="margin-bottom: 10px;border-bottom: 1px solid #000000;border-top: 1px solid #000000; text-align: center">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-6 bg-info">Первоначальный лимит</div>
            <div class="col-md-6"><?= Yii::$app->formatter->asDecimal((float)$model->creditLimit, 2) ?></div>
        </div>
        <div class="row">
            <div class="col-md-6 bg-info">Статус кредитной линии</div>
            <div class="col-md-6">-</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8 bg-info">Текущая просроченная задолженность</div>
            <div class="col-md-4"><?= Yii::$app->formatter->asDecimal((float)$model->amtPastDue, 2) ?></div>
        </div>
        <div class="row">
            <div class="col-md-8 bg-info">Текущая просроченная задолженность, дней</div>
            <div class="col-md-4">-</div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row" style="height: 100%">
            <div class="col-md-4 bg-info">от 30 до 59 дней</div>
            <div class="col-md-4 bg-info">от 60 до 89 дней</div>
            <div class="col-md-4 bg-info">более 90 дней</div>
            <div class="col-md-4"><?= $model->numDays30 ?></div>
            <div class="col-md-4"><?= $model->numDays60 ?></div>
            <div class="col-md-4"><?= $model->numDays90 ?></div>
        </div>
    </div>
</div>

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
