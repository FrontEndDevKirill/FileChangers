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
use app\models\UploadForm;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;

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
            $model = new UploadForm();

            $get = $request->get();

            $file = $files->get_file($get['id_user'], $get['id_file']);

            return $this->render("edit", compact('file', 'model'));

        }

    }

    public function actionDelete_file()
    {

        $request = Yii::$app->request;
        $headers = Yii::$app->request->headers;

        if($request->isGet){

            $files = new Files();

            $get = $request->get();

            $files->delete_file($get['id_user'], $get['id_file']);

            return $this->redirect(['/mine_file']);

        }

    }

    public function actionEdit_save()
    {

        $model = new UploadForm(['scenario' => UploadForm::SCENARIO_EDIT_UPLOAD]);
        $files = new Files();

        if (Yii::$app->request->isPost) {

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $uploadForm = Yii::$app->request->post('UploadForm');
            $files->name_files = $uploadForm->name_files;
            $files->fake_download = $uploadForm->fake_download;
            $files->fake_date = $uploadForm->fake_date;
            debug($model);die;


            //$model->load(Yii::$app->request->post('UploadForm'));


//var_dump($model);die;

            if($model->imageFile.size < 20000000 && $model->imageFile.type != 'php') {
                if($model->validate()) {
//                    if ($model->upload()) {
//
////                        $files->id_user = Yii::$app->user->identity->id;
////                        $files->data = date("Y-m-d H:i:s");
////                        $files->src = 'uploads/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
////                        $files->name_file = $model->name;
////                        $files->size = $model->imageFile.size;
////
////                        if ($files->save()) {
////                            $this->redirect("");
////                        }else{
////                            echo "Ошибка записи в БД";
////                        }
//
//                    } else {
//
//                        echo "Ошибка Данных";
//
//                    }
                }
            } else{
                echo "Файл слишком большой, максимальный размер 20 мб";
            }
        }

    }

}