<?php

use mfteam\nbch\Env;
use mfteam\nbch\models\rutdf\NbchRutdfRequest;

class m241110_161238_alter_rutdf extends \yii\db\Migration
{
    public function up()
    {
        $this->addColumn(
            Env::ensure()->nbchRutdfRequestTableName,
            'type',
            $this->string()->comment('Формат')->defaultValue(NbchRutdfRequest::TYPE_GUTDF)->notNull()
        );
        NbchRutdfRequest::updateAll(['type' => NbchRutdfRequest::TYPE_RUTDF]);
    }
    
    public function down()
    {
        $this->dropColumn(Env::ensure()->nbchRutdfRequestTableName, 'type');
    }
}
