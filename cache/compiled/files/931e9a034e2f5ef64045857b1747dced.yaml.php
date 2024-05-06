<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/RSUP/DEV/PHP/grav-theme-linktree/user/plugins/email/email.yaml',
    'modified' => 1715022935,
    'size' => 235,
    'data' => [
        'enabled' => true,
        'from' => NULL,
        'to' => NULL,
        'mailer' => [
            'engine' => 'sendmail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => NULL,
                'password' => NULL
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
