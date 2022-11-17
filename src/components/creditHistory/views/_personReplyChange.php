<?php


/* @var $this \yii\web\View */
/* @var $personReply \mfteam\nbch\models\PersonReply[] */
/* @var $regnumReply \mfteam\nbch\models\RegnumReply[] */
/* @var $snilsReply \mfteam\nbch\models\SNILSReply[] */
/* @var $idReply \mfteam\nbch\models\IdReply[] */
/* @var $entrepReply \mfteam\nbch\models\EntrepReply[] */
?>
<?php
if ($personReply):
    ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Дата изменения</th>
            <th>Фамилия, Имя, Отчество</th>
            <th>Дата и место рождения</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($personReply as $person):
            ?>
            <tr>
                <td><?= Yii::$app->formatter->asDate($person->reportingDt, 'dd.MM.yyyy') ?></td>
                <td><b><?= implode(" ", [$person->name1, $person->first, $person->paternal]) ?></b></td>
                <td><b><?= Yii::$app->formatter->asDate(
                            $person->birthDt,
                            'dd.MM.yyyy'
                        ) ?></b> <?= $person->placeOfBirth ?></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
?>
<?php
if ($idReply):
    ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Дата изменения</th>
            <th>Документы, удостоверяющие личность</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($idReply as $passport):
            ?>
            <tr>
                <td><?= Yii::$app->formatter->asDate($passport->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
                <td><?= $this->render('_passport', ['model' => $passport]) ?></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
?>
<?php
if ($regnumReply):
    ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Дата изменения</th>
            <th>Прочие документы</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($regnumReply as $regNum):
            if (empty($regNum->taxpayerNum)) {
                continue;
            }
            ?>
            <tr>
                <td><?= Yii::$app->formatter->asDate($regNum->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
                <td>ИНН: <b><?= $regNum->taxpayerNum ?></b></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
?>
<?php
if ($snilsReply):
    ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Дата изменения</th>
            <th>Прочие документы</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($snilsReply as $regNum):
            ?>
            <tr>
                <td><?= Yii::$app->formatter->asDate($regNum->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
                <td>СНИЛС: <b><?= $regNum->number ?></b></td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
?>
<?php
if ($entrepReply):
    ?>
    <table class="table table-bordered table-striped table-condensed">
        <thead>
        <tr>
            <th>Дата изменения</th>
            <th>Информация об ИП</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($entrepReply as $entRep):
            ?>
            <tr>
                <td><?= Yii::$app->formatter->asDate($entRep->lastUpdatedDt, 'dd.MM.yyyy') ?></td>
                <td><?= implode(' ', [
                        'ОГРНИП:',
                        "<b>" . $entRep->regNum . "</b>",
                        "<b>" . Yii::$app->formatter->asDate($entRep->regDate, 'dd.MM.yyyy') . "</b>",
                    ]); ?>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
        </tbody>
    </table>
<?php
endif;
?>
