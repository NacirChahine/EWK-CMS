<?php

namespace app\models;

use Yii;
use yii\db\ActiveQuery;
use yii\helpers\Html;

/**
 * This is the model class for table "{{%orders}}".
 *
 * @property int $id
 * @property string|null $services_id
 * @property int $client_id
 * @property string|null $description
 * @property string $status
 * @property float $total_price
 * @property string|null $received_date
 * @property string|null $delivery_date
 * @property int|null $staff_id
 * @property Staffs $staff
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%orders}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['staff_id'], 'integer'],
//            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staffs::className(), 'targetAttribute' => ['staff_id' => 'id']],
            [['services_id', 'client_id', 'total_price'], 'required'],
            [['client_id'], 'integer'],
            [['total_price'], 'number'],
            [['received_date', 'delivery_date', 'services_id', 'description', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'services_id' => Yii::t('app', 'Services'),
            'client_id' => Yii::t('app', 'Client'),
            'description' => Yii::t('app', 'Description'),
            'total_price' => Yii::t('app', 'Total Price'),
            'received_date' => Yii::t('app', 'Received Date'),
            'delivery_date' => Yii::t('app', 'Delivery Date'),
            'staff_id' => Yii::t('app', 'Staff'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return ActiveQuery
     */
    public function getStaff(): ActiveQuery
    {
        return $this->hasOne(Staffs::class, ['id' => 'staff_id']);
    }

    public function getServices(): array
    {
        $serviceIds = explode(',', $this->services_id);
        return Services::find()->where(['id' => $serviceIds])->all();
    }

    public function getClient(): ActiveQuery
    {
        return $this->hasOne(Clients::className(), ['id' => 'client_id']);
    }

//    for the view page
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

    public function toggleStatus()
    {
        $this->status = ($this->status === 'open') ? 'close' : 'open';
        return $this->save(false);
    }

}
