<?php

/* @var $this \yii\web\View */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */
if(empty($accountReplyRUTDF)){
    return;
}
foreach ($accountReplyRUTDF as $model){
    echo $this->render('_accountRUTDF', ['model' => $model]);
}

