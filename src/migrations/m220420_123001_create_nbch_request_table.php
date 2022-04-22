<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbch_request}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%nbch_consent}}`
 */
class m220420_123001_create_nbch_request_table extends Migration
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
        $this->createTable('{{%nbch_ch_request}}', [
            'id' => $this->primaryKey(),
            'consentId' => $this->integer(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
            'status' => $this->integer(2)->defaultValue(0),
            'requestData' => $this->text(),
            'responseData' => 'LONGTEXT',
            'errorText' => $this->text()
        ], $tableOptions);

        // creates index for column `consentId`
        $this->createIndex(
            '{{%idx-nbch_ch_request-consentId}}',
            '{{%nbch_ch_request}}',
            'consentId'
        );

        // add foreign key for table `{{%nbch_consent}}`
        $this->addForeignKey(
            '{{%fk-nbch_ch_request-consentId}}',
            '{{%nbch_ch_request}}',
            'consentId',
            '{{%nbch_consent}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%nbch_consent}}`
        $this->dropForeignKey(
            '{{%fk-nbch_ch_request-consentId}}',
            '{{%nbch_ch_request}}'
        );

        // drops index for column `consentId`
        $this->dropIndex(
            '{{%idx-nbch_ch_request-consentId}}',
            '{{%nbch_ch_request}}'
        );

        $this->dropTable('{{%nbch_ch_request}}');
    }
}
