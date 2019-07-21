<?php

namespace app\xyb\Controller;
use think\Controller;
use think\Db;
class Login extends Controller
{
    //登陆页面
   public function index(){
       return $this->fetch();
   }

   //登陆操作
   public function sign_in(){
      if($this->request->isPost()){
         $user_login=$this->request->param('user_login');
         $user_pass=$this->request->param('user_pass');
         $verify =$this->request->param('verify');
          $check_r = captcha_check($verify);
          if($check_r == false){
              $this->error('验证码错误');
          }else{
              $info=Db::name('user')->where(array('user_login'=>$user_login,'user_pass'=>md5(Config('MD5_KEY').$user_pass),'user_status' => 1))->find();
              if(empty($info)){
                $this->error('账号或密码错误');
              }else{
                  //更新最近一次登陆时间
                  Db::name('user')->where(array('id'=>$info['id']))->update(array('last_login_time'=>time()));
                  session('id',$info['id']);
                  session('uname',$info['user_login']);
                  $this->success('登录成功','/xyb/index/index','',1);
              }
          }
      }else{
          $this->error('非法请求');
      }
   }
   //退出登录
   public function sign_out(){
     session('id',NULL);
     session('uname',NULL);
     session(null);
     $this->redirect('Login/index');
   }
}