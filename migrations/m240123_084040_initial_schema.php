<?php

use yii\db\Migration;

/**
 * Class mXXXXXXXXXXXXXX_initial_schema
 */
class mXXXXXXXXXXXXXX_initial_schema extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // Create Users table
        $this->createTable('Users', [
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

        // Create other tables (Clients, Orders, Services) similarly

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // Drop tables if needed
        $this->dropTable('Users');
        $this->dropTable('Staffs');
        // Drop other tables similarly
    }
}
