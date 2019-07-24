<?php
namespace app\xyb\controller;

use app\common\Controller\Base;
use think\Db;
class Curriculum extends Base
{
    //课程列表
    public function index(){
        $p_id=$this->request->param('p_id') ? $this->request->param('p_id') : 0;
        $p_next_id=$this->request->param('p_next_id') ? $this->request->param('p_next_id') : 0;
        if($p_id){
            $where['p_id']=$p_id;
        }else{
            $where['p_id']=array('>',0);
        }
        if($p_next_id){
            $where['p_next_id']=$p_next_id;
        }else{
            $where['p_next_id']=array('>',0);
        }
        $info=Db::name('curriculums')->where($where)->order('add_time desc')->paginate(10);
        $page=$info->render();
        $p_list=Db::name('cat_name')->where(array('parent_id'=>0))->order('list_order asc')->select();
        $this->assign('page',$page);
        $this->assign('info',$info);
        $this->assign('p_list',$p_list);
        return $this->fetch();
    }
    //添加课程
    public function add(){
        $cat=Db::name('cat_name')->where(array('parent_id'=>0))->order(["list_order" => "ASC"])->select();
        $this->assign('cat',$cat);
        return $this->fetch();
    }
    //获取二级分类
    public function get_cat(){
      if($this->request->isAjax()){
          $p_id=$this->request->param('p_id');
          $info=Db::name('cat_name')->where(array('parent_id'=>$p_id))->order(["list_order" => "ASC"])->select();
          return json(array('info'=>$info));
      }
    }
    //添加课程
    public function add_post(){
      if($this->request->isPost()){
          $tag_id=$this->request->param('tag_id');
          $data['p_id']=$this->request->param('p_id');
          $data['p_next_id']=$this->request->param('p_next_id');
          $data['curriculum_name']=$this->request->param('curriculum_name');
          $data['curriculum_intro']=$this->request->param('curriculum_intro');
          $data['curriculum_score']=$this->request->param('curriculum_score');
          $data['curriculum_min']=$this->request->param('curriculum_min');
          $data['add_time']=time();
          $data['create_name']=Db::name('user')->where(array('id'=>session('id')))->value('user_login');
          // 获取表单上传文件 例如上传了001.jpg
          $file = request()->file('pic');
          // 移动到框架应用根目录/public/uploads/ 目录下
          $info = $file->validate(['size'=>50*1024,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
          if($info){
              // 成功上传后 获取上传信息
              $data['pic']=$info->getSaveName();
              $res=Db::name('curriculums')->insert($data);
              if($res){
               $this->success('操作成功',url('curriculum/index',['tag_id'=>$tag_id]));
              }else{
                  $this->error('操作失败');
              }
          }else{
              // 上传失败获取错误信息
              $this->error($file->getError());
          }
      }
    }

    //编辑
    public function edit(){
        if($this->request->isGet()){
            $kid=$this->request->param('kid');
            $info=Db::name('Curriculums')->where(array('id'=> $kid))->find();
            $cat=Db::name('cat_name')->where(array('parent_id'=>0))->order(["list_order" => "ASC"])->select();
            $cat_next=Db::name('cat_name')->where(array('parent_id'=>$info['p_id']))->order(["list_order" => "ASC"])->select();
            $this->assign('cat',$cat);
            $this->assign('cat_next',$cat_next);
            $this->assign('kid',$kid);
            $this->assign('info',$info);
            return $this->fetch();
        }
    }
    //编辑提交
    public function edit_post(){
        if($this->request->isPost()){
            $tag_id=$this->request->param('tag_id');
            $kid=$this->request->param('kid');
            $data['p_id']=$this->request->param('p_id');
            $data['p_next_id']=$this->request->param('p_next_id');
            $data['curriculum_name']=$this->request->param('curriculum_name');
            $data['curriculum_intro']=$this->request->param('curriculum_intro');
            $data['curriculum_score']=$this->request->param('curriculum_score');
            $data['curriculum_min']=$this->request->param('curriculum_min');
            // 获取表单上传文件 例如上传了001.jpg
            $file = request()->file('pic');
            if(empty($file)){
                $info=1;
            }else{
                // 移动到框架应用根目录/public/uploads/ 目录下
                $info = $file->validate(['size'=>50*1024,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            }
            if($info){
                // 成功上传后 获取上传信息
                if(!empty($file)) {
                    $data['pic'] = $info->getSaveName();
                    $pic_info=Db::name('curriculums')->where(array('id'=>$kid))->field('pic')->find();
                    //删除原来的图片
                    @unlink('../public/uploads/'.$pic_info['pic']);
                }
                $res=Db::name('curriculums')->where(array('id'=>$kid))->update($data);
                if($res){
                    $this->success('修改成功',url('curriculum/index',['tag_id'=> $tag_id]));
                }else{
                    $this->error('修改失败');
                }
            }else{
                // 上传失败获取错误信息
                $this->error($file->getError());
            }
        }
    }
    //课时管理
    public function ks_manager(){
         $kid=$this->request->param('kid');
         $info=Db::name('course')->where(array('kid'=>$kid))->order('add_time desc')->paginate(10);
         $page=$info->render();
         $this->assign('info',$info);
         $this->assign('kid',$kid);
         $this->assign('page',$page);
         return $this->fetch();
    }
    //添加课时
    public function add_ks(){
        if($this->request->isGet()){
            $kid=$this->request->param('kid');
            $state=$this->request->param('state') ? $this->request->param('state') : 0;
            $this->assign('kid',$kid);
            $this->assign('state',$state);
            return $this->fetch();
        }
    }
    //添加课时提交
    public function add_ks_post(){
        if($this->request->isPost()){
            $tag_id=$this->request->param('tag_id');
            $data['title']=$this->request->param('title');
            $data['content']=htmlspecialchars($this->request->param('content'));
            $data['kid']=$this->request->param('kid');
            $data['add_time']=time();
            $res=Db::name('course')->insert($data);
            if($res){
                 $this->redirect('add_ks',['state'=>1,'tag_id'=>$tag_id]);
            }else{
                $this->error('添加失败');
            }
        }
    }
    //课时编辑
    public function edit_ks(){
        $state=$this->request->param('state') ? $this->request->param('state') : 0;
        if($this->request->isGet()){
            $id=$this->request->param('id');
            $info=Db::name('course')->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->assign('id',$id);
            $this->assign('state',$state);
            $this->assign('content',htmlspecialchars_decode($info['content']));
            return $this->fetch();
        }
    }
    //课时编辑提交
    public function edit_ks_post(){
        if($this->request->isPost()){
            $tag_id=$this->request->param('tag_id');
            $data['title']=$this->request->param('title');
            $data['content']=htmlspecialchars($this->request->param('content'));
            $id=$this->request->param('id');
            $res=Db::name('course')->where(array('id'=>$id))->update($data);
            if($res){
                $this->redirect('edit_ks',['state'=>1,'tag_id'=>$tag_id]);
            }else{
                $this->error('编辑失败');
            }
        }
    }
    //删除课时
    public function del_ks(){
      if($this->request->isAjax()){
          $id=$this->request->param('id');
          $res=Db::name('course')->where(array('id'=>$id))->delete();
          if($res){
             return json(array('state'=>1,'info'=>'删除成功'));
          }else{
             return json(array('state'=>-1,'info'=>'删除失败'));
          }
      }
    }
    //课程列表删除
    public function delete_info(){
       if($this->request->isAjax()){
           $id=$this->request->param('id');
           $res=Db::name('curriculums')->where(array('id'=>$id))->delete();
           if($res){
               $result=Db::name('course')->where(array('kid'=>$id))->select();
               if(!empty($result)){
                   $result=Db::name('course')->where(array('kid'=>$id))->delete();
               }
               return json(array('state'=>1,'info'=>'删除成功'));
           }else{
               return json(array('state'=>-1,'info'=>'删除失败'));
           }
       }
    }
}