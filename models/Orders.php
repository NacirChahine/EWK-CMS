<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property int $services_id
 * @property int $client_id
 * @property string|null $description
 * @property float $total_price
 * @property string|null $received_date
 * @property string|null $delivery_date
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['services_id', 'client_id', 'total_price'], 'required'],
            [['services_id', 'client_id'], 'integer'],
            [['description'], 'string'],
            [['total_price'], 'number'],
            [['received_date', 'delivery_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'services_id' => Yii::t('app', 'Services ID'),
            'client_id' => Yii::t('app', 'Client ID'),
            'description' => Yii::t('app', 'Description'),
            'total_price' => Yii::t('app', 'Total Price'),
            'received_date' => Yii::t('app', 'Received Date'),
            'delivery_date' => Yii::t('app', 'Delivery Date'),
        ];
    }
}