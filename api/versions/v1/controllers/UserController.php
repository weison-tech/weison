<?php
namespace api\versions\v1\controllers;

use common\models\LoginForm;
use yii\filters\RateLimiter;
use yii\rest\ActiveController;
use api\common\models\SignupForm;
use yii;

class UserController extends ActiveController
{
    public $modelClass = 'api\versions\v1\models\User';

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        
        $behaviors['rateLimiter'] = [
            'class' => RateLimiter::className(),
            'enableRateLimitHeaders' => false,
        ];
        
        $behaviors['verbs'] = [
            'class' => \yii\filters\VerbFilter::className(),
            'actions' => [
                'login' => ['POST', 'OPTIONS'],               
            ],   
        ];
        
        return $behaviors;
    }

    public function actionLogin()
    {
        if (\Yii::$app->getRequest()->getMethod() === 'OPTIONS') {
            \Yii::$app->getResponse()->getHeaders()->set('Allow', 'POST');
        } else {
             $model = new LoginForm();

            if ($model->load(\Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
                echo \Yii::$app->user->identity->getAuthKey();
            } else {
                $model->validate();
                return $model;
            }
        }
    }

    /**
      *TODO : add verbs;
      */
    public function actionSignup()
    {
            $model = new SignupForm();
            if ($model->load(Yii::$app->getRequest()->getBodyParams(), '')) {
                if ($user = $model->signup()) {                   
                        print_r(json_encode(array('message'=>'ok')));
                }else{
                        $error = $model->getErrors();
                        print_r(json_encode($error));
                }
            }else{
                print_r(json_encode(array('message'=>'数据请求失败')));
            }
    }

    public function actionSignin()
    {
        if (\Yii::$app->getRequest()->getMethod() === 'OPTIONS') {
            \Yii::$app->getResponse()->getHeaders()->set('Allow', 'POST');
        } else {
             $model = new LoginForm();

            if ($model->load(\Yii::$app->getRequest()->getBodyParams(), '') && $model->login()) {
                $auth = \Yii::$app->user->identity->getAuthKey();
                $user = \common\models\User::find()->where(['auth_key' => $auth])->one();
                if($user){
                        return array('username'=>$user->username,'email'=>$user->email,'user_id'=>$user->id,'auth'=>$user->auth_key);
                }
            } else {
                $model->validate();
                $errors =  $model->getErrors();
                return $errors;

            }
        }
    }

    public function actionEdit()
    {
            $p= \Yii::$app->getRequest()->getBodyParams();
            $auth = $p['auth'];
            $user = \common\models\User::find()->where(['auth_key' =>$auth])->one();
            $user->username = $p['username'];
            $user->email = $p['email'];
            return $user->save();            
    }

    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) {
            throw new \HttpHeaderException();
        }
        return \Yii::$app->user->getId();
    }
}
