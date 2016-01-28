<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LogForm;
use app\models\ContactForm;
use app\models\Account;
use app\models\Category;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex(){
        $user = new Account();
        $model = new LogForm();

        if( $model->load(Yii::$app->request->post()) && $model->validate() ){

            if(isset($_POST['login'])){

                $user = Account::find()->where(['nickname'=>$model->username])->one();

                if( $user && ($model->username == $user->nickname) && ($model->password == $user->password) ){
                  if($user->admin===0){
                   return $this->render('userPanel',['user'=>$user]);
                 }
                 else if($user->admin===1)
                 {
                   return $this->render('adminPanel',['user'=>$user]);
                 }
                }
                else{

                    return $this->render('fail');
                }
            }
        }
    return $this->render('login',['model'=>$model]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

public function actionCategory()
{
  $category=new Category();
  return $this->render('category',['category'=>$category]);
}
}
