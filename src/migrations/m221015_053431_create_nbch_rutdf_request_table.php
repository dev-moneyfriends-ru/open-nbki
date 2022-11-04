<?php


use mfteam\nbch\Env;

class m221015_053431_create_nbch_rutdf_request_table extends \yii\db\Migration
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
        
        $env = Env::ensure();
        $this->createTable($env->nbchRutdfRequestTableName, [
            'id' => $this->primaryKey(),
            'createdBy' => $this->integer(),
            'updatedBy' => $this->integer(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
            'sendAt' => $this->integer(),
            'acceptAt' => $this->integer(),
            'errorMessage' => $this->text(),
            'state' => $this->integer(2)->notNull()->defaultValue(0),
            'offerUuid' => $this->string(50),
            'event' => $this->string(10),
            'checkAt' => $this->integer(),
            'checkBy' => $this->integer(),
        ], $tableOptions);
        
        $this->createIndex('idx-offerUuid', $env->nbchRutdfRequestTableName, 'offerUuid');
        $this->createIndex('idx-state', $env->nbchRutdfRequestTableName, 'state');
        
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $env = Env::ensure();

        $this->dropIndex('idx-offerUuid', $env->nbchRutdfRequestTableName);
        $this->dropIndex('idx-state', $env->nbchRutdfRequestTableName);
        $this->dropTable($env->nbchRutdfRequestTableName);
    }
}