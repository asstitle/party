<?php

namespace app\xyb\controller;
use app\common\Controller\Base;
use think\Db;
use tree\Tree;
class Course extends Base
{
    //分类列表
    public function index(){
        $tag_id=$this->request->param('tag_id') ? $this->request->param('tag_id') : 0;
        $result     = Db::name('cat_name')->order(["list_order" => "ASC"])->select();
        $tree       = new Tree();
        $tree->icon = ['&nbsp;&nbsp;&nbsp;│ ', '&nbsp;&nbsp;&nbsp;├─ ', '&nbsp;&nbsp;&nbsp;└─ '];
        $tree->nbsp = '&nbsp;&nbsp;&nbsp;';
        $newMenus = [];
        foreach ($result as $m) {
            $newMenus[$m['id']] = $m;
        }
        foreach ($result as $key => $value) {
            $result[$key]['parent_id_node'] = ($value['parent_id']) ? ' class="child-of-node-' . $value['parent_id'] . '"' : '';
            $result[$key]['style']          = empty($value['parent_id']) ? '' : 'display:none;';
            $result[$key]['str_manage']     = '<a href="' . url("Course/add", ["parent_id" => $value['id'], "tag_id" => $tag_id])
                . '"> 添加子分类</a> | <a href="' . url("Course/edit", ["id" => $value['id'], "tag_id" => $tag_id])
                . '">编辑</a>  | <a id="ajax-delete-info" onclick="del('.$value['id'].')">删除</a> ';
        }
        $tree->init($result);
        $str      = "<tr id='node-\$id' \$parent_id_node style='\$style'>
                        <td style='padding-left:20px;'><input name='list_orders[\$id]' type='text' size='3' value='\$list_order' class='input input-order'></td>
                        <td>\$id</td>
                        <td>\$spacer\$name</td>
                        <td>\$str_manage</td>
                    </tr>";
        $category = $tree->getTree(0, $str);
        $this->assign("category", $category);
        return $this->fetch();
    }
     //添加课程分类
     public function add(){
         $tree     = new Tree();
         $parentId = $this->request->param("parent_id", 0, 'intval');
         $result   = Db::name('cat_name')->order(["list_order" => "ASC"])->select();
         $array    = [];
         foreach ($result as $r) {
             $r['selected'] = $r['id'] == $parentId ? 'selected' : '';
             $array[]       = $r;
         }
         $str = "<option value='\$id' \$selected>\$spacer \$name</option>";
         $tree->init($array);
         $selectCategory = $tree->getTree(0, $str);
         $this->assign("select_category", $selectCategory);
         return $this->fetch();
     }

     //添加提交
     public function add_post(){
        if($this->request->isPost()){
            $data['parent_id']=$this->request->param('parent_id',0,'intval');
            $tag_id=$this->request->param('tag_id');
            $data['name']=$this->request->param('cat_name');
            $result=Db::name('cat_name')->insert($data);
            if($result){
                $this->success('添加成功',url('course/index',['tag_id'=>$tag_id]));
            }else{
                $this->error('添加失败');
            }
        }
     }
     //编辑
     public function edit(){
         $tree     = new Tree();
         $id = $this->request->param("id", 0, 'intval');
         $result   = Db::name('cat_name')->order(["list_order" => "ASC"])->select();
         $array    = [];
         $info=Db::name('cat_name')->where(array('id'=>$id))->find();
         foreach ($result as $r) {
             $r['selected'] = $r['id'] == $info['parent_id'] ? 'selected' : '';
             $array[]       = $r;
         }
         $str = "<option value='\$id' \$selected>\$spacer \$name</option>";
         $tree->init($array);
         $selectCategory = $tree->getTree(0, $str);
         $this->assign("select_category", $selectCategory);
         $this->assign("info", $info);
         $this->assign("id", $id);
         return $this->fetch();
     }
     //删除
     public function delete(){
         if($this->request->isAjax()){
             $id=$this->request->param('id');
             $res=Db::name('cat_name')->where(array('parent_id'=>$id))->select();
             if(!empty($res)){
                 $data=Db::name('cat_name')->where(array('id'=>$id))->delete();
                 $datas=Db::name('cat_name')->where(array('parent_id'=>$id))->delete();
             }else{
                 $data=Db::name('cat_name')->where(array('id'=>$id))->delete();
             }
             if($data||$datas){
                 return json(array('state'=>1,'info'=>'删除成功'));
             }else{
                 return json(array('state'=>-1,'info'=>'删除失败'));
             }
         }
     }
     //编辑提交
     public function edit_post(){
        if($this->request->isPost()){
            $id=$this->request->param('id');
            $data['parent_id']=$this->request->param('parent_id',0,'intval');
            $tag_id=$this->request->param('tag_id');
            $data['name']=$this->request->param('cat_name');
            $result=Db::name('cat_name')->where(array('id'=>$id))->update($data);
            if($result){
                $this->success('修改成功',url('course/index',['tag_id'=>$tag_id]));
            }else{
                $this->error('修改失败');
            }
        }
     }
}