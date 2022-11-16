<?php
/**
 * @var $this View
 * @var $businessReply array
 * @var $regnumReply RegnumReply
 * @var $taxpayerIdReply TaxpayerIdReply
 * @var $addressReplyRUTDF array
 */


use mfteam\nbch\models\BusinessReply;
use mfteam\nbch\models\RegnumReply;
use mfteam\nbch\models\TaxpayerIdReply;
use yii\web\View;


/** @var BusinessReply $business */
$business = $businessReply[0];
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
        <td><?=$regnumReply->regNum?></td>
    </tr>
    <tr>
        <td>ИНН</td>
        <td><?=$taxpayerIdReply->taxpayerNum?></td>
    </tr>
    </tbody>
</table>
