<?php



/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\AccountReplyRUTDF */

$amtPastDue = (int)$model->amtPastDue;
$payment = $model->getPayment();
$daysPastDue = reset($payment)->daysPastDue;
?>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>

