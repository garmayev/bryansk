<?php

namespace frontend\controllers;

use yii\web\Controller;

class PartsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSpares()
    {
        return $this->render('spares');
    }

    public function actionQr()
    {
        if (\Yii::$app->request->isPost) {

        }
        return $this->render('qr');
    }

    public function actionOil()
    {
        return $this->render('oil');
    }
}