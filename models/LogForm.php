<?php 

namespace app\models;

use Yii;
use yii\base\Model;


class LogForm extends Model
{
	public $username;
	public $password;


	public function rules()
    {
        return [
            ['username', 'required', 'message'=> 'Morate unijeti korisničko ime'],
            ['password', 'required', 'message'=> 'Morate unijeti password'],            
        ];
    }

    public function attributeLabels()
    {
    	return[

    	'username'=>'Korisničko ime',
    	'password'=>'Lozinka',

    	];
    }
}

?>