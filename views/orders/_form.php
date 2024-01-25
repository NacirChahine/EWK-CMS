<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\JsExpression; // Import JsExpression for using JavaScript in ActiveForm

/** @var yii\web\View $this */
/** @var app\models\Orders $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'services_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(
            \app\models\Services::find()->all(),
            'id',
            function ($service) {
                return $service->name . ' ($' . $service->price . ')';
            }
        ),
        [
            'prompt' => Yii::t('app', 'Select a service'),
            'multiple' => true, // Enable multiple selection
        ]
    ) ?>

    <?= $form->field($model, 'client_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Clients::find()->all(), 'id', 'name'),
        ['prompt' => Yii::t('app', 'Select a client')]
    ) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'total_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'received_date')->textInput(['type' => 'date', 'value' => date('Y-m-d')]) ?>

    <?= $form->field($model, 'delivery_date')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'staff_id')->dropDownList(
        \yii\helpers\ArrayHelper::map(\app\models\Staffs::find()->all(), 'id', 'name'),
        ['prompt' => Yii::t('app', 'Select a staff')]
    ) ?>

    <?php
    // JavaScript to fetch and calculate total_price based on selected services
    $servicePrices = json_encode(\yii\helpers\ArrayHelper::map(\app\models\Services::find()->all(), 'id', 'price'));

    $js = <<<JS
        var servicePrices = $servicePrices;
        
        $('#orders-services_id').change(function() {
            var selectedServices = $(this).val();
            var totalPrice = 0;
            
            if (selectedServices) {
                $.each(selectedServices, function(index, serviceId) {
                    var servicePrice = parseFloat(servicePrices[serviceId]) || 0;
                    totalPrice += servicePrice;
                });
            }
            
            $('#orders-total_price').val(totalPrice.toFixed(2));
        });
    JS;

    // Register the above JavaScript
    $this->registerJs($js, \yii\web\View::POS_READY);

    // Pass the service prices to the JavaScript code
    $this->registerJs('var servicePrices = ' . $servicePrices . ';', \yii\web\View::POS_HEAD);
    ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
