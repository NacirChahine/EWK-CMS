<?php

use app\models\Clients;

$this->title = Yii::t('app', 'Dashboard');
$this->params['breadcrumbs'] = [['label' => $this->title]];
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
                    <h3>33</h3>
                    <p><?= Yii::t('app', 'Registred Client') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
                <div class="inner">
                    <div class="inner">
                        <h3><?= 33 ?></h3>
                        <p><?= Yii::t('app', 'Vendors count') ?></p>
                    </div>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?= 33 ?></h3>
                    <p><?= Yii::t('app', 'Branches Count') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?= 33 ?></h3>
                    <p><?= Yii::t('app', 'Registered Client') ?></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>

    </div>
</div>