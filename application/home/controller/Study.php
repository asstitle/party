<?php

namespace app\home\controller;


use think\Controller;

class Study extends Controller
{
      //学习首页
      public function study(){
          return $this->fetch();
      }

      //学习详情
      public function study_detail(){
          return $this->fetch();
      }
}