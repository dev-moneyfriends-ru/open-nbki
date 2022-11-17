<?php
/**
 * @var $this View
 * @var $businessReply BusinessReply[]
 * @var $regnumReply RegnumReply[]
 * @var $taxpayerIdReply TaxpayerIdReply[]
 */


use mfteam\nbch\models\BusinessReply;
use mfteam\nbch\models\RegnumReply;
use mfteam\nbch\models\TaxpayerIdReply;
use yii\web\View;

$business = reset($businessReply);
$regnum = reset($regnumReply);
$taxpayerId = reset($taxpayerIdReply);
?>
<table class="table table-bordered table-striped table-condensed">
    <tbody>
    <tr>
        <td>
            <b>Наименование юр. лица</b>
        </td>
        <td>
            Полное: <b><?=$business->businessName?></b><br>
            Сокращенное: <b><?=$business->abbreviatedBusinessName?></b><br>
            Фирменное: <b><?=$business->trademark?></b>
        </td>
    </tr>
    <tr>
        <td>ОГРН</td>
        <td><?=$regnum->regNum?></td>
    </tr>
    <tr>
        <td>ИНН</td>
        <td><?=$taxpayerId->taxpayerNum?></td>
    </tr>
    </tbody>
</table>
