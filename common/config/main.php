<?php
//Un comentario
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
          'authManager' => [
                  'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
                ],
        'user' => [
            'class' => 'mdm\admin\models\User',
        'identityClass' => 'mdm\admin\models\User',
            //'class' => 'mdm\admin\models\User',
        'loginUrl' => ['admin/user/login'],
               ]
        
    ],
    
    'modules' => [
                 'admin' => [
                    'class' => 'mdm\admin\Module',
                        ],
        
                  'attachments' => [
		'class' => nemmo\attachments\Module::className(),
		'tempPath' => '@app/uploads/temp',
		'storePath' => '@app/uploads/store',
		'rules' => [ // Rules according to the FileValidator
		    'maxFiles' => 10, // Allow to upload maximum 3 files, default to 3
			'mimeTypes' => 'image/png', // Only png images
			'maxSize' => 1024 * 1024 // 1 MB
		],
		'tableName' => '{{%attachments}}' // Optional, default to 'attach_file'
	                ]
                ],
    
];
