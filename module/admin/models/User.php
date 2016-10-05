<?php

namespace app\module\admin\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $create
 * @property integer $role
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'create', 'role'], 'required'],
            [['role'], 'integer'],
            [['username'], 'string', 'max' => 25],
            [['email', 'password'], 'string', 'max' => 255],
            [['create'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'create' => 'Create',
            'role' => 'Role',
        ];
    }
}
