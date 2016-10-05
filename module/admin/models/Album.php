<?php

namespace app\module\admin\models;

use Yii;
use yii\web\UploadedFile;  //for upload files

/**
 * This is the model class for table "album".
 *
 * @property integer $id
 * @property string $src
 * @property string $alt
 * @property string $create
 */
class Album extends \yii\db\ActiveRecord
{
    public $file; //save uploaded file
    public $src_fake; //fake input for form create image to DB


    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['src', 'alt', 'create'], 'required'],
            //[['alt', 'create'], 'required'],
            [['src'], 'string', 'max' => 200],  //['src', 'safe'],
            [['file'], 'file'],
            [['alt'], 'string', 'max' => 40],
            [['create'], 'string', 'max' => 25],
            [['src_fake'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'alt' => 'Alt',
            'create' => 'Create',
        ];
    }


}  //__/class Album
