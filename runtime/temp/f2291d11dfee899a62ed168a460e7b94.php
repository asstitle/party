<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\PHPTutorial\WWW\xx\public/../application/xyb\view\test\edit.html";i:1563691750;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static//xyb/css/bootstrap.css"/>
</head>
<body>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <form method="post" action='<?php echo url("Test/edit_post",["tag_id"=>$tag_id]); ?>' class="form-horizontal" onsubmit="return check()">
                        <div style="margin-top: 10px;">
                        </div>
                        <div class="form-group has-error">
                            <label class="col-sm-2 control-label">分类名称：</label>
                            <div class="col-sm-2">
                                <input  type="text"  class="form-control name" name="cat_name" value="<?php echo $cat_info['cat_name']; ?>"/>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="form-group">
                            <div class="col-sm-2 col-sm-offset-2">
                                <button class="btn btn-primary"  type="submit" id="save">更新</button>&nbsp;&nbsp;
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<script src="/static//xyb/js/jquery-1.9.1.min.js"></script>
<script src="/static//xyb/layer/layer.js"></script>
<script type="application/javascript">
    var state='<?php echo $state; ?>';
    var index = parent.layer.getFrameIndex(window.name);
    if(state==1){
        layer.msg('操作成功', {
            icon: 1,
            time: 3000 //2秒关闭（如果不配置，默认是3秒）
        }, function(){
            parent.layer.close(index);
        });
        setTimeout(function(){
            parent.location.reload();
        },1000);
    }
    function check(){
        var cat_name=$("input[name=cat_name]").val();
        if(cat_name==''){
            layer.msg('请填写分类名称', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        $("#save").attr('disabled',true);
    }
</script>