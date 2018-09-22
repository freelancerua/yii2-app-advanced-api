<?php
return [
    [
        'class' => \yii\rest\UrlRule::class, 
        'pluralize' => false,
        'controller' => 'v1/test',
        'except' => ['create', 'update', 'delete', 'view', 'index', 'options'],
        'extraPatterns' => [
            'GET test' => 'test',
        ],
    ],
];
