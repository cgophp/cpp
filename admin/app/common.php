<?php

// 应用公共文件

use fast\Http as FastHttpClient;

function func_http_get($url, $params = [], $options = [])
{
    return FastHttpClient::get($url, $params, $options);
}

function func_http_post($url, $params = [], $options = [])
{
    return FastHttpClient::post($url, $params, $options);
}

function func_date_time($timestamp = 'now')
{
    $format = 'Y-m-d H:i:s';

    if ($timestamp === 'now') {
        return date($format);
    }

    $timestamp = intval($timestamp);
    if ($timestamp > 0) {
        return date($format, $timestamp);
    }

    return '';
}
