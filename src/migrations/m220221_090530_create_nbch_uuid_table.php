<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbch_uuid}}`.
 */
class m220221_090530_create_nbch_uuid_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%nbch_uuid}}', [
            'id' => $this->primaryKey(),
            'offerUuid' => $this->string()->notNull(),
            'uuid' => $this->string()->notNull()->unique(),
        ]);
        $this->createIndex('idx-nbch_uuid-offerUuid', '{{%nbch_uuid}}', 'offerUuid');
        $this->createIndex('idx-nbch_uuid-uuid', '{{%nbch_uuid}}', 'uuid');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('idx-nbch_uuid-offerUuid', '{{%nbch_uuid}}');
        $this->dropIndex('idx-nbch_uuid-uuid', '{{%nbch_uuid}}');
        $this->dropTable('{{%nbch_uuid}}');
    }
}
