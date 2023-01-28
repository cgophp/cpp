<?php

use think\facade\Route;

Route::get('/', function () {
    return 'ThinkPHP-V6.1';
});

Route::get('think', function () {
    return 'hello,ThinkPHP6!';
});

Route::get('hello/:name', '\app\admin\controller\Index@hello');
