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
use yii\db\Exception;

class Files extends ActiveRecord
{

    const SCENARIO_UPLOAD = 'upload';
    const SCENARIO_EDIT_UPLOAD = 'edit_upload';

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

    public function delete_file($id_user, $id_file)
    {
        $res = false;
        $file = $this->find()->where(['id_user' => $id_user, 'id' => $id_file])->one();

        if(!empty($file)) {
            if ($file->delete()) {
                try {
                    //Как обработать ошибку unlink() если нет такого файла
                    $res = @unlink($file->src);
                } catch (Exception $e) {
                    echo "Файл был удалён ранее";
                } finally {
                    echo "Первое finally.\n";
                }
                $res = true;
            }
        }

        return $res;

    }

    public function rules()
    {
        return [

            [['src'], 'required' , 'on' => self::SCENARIO_UPLOAD],

            /*------------------*/

            [['fake_download', 'name_file', 'fake_date'], 'required' , 'on' => self::SCENARIO_EDIT_UPLOAD],
            [['fake_download'], 'integer', 'min' => 0, 'on' => self::SCENARIO_EDIT_UPLOAD],
            //[['fake_date'],  'date', 'format' => 'yyyy-MM-dd hh:mm:ss', 'on' => self::SCENARIO_EDIT_UPLOAD],


        ];
    }


}