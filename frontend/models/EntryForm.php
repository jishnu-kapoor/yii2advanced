<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $address;


    public function rules()
    {


        return [
            [['name', 'email','phone','address'], 'required'],

            ['email', 'email'],
        ];

    }
}

//$model = new EntryForm();
//$model->name = 'Qiang';
//$model->email = 'bad';
//if ($model->validate())
//{
//    // Good!
//}
//
//else {
//    // Failure!
//    // Use $model->getErrors()
//}
