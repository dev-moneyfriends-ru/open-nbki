<?php


use yii\db\Migration;

class m221102_165831_remove_fk_control_table extends Migration
{
    public function safeUp(){
        $this->dropForeignKey(
            'fk-nbch_control-offerUuid',
            'nbch_control'
        );
    }
    
    public function safeDown(){
        $this->addForeignKey(
            'fk-nbch_control-offerUuid',
            'nbch_control',
            'offerUuid',
            'nbch_tutdf_request',
            'offerUuid'
        );
    }
}