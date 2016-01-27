<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * ContactForm is the model behind the contact form.
 */
class CategoryJoke extends ActiveRecord
{
  public static function tableName()
  {
    return 'joke';
  }
public function rules()
{
  return [
      [['content', 'date','jokeID','permission','title'], 'required', 'message' => 'Morate unijeti tražene podatke'],
      [['content'], 'string'],
      [['date'], 'DateTime'],
      [['jokeID'],'integer'],
      [['permission'],'integer'],
      [['title'],'string','max'=>100]
      }

}
