<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'layout' => 'mylayout',
    'language' => 'ru_RU',
    'charset' => 'UTF-8',
    'name' => 'Учебное приложение', 
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute'=> 'books', //дефолтный маршрут, здесь ссылка на лого
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'asdfghjkl;[poiuytresxcvbn',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        //красивые урлы
        'urlManager' => [
            'enablePrettyUrl' => true, //ЧПУ
            'showScriptName' => false, //не отображать index.php
            //'enableStrictParsing' => true, //  404 если нет правила 
            'rules' => [
                [
                'pattern' => '<controller>/<action>', // шаблон ссылки
                'route'   => '<controller>/<action>', // маршрут для ссылки
                'suffix' => '', //подставляемый суффикс 
                ],
                [
                'pattern' => '<controller>/<action>/<id>', // шаблон ссылки
                'route'   => '<controller>/<action>', // маршрут для ссылки
                'suffix' => '', //подставляемый суффикс 
                ],
            ],

        ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
