<?php

return [
    'alipay' => [
        'app_id'         => '',
        'ali_public_key' => '',
        'private_key'    => '',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',   // 公众号 app id
        'mch_id'      => '',   // 第一步获取到的商户号
        'key'         => '',   // 刚刚设置的 API 密钥
        'cert_client' => '',   // apiclient_cert.pem
        'cert_key'    => '',   // apiclient_key.pem
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
