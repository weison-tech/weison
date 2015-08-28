<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-wechat',
    'name' => 'IT自学分享网',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'wechat\controllers',
    'modules' => [
        'user' => [
            // following line will restrict access to admin page
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'components' => [        
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'wechat' => [
            'class' => 'callmez\wechat\sdk\Wechat',
            'appId' => '微信公众平台中的appid',
            'appSecret' => '微信公众平台中的secret',
            'token' => '微信服务器对接您的服务器验证token'
        ],
    ],
    'params' => $params,
];
