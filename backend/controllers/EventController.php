<?php

namespace backend\controllers;

use common\models\Event;
use vova07\imperavi\actions\UploadFileAction;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class EventController extends Controller
{
    public function actions()
    {
        return [
            'image-upload' => [
                'class' => UploadFileAction::class,
                'url' => '/images/upload',
                'path' => \Yii::getAlias('@frontend/web/images/upload'),
            ]
        ];
    }

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
                'query' => Event::find()
            ])
        ]);
    }

    public function actionView($id)
    {
        $model = Event::findOne($id);

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $model = new Event();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->file = UploadedFile::getInstance($model, 'file');
            if ( $model->upload() && $model->save() ) {
                return $this->redirect('index');
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Event::findOne($id);

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->file = UploadedFile::getInstance($model, 'file');
            if ( $model->upload() && $model->save() ) {
                return $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Event::findOne($id);
        if (isset($model)) {
            if (!isset($model->image)) {
                unlink($model->image);
            }
            $model->delete();
        }
        return $this->redirect('index');
    }
}