<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
        <img src="/images/logo.jpg" alt="Mauidy Logo" class="brand-image img-circle elevation-3" style="opacity: .8; filter: grayscale(100%);">
        <span class="brand-text font-weight-light">
        <?php use hail812\adminlte\widgets\Menu;
            echo Yii::t('app', 'CMS');?>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

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

            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => Yii::t('app','Users'),
                        'icon' => 'user',
                        //'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' =>Yii::t('app',  'Admins list'), 'url' => ['/admin-accounts'], 'iconStyle' => 'far', 'icon' => ''],
                            ['label' => Yii::t('app','Create admin'), 'url' => ['/useadmin-accounts/create'], 'iconStyle' => 'far', 'icon' => ''],
                        ]
                    ],
                    [
                        'label' => Yii::t('app','World names'),
                        'icon' => 'globe',
                        //'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => Yii::t('app','Countries list'), 'url' => ['/countries'], 'iconStyle' => 'far', 'icon' => ''],
                            ['label' => Yii::t('app','Cities list'), 'url' => ['/cities'], 'iconStyle' => 'far', 'icon' => ''],
                        ]
                    ],
                ],
            ]);
            ?>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>