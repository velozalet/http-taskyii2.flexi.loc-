<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements  IdentityInterface //yii\web\IdentityInterface
{
/** This is the model for table "user":
* @property integer id
* @property string username
* @property string email
* @property string password
* @property string create
* @property integer role
*/



/** interface IdentityInterface implementation */

    /* Объект Identity ассоциируется с текущим вошедшим Юзером.Если Юзер не зашел,значение объекта Identity будет NULL. Через Объект Identity можно
        узнать все данные о Юзере,который аутентифицировался и вощел в систему или использовать один из методов IdentityInterface:
                    echo Yii::$app->user->identity['username'];
                    echo Yii::$app->user->identity['email'];
                    echo Yii::$app->user->identity['id'];
                    echo Yii::$app->user->identity->getId();
                    echo date('d-m-Y', Yii::$app->user->identity['created_at']);
    */

    /** @return object Identity by ID user */
    public static function findIdentity($id){  //object Identity by ID user(from DB)
        return self::findOne($id);
    }

    /** @return ID current user */
    public function getId(){  //return ID current user
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null){} //object Identity по секретному ключу,он хранится в поле auth_key

    public function getAuthKey(){}  //возвращает секретный ключ auth_key текущего пользователя

    public function validateAuthKey($authKey){}  //сравнивает полученный ключ с ключом auth_key текущего пользователя

}  //__/class User
