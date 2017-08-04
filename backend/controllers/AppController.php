<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 01.06.2017
 * Time: 16:21
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
    public function dump($data)
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
    }

}
