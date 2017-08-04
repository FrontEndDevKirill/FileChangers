<?php
use yii\bootstrap\Html;
use yii\helpers\Url;
?>

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
            <a class="navbar-brand" href="../../index.html">FileFantasy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="../../index.html"><i class="fa fa-download"></i> Загрузить файл</a></li>
                <li><a href="../profileUser/refer.html">Реферальная система</a></li>
                <li><a href="../AllFile.html">Все файлы</a></li>
            </ul>
            <div class="in">
                <ul class="nav navbar-nav navbar-right">
                    <li class="singinlogin">
                        <div class="btn-group" role="group" aria-label="...">
                            <a href="log.html" class="btn btn-primary"><i class="fa fa-sign-in"></i> Авторизация</a>
                            <a href="reg.html" class="btn btn-danger"><i class="fa fa-user-plus"></i> Регистрация</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <?php $form = yii\widgets\ActiveForm::begin(['class' => 'form-horizontal', 'action' => '/user/sign_in_data']); ?>
                <div class="error">Не павильный пароль</div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Логин</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Form_sign_in[login]" id="name"  placeholder="Введите логин"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Почта</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Form_sign_in[email]" id="email"  placeholder="Введите почту"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">WMR-кошелек</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Form_sign_in[purse]" id="username"  placeholder="Введите кошелек WMR"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Пароль</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="Form_sign_in[pas]" id="password"  placeholder="Введите пароль"/>
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary btn-lg btn-block login-button']) ?>
                </div>

                <div class="login-register">
                    <a href="<?=  Url::to(['user/login']); ?>">Войти</a>
                </div>


            <?php yii\widgets\ActiveForm::end(); ?>

        </div>
    </div>
</div>