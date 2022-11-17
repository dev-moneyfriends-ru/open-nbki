<?php



/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\AccountReply */
?>
<div class="row" style="margin-top: 50px">
    <div class="col">
        <h3 style="text-align: center">Банковские гарантии</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table table-bordered table-striped table-condensed">
            <thead>
            <tr>
                <th>Объем обязательства, обеспечиваемого банковской гарантией</th>
                <th>Сумма банковской гарантии</th>
                <th>Срок банковской гарантии</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?= $model->bankGuaranteeVolumeCodeText ?></td>
                <td><?= Yii::$app->formatter->asDecimal($model->bankGuaranteeAmt, 2) ?></td>
                <td><?= Yii::$app->formatter->asDate($model->bankGuaranteeTerm, 'dd.MM.yyyy') ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
