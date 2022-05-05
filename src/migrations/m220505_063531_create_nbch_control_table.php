<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbch_control}}`.
 */
class m220505_063531_create_nbch_control_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%nbch_control}}', [
            'id' => $this->primaryKey(),
            'offerUuid' => $this->string(50),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
            'nextSend' => $this->integer(),
            'nextCheck' => $this->integer(),
            'state' => $this->integer(2)->defaultValue(0),
            'errorCode' => $this->string(),
            'message' => $this->text(),
        ], $tableOptions);
    
        $this->createIndex('idx-nbch_control-updated_at', 'nbch_control', 'updatedAt');
        $this->createIndex('idx-nbch_control-state', 'nbch_control', 'state');
        $this->createIndex('idx-nbch_control-offerUuid', 'nbch_control', 'offerUuid');
        
        $this->addForeignKey(
            'fk-nbch_control-offerUuid',
            'nbch_control',
            'offerUuid',
            'nbch_tutdf_request',
            'offerUuid'
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-nbch_control-offerUuid',
            'nbch_control'
        );
    
        $this->dropIndex('idx-nbch_control-updated_at', 'nbch_control');
        $this->dropIndex('idx-nbch_control-state', 'nbch_control');
        $this->dropIndex('idx-nbch_control-offerUuid', 'nbch_control');
        
        $this->dropTable('{{%nbch_control}}');
    }
}
