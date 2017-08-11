<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 04.08.2017
 * Time: 11:20
 */

namespace app\controllers;


use app\models\UploadForm;
use yii\helpers\AppFunc;
use yii\web\Controller;
use app\models\Files;
use app\models\Bonus;
use Yii;
use yii\web\UploadedFile;

class Profile_userController extends AppController
{
    public $layout = "user";

    public function actionProfile()
    {
        $files = new Files();
        $bonus = new Bonus();

        $data_files = $files->get_statistics_files();
        $bonus = $bonus->get_bonus();

        $earnings_downloads = 0;

        foreach ($data_files as $data_file){
            $earnings_downloads += ( $data_file['count_install'] / $bonus['bonus'] );
        }

        return $this->render("profile", compact('data_files', 'bonus', 'earnings_downloads'));

    }

    public function actionUpload_file()
    {
        $model = new UploadForm();

        return $this->render('upload_file', compact('model'));
    }

    public function actionUpload()
    {

        $model = new UploadForm(['scenario' => UploadForm::SCENARIO_UPLOAD]);
        $files = new Files(['scenario' => Files::SCENARIO_UPLOAD]);

        if (Yii::$app->request->isPost) {

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->name = Yii::$app->request->post('UploadForm')['name'];

            if($model->imageFile.size < 20000000 && $model->imageFile.type != 'php') {
                if($model->validate()) {
                    if ($model->upload()) {

                        $files->id_user = Yii::$app->user->identity->id;
                        $files->data = date("Y-m-d H:i:s");
                        //Написать генератор уникального имени, точнее подключить чтобы он работал  AppHelper::name_generator
                        $files->src = 'uploads/' . AppFunc::name_generator('uploads/',$model->imageFile->extension) . '.' . $model->imageFile->extension;
                        $files->name_file = $model->name;
                        $files->size = $model->imageFile.size;

                        if ( $files->save() ) {
                            return $this->redirect("/mine_file");
                        }else{
                            echo "Ошибка записи в БД";
                        }

                    } else {

                        echo "Ошибка Данных";

                    }
                }else{
                    echo "Валидация";
                }
            } else{
                echo "Файл слишком большой, максимальный размер 20 мб";
            }
        }else{

            echo 1;

        }
        //return $this->render('upload', ['model' => $model]);
    }


}