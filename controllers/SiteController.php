<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LogForm;
use app\models\ContactForm;
use app\models\RegisterForm;

use app\models\Account;
use app\models\Category;
use app\models\Joke;

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

    public function actionAdmin($id){

        $user = Account::find()->where(['userID'=>$id])->one();
       
       if (isset($_POST['logout'])) {

            $this->redirect('index.php?r=site/index');
        } 
       return $this->render('adminPanel',['user'=>$user]); 

    }

    public function actionUser($id){

        $user = Account::find()->where(['userID'=>$id])->one();

        if (isset($_POST['logout'])) {

           $this->redirect('index.php?r=site/index');
        } 

        else if (isset($_POST['categories'])) {

            $this->redirect('index.php?r=site/categories');
        }
        return $this->render('userPanel',['user'=>$user]);

    }

    public function actionCategories(){

        $categories = new Category();
        $categories = Category::find()->all();

        return $this->render('categories', ['categories'=>$categories]);
    }

    public function actionJoke(){


    }

    public function actionLog(){
        $user = new Account();
        $model = new LogForm();

        if( $model->load(Yii::$app->request->post()) && $model->validate() ){

            if(isset($_POST['login'])){

                $user = Account::find()->where(['nickname'=>$model->username])->one();

                if( $user && ($model->username == $user->nickname) && ($model->password == $user->password) ){
                              
                              if($user->admin === 0){
                                //Yii::$app->runAction('site/user', $user->userID);
                                    return $this->redirect(array('site/user', 'id'=>$user->userID));
                             }
                             else if($user->admin === 1){
                                    return $this->redirect(array('site/admin', 'id'=>$user->userID));
                                //Yii::$app->runAction('site/admin', $user->userID);
                             }
                }
                else{

                    return $this->render('fail');
                }
            }
        }
    return $this->render('login',['model'=>$model]);
    }

    public function actionRegister(){

        $user = new Account();
        $model = new RegisterForm();

                    if( $model->load(Yii::$app->request->post()) && $model->validate() ){

                        if(isset($_POST['save'])){

                            $user->nickname = $model->nickname;
                            $user->password = $model->password;
                            $user->email = $model->email;
                                $user->save();
                            return $this->redirect(array('site/user', 'id'=>$user->userID) );
                        }
                    }
    return $this->render('register', ['model'=>$model]);
    }

    public function actionIndex(){

        $jokes = Joke::find()->all();
        $categories = Category::find()->all();

            if(isset($_POST['login'])){

                $this->redirect('index.php?r=site/log');
        
        }
        if(isset($_POST['register'])){

                $this->redirect('index.php?r=site/register');
        }

    return $this->render('home', ['jokes'=>$jokes, 'categories'=>$categories]);
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
  return $this->render('category');
}
}
