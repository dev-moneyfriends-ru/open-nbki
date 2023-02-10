<?php


/* @var $this \yii\web\View */
/* @var $personReply \mfteam\nbch\models\PersonReply[] */
/* @var $regnumReply \mfteam\nbch\models\RegnumReply[] */
/* @var $idReply \mfteam\nbch\models\IdReply[] */
/** @var \mfteam\nbch\models\SNILSReq[] $snilsReply */
/** @var \mfteam\nbch\models\EntrepReply[] $entrepReply */

$person = $personReply[0];
?>
<table class="table table-bordered table-striped table-condensed">
    <tbody>
    <tr>
        <td><b>Фамилия, Имя, Отчество</b></td>
        <td><b><?= implode(" ", [$person->name1, $person->first, $person->paternal]) ?></b></td>
    </tr>
    <tr>
        <td><b>Дата и место рождения</b></td>
        <td><b><?= Yii::$app->formatter->asDate($person->birthDt, 'dd.MM.yyyy') ?></b> <?= $person->placeOfBirth ?></td>
    </tr>
    <tr>
        <td><b>Документы, удостоверяющие личность:</b></td>
        <td>
            <?= $this->render('_passport', ['model' => $idReply[0]]) ?>
        </td>
    </tr>
    <tr>
        <td><b>Прочие документы</b></td>
        <td>
            <?php
            foreach ($regnumReply as $item) {
                if ($item->taxpayerNum) {
                    echo "ИНН: <b>" . $item->taxpayerNum . "</b>";
                    break;
                }
            }
            ?>
            <br>
            СНИЛС: <?= $snilsReply[0]->number ?? '' ?>
        </td>
    </tr>
    <tr>
        <td><b>Информация об ИП</b></td>
        <td>
            <?php
            if ($entrepReply) {
                $entRep = $entrepReply[0];
                echo implode(' ', [
                    'ОГРНИП:',
                    "<b>" . $entRep->regNum . "</b>",
                    "<b>" . Yii::$app->formatter->asDate($entRep->regDate, 'dd.MM.yyyy') . "</b>",
                ]);
            }
            ?>
        </td>
    </tr>
    </tbody>
</table>
