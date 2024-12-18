<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'frontend*' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/messages',
                ]
            ]
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'scheme' => 'smtps',
                'host' => 'smtp.mail.ru',
                'username' => 'amg.company@inbox.ru',
                'password' => 'dAV5dj7Y28JrBThXmNWk',
                'ssl' => true,
                'port' => 465,
//                'dsn' => 'smtp://buryatagro:motmtimsudchctinh@smtp.yandex.ru:465'
            ],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/' => '<controller>/index',
                'products/ajax' => 'products/ajax',
                'products/send' => 'products/send',
                'products/<code:[\w_-]+>' => 'products/view',
                'products/<code:[\w_-]+>/index.htm' => 'products/view',
                'products/<parent:[\w_-]+>/<code:[\w_-]+>' => 'products/element',
                'products/<parent:[\w_-]+>/<code:[\w_-]+>/index.htm' => 'products/element',
                'systems/<code:[\w_-]+>' => 'systems/view',
                'systems/<code:[\w_-]+>/index.htm' => 'systems/view',
                'systems/<parent:[\w_-]+>/<code:[\w_-]+>' => 'systems/element',
                'systems/<parent:[\w_-]+>/<code:[\w_-]+>/index.htm' => 'systems/element',
            ],
        ],
    ],
    'params' => $params,
];
