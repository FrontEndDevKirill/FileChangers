<div class="">
    <div class="">
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
                <li><a href="../regUser/log.html"><i class="fa fa-sign-out"></i> Выход</a></li>
            </ul>
        </div>
    </div>
</div>

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