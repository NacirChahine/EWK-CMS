<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%staffs}}".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string|null $more_info
 * @property float|null $percentage
 */
class Staffs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%staffs}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['more_info'], 'string'],
            [['percentage'], 'number', 'min' => 0, 'max' => 100],
            [['name', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'phone' => Yii::t('app', 'Phone'),
            'more_info' => Yii::t('app', 'More Info'),
            'percentage' => Yii::t('app', 'Percentage'),
        ];
    }
}
