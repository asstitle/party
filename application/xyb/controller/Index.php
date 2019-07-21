<?php

namespace app\xyb\controller;
use app\common\controller\Base;

class Index extends Base
{
    //控制台
    public function index(){
        return $this->fetch();
    }
}