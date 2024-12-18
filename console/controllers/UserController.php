<?php

namespace console\controllers;

use common\models\User;
use yii\console\Controller;

class UserController extends Controller
{
    public function actionCreate($email, $username, $password = null)
    {
        $user = new User([
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'auth_key' => \Yii::$app->security->generateRandomString(16),
            'status' => User::STATUS_ACTIVE
        ]);
        if ($user->save())
        {
            $this->stdout("User '$username' is saved with password '$password'");
        } else {
            $this->stdout("User '$username' is not saved");
        }
    }
}