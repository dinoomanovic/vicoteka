<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use app\models\CategoryJoke;
use app\models\Joke;
use app\models\Comment;
use app\models\User;

class ViceviController extends Controller
{
  public function behaviors()
  {
      return [
          'verbs' => [
              'class' => VerbFilter::className(),
              'actions' => [
                  'delete' => ['post']
              ],
          ],
      ];

  }
public function actionIndex()
{
return $this->render('index');
}
public function actionCategory()
{

}
public function actionCategoryJoke()
{

}
public function actionComment()
{

}
public function actionJoke()
{

}
public function actionUser()
{

}

}
