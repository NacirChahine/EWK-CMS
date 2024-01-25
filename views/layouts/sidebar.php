<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
<!--        <img src="/web/Ebreh_W_Kheit.jpg" alt="Ebreh W Kheit Logo" class="brand-image img-circle elevation-3" style="opacity: .8;">-->
        <span class="brand-text font-weight-light">
        <?php use hail812\adminlte\widgets\Menu;
            echo Yii::t('app', 'EWK CMS');?>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
<!--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">-->
<!--            <div class="image">-->
<!--                <img src="--><?php //=$assetDir?><!--/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
<!--            </div>-->
<!--            <div class="info">-->
<!--                <a href="#" class="d-block">Alexander Pierce</a>-->
<!--            </div>-->
<!--        </div>-->

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php

            try {
                echo Menu::widget([
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Users'),
                            'icon' => 'fas fa-users',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'active' => true, // Set this to true to make it open by default
                            'items' => [
                                ['label' => Yii::t('app', 'Staffs'), 'url' => ['/staffs'], 'iconStyle' => 'far', 'icon' => 'user'],
                                ['label' => Yii::t('app', 'Clients'), 'url' => ['/clients'], 'iconStyle' => 'far', 'icon' => 'user'],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Services'),
                            'icon' => 'fas fa-cogs',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'active' => true, // Set this to true to make it open by default
                            'items' => [
                                ['label' => Yii::t('app', 'Services'), 'url' => ['/services'], 'iconStyle' => 'far', 'icon' => 'cog'],
                                ['label' => Yii::t('app', 'Customers Orders'), 'url' => ['/orders'], 'iconStyle' => 'far', 'icon' => 'basket'],
                            ]
                        ],
                    ],
                ]);
            } catch (Throwable $e) {
            }
            ?>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>