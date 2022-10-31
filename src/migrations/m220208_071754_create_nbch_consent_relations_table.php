<?php

use mfteam\nbch\Env;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbch_consent_relations}}`.
 */
class m220208_071754_create_nbch_consent_relations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $env = Env::ensure();
        $this->createTable($env->nbchConsentRelationsTableName, [
            'consentId' => $this->integer(),
            'entityId' => $this->string(),
            'entity' => $this->string(),
            'type' => $this->string(),
        ]);
        
        $this->createIndex('idx-nbch_consent_relations-consentId', $env->nbchConsentRelationsTableName, 'consentId');
        $this->createIndex('idx-nbch_consent_relations-entityId', $env->nbchConsentRelationsTableName, 'entityId');
        $this->createIndex('idx-nbch_consent_relations-entity', $env->nbchConsentRelationsTableName, 'entity');
        $this->createIndex('idx-nbch_consent_relations-type', $env->nbchConsentRelationsTableName, 'type');
        
        $this->addForeignKey(
            'fk-nbch_consent_relations-consentId',
            $env->nbchConsentRelationsTableName,
            'consentId',
            $env->nbchConsentTableName,
            'id',
            'CASCADE'
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $env = Env::ensure();
        $this->dropForeignKey(
            'fk-nbch_consent_relations-consentId',
            $env->nbchConsentRelationsTableName
        );
        
        $this->dropIndex('idx-nbch_consent_relations-consentId', $env->nbchConsentRelationsTableName);
        $this->dropIndex('idx-nbch_consent_relations-entityId', $env->nbchConsentRelationsTableName);
        $this->dropIndex('idx-nbch_consent_relations-entity', $env->nbchConsentRelationsTableName);
        $this->dropIndex('idx-nbch_consent_relations-type', $env->nbchConsentRelationsTableName);
        
        $this->dropTable('{{%nbch_consent_relations}}');
    }
}
