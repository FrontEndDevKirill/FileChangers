<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 04.08.2017
 * Time: 15:27
 */

namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Bonus extends ActiveRecord
{

    public static function tableName()
    {
        return "bonus";
    }

    public function get_bonus()
    {

        $id = Yii::$app->user->identity->id;
        return $this->find(['id_user' => $id])->asArray()->all()[0];

    }

}