<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 04.08.2017
 * Time: 13:57
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Files extends ActiveRecord
{
    public static function tableName()
    {
        return "files";
    }

    public function get_statistics_files()
    {
        $id = Yii::$app->user->identity->id;
        return $this->find()->asArray()->where(["id_user" => $id])->all();
    }


}