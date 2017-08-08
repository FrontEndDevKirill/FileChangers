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

    public function get_file($id_user, $id_file)
    {

        $file = $this->find()->where(['id_user' => $id_user, 'id' => $id_file])->asArray()->all()[0];
        return $file;

    }

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false],
            [['name'], 'required'],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }

    }


}