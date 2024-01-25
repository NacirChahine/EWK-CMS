<?php

use app\models\Orders;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\OrdersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Orders');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Orders'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'services_id',
                'value' => function ($model) {
                    $services = $model->getServices();
                    $serviceLinks = [];
                    foreach ($services as $service) {
                        $serviceLinks[] = Html::a($service->name, ['services/view', 'id' => $service->id]);
                    }
                    return implode(', ', $serviceLinks);
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'client_id',
                'value' => function ($model) {
                    return Html::a($model->client->name, ['clients/view', 'id' => $model->client_id]);
                },
                'format' => 'raw',
            ],
            'description:ntext',
            'total_price',
            //'received_date',
            //'delivery_date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orders $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
