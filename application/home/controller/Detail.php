<?php

namespace app\home\controller;
use think\Controller;

class Detail extends Controller
{
    //课程播放页面
    public function course(){
        return $this->fetch();
    }
}