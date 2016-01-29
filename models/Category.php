<?php

namespace app\models;
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
      [['name'], 'required', 'message' => 'Morate unijeti tražene podatke'],
      [['categoryID'], 'integer'],
      [['name'], 'string']
    ];
      }
      public function attributeLabels()
      {
          return [
              'categoryID' => 'ID kategorije',
              'name' => 'Naziv kategorije',
];
}


}


?>
