<?php

namespace app\home\controller;

use think\Controller;

class Test extends Controller
{
     //在线测试
     public function index(){
         return $this->fetch();
     }
}