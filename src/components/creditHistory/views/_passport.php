<?php


/* @var $this \yii\web\View */
/* @var $model \mfteam\nbch\models\IdReply */
?>

<?= implode(' ', [
    $model->idTypeText,
    "<b>" . $model->seriesNumber . " " . $model->idNum . "</b>",
    "выдан",
    "<b>" . Yii::$app->formatter->asDate($model->issueDate, 'dd.MM.yyyy') . "</b>",
    $model->issueAuthority,
    $model->divCode
]) ?>
