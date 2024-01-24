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
                <?php  if(!Yii::$app->user->isGuest){ ?>
                    <a href="<?= \yii\helpers\Url::to(['cms-users/view', 'id' => \Yii::$app->user->identity->id]) ?>" class="d-block">
                        <?php echo \Yii::$app->user->identity->username; ?>
                    </a>
                <?php } ?>
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

            try {
                echo Menu::widget([
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Dashboard'),
                            'icon' => 'tachometer-alt',
                            'url' => ['/'],

                        ],
                        [
                            'label' => Yii::t('app', 'Users'),
                            'icon' => 'user',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'CMS Users'), 'url' => ['/cms-users'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Create cms user'), 'url' => ['/cms-users/create'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Users (clients)'), 'url' => ['/users/'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Access pins'), 'url' => ['/access-pins/'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'World names'),
                            'icon' => 'globe',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'Countries list'), 'url' => ['/countries'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Vendors & branches'),
                            'icon' => 'dumpster',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'Admins accounts'), 'url' => ['/admin-accounts'], 'iconStyle' => 'far', 'icon' => ''],

                                ['label' => Yii::t('app', 'Vendors / Businesses'), 'url' => ['/businesses'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Branches'), 'url' => ['/vendor-branches'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Staffs'), 'url' => ['/venue-staffs'], 'iconStyle' => 'far', 'icon' => ''],
                                //                              ['label' => Yii::t('app', 'Pending Businesses'), 'url' => ['/businesses?BusinessesSearch%5Bname_en%5D=&BusinessesSearch%5Bemail%5D=&BusinessesSearch%5Bphone%5D=&BusinessesSearch%5Bbusiness_type%5D=&BusinessesSearch%5BCR%5D=&BusinessesSearch%5Bslug%5D=&BusinessesSearch%5BsectionName%5D=&BusinessesSearch%5BcategoryName%5D=&BusinessesSearch%5Bis_verified%5D=0'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Pending Businesses'), 'url' => ['/businesses/pending'], 'iconStyle' => 'far', 'icon' => ''],

                                ['label' => Yii::t('app', 'Pending Images'), 'url' => ['/vendor-branches/pending-images'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Photosession Bookings'), 'url' => ['/photoshooting-bookings'], 'iconStyle' => 'far', 'icon' => ''],

                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Appointments & Orders'),
                            'icon' => 'calendar',
                            'items' => [

                                ['label' => Yii::t('app', 'Appointments'), 'url' => ['/appointments'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Appointments Services'), 'url' => ['/appointments-services'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Orders'), 'url' => ['/orders'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Order Items'), 'url' => ['/order-items'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Categories & Services'),
                            'icon' => 'box',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'Sections'), 'url' => ['/sections'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Categories'), 'url' => ['/categories'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Services'), 'url' => ['/predefined-services'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Branch Services'), 'url' => ['/services'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Businesses'), 'url' => ['/businesses'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Branches Structure'),
                            'icon' => 'box',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'Branches'), 'url' => ['/vendor-branches'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Staffs'), 'url' => ['/venue-staffs'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Order Reviews'), 'url' => ['/reviews'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Venue Reviews'), 'url' => ['/venue-reviews'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Clients'), 'url' => ['/clients'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Users of the clients'), 'url' => ['/users'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Content'),
                            'icon' => 'database',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'SlideShows'), 'url' => ['/slideshows'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Category SlideShows'), 'url' => ['/category-slideshows'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Paragraphs'), 'url' => ['/paragraphs'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Collections'), 'url' => ['/collections'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'FAQs'), 'url' => ['/faqs'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Settings'),
                            'icon' => 'cog',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'Currency'), 'url' => ['/currencies'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'Tokens'), 'url' => ['/cron-tokens'], 'iconStyle' => 'far', 'icon' => 'cog'],
                            ]
                        ],
                        [
                            'label' => Yii::t('app', 'Reports - Soon'),
                            'icon' => 'fas fa-file-invoice',
                            //'badge' => '<span class="right badge badge-info">2</span>',

                        ],

                        [
                            'label' => Yii::t('app', 'Access control'),
                            'icon' => 'key',
                            //'badge' => '<span class="right badge badge-info">2</span>',
                            'items' => [
                                ['label' => Yii::t('app', 'User list'), 'url' => ['/rbac'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'List route'), 'url' => ['/rbac/route'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'List permission'), 'url' => ['/rbac/permission'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'List role'), 'url' => ['/rbac/role'], 'iconStyle' => 'far', 'icon' => ''],
                                ['label' => Yii::t('app', 'List assignment'), 'url' => ['/rbac/assignment'], 'iconStyle' => 'far', 'icon' => ''],
                            ]
                        ],
                        //  ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                        // ['label' => 'Yii2 PROVIDED', 'header' => true],
                        // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                        // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                        // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                        // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                        //                    ['label' => 'Level1'],
                        //                    [
                        //                        'label' => 'Level1',
                        //                        'items' => [
                        //                            ['label' => 'Level2', 'iconStyle' => 'far'],
                        //                            [
                        //                                'label' => 'Level2',
                        //                                'iconStyle' => 'far',
                        //                                'items' => [
                        //                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => ''],
                        //                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => ''],
                        //                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => '']
                        //                                ]
                        //                            ],
                        //                            ['label' => 'Level2', 'iconStyle' => 'far']
                        //                        ]
                        //                    ],
                        //                    ['label' => 'Level1'],
                        //                    ['label' => 'LABELS', 'header' => true],
                        //                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                        //                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                        //                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                    ],
                ]);
            } catch (Throwable $e) {

            }
            ?>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
<!--    /empty-->
</aside>