<?php

use mfteam\nbch\Env;
use yii\db\Migration;

/**
 * Class m220208_072845_alter_nbch_consent_table
 */
class m220208_072845_alter_nbch_consent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $env = Env::ensure();
        $items = (new \yii\db\Query())->from($env->nbchConsentTableName)->all();
        $insertData = [];
        foreach ($items as $item) {
            $insertData[] = [
                'consentId' => $item['id'],
                'entityId' => $item['offerUuid'],
                'entity' => 'Offer',
                'type' => 'MAIN'
            ];
        }
        if($insertData){
            $this->batchInsert($env->nbchConsentRelationsTableName, array_keys($insertData[0]), $insertData);
        }
        $this->dropIndex('idx-offerUuid', $env->nbchConsentTableName);
        $this->dropColumn($env->nbchConsentTableName, 'offerUuid');
    }
    
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $env = Env::ensure();
        $this->addColumn($env->nbchConsentTableName, 'offerUuid', $this->string(50)->null());
        $items = (new \yii\db\Query())->from($env->nbchConsentRelationsTableName)->andWhere(['entity' => 'Offer', 'type' => 'MAIN'])->all();
        foreach ($items as $item){
            $this->update($env->nbchConsentTableName, ['offerUuid' => $item['entityId'], ['id' => $item['consentId']]]);
        }
        $this->alterColumn($env->nbchConsentTableName, 'offerUuid', $this->string(50)->notNull());
        $this->createIndex('idx-offerUuid', $env->nbchConsentTableName, 'offerUuid');
        $this->dropTable($env->nbchConsentRelationsTableName);
    }
    
}
