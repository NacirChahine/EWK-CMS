<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%services}}".
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property int $duration
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%services}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'duration'], 'required'],
            [['price'], 'number'],
            [['duration'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'price' => Yii::t('app', 'Price'),
            'duration' => Yii::t('app', 'Duration'),
        ];
    }
}
