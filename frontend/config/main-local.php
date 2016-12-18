<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'mx-eHCmH5d45P0LwevGTEN-oLnGOtY53',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=moblog',
            'username' => 'w',
            'password' => '123x456',
            'charset' => 'utf8',
        ],
    ],
];


return $config;
