<?php

use app\models\Clients;
use app\models\Services;
use app\models\Orders;

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'] = [['label' => $this->title]];

// Fetch counts from the database
$clientCount = Clients::find()->count();
$serviceCount = Services::find()->count();
$openOrderCount = Orders::find()->count();
$totalOrderCount = Orders::find()->count();

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">

            <h3><?= Yii::t('app', 'Welcome to EWK CMS') ?></h3> <br/>
            <h5><?= Yii::t('app', 'Below some fast stats:') ?></h5>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?= $clientCount ?></h3>
                    <p><?= Yii::t('app', 'Registered Clients') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= $serviceCount ?></h3>
                    <p><?= Yii::t('app', 'Services') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= $openOrderCount ?></h3>
                    <p><?= Yii::t('app', 'Open Orders') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?= $totalOrderCount ?></h3>
                    <p><?= Yii::t('app', 'Total Orders') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>

    </div>
</div>
