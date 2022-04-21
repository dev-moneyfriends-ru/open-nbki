<?php /** @noinspection PhpIllegalPsrClassPathInspection */

use mfteam\nbch\Env;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%nbch_consent}}`.
 */
class m220128_094047_create_nbch_consent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $env = Env::ensure();
        $this->createTable($env->nbchConsentTableName, [
            'id' => $this->primaryKey(),
            'offerUuid' => $this->string(50)->notNull(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),
            'consentDate' => $this->integer(),
            'consentExpireDate' => $this->integer(),
            'consentPurpose' => $this->integer(2),
            'otherConsentPurpose' => $this->string(200),
            'type' => $this->integer(2)->notNull()
        ]);
        
        $this->createIndex('idx-offerUuid', $env->nbchConsentTableName, 'offerUuid');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $env = Env::ensure();
        $this->dropIndex('idx-offerUuid', $env->nbchConsentTableName);
        $this->dropTable($env->nbchConsentTableName);
    }
}
