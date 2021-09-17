<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        return 'admin';
    }

    /**
     * 模板使用
     *
     * @return void
     */
    public function test1()
    {
        View::assign('name', 'Brightness');
        View::assign('arr', ['one' => 'One', 'two' => 'Two']);

        return View::fetch();
    }
}
