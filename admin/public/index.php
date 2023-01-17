<?php

// [ 应用入口文件 ]

namespace think;

require dirname(__DIR__) . '/vendor/autoload.php';

// 执行HTTP应用并响应
$http = (new App())->http;

$response = $http->run();

$response->send();

$http->end($response);
