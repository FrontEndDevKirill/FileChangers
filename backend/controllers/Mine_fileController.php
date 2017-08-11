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
use yii\helpers\AppFunc;
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

            return $this->render("edit", compact('file', 'model', 'get'));

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

        if (Yii::$app->request->isPost) {

            $model = new UploadForm(['scenario' => UploadForm::SCENARIO_EDIT_UPLOAD]);
            $files = new Files(['scenario' => Files::SCENARIO_EDIT_UPLOAD]);

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            $post_files = Yii::$app->request->post()['Files'];
            $id_user    = Yii::$app->request->post()['id_user'];
            $id_file    = Yii::$app->request->post()['id_file'];

            if($model->imageFile.size < 20000000 && $model->imageFile.type != 'php' || $model->imageFile == null) {
                if($model->validate()) {

                    $files_get = $files->find()->where(['id_user' => $id_user, 'id' => $id_file])->one();

                    if($model->imageFile !== null){

                        if ($model->upload()) {
                            @unlink($files_get->image_src);
                            $files_get->image_src = 'uploads/logo_files/' . $model->imageFile->baseName . '.' . $model->imageFile->extension;
                        } else {
                            echo "Ошибка Данных";
                        }

                    }

                    $files_get->name_file = $post_files['name_file'];
                    $files_get->fake_download = $post_files['fake_download'];
                    $files_get->fake_date = $post_files['fake_date'];


                    if($files_get->update() !== false){
                        return $this->redirect(['/mine_file']);
                    }else{
                        echo 'Ошибка БД';
                    }

                }else{
                    echo "false images";
                }
            } else{
                echo "Файл слишком большой, максимальный размер 20 мб";
            }
        }else{
            echo 'no post';
        }

    }

}