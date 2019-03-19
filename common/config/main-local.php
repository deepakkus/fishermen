<?php
return [
    'components' => [
        'db' => [
			'class' => 'yii\db\Connection',
           /* 'dsn' => 'mysql:host=localhost;dbname=clsnew',
            'charset' => 'utf8',
			'username' => 'root',
            'password' => '',
            'charset' => 'utf8',*/
			/* 'dsn' => 'mysql:host=localhost;dbname=rosetelegramdb',
            'charset' => 'utf8',
			'username' => 'rosetelegram',
            'password' => 'I*bGqOV#^X=7',
            'charset' => 'utf8',*/
			
			'dsn' => 'mysql:host=localhost;dbname=fishermen',
            'charset' => 'localhost',
			'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
		'user' => [
            'identityClass' => 'app\models\User',
             'enableAutoLogin' => false,
            'authTimeout' => 60*5,
			'loginUrl'=>['site/login']
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
    ],
];
