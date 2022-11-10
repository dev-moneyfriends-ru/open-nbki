<?php

use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;

class m221110_161238_alter_rutdf extends \yii\db\Migration
{
    public function up()
    {
        $this->addColumn(
            Env::ensure()->nbchRutdfRequestTableName,
            'regNum',
            $this->string()->comment('Исходящий номер')
        );
        $models = NbchRutdfRequest::find()->all();
        foreach ($models as $model) {
            if ($model->getFile()) {
                $model->regNum = $model->getFile()->fileName;
                $model->save();
            }
        }
    }
    
    public function down()
    {
        $this->dropColumn(Env::ensure()->nbchRutdfRequestTableName, 'regNum');
    }
}