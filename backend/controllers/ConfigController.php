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

        if (\Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post()) && $model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Successfully saved'));
                $this->redirect('index');
            } else {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Not save'));
                \Yii::error($model->getErrorSummary(true));
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }
}
