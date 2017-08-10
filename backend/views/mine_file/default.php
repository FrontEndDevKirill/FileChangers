<?php

use yii\helpers\Url;

?>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">

            <div class="content col-xs-10">
                <div class="teh">
                    <h3><i class="fa fa-file"></i> Мои файлы</h3>
                </div>
                <div class="teh statsTable">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Аватар</th>
                            <th>Файл</th>
                            <th>Размер</th>
                            <th>Установок/Fake</th>
                            <th>Прибыль</th>
                            <th>Дата загрузки</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($data_files as $data_file): ?>
                            <tr>
                                <td><img src="<?= $data_file['image_src'] ?>" width="40px;" alt=""></td>
                                <?php
                                    $data = explode("/", $data_file['src']);
                                ?>
                                <td><?= $data[count($data)-1];  ?></td>
                                <td><?= $data_file['size'] ?></td>
                                <td><a href="" title="Простые скачивания" class="downloadonli downloadd"> <?= $data_file['count_download'] ?> <i class="fa fa-cloud-download"></i> </a><a href="" title="Фейк скачивания" class="downloadonliplusamigo downloadd"><?= $data_file['fake_download'] ?> <i class="fa fa-internet-explorer"></i></a></td>
                                <td><i class="fa fa-ruble"></i></td>
                                <td>25.11.2016 <i class="fa fa-calendar"></i></td>
                                <td>
                                    <a href="" title="Скопировать в буфер обмена ссылку на файл" class="linkset"><i class="fa fa-link"></i></a>
                                    <a href="<?= Url::to("/mine_file/edit/".$data_file['id_user']."/".$data_file['id']) ?>" class="setset" title="Настройки файла"><i class="fa fa-cog"></i></a>
                                    <a href="<?= Url::to("/mine_file/delete_file/".$data_file['id_user']."/".$data_file['id']) ?>" title="Удалить файл" class="delset"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>