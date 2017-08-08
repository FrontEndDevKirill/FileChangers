<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 08.08.2017
 * Time: 10:08
 */

namespace app\controllers;

use app\models\Files;
use app\models\Rates;
use Yii;

class Mine_fileController extends AppController
{

    public $layout = "user";

    public function actionDefault()
    {

        $files = new Files();
        $rates = new Rates();

        $data_files = $files->get_statistics_files();
        $shive = $rates->get_all();

        return $this->render("default", compact('data_files', 'shive'));

    }

    public function actionEdit()
    {
        $request = Yii::$app->request;

        if($request->isGet){

            $files = new Files();

            $get = $request->get();

            $file = $files->get_file($get['id_user'], $get['id_file']);

            return $this->render("edit", compact('file', 'files'));

        }

    }

    public function actionEdit_save()
    {



    }

}