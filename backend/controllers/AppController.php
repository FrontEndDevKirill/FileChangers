<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 01.06.2017
 * Time: 16:21
 */

namespace app\controllers;

use yii\web\Controller;
use Yii;

class AppController extends Controller
{

    function __construct($id = 0, $module = 0, array $config = [])
    {
        if(Yii::$app->user->isGuest){
            $this->redirect("/user/login");
        }
        parent::__construct($id, $module, $config);
    }

    public function dump($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

}
