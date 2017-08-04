<?php
    use yii\bootstrap\Html;
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
            <?php $form = yii\widgets\ActiveForm::begin(['class' => 'form-horizontal', 'action' => '/user/login_data']); ?>
                <div class="error"></div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Логин</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="Login[login]" id="name" placeholder="Введите ваш логин" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Пароль</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="Login[pas]" id="password" placeholder="Введите ваш пароль" />
                        </div>
                    </div>
                </div>


                <div class="form-group ">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-lg btn-block login-button']) ?>
                </div>

                <div class="login-register">
<!--                    <a href="reg.html">Регистрация</a>-->
                </div>
            <?php yii\widgets\ActiveForm::end(); ?>
        </div>
    </div>
</div>