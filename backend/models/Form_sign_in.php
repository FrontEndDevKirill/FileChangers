<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 31.07.2017
 * Time: 21:33
 */

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Form_sign_in extends ActiveRecord
{

    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [

            [['purse','login', 'pas', 'email'], 'required'],

            ['email', 'email'],

        ];
    }

}