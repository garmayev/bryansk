<?php

namespace frontend\controllers;

use common\models\Branch;
use yii\web\Controller;
use yii\web\Response;

class BranchController extends Controller
{
    public function actionView($id)
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $model = Branch::findOne($id);
        return $model;
    }

    public function actionSet($id)
    {
        \Yii::$app->session->set('branch', $id);
        $this->redirect(['/site/index']);
    }

    public function actionReset()
    {
        \Yii::$app->session->set('branch', 1);
        $this->redirect(['/site/index']);
    }
}