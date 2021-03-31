<?php

namespace app\controllers;

use app\models\Post;
use Yii;

class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $request = Yii::$app->request;

        $post = Post::findOne($request->get('id'));

        return $this->render('index', ['post' => $post]);
    }

}
