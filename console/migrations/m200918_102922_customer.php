<?php

use yii\db\Migration;

/**
 * Class m200918_102922_customer
 */

class m200918_102922_customer extends Migration
{
 
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('customer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(40)->notNull(),
            'last_name' => $this->string(32)->notNull(),
            'address' => $this->string(80)->notNull(),
            'phone' => $this->string(),
            'email' => $this->string()->notNull()->unique(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ], 
            $tableOptions);
    }

    public function down()
    {
        $this->dropTable('customer');
    }
    
}
