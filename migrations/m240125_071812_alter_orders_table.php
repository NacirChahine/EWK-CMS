<?php

use yii\db\Migration;
use yii\db\Schema;
use yii\db\JsonExpression;

/**
 * Handles adding services_id to table `{{%orders}}`.
 */
class m240125_071812_alter_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%orders}}', 'services_id', $this->json()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%orders}}', 'services_id', $this->integer()->notNull());
    }
}
