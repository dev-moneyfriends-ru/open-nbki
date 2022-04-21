<?php

use mfteam\nbch\Env;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbki_tutdf_request}}`.
 */
class m220113_072940_create_nbki_tutdf_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $env = Env::ensure();
        $this->createTable($env->nbchTutdfRequestTableName, [
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
            'checkAt' => $this->integer(),
            'checkBy' => $this->integer(),
        ]);
        
        $this->createIndex('idx-offerUuid', $env->nbchTutdfRequestTableName, 'offerUuid');
        $this->createIndex('idx-state', $env->nbchTutdfRequestTableName, 'state');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $env = Env::ensure();
        $this->dropIndex('idx-offerUuid', $env->nbchTutdfRequestTableName);
        $this->dropIndex('idx-state', $env->nbchTutdfRequestTableName);
        $this->dropTable('{{%nbch_tutdf_request}}');
    }
}
