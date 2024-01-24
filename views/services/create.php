<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Services $model */

$this->title = Yii::t('app', 'Create Services');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
