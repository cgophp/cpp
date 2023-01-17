<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\Db;

class Index extends BaseController
{
    public function index()
    {
        //halt(get_included_files());
        return 'admin-' . func_date_time();
    }

    public function http()
    {
        return func_http_get('https://www.baidu.com/');
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }

    public function config()
    {
        dump(config());
    }

    public function db()
    {
        $list = Db::table('user')
            ->select()
            ->toArray();

        return json($list);
        //dump($list);
    }
}
