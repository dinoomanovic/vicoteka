<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * ContactForm is the model behind the contact form.
 */
class Comment extends ActiveRecord
{
  public static function tableName()
  {
    return 'comment';
  }
public function rules()
{
  return [
      [['categoryID', 'content','jokeID','time','userID'], 'required', 'message' => 'Morate unijeti tražene podatke'],
      [['categoryID'], 'integer'],
      [['content'], 'string'],
      [['jokeID'], 'integer'],
      [['userID'], 'integer'],
      [['time'],'DateTime']
      }

}
