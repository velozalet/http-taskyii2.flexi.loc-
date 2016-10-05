<?php
namespace app\models;

use Yii;
use yii\base\Model;



/* Class Signup - модель-прослойка.Тут мы не наследуем ActiveRecord и не работаем с БД,- т.е. имеем связи с табл.'user' и ее полями как свойствами этого Класса
Tут нам нужно получить данные из формы регистрации и обработать их - т.е.эта модель для фильтрации и валидации данных */

/**
    MODEL FOR VALIDATION & FILTERING DATA DURING REGISTRATION USER
 */
class Signup extends Model
{
    public $username; //user's username
    public $email;    //user's email
    public $password; //user's password
    public $create;   //current timestamp
    public $role = 0; //0 - simple user(subscriber);  1- admin


    /**
     * @return array a Labels for inputs form "Signup"
     */
    public function attributeLabels() {  //подставятся эти лейблы для полей Формы "Signup",если только они не прописаны непосредственно в самой Форме во вьюхе (->label('Username')),тогда отработают те,а эти проигнорируются
        return [
            'username' => Yii::t('app', 'Username +'),
            'email' => Yii::t('app', 'Email +'),
            'password' => Yii::t('app', 'Password +'),
            //'role' => Yii::t('app', 'Role'),
        ];
    }


    /** RULES VALIDATION PROPERTY
     * @return array the validation rules.
    */
    public function rules() {
        return [
            [ ['username','email','password'],'required' ], //username,email,password must be required!
            ['email','email'],  //email must be valid email format
            ['email','unique','targetClass'=>'app\models\User'],  //email must be unique and don't repeat in DB
            ['username','unique','targetClass'=>'app\models\User'],  //username must be unique and don't repeat in DB
            //для 'targetClass' надо передать ту модель,кот.использ.табл.БД,к кот.мы применяем это правило валидации- в данном случае это model User,кот.взпимод.с табл.'user'
            [ ['username','email', 'password'], 'trim'],  //username,email,password are both trim
            [ 'username', 'string', 'length'=>[2, 25] ], //or ['username','string','min'=>2,'max'=>25]
            [ 'email', 'string', 'length'=>[10, 35] ], //or ['email','string','min'=>10,'max'=>35]
            [ 'password', 'string', 'length'=>[5, 35] ] //or ['password','string','min'=>5,'max'=>35] ,
        ];
    }


    /** SAVE NEW USER to DB
     * @return (bool) true/false
    */
    public function signup() {
        $user = new User();

        $user->username = $this->username;
        $user->email = $this->email;
        //hashing password of user
        $user->password  = Yii::$app->getSecurity()->generatePasswordHash($this->password);  //or $user->password = sha1($this->password);
        $user->create = time(); //current timestamp
        $user->role = $this->role;

        return $user->save();

    }




}  //__/class Signup