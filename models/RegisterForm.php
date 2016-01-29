<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model{


				public $nickname;
				public $password;
				public $email;


				public function rules(){

					return[

							['nickname', 'required', 'message'=>'Morate unijeti nadimak'],
							['password', 'required', 'message'=>'Morate unijeti lozinku'],
							['email', 'required', 'message'=>'Morate unijeti email'],
					];
				}


				public function attributeLabels(){

					return
					[
						'nickname'=>'Nadimak',
						'password'=>'Lozinka',
						'email'=>'Vaša email adresa',
					];
				}
}

?>