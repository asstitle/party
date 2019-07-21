<?php
//控制器基类
namespace app\common\Controller;
use think\Controller;
use app\xyb\model\AdminMenu as adminMenuModel;
class Base extends Controller
{
    //验证是否登录,未登录跳转到登陆页
    public function __construct(){
        parent::__construct();
        $session_admin_id = session('id');
        $tag_id=$this->request->param('tag_id') ? $this->request->param('tag_id') : 1;
        $this->assign('tag_id',$tag_id);
        if (empty($session_admin_id)) {
            $this->redirect('Login/index');
        }
    }
}