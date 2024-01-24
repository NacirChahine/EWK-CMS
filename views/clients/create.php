<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */

$this->title = Yii::t('app', 'Create Clients');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clients'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
