<?php

use yii\db\Migration;

/**
 * Class m230426_143726_add_three_users
 */
class m230426_143726_add_three_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%user}}', ['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], [
            ['maciek', Yii::$app->security->generateRandomString(), Yii::$app->security->generatePasswordHash('3reich'), 'maciek@gmail.com', time(), time()],
            ['olek', Yii::$app->security->generateRandomString(), Yii::$app->security->generatePasswordHash('analfabeta123'), 'ole123@gmail.com', time(), time()],
            ['gabriel', Yii::$app->security->generateRandomString(), Yii::$app->security->generatePasswordHash('wieacek123'), 'wiacek@gmail.com', time(), time()],
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%user}}', [
            'username' => ['olek', 'maciek', 'gabriel']
        ]);

    }

/*
// Use up()/down() to run migration code without a transaction.
public function up()
{
}
public function down()
{
echo "m230426_143726_add_three_users cannot be reverted.\n";
return false;
}
*/
}