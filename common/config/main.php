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
	],
	
	'modules' => [
		'user' => [
			'class' => 'dektrium\user\Module',
			'admins' => ['admin'],
		],
	],
];
