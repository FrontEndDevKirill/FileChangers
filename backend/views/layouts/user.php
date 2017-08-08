<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\ProfileAsset;
use yii\helpers\Url;



ProfileAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<!-- Left menu begin -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">FileFantasy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="../../index.html"><i class="fa fa-download"></i> Загрузить файл</a></li>
                <li><a href="refer.html">Реферальная система</a></li>
                <li><a href="../AllFile.html">Все файлы</a></li>
            </ul>
            <div class="in">
                <p class="username">Добро пожаловать <a href="profile.html" class="user btn btn-warning btn-xs"><i class="fa fa-user"></i> <?= Yii::$app->user->identity->login ?></a></p>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="">
    <div class="">
        <div class="menu col-xs-2">
            <ul class="nav menuProfile">
                <li class="money">БАЛАНС RUB <span id="moneyT"></span> <i class="fa fa-ruble"></i></li>
                <p>Главная</p>
                <li><a href="<?= Url::to('/profile_user/profile') ?>"><i class="fa fa-line-chart"></i> Статистика</a></li>
                <p>Файлы</p>
                <li><a href="<?= Url::to('/profile_user/upload_file') ?>"><i class="fa fa-cloud-download"></i> Загрузить файл</a></li>
                <li><a href="<?= Url::to('/mine_file') ?>"><i class="fa fa-file"></i> Мои файлы</a></li>
                <li><a href="tarif.html"><i class="fa fa-asterisk"></i> Тарифы</a></li>
                <p>Профильный раздел</p>
                <li><a href="cash.html"><i class="fa fa-cc-visa"></i> Выплата</a></li>
                <li><a href="wmNum.html"><i class="fa fa-money"></i> Кошелек</a></li>
                <li><a href="rules.html"><i class="fa fa-info"></i> Правила</a></li>
                <li><a href="refer.html"><i class="fa fa-male"></i> Рефералы</a></li>
                <li><a href="bonus.html"><i class="fa fa-plus"></i> Бонусы</a></li>
                <p>Мой кабинет</p>
                <li><a href="teh.html"><i class="fa fa-question"></i> Тех.Поддержка</a></li>
                <li><a href="../regUser/log.html"><i class="fa fa-sign-out"></i> Выход</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Left menu end -->

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
