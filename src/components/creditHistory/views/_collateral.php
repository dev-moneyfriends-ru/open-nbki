<?php

/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\AccountReply */
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
                <th>Номер договора</th>
                <th>Код залога</th>
                <th>Комментарий</th>
                <th>Оценочная стоимость залога</th>
                <th>Дата оценки стоимости залога</th>
                <th>Срок действия договора залога</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (empty($model->getCollateral())):
                ?>
                <tr>
                    <td></td>
                    <td><?= $model->collateralCode ?></td>
                    <td><?= $model->collateral2Text ?></td>
                    <td><?= Yii::$app->formatter->asDecimal((float)$model->collateralValue, 2) ?></td>
                    <td><?= Yii::$app->formatter->asDate($model->collateralDate, 'dd.MM.yyyy') ?></td>
                    <td><?= Yii::$app->formatter->asDate($model->collateralExpirationDate, 'dd.MM.yyyy') ?></td>
                </tr>
            <?php
            else:
                foreach ($model->getGuarantor() as $item):
                    ?>
                    <tr>
                        <td><?=$item->agreementNumber?></td>
                        <td><?= $item->collateralCode ?></td>
                        <td><?= $item->collateral2Text ?></td>
                        <td><?= Yii::$app->formatter->asDecimal((float)$item->collateralValue, 2) ?></td>
                        <td><?= Yii::$app->formatter->asDate($item->collateralDate, 'dd.MM.yyyy') ?></td>
                        <td><?= Yii::$app->formatter->asDate($item->collateralExpirationDate, 'dd.MM.yyyy') ?></td>
                    </tr>
                <?php
                endforeach;
            endif;
            ?>
            </tbody>
        </table>
    </div>
</div>