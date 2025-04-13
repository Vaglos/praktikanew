<?php

namespace app\models;

use Yii;

class SignupForm extends \yii\db\ActiveRecord
{
    public $username;
    public $password;


    public function rules()
    {
        return [
            [['username', 'password'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'username'=>'Логин',
            'password'=>'Пароль',
        ];
    }

    public function signup()
    {
            $user = new User();
            $user->username = $this->username;
            $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            return $user->save();
    }
}