<?php

    use yii\bootstrap\Html;
    use yii\widgets\ActiveForm;

?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="content col-xs-10">
                <div class="teh">
                    <h3><i class="fa fa-cog spin"></i> Настройки файла FILENAME</h3>
                </div>
                <div class="teh">

                    <?php

                    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'text-center'], 'action' => '/profile_user/upload']) ?>

                    <div id="dropZone">
                        Для загрузки, перетащите файл сюда.
                        <p>Максимальный размер файла 20мб</p>
                        <br>
                        <p>Или вы можете нажать на кнопку ниже </p>
                    </div>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Поле</th>
                                <th>Сейчас</th>
                                <th>Внести изменения</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Имя файла</td>
                                <td>NameFile</td>
                                <td><input type="text" class="inputwm" name="wm" placeholder="Новое имя файла" value="<?= $file['name_file'] ?>"></td>

                            </tr>
                            <tr>
                                <td>Загрузки (фейк)</td>
                                <td>0</td>
                                <td><input type="text" class="inputwm" name="wm" placeholder="Добавить фейк скачек" value="<?= $file['fake_download'] ?>"></td>

                            </tr>
                            <tr>
                                <td>Дата загругки</td>
                                <td>25.06.2016</td>
                                <td><input type="text" class="inputwm" name="wm" placeholder="Новая дата" value="<?= $file['fake_date'] ?>"></td>

                            </tr>
                            <tr>

                                <td>Фото</td>
                                <td><img src="<?= $file['image_src'] ?>" width="40" height="40" alt=""></td>
                                <td>
                                    <?= $form->field($files, 'imageFile')->fileInput(['class'=>'btn btn-lg dawnloadbtn']) ?>
                                </td>

                            </tr>
                            </tbody>
                        </table>

                        <div class="text-center">
                            <td><?= Html::submitButton('Пременить', ['class' => 'btn btn-success btn-ьв']) ?></td>
                        </div>

                    <?php ActiveForm::end() ?>

                </div>
            </div>
        </div>
    </div>
</div>