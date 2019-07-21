<?php

namespace app\xyb\controller;

use app\common\Controller\Base;
use think\Db;
//测试
class Test extends Base
{

    //在线测试分类列表
    public function index(){
        $cat_name=$this->request->param('cat_name') ? $this->request->param('cat_name') : '';
        if($cat_name){
         $where['cat_name']=trim($cat_name);
         $pageParam['query']['cat_name']=trim($cat_name);
        }else{
            $pageParam =array();
            $where=array();
        }
        $info=Db::name('test_cat')->where($where)->order('add_time desc')->paginate(10,false,$pageParam);
        $page=$info->render();
        $this->assign('info',$info);
        $this->assign('page',$page);
        $this->assign('cat_name',trim($cat_name));
        return $this->fetch();
    }
    //添加分类
    public function add(){
        return $this->fetch();
    }
    //添加分类提交
    public function add_post(){
       if($this->request->isPost()){
           $tag_id=$this->request->param('tag_id');
           $data['cat_name']=$this->request->param('cat_name');
           $data['add_time']=time();
           $res=Db::name('test_cat')->insert($data);
           if($res){
              $this->success('添加成功',url('test/index',['tag_id'=>$tag_id]));
           }else{
              $this->error('添加失败');
           }
       }
    }
    //删除分类
    public function del(){
        if($this->request->isAjax()){
            $id=$this->request->param('id');
            $res=Db::name('test_cat')->where(array('id'=>$id))->delete();
            if($res){
              return json(array('state'=>1,'info'=>'删除成功'));
            }else{
                return json(array('state'=>-1,'info'=>'删除失败'));
            }
        }
    }
    //编辑分类
    public function edit(){
        $state=$this->request->param('state') ? $this->request->param('state') : 0;
        $id=$this->request->param('id');
        $tag_id=$this->request->param('tag_id');
        $cat_info=Db::name('test_cat')->where(array('id'=>$id))->find();
        $this->assign('state',$state);
        $this->assign('tag_id',$tag_id);
        $this->assign('id',$id);
        $this->assign('cat_info',$cat_info);
        return $this->fetch();
    }
    //编辑提交
    public function edit_post(){
        if($this->request->isPost()){
            $tag_id=$this->request->param('tag_id');
            $id=$this->request->param('id');
            $cat_name=$this->request->param('cat_name');
            $result=Db::name('test_cat')->where(array('id'=>$id))->update(array('cat_name'=>$cat_name));
            if($result){
                $this->redirect('edit',['state'=>1,'tag_id'=>$tag_id]);
            }else{
               $this->error('操作失败');
            }
        }
    }
}