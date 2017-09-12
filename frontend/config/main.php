<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */


             // 'facebook' => [
             //                  'class' => 'yii\authclient\clients\Facebook',
             //                  'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
             //                  'clientId' => '1847090512269341',
             //                  'clientSecret' => '283f1e2ec8dcec7074853a40ca581c2e',
             //                ],




'authClientCollection' => [
      'class' => 'yii\authclient\Collection',
      'clients' => [
        'facebook' => [
          'class' => 'yii\authclient\clients\Facebook',
          'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
          'clientId' => '1847090512269341',
          'clientSecret' => '283f1e2ec8dcec7074853a40ca581c2e',
          'attributeNames' => ['name', 'email','first_name', 'last_name','picture','timezone','age_range','cover','verified'],
        ],
      ],
    ],




    ],
    'params' => $params,
];
