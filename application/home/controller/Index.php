<?php

namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    //首页
   public function index(){
       return $this->fetch();
   }
   //列表页
   public function lists(){
     return $this->fetch();
   }
   //详情页
   public function details(){
       return $this->fetch();
   }
}