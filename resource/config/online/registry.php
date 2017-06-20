<?php

return [
    "enable_register" => true,
    "type" => "etcd",

    // 服务发现配置
    'discovery' => [
        'timeout' => 3000,
        'loop_time' => 1000,     //worker定时器任务执行时间（判断是否已拉取到服务）
    ],

    //监听服务变更配置
    'watch' => [
        'timeout' => 30000,
        'loop_time' => 5000,  //worker定时器任务执行时间（判断执行watch的worker是否live）
    ],

    //监听apcu服务列表变更配置
    'watch_store' => [
        'loop_time' => 1000, //worker定时器任务执行时间(判断本地的服务列表是否变化)
    ],

    // 配置从注册中心拉取的服务名称
    "app_names" => [
        "tcp-demo"
    ],

    // 配置从注册中心拉取服务的协议(暂时只能是nova)与命名空间(域)
    "app_configs" => [
        "tcp-demo" => [
            "protocol" => "nova",
            'namespace' => 'com.test.service',
        ],
    ],
    // 配置etcd集群节点, 可配置多个
    "etcd" => [
        "nodes" => [
            [
                "host" => "127.0.0.1",
                "port" => 2379,
            ]
        ],
    ],

    "haunt" => [

    ],
];