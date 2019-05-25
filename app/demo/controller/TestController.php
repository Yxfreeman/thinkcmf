<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/25
 * Time: 9:02
 */

namespace app\demo\controller;


use cmf\controller\HomeBaseController;

class TestController extends HomeBaseController
{
    public  function  index()
    {
        echo 'hello world';
    }

}