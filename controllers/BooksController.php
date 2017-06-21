<?php

namespace app\controllers;

use Yii;
use app\models\LoginForm;
use app\models\User;
use app\models\News;
use yii\data\ActiveDataProvider;

class BooksController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
        //render() – отображение вида и подключение шаблона

    }
    public function actionAbout()
    {
        return $this->render('about');
    }
	public function actionNews($id = 0) //передаем id
    {
    	if(!$id){
        $data = new ActiveDataProvider([
        	'query' => News::find()
        	-> where(['flag' => 0]),
        	'pagination' => [
        	'pageSize' => 5,
        	],
        ]);
        return $this->render('news', ['data' => $data,
        	]);
	    }else{
	    	$data = new ActiveDataProvider([
	        	'query' => News::find()
	        	-> where(['id' => $id]),	        	
	        	]);
	        return $this->render('news', ['data' => $data,
	        	]);
	    }
    }
	public function actionLogin()
    {
    	$model = new LoginForm();
		
		if($model->load(Yii::$app->request->post()) && $model->validate()) {
			if($model->login())
				return $this->goHome();
			else
				Yii::$app->session->setFlash('error', 'Возникла ошибка авторизации');
				Yii::error('Ошибка при регистрации');
				return $this->refresh();
		}
        return $this->render('login', ['model' => $model]);
    }
	public function actionLogout() {
		YII::$app->user->logout();
		return $this->goHome();
	}

		//if (!Yii::$app->user->isGuest) {
		//	return $this->goHome();
		//}
		//if (Yii::$app->request->post()) {
		//	echo '<pre>';
		//	print_r(Yii::$app->request->post());
		//	echo '</pre>';
		//	Yii::$app->end();   

}
