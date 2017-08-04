<?php

use yii\bootstrap\Html;
use yii\helpers\Url;

?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="menu col-xs-2">
                <ul class="nav menuProfile">
                    <li class="money">БАЛАНС RUB <span id="moneyT"></span> <i class="fa fa-ruble"></i></li>
                    <p>Главная</p>
                    <li><a href="profile.html"><i class="fa fa-line-chart"></i> Статистика</a></li>
                    <p>Файлы</p>
                    <li><a href="uploadfile.html"><i class="fa fa-cloud-download"></i> Загрузить файл</a></li>
                    <li><a href="mineFile.html"><i class="fa fa-file"></i> Мои файлы</a></li>
                    <li><a href="tarif.html"><i class="fa fa-asterisk"></i> Тарифы</a></li>
                    <p>Профильный раздел</p>
                    <li><a href="cash.html"><i class="fa fa-cc-visa"></i> Выплата</a></li>
                    <li><a href="wmNum.html"><i class="fa fa-money"></i> Кошелек</a></li>
                    <li><a href="rules.html"><i class="fa fa-info"></i> Правила</a></li>
                    <li><a href="refer.html"><i class="fa fa-male"></i> Рефералы</a></li>
                    <li><a href="bonus.html"><i class="fa fa-plus"></i> Бонусы</a></li>
                    <p>Мой кабинет</p>
                    <li><a href="teh.html"><i class="fa fa-question"></i> Тех.Поддержка</a></li>
                    <li><a href=""><i class="fa fa-sign-out"></i> Выход</a></li>
                </ul>
            </div>
            <div class="content col-xs-10">
                <div class="teh">
                    <h3><i class="fa fa-cloud-download"></i> Загрузка файлов</h3>
                </div>
                <div class="teh text-center">

                    <form action="<?= Url::to(['/profile_user/upload']); ?>" method="post">
                        <div id="dropZone">
                            Для загрузки, перетащите файл сюда.
                            <p>Максимальный размер файла 20мб</p>
                            <br>
                            <p>Или вы можете нажать на кнопку ниже </p>
                        </div>
                        <input type="file" name="UploadForm[imageFile]" class=" btn btn-lg dawnloadbtn">

                        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary btn-lg ']) ?>

                    </form>
                    <br>
                    <br>
                </div>


            </div>
        </div>
    </div>
</div>