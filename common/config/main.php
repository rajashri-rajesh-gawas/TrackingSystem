<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
     'modules' => [
        'admin' => [
            'class' => 'common\modules\admin\Module',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
         'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // uncomment if you want to cache RBAC items hierarchy
            // 'cache' => 'cache',
        ]
    ],
];
