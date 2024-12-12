<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'i18n' => [
            'translations' => [
                'backend*' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@common/message',
                ]
            ]
        ],
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
];
