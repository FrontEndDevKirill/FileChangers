<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 08.08.2017
 * Time: 11:01
 */

namespace app\models;


use yii\db\ActiveRecord;

class Rates extends ActiveRecord
{

    public static function tableName()
    {
        return "rates";
    }

    public function get_all()
    {
        return $this->find()->asArray()->all()[0];
    }

}