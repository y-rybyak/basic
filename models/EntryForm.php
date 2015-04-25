<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return [
            [['name', 'email', 'password', 'password_repeat'], 'required'],
            ['email', 'email'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
        ];
    }
}