<?php

namespace backend\controllers;

use common\models\Material;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;

class CertificateController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Material::find()->where(['element_id' => null])
            ])
        ]);
    }

    public function actionCreate()
    {
        $model = new Material();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->upload() && $model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Certificate is saved'));
                $this->redirect('index');
            } else {
                \Yii::$app->session->setFlash('danger', \Yii::t('backend', 'Certificate is not saved'));
                \Yii::error($model->getErrorSummary(true));
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Material::findOne($id);

        if (\Yii::$app->request->isPost) {

        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Material::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}
