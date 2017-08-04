<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 01.08.2017
 * Time: 15:48
 */

namespace app\models;


use yii\base\Model;

class Login extends Model
{
    public $login;
    public $pas;

    public function rules()
    {
        return [
            [['pas', 'login'], 'required'],
            ['pas', 'validatePas']
        ];

    }

    public function validatePas($atr, $par)
    {
        $user = $this->getUser();

        if(empty($user) || !password_verify($this->pas, $user->pas)){
            $this->addError($atr, 'Парольне или email не верен');
        }
    }

    public function getUser()
    {
        return User::findOne(['login' => $this->login]);
    }

}