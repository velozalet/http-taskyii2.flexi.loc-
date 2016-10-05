<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/** This is the model class for table "album"
 * @property integer $id
 * @property string $src
 * @property string $alt
 * @property string $create
 */
class Album extends ActiveRecord
{

    public $limit_img = 3; //limit display image from table `album` DB. If $limit_img = 0 - display all images


    /** @inheritdoc */
    public static function tableName() {
        return 'album';
    }


    /** @inheritdoc */
    public function rules() {
        return [
            [['src', 'alt', 'create'], 'required'],
            [['src'], 'string', 'max' => 200],
            [['alt'], 'string', 'max' => 40],
            [['create'], 'string', 'max' => 25],
        ];
    }


    /** @inheritdoc */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'src' => 'Src',
            'alt' => 'Alt',
            'create' => 'Create',
        ];
    }


    /** All links of images for Gallery
     * @return array with data from DB
     * //(int)$pagination_item - property of class Posts
    */
    public function getAllImages() {

        if( $this->limit_img == 0 ): //display all images
            $images_for_gallery = Album::find()->orderBy('id')->all();  //All images for Gallery
        else: //display images depending on the value in a variable $limit_img
            $images_for_gallery = Album::find()->limit($this->limit_img)->orderBy('id')->all();
        endif;

        return $images_for_gallery;
    }  //___/getAllImages()




}  //__/class Album


