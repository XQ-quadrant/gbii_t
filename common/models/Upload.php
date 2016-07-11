<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-22
 * Time: 下午7:02
 */
 namespace backend\models;
 use Yii;
 use yii\web\UploadedFile;
 class Upload extends \yii\db\ActiveRecord
 {
     /**
      * @var UploadedFile|Null file attribute
      */
     public $file;
     /**
      * @return array the validation rules.
      */
     public function rules()
     {
         return [
             [["file"], "file",],
         ];
     }
 }