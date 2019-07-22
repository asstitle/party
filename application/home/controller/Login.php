<?php


namespace app\home\controller;


use think\Controller;

class Login extends Controller
{
    //登录页
    public function login(){
        return $this->fetch();
    }
}