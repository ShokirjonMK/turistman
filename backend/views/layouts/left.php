<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => Yii::t('ui', 'Blog'), 'url' => ['/catalog/blog/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Blog-comment'), 'url' => ['/catalog/blog-comment/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Comment'), 'url' => ['/catalog/comments/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Features'), 'url' => ['/catalog/features/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Information'), 'url' => ['/catalog/information/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Pricing-plans'), 'url' => ['/catalog/pricing-plans/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Service'), 'url' => ['/catalog/service/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Service-category'), 'url' => ['/catalog/service-category/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Portfolyo'), 'url' => ['/catalog/portfolyo/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'settings-home'), 'url' => ['/catalog/settings-home/index'], 'icon' => 'home'],
                    ['label' => Yii::t('ui', 'Settings'), 'icon' => 'cogs', 'items' => [
                        [
                            'label' => Yii::t('ui', 'Translations'),
                            'url' => ['/settings/source-message/list'],
                            'icon' => 'language'
                        ],
                    ]],
                ],
            ]
        ) ?>

    </section>

</aside>
