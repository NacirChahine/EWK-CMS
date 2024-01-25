<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property string $services_id
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
            [['client_id'], 'integer'],
            [['total_price'], 'number'],
            [['received_date', 'delivery_date', 'services_id', 'description'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'services_id' => Yii::t('app', 'Services'),
            'client_id' => Yii::t('app', 'Client'),
            'description' => Yii::t('app', 'Description'),
            'total_price' => Yii::t('app', 'Total Price'),
            'received_date' => Yii::t('app', 'Received Date'),
            'delivery_date' => Yii::t('app', 'Delivery Date'),
        ];
    }

    public function getServices(): array
    {
        $serviceIds = explode(',', $this->services_id);
        return Services::find()->where(['id' => $serviceIds])->all();
    }

    public function getClient(): \yii\db\ActiveQuery
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }

    // for the view page
    public function getServiceNames(): string
    {
        $services = $this->getServices();
        $serviceNames = [];
        foreach ($services as $service) {
            $serviceNames[] = Html::a($service->name, ['services/view', 'id' => $service->id]);
        }
        return implode(', ', $serviceNames);
    }

    public function getClientName(): string
    {
        return Html::a($this->client->name, ['clients/view', 'id' => $this->client_id]);
    }

}
