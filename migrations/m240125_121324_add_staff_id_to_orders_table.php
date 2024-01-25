<?php

use yii\db\Migration;

/**
 * Class m240125_121324_add_staff_id_to_orders_table
 */
class m240125_121324_add_staff_id_to_orders_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%orders}}', 'staff_id', $this->integer());
        $this->addForeignKey('fk-orders-staff_id', '{{%orders}}', 'staff_id', '{{%staffs}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk-orders-staff_id', '{{%orders}}');
        $this->dropColumn('{{%orders}}', 'staff_id');
    }
}
