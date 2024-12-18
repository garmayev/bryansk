<?php

namespace frontend\controllers;

use common\models\Element;
use common\models\Section;
use yii\data\ActiveDataProvider;

class SystemsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'dataProvider' => new ActiveDataProvider([
                'query' => Section::find()->where(['type' => Section::TYPE_ELECTRONIC_SYSTEM])->andWhere(['type' => Section::TYPE_ELECTRONIC_SYSTEM])->orderBy(['id' => SORT_ASC, 'sort' => SORT_ASC])
            ])
        ]);
    }

    public function actionView($code)
    {
        $model = Section::findOne(['code' => $code]);
//        \Yii::error($code);
        return $this->render('view', [
            'model' => $model
        ]);
    }

    public function actionElement($code)
    {
        $model = Element::findOne(['code' => $code]);
        return $this->render('element', [
            'model' => $model,
        ]);
    }
}
