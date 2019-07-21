<?php
namespace app\xyb\controller;
use app\common\Controller\Base;
use think\Db;
class Question extends Base
{

    //试题列表
    public function index(){
      $cat_list=Db::name('test_cat')->select();
      $cat_id=$this->request->param('cat_id') ? $this->request->param('cat_id') : 0;
      if($cat_id){
       $where['cat_id']=$cat_id;
       $PageParam['query']['cat_id']=$cat_id;
      }else{
       $where['cat_id']=array('>',0);
       $PageParam=array();
      }
      $info=Db::name('questions')->where($where)->paginate(10,false,$PageParam);
      $arr=array();
      foreach($info as $i){
          $i['answer_list']=Db::name('answers')->where(array('q_id'=>$i['id']))->select();
          $arr[]=$i;
          unset($i);
      }
      $page=$info->render();
      $this->assign('page',$page);
      $this->assign('arr',$arr);
      $this->assign('cat_list',$cat_list);
      $this->assign('cat_id',$cat_id);
      return $this->fetch();
    }
    //添加试题
    public function add(){
        $info=Db::name('test_cat')->select();
        $this->assign('info',$info);
        return $this->fetch();
    }
    //添加试题提交
    public function add_post(){
     if($this->request->isAjax()){
        $data1['cat_id']=$this->request->param('cat_id');
        $data1['title']=$this->request->param('title');
        $new_id=Db::name('questions')->insertGetId($data1);
        $data2=array();
        $arr=array();
        for($i=0;$i<$_POST['items_num'];$i++){
            $data2['q_id']=$new_id;
            $data2['answer']=$_POST['item'.$i];
            if('item'.$i==$_POST['selectradio']){
                $data2['is_answer']=1;
            }else{
                $data2['is_answer']=0;
            }
            $arr[]=$data2;
        }
         $res=Db::name('answers')->insertAll($arr);
        if($res){
            return json(array('state'=>1,'info'=>'操作成功'));
        }else{
            return json(array('state'=>-1,'info'=>'操作失败'));
        }
     }
    }
    //删除试题
    public function del(){
      if($this->request->isAjax()){
          $id=$this->request->param('id');
          $result=Db::name('questions')->where(array('id'=>$id))->delete();
          if($result){
              $info=Db::name('answers')->where(array('q_id'=>$id))->select();
              if(!empty($info)){
                  Db::name('answers')->where(array('q_id'=>$id))->delete();
              }
              return json(array('state'=>1,'info'=>'操作成功'));
          }else{
              return json(array('state'=>-1,'info'=>'操作失败'));
          }
      }
    }
    //编辑试题
    public function edit(){
      $info=Db::name('test_cat')->select();
      $id=$this->request->param('id');
      $res=Db::name('questions')->where(array('id'=>$id))->find();
      $result=Db::name('answers')->where(array('q_id'=>$id))->select();
      $this->assign('info',$info);
      $this->assign('res',$res);
      $this->assign('result',$result);
      $this->assign('id',$id);
      return $this->fetch();
    }
    //编辑试题提交
    public function edit_post(){

      /*cat_id: 3
title: 测试1
item0: 第三方第四方
item1: 新东方但是
selectradio: item2
item2: 蓄电池的vdsf
item3: 得到的
items_num: 4
id: 2
ner: item0=4&item1=5&item2=6&item3=undefined&*/
        if($this->request->isAjax()){
            $id=$this->request->param('id');
            $data1['cat_id']=$this->request->param('cat_id');
            $data1['title']=$this->request->param('title');
            $new_id=Db::name('questions')->where(array('id'=>$id))->update($data1);
            $data2=array();
            $arrs=array();
            $ner=rtrim($_POST['ner'],'&');
            $arr=$this->str2arr($ner);
            foreach($arr as $k=>$v){
                if($v==='undefined'){
                    $data2['q_id']=$id;
                    $data2['answer']=$_POST[$k];
                    if($k==$_POST['selectradio']){
                        $data2['is_answer']=1;
                    }else{
                        $data2['is_answer']=0;
                    }
                    $arrs[]=$data2;
                }else{
                    if($k==$_POST['selectradio']) {
                        $res= Db::name('answers')->where(array('id' => $v))->update(array('answer' => $_POST[$k],'is_answer'=>1));
                    }else{
                        $res= Db::name('answers')->where(array('id' => $v))->update(array('answer' => $_POST[$k],'is_answer'=>0));

                    }
                }
            }
            if(!empty($arrs)){
                $res=Db::name('answers')->insertAll($arrs);
            }
            if( $new_id || $res ){
                return json(array('state'=>1,'info'=>'操作成功'));
            }else{
                return json(array('state'=>-1,'info'=>'操作失败'));
            }
        }
    }

    /**
     * @param $str
     * @param string $sp
     * @param string $kv
     * @return mixed
     * 字符串转换成数组键值
     */
    public function str2arr ($str,$sp="&",$kv="="){
        $arr = str_replace(array($kv,$sp),array('"=>"','","'),'array("'.$str.'")');
         eval("\$arr"." = $arr;");
        return $arr;
     }
}