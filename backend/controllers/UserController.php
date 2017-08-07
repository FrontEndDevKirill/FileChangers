<?php

namespace app\controllers;

use app\models\Form_sign_in;
use app\models\Login;
use app\models\User;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    function __construct($id = 0, $module = 0, array $config = [])
    {
        if(!Yii::$app->user->isGuest){
            $this->redirect("/profile_user/profile");
        }
        parent::__construct($id, $module, $config);
    }

    public $layout = "basic";

    public function actionSign_in()
    {
        $model = new Form_sign_in();
        return $this->render("sign_in", compact("model"));

    }

    public function actionSign_in_data()
    {


//        $pass_has = password_hash("qwerty", PASSWORD_DEFAULT);
//        $pass = password_verify("qwerty",$pass_has);

        $post = Yii::$app->request->post();

        $sign_in = new Form_sign_in();

        $sign_in->load($post);

        $sign_in->pas = password_hash($sign_in->pas, PASSWORD_DEFAULT);

        if($sign_in->save()){

            $this->redirect("/profile_user/profile");

        }else{

            var_dump('false');

        }
    }

    public function actionLogin()
    {

        $model = new Login();
        return $this->render('login', compact('model'));

    }

    public function actionLogin_data()
    {

        $model = new Login();

        $model->load(Yii::$app->request->post());

        if($model->validate()){

            Yii::$app->user->login($model->getUser());
            $this->redirect("/profile_user/profile");

        }else{
            var_dump(false);
            //return $this->render('login', compact('model'));
        }



    }
}