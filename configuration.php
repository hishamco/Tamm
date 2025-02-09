<?php

$configurations = array(
    'base_path' => '/tammphp/', // '/'
    'debug' => true,
    'middlewares' => array(
        'Tamm\Middleware\LoggingMiddleware',
    ),
    'database' => array(
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'your_database_name',
        'username' => 'your_username',
        'password' => 'your_password',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => 'tm_',
    ),
    'theme' => 'assas',
    'modules' => array('account','check','l10n')
);
