<?php



/* @var $this View */
/* @var $model AccountReply */

use mfteam\nbch\models\AccountReply;
use yii\web\View;

$amtPastDue = (int)$model->amtPastDue;
?>
<tr>
    <td><?=$model->uuid?></td>
    <td><?=$model->businessCategory?></td>
    <td><?=$model->ownerIndicText?></td>
    <td><?=Yii::$app->formatter->asDecimal($model->creditLimit, 2)?></td>
    <td><?=$model->currencyCode?></td>
    <td><?=Yii::$app->formatter->asDate($model->openedDt, 'dd.MM.yyyy')?></td>
    <td><?=Yii::$app->formatter->asDate($model->closedDt, 'dd.MM.yyyy')?></td>
    <td><?=Yii::$app->formatter->asDecimal($model->amtOutstanding, 2)?></td>
    <td class="<?=$amtPastDue?'text-danger':'text-success'?>"><?=Yii::$app->formatter->asDecimal($model->amtPastDue, 2)?></td>
    <td>-</td>
    <td>-</td>
    <td><?=Yii::$app->formatter->asDate($model->accountRatingDate, 'dd.MM.yyyy')?></td>
    <td><?=Yii::$app->formatter->asDate($model->reportingDt, 'dd.MM.yyyy')?></td>
    <td></td>
</tr>

