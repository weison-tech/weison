<?php
return [
	'language' => 'zh-CN',
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],

		'authClientCollection' => [
			    'class' => yii\authclient\Collection::className(),
			    'clients' => [
			        'facebook' => [
			            'class'        => 'dektrium\user\clients\Facebook',
			            'clientId'     => 'CLIENT_ID',
			            'clientSecret' => 'CLIENT_SECRET',
			        ],
			        'twitter' => [
			            'class'          => 'dektrium\user\clients\Twitter',
			            'consumerKey'    => 'CONSUMER_KEY',
			            'consumerSecret' => 'CONSUMER_SECRET',
			        ],
			        'google' => [
			            'class'        => 'dektrium\user\clients\Google',
			            'clientId'     => 'CLIENT_ID',
			            'clientSecret' => 'CLIENT_SECRET',
			        ],
			        'github' => [
				'class'        => 'dektrium\user\clients\GitHub',
				'clientId'     => 'CLIENT_ID',
				'clientSecret' => 'CLIENT_SECRET',
			         ],
			],
		],

		'urlManager' => [
		    'enablePrettyUrl' => true,
		    'showScriptName' => false,
		    'rules' => [
		    ],
		],

		'i18n' => [
            'translations' => [
                'app'=>[
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath'=>'@common/messages',
                ],
                '*'=> [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath'=>'@common/messages',
                    'fileMap'=>[
                        'common'=>'common.php',
                        'backend'=>'backend.php',
                        'frontend'=>'frontend.php',
                    ],
                    //'on missingTranslation' => ['\backend\modules\i18n\Module', 'missingTranslation']
                ],
            ],
        ],

	],

	'modules' => [
		'user' => [
			'class' => 'dektrium\user\Module',
			'admins' => ['admin'],
		],
	],

	'as locale' => [
        'class' => 'common\behaviors\LocaleBehavior',
    ],
];
