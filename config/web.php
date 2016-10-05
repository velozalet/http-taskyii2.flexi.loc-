<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
/*Y*///to access the module 'admin'
    'modules' => [
        'admin' => [
            'class' => 'app\module\admin\AdminModule',
        ],
    ],
//__/to access the module 'admin'
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '-9KjbcOGE17Cx6mOSS2g3BnD_KYcdu5p',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User', //если класс identityInterface будет исп.не в модели User,как в данном приложении,то тут нужно доп.указать модель,наприм. 'identityClass' => 'app\models\Users',
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
        //good links URL browser
        'urlManager' => [
            //'encodeParams' => false,
            'enablePrettyUrl' => true,
            //'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                //my rules
            ],
        ],
                //or
                /* 'enablePrettyUrl' => true,
                    'showScriptName' => false,
                    'enableStrictParsing' => false, */
        //__/good links URL browser
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
