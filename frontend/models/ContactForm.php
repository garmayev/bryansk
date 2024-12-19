<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $direction;
    public $message;
    public $verifyCode;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'direction', 'message', 'verifyCode'], 'required'],
            [['email'], 'email'],
            [['verifyCode'], 'codeVerify'],
        ];
    }

    public function codeVerify($attribute) {
        $captcha_validate  = new \yii\captcha\CaptchaAction('captcha', Yii::$app->controller);
        if($this->$attribute){
            $code = $captcha_validate->getVerifyCode();
            if($this->$attribute != $code){
                $this->addError($attribute, 'The verification code is incorrect.');
            }
        }
    }

    public function sendEmail()
    {
        preg_match('/^[a-zA-Z\s]*$/', $this->name, $nameMatches);
        $new_array = array_filter($nameMatches);
        if (count($new_array)) {
            return false;
        }
        preg_match('/^[\w\-\.]+@[\w-]+\.+[\w-]{2,4}$/', $this->email, $emailMatches);
        if (count($emailMatches) && $emailMatches[0] === '') {
            return false;
        }
        preg_match('/^79[\d]{9}$/', str_replace(['+', '-', ' ', '(', ')'], "", $this->phone), $phoneMatches);
        if (count($phoneMatches) === 0) {
            return false;
        }
        preg_match('/http/', $this->message, $messageMatches);
        if (count($messageMatches) > 0) {
            return false;
        }

        \Yii::error($this->attributes);
//        return Yii::$app->mailer->compose('contact-us', [
//                'model' => $this
//            ])
//            ->setTo(\Yii::$app->params['companyEmail'])
//            ->setFrom(Yii::$app->params['adminEmail'])
//            ->setSubject($this->direction)
//            ->setTextBody($this->message)
//            ->send();
    }
}
