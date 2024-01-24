<?php

use yii\db\Migration;

/**
 * Class m240123_084040_initial_schema
 */
class m240123_084040_initial_schema extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create cms_users table
        $this->createTable('cms_users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
            // Add other fields as needed
        ]);

        // Create Staffs table
        $this->createTable('Staffs', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'more_info' => $this->text(),
            // Add other fields as needed
        ]);

        // Create Clients table
        $this->createTable('Clients', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string(),
            'address' => $this->text(),
            'more_info' => $this->text(),
            // Add other fields as needed
        ]);

        // Create Orders table
        $this->createTable('Orders', [
            'id' => $this->primaryKey(),
            'services_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'description' => $this->text(),
            'total_price' => $this->decimal(10, 2)->notNull(),
            'received_date' => $this->dateTime(),
            'delivery_date' => $this->dateTime(),
            // Add other fields as needed
        ]);

        // Create Services table
        $this->createTable('Services', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'price' => $this->decimal(10, 2)->notNull(),
            'duration' => $this->integer()->notNull(),
            // Add other fields as needed
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Drop tables if needed
        $this->dropTable('cms_users');
        $this->dropTable('Staffs');
        $this->dropTable('Clients');
        $this->dropTable('Orders');
        $this->dropTable('Services');
    }
}
