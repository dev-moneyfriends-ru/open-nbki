<?php



/* @var $this \yii\web\View */
/* @var $accountReply \mfteam\nbch\models\AccountReply[] */
/* @var $accountReplyRUTDF \mfteam\nbch\models\AccountReplyRUTDF[] */

foreach ($accountReplyRUTDF as $model){
    echo $this->render('_accountRUTDF', ['model' => $model]);
}
foreach ($accountReply as $model){
    echo $this->render('_account', ['model' => $model]);
}

