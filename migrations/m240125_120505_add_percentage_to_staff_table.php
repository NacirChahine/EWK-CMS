<?php

use yii\db\Migration;

/**
 * Class m240125_120505_add_percentage_to_staff_table
 */
class m240125_120505_add_percentage_to_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%staffs}}', 'percentage', $this->decimal(5, 2)->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%staffs}}', 'percentage');
    }
}
