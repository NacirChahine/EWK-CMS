<?php

use yii\db\Migration;

/**
 * Class m240125_130057_add_order_status_column_to_orders
 */
class m240125_130057_add_order_status_column_to_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%orders}}', 'status', $this->string()->notNull()->defaultValue('open'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%orders}}', 'status');
    }
}
