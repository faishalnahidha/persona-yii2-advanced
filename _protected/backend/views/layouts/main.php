<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use kartik\widgets\SideNav;

AppAsset::register($this);
?>
    <?php $this->beginPage() ?>
        <!DOCTYPE html>
        <html lang="<?= Yii::$app->language ?>">

        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <?= Html::csrfMetaTags() ?>
                <title>
                    <?= Html::encode($this->title) ?>
                </title>
                <?php $this->head() ?>
                <link rel="shortcut icon" href="<?php echo Yii::$app->getHomeUrl(); ?>/favicon.ico?v=1" type="image/x-icon"/>
        </head>

        <body>
            <?php $this->beginBody() ?>
                <div class="wrap">
                    <?php
    NavBar::begin([
        'brandLabel' => 'PERSONA',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
        'innerContainerOptions' => [
            'class' => 'container-fluid',
        ],
    ]);

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();

    

    ?>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-2" style="padding:100px 0 20px 15px;">
                                    <?php
        $type = SideNav::TYPE_DEFAULT;
        $item = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;

        //echo $item;
        echo SideNav::widget([
            'type' => $type,
            'encodeLabels' => false,
            'heading' => 'Admin Page',
            'options' => ['padding-left' => '15px'],
            'items' => [
                ['label' => 'Home', 'icon' => 'home', 'url' => Url::to(['/site/index']), 'active'=> ($item == 'site/index')],
                ['label' => 'Customer', 'icon' => 'user', 'items' => [
                    ['label' => 'Daftar Customer', 'url' => Url::to(['/customer/index']), 'active' => ($item == 'customer/index')],
                    ['label' => 'Create Customer', 'url' => Url::to(['/customer/create']), 'active' => ($item == 'customer/create')],        
                ]],
                ['label' => 'Pembelian', 'icon' => 'shopping-cart', 'items' => [
                    ['label' => 'Daftar Pembelian', 'url' => Url::to(['/pembelian/index']), 'active' => ($item == 'pembelian/index')],
                    ['label' => 'Create Pembelian', 'url' => Url::to(['/pembelian/create']), 'active' => ($item == 'pembelian/create')],
                ]],
                ['label' => 'Profile', 'icon' => 'info-sign', 'url' => Url::to(['#'])],
            ],
        ]);
    ?> </div>
                                <div class="col-md-10" style="">
                                    <div class="container-fluid" style="padding:70px 15px 20px">
                                        
                                            <?= Alert::widget() ?>
                                                <?= $content ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <p class="pull-left">&copy; Persona Corporation
                            <?= date('Y') ?>
                        </p>
                        <p class="pull-right">
                            <?= Yii::powered() ?>
                        </p>
                    </div>
                </footer>
                <?php $this->endBody() ?>
        </body>

        </html>
        <?php $this->endPage() ?>