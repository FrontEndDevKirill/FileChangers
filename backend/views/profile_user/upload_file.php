<?php

use yii\bootstrap\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="content col-xs-10">
                <div class="teh">
                    <h3><i class="fa fa-cloud-download"></i> Загрузка файлов</h3>
                </div>
                <div class="teh text-center">

<!--                    <form action="--><?//= Url::to(['/profile_user/upload']); ?><!--" method="post">-->
<!--                        <div id="dropZone">-->
<!--                            Для загрузки, перетащите файл сюда.-->
<!--                            <p>Максимальный размер файла 20мб</p>-->
<!--                            <br>-->
<!--                            <p>Или вы можете нажать на кнопку ниже </p>-->
<!--                        </div>-->
<!--                        <input type="file" name="ww"  enctype='multipart/form-data' class=" btn btn-lg dawnloadbtn">-->
<!---->
<!--                        --><?//= Html::submitButton('Загрузить', ['class' => 'btn btn-primary btn-lg ']) ?>
<!---->
<!--                    </form>-->


                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'text-center'], 'action' => '/profile_user/upload']) ?>

                                            <div id="dropZone">
                                                Для загрузки, перетащите файл сюда.
                                                <p>Максимальный размер файла 20мб</p>
                                                <br>
                                                <p>Или вы можете нажать на кнопку ниже </p>
                                            </div>

                    <?= $form->field($model, 'name')->textInput() ?>
                    <?= $form->field($model, 'imageFile')->fileInput(['class'=>'text-center btn btn-primary btn-lg']) ?>

                    <?= Html::submitButton('Загрузить', ['class' => 'btn btn-primary btn-lg ']) ?>

                    <?php ActiveForm::end() ?>

                    <br>
                    <br>
                </div>


            </div>
        </div>
    </div>
</div>