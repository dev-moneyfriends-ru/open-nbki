<?php

/* @var $this \yii\web\View */
/* @var $models \mfteam\nbch\models\Collateral[] */
?>
<div class="row" style="margin-top: 50px">
    <div class="col">
        <h3 style="text-align: center">Залоги</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
                <th>Код предмета залога</th>
                <th>Идентификационный код предмета залога</th>
                <th>Дата заключения договора залога</th>
                <th>Стоимость предмета залога</th>
                <th>Валюта стоимости предмета залога</th>
                <th>Дата проведения оценки предмета залога</th>
                <th>Признак иного обременения предмета залога</th>
                <th>Дата прекращения залога согласно договору</th>
                <th>Дата фактического прекращения залога</th>
                <th>Код причины прекращения залога</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($models as $item):
                ?>
                <tr>
                    <td><?=$item->collateralCode?></td>
                    <td><?=$item->collateralId?></td>
                    <td><?= Yii::$app->formatter->asDate($item->collateralAgreementDt, 'dd.MM.yyyy') ?></td>
                    <td><?=Yii::$app->formatter->asDecimal((float) $item->collateralValue, 2)?></td>
                    <td><?=$item->currencyCode?></td>
                    <td><?= Yii::$app->formatter->asDate($item->collateralDate, 'dd.MM.yyyy') ?></td>
                    <td><?=$item->collateralEncum?></td>
                    <td><?= Yii::$app->formatter->asDate($item->collateralExpirationDate, 'dd.MM.yyyy') ?></td>
                    <td><?= Yii::$app->formatter->asDate($item->collateralFactExpirationDate, 'dd.MM.yyyy') ?></td>
                    <td><?=$item->collateralEndReason?></td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>
