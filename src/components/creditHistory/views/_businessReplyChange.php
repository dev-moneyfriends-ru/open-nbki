<?php

/* @var $this \yii\web\View */
/* @var $businessReply \mfteam\nbch\models\BusinessReply[] */

?>
<table class="table table-bordered table-striped table-condensed">
    <thead>
    <tr>
        <th>
            Дата изменения
        </th>
        <th>
            Наименование юридического лица
        </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($businessReply as $business):
        ?>
        <tr>
            <td>
                <?=Yii::$app->formatter->asDate($business->lastUpdatedDt, 'dd.MM.yyyy')?>
            </td>
            <td>
                Полное: <b><?=$business->businessName?></b><br>
                Сокращенное: <b><?=$business->abbreviatedBusinessName?></b><br>
                Фирменное: <b><?=$business->trademark?></b>
            </td>
        </tr>
    <?php
    endforeach;
    ?>
    </tbody>
</table>

