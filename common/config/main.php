<?php
return [
    'name'=>'Thinking on the cloud',
    'language'=>'zh-CN',
    'timeZone'=>'Asia/Shanghai',
    'runtimePath'=>'@common/runtime',

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'locale'=>'zh-CN',
            'dateFormat' => 'yyyy-MM-dd',
            'timeFormat' => 'HH:mm',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm',
            'decimalSeparator' => '.',
            'thousandSeparator' => ',',
            'currencyCode' => '&yen;',
        ],
        'urlManager' => [
            'enablePrettyUrl' => false,
            'showScriptName' => false,

        ],

    ],

];
