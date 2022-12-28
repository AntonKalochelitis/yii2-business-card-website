<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=' . env('MYSQL_DOCKER_HOST') . ';port=' . env('MYSQL_DOCKER_PORT') . ';dbname=' . env('MYSQL_DATABASE'),
            'username' => env('MYSQL_USER', 'root'),
            'password' => env('MYSQL_PASSWORD'),
            'charset' => env('MYSQL_CHARSET'),
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@common/mail',
        ],
    ],
];
