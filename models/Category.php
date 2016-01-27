<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
/**
 * ContactForm is the model behind the contact form.
 */
class Category extends ActiveRecord
{
  public static function tableName()
  {
    return 'category';
  }
public function rules()
{
  return [
      [['categoryID', 'name'], 'required', 'message' => 'Morate unijeti tražene podatke'],
      [['categoryID'], 'integer'],
      [['name'], 'string'],
      }

}
