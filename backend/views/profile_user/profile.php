

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="content col-xs-10">
                <div class="teh">
                    <h3><i class="fa fa-line-chart"></i> Статистика</h3>
                </div>
                <div class="teh">
                    <h3>Тех.поддержка</h3>
                    <a href=""><i class="fa fa-vk"></i> : vk.com</a><br><br>
                    <a href=""><i class="fa fa-skype"></i> : Skype</a>
                </div>
                <div class="teh statistic">
                    <div class="col-xs-3 ">
                        <div class="Stat item1">
                            <p class="moneyStat"><?= $earnings_downloads ?> <i class="fa fa-ruble"></i></p>
                            <p>Зарабаток с загрузчика</p>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="Stat item2">
                            <p class="moneyStat">0.0 <i class="fa fa-ruble"></i></p>
                            <p>Зарабаток с рекламы</p>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="Stat item3">
                            <p class="moneyStat">0.0 <i class="fa fa-ruble"></i></p>
                            <p>Зарабаток с рефералов</p>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="Stat item4">
                            <p class="moneyStat">0.0 <i class="fa fa-ruble"></i></p>
                            <p>Зарабаток с бонусов</p>
                        </div>
                    </div>
                </div>
                <div class="teh statsTable">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><i class="fa fa-calendar"></i><br> Дата</th>
                            <th><i class="fa fa-cloud-download"></i><br> Скачивания</th>
                            <th><i class="fa fa-internet-explorer"></i><br> Установки Амиго</th>
                            <th><i class="fa fa-money"></i><br> Прибыль загрузок</th>
<!--                            <th><i class="fa fa-money"></i><br> Прибыль рекламы</th>-->
<!--                            <th><i class="fa fa-money"></i><br> Прибыль рефералов</th>-->
                            <th><i class="fa fa-money"></i><br> Имя файла</th>
                            <th><i class="fa fa-money"></i><br> Общий зарабаток</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($data_files as $data_file): ?>

                            <tr>
                                <td><?= $data_file['data'] ?></td>
                                <td><?= $data_file['count_download'] ?></td>
                                <td><?= $data_file['count_install'] ?></td>
                                <td><?= $data_file['count_install'] / $bonus['bonus'] ?>.руб</td>
                                <td><?= $data_file['name_file'] ?></td>
<!--                                <td>--><?//= $data_file['count_install'] ?><!--</td>-->
<!--                                <td>0.0 <i class="fa fa-ruble"></i></td>-->
                                <td>Их нет, тебя наедали</td>
                            </tr>

                        <?php endforeach; ?>

                        </tbody>
                    </table>


                </div></div>
        </div>
    </div>
</div>