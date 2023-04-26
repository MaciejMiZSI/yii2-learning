<?php

use yii\db\Migration;

/**
 * Class m230426_142525_admin_user
 */
class m230426_142525_admin_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%user}}', [
            'id' => NULL,
            'username' => 'admin',
            'auth_key' => Yii::$app->security->generateRandomString(),
            'password_hash' => Yii::$app->security->generatePasswordHash('pass'),
            'email' => 'admin@gmail.com',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230426_142525_admin_user cannot be reverted.\n";

        $this->delete('{{%user}}', [
            'username' => 'admin'
        ]);

        return false;
    }

/*
// Use up()/down() to run migration code without a transaction.
public function up()
{
}
public function down()
{
echo "m230426_142525_admin_user cannot be reverted.\n";
return false;
}
*/
}