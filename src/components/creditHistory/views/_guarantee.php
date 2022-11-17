<?php


/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\AccountReply */
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
                <th>Номер договора</th>
                <th>Объем обязательства, обеспечиваемого поручительством</th>
                <th>Сумма поручительства</th>
                <th>Код валюты</th>
                <th>Срок поручительства</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (empty($model->getGuarantor())):
                ?>
                <tr>
                    <td></td>
                    <td><?= $model->guaranteeVolumeCodeText ?></td>
                    <td><?= Yii::$app->formatter->asDecimal((float)$model->guaranteeAmt, 2) ?></td>
                    <td>RUB</td>
                    <td><?= Yii::$app->formatter->asDate($model->guaranteeTerm, 'dd.MM.yyyy') ?></td>
                </tr>
            <?php
            else:
                foreach ($model->getGuarantor() as $item):
                    ?>
                    <tr>
                        <td><?= $item->agreementNumber ?></td>
                        <td><?= $item->guaranteeVolumeCodeText ?></td>
                        <td><?= Yii::$app->formatter->asDecimal((float)$item->guaranteeAmt, 2) ?></td>
                        <td>RUB</td>
                        <td><?= Yii::$app->formatter->asDate($item->guaranteeTerm, 'dd.MM.yyyy') ?></td>
                    </tr>
                <?php
                endforeach;
            endif;
            ?>
            </tbody>
        </table>
    </div>
</div>
