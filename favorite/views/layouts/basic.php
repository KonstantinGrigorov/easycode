<?php

/* @var $this \yii\web\View */
/* @var $content string */



//use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\components\AlertWidget;
use yii\helpers\Url;

AppAsset::register($this);
$this->beginPage();

?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head >
    <?= Html::csrfMetaTags() ?>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1']); ?>

    <title><?= Yii::$app->name ?></title>
    <?php $this->head(); ?>
    
</head>

<body>
    <?php $this->beginBody(); ?>
    

<div class="wrap">

    <?php 
        NavBar::begin(
                [
                'options' => [
                    'class' => 'navbar navbar-default',
                    'id' => 'main-menu'
                ],
                'renderInnerContainer' => true,
                'innerContainerOptions' => [
                    'class' => 'container'
                ],

                
                    'brandLabel' => '<img src="'.\Yii::$app->request->BaseUrl.'/img/brand.gif"/>',
                    'brandUrl' => [
                        '/main/index'
                ],
                'brandOptions' => [
                        'class' => 'navbar-brand'
                ]
            ]
         );

         if (!Yii::$app->user->isGuest):
            ?>
            <div class="navbar-form navbar-right">
                <button class="btn btn-sm btn-default"
                        data-container="body"
                        data-toggle="popover"
                        data-trigger="focus"
                        data-placement="bottom"
                        data-title="<?= Yii::$app->user->identity['username'] ?>"
                        data-content="
                            <a href='<?= Url::to(['/main/profile']) ?>' data-method='post'>Мой профиль</a><br>
                            <a href='<?= Url::to(['/main/logout']) ?>' data-method='post'>Выход</a>
                        ">
                    <span class="glyphicon glyphicon-user"></span>
                </button>
            </div>
        <?php
        
        
        endif;

        

        if(Yii::$app->user->isGuest):
            $menuItems[]=[
                'label'=>'Регистрация', 
                'url'=>['/main/reg']
            ];
            $menuItems[]=[
                'label'=>'Войти', 
                'url'=>['/main/login']
            ];
        else:
            $menuItems[]=[
                'label'=>'Выйти('.Yii::$app->user->identity['username'].')',
                'url'=>['/main/logout'],
                'linkOptions'=>[
                    'data-method'=>'post'
                ]
            ];

        endif;
        

       echo Nav::widget([
            'items' => $menuItems,            
            'activateParents' => true,
            'encodeLabels'=>false,
            'options'=>[
                'class'=>'navbar-nav navbar-right'
            ]
        ]);

       NavBar::end();

    ?>
    <div class="container">
        <?= AlertWidget::widget() ?>
        <?= $content ?>
    </div>

</div>

<footer class="footer">
    <div class="container">
        <span class="badge">
            <span class="glyphicon glyphicon-copyright-mark"></span> Authorization System <?= date('Y') ?>
        </span>
    </div>
</footer>


 <?php $this->endBody(); ?>   
</body>
</html>
<?php
$this->endPage();
