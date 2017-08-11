<?php
/**
 * Created by PhpStorm.
 * User: R61
 * Date: 04.08.2017
 * Time: 16:45
 */

namespace app\models;


use yii\base\Model;

class UploadForm extends Model
{
    public $imageFile;
    public $name;

    const SCENARIO_UPLOAD = 'upload';
    const SCENARIO_EDIT_UPLOAD = 'edit_upload';

    public function rules()
    {
        return [

            [['imageFile'], 'file', 'skipOnEmpty' => false  , 'on' => self::SCENARIO_UPLOAD],


            /*------------------*/

            [['imageFile'], 'file', 'skipOnEmpty' => true , 'on' => self::SCENARIO_EDIT_UPLOAD] ,


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