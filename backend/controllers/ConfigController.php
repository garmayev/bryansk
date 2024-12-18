<?php

namespace backend\controllers;

use common\models\Config;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ConfigController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Config::find()
            ])
        ]);
    }
    public function actionUpdate($id)
    {
        $model = Config::findOne($id);
        return $this->render('update', [
            'model' => $model
        ]);
    }
}
