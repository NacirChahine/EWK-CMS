<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Staffs $model */

$this->title = Yii::t('app', 'Create Staffs');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Staffs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staffs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
