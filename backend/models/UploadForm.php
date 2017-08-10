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

    public function rules()
    {
        return [

            [['imageFile'], 'file', 'skipOnEmpty' => false ],


            /*------------------*/

            [['imageFile'], 'file', 'skipOnEmpty' => false ],


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