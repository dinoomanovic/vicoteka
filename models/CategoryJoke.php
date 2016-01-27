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
    return 'category_joke';
  }
public function rules()
{
  return [
      [['categoryID', 'jokeID'], 'required', 'message' => 'Morate unijeti tražene podatke'],
      [['categoryID'], 'integer'],
      [['jokeID'], 'integer'],
      }

}
