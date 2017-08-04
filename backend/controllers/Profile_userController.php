<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 04.08.2017
 * Time: 11:20
 */

namespace app\controllers;


use app\models\UploadForm;
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

    public function actionOne()
    {
        echo 21;
    }

    public function actionUpload_file()
    {
        return $this->render('upload_file');
    }

    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            var_dump($model->imageFile);die;

            if ($model->upload()) {
                // file is uploaded successfully
                return 2;
            }

        }

        //return $this->render('upload', ['model' => $model]);
    }


}