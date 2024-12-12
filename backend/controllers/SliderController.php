<?php

namespace backend\controllers;

use common\models\Slider;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class SliderController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'view', 'create', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Slider::find()
            ])
        ]);
    }

    public function actionView($id)
    {
        $model = Slider::findOne($id);
        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Slider::findOne($id);

        if (\Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post()) && $model->save()) {
                return $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionCreate()
    {
        $model = new Slider();

        if (\Yii::$app->request->isPost) {
            if ($model->load(\Yii::$app->request->post()) && $model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Slider #{id} is saved', ['id' => $model->id]));
                $this->redirect('index');
            } else {
                \Yii::$app->session->setFlash('error', \Yii::t('backend', 'Dont saved'));
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Slider::findOne($id);
        if ($model->id !== 1) {
            $model->delete();
            \Yii::$app->session->setFlash('success', \Yii::t('app', 'Slider successfully deleted'));
        } else {
            \Yii::$app->session->setFlash('danger', \Yii::t('app', 'Can not delete this slider'));
        }
        return $this->redirect('index');
    }
}