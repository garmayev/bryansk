<?php

namespace backend\controllers;

use common\models\Branch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class BranchController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Branch::find()
            ])
        ]);
    }

    public function actionView($id)
    {
        $model = Branch::findOne($id);
        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Branch::findOne($id);

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $model = new Branch();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $this->redirect('index');
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }
}