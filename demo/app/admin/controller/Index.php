<?php

namespace app\admin\controller;

use app\BaseController;
use app\lib\domain\JWT;
use think\facade\Cookie;
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

    /**
     * cookie
     *
     * @return void
     */
    public function test2()
    {
        $token = JWT::signToken(1);
        Cookie::set('token', $token);
        return View::fetch();
    }
}
