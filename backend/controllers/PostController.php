<?php

namespace backend\controllers;

use common\models\Post;
use vova07\imperavi\actions\UploadFileAction;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class PostController extends Controller
{
    public function beforeAction($action)
    {
        $this->layout = 'main';
        return parent::beforeAction($action);
    }

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
                        'actions' => ['index', 'create', 'delete', 'update', 'view', 'image-upload'],
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
                'query' => Post::find()
            ])
        ]);
    }

    public function actionCreate()
    {
        $model = new Post();

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->upload() && $model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Post is successfully saved'));
                return $this->redirect('index');
            }
        }

        return $this->render('create', [
            'model' => $model
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Post::findOne($id);

        if (\Yii::$app->request->isPost) {
            $model->load(\Yii::$app->request->post());
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->upload() && $model->save()) {
                \Yii::$app->session->setFlash('success', \Yii::t('backend', 'Post is successfully saved'));
                return $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model
        ]);
    }

    public function actionView($id)
    {
        $model = Post::findOne($id);

        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Post::findOne($id);
        $model->delete();
        return $this->redirect('index');
    }
}