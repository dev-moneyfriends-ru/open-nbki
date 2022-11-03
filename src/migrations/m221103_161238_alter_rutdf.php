<?php

use mfteam\nbch\Env;

class m221103_161238_alter_rutdf extends \yii\db\Migration
{
    public function up()
    {
        $this->alterColumn(Env::ensure()->nbchRutdfRequestTableName, 'event', $this->string()->notNull());
    }
    
    public function down()
    {
        $this->alterColumn(Env::ensure()->nbchRutdfRequestTableName, 'event', $this->string(10)->null());
    }
}