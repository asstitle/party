<?php

namespace app\home\controller;

use think\Controller;
use think\Db;
class Index extends Controller
{
    //首页
   public function index(){
       $res=Db::name('cat_name')->where(array('parent_id'=>0))->select();
       $arr=[];
       //分类
       foreach($res as $v){
           $v['children']=Db::name('cat_name')->where(array('parent_id'=>$v['id']))->select();
           $v['lists']=Db::name('curriculums')->where(array('p_id'=>$v['id']))->order('add_time desc')->field('id,pic,study_num,browse_num,curriculum_name')->select();
           $arr[]=$v;
           unset($v);
       }
       //分类展示
       $this->assign('arr',$arr);
       return $this->fetch();
   }
   //列表页
   public function lists(){
     $parent_id=$this->request->param('parent_id') ? $this->request->param('parent_id') : 0;
     $id=$this->request->param('id') ? $this->request->param('id') : 0;
     $order_num=$this->request->param('order_num') ? $this->request->param('order_num') : 1;//排序字段
     $default_order=$this->request->param('default_order') ? $this->request->param('default_order') : 1;//1倒序,0正序
     $res=Db::name('cat_name')->where(array('parent_id'=>0))->select();
     if($default_order==1){
         $order='DESC';
         $order_name='倒序';
         $contrary_order=2;
     }else{
         $order='ASC';
         $order_name='正序';
         $contrary_order=1;
     }
     switch($order_num){
         case 1://发布时间
              $orders['add_time']=$order;
             break;
         case 2://热度
             $orders['hot']=$order;
             break;
         case 3://推荐
             $orders['recommend']=$order;
             break;
     }

     if($parent_id==0){
         $parent_name=Db::name('cat_name')->where(array('id'=>$id))->value('name');
         $next_name='全部';
         $list=Db::name('cat_name')->where(array('parent_id'=>$id))->select();
         $where['p_id']=$id;
         $pagaParam['query']['p_id']=$id;
         $pagaParam['query']['parent_id']=0;
     }else{
         $parent_name=Db::name('cat_name')->where(array('id'=>$parent_id))->value('name');
         $next_name=Db::name('cat_name')->where(array('id'=>$id))->value('name');
         $list=Db::name('cat_name')->where(array('parent_id'=>$parent_id))->select();
         $where['p_id']=$parent_id;
         $where['p_next_id']=$id;
         $pagaParam['query']['p_id']=$parent_id;
         $pagaParam['query']['p_next_id']=$id;
     }

     $info=Db::name('curriculums')->where($where)->order($orders)
         ->paginate(10,false,$pagaParam);
     $count=Db::name('curriculums')->where($where)->order($orders)
           ->count();
     $page=$info->render();
     $this->assign('res',$res);
     $this->assign('parent_name',$parent_name);
     $this->assign('next_name',$next_name);
     $this->assign('res',$res);
     $this->assign('parent_id',$parent_id);
     $this->assign('id',$id);
     $this->assign('list',$list);
     $this->assign('page',$page);
     $this->assign('info',$info);
     $this->assign('order_num',$order_num);
     $this->assign('default_order',$default_order);
     $this->assign('order_name',$order_name);
     $this->assign('count',$count);
     $this->assign('contrary_order',$contrary_order);
     return $this->fetch();
   }
   //详情页
   public function details(){
       $id=$this->request->param('id');
       //查询该课程信息
       $info=Db::name('curriculums')->where(array('id'=>$id))->field('pic,p_id,p_next_id,curriculum_name,study_num')->find();
       $now_name=Db::name('cat_name')->where(array('id'=>$info['p_next_id']))->value('name');
       //查询该课程下的课时信息
       $course_list=Db::name('course')->where(array('kid'=>$id))->select();
       $this->assign('now_name',$now_name);
       $this->assign('info',$info);
       $this->assign('course_list',$course_list);
       return $this->fetch();
   }
}