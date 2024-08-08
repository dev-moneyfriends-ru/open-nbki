<?php



/* @var $this \yii\web\View */
/* @var $models \mfteam\nbch\models\Guarantor[] */
?>
<div class="row" style="margin-top: 50px">
    <div class="col">
        <h3 style="text-align: center">Поручительства по договору</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
                <th>УИд договора поручительства</th>
                <th>Размер поручительства</th>
                <th>Валюта поручительства</th>
                <th>Дата заключения договора поручительства</th>
                <th>Дата прекращения поручительства согласно договору</th>
                <th>Дата фактического прекращения поручительства</th>
                <th>Код причины прекращения поручительства</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($models as $item):
                ?>
                <tr>
                    <td><?=$item->guaranteeUuid?></td>
                    <td><?=Yii::$app->formatter->asDecimal((float) $item->guaranteeVolume, 2)?></td>
                    <td><?=$item->currencyCode?></td>
                    <td><?= Yii::$app->formatter->asDate($item->guaranteeAgreementDt, 'dd.MM.yyyy') ?></td>
                    <td><?= Yii::$app->formatter->asDate($item->guaranteeExpirationDate, 'dd.MM.yyyy') ?></td>
                    <td><?= $item->guaranteeFactExpirationDate ? Yii::$app->formatter->asDate($item->guaranteeFactExpirationDate, 'dd.MM.yyyy') : '-'; ?></td>
                    <td><?=$item->guaranteeEndReason?></td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>
