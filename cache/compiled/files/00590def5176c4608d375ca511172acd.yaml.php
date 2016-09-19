<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/config/plugins/email.yaml',
    'modified' => 1474188742,
    'data' => [
        'enabled' => true,
        'from' => 'jocke@gmail.com',
        'from_name' => 'User',
        'to' => 'aleksic.jovan.86@gmail.com',
        'to_name' => 'Jovan Aleksic',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => true
    ]
];
