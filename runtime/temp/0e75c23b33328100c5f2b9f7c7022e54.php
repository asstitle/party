<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:72:"D:\PHPTutorial\WWW\xx\public/../application/xyb\view\curriculum\add.html";i:1563692608;s:59:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\head.html";i:1563603505;s:61:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\header.html";i:1563603560;s:62:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\sidebar.html";i:1563693627;s:66:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\breadcrumbs.html";i:1563610337;s:58:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\set.html";i:1562840357;s:61:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\footer.html";i:1562840357;s:63:"D:\PHPTutorial\WWW\xx\application\xyb\view\Public\footerjs.html";i:1562897379;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>智慧党建平台</title>

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>


    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/static//xyb/css/bootstrap.css"/>
    <link rel="stylesheet" href="/static//xyb/css/font-awesome.css"/>
    <link rel="stylesheet" href="/static//xyb/css/jquery-ui.css"/>
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/static//xyb/css/ace-fonts.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="/static//xyb/css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static//xyb/css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/static//xyb/css/ace-ie.css"/>


    <![endif]-->

    <!-- inline styles related to this page -->
    <link rel="stylesheet" href="/static//xyb/css/common.css"/>
    <!-- ace settings handler -->
    <script src="/static//xyb/js/ace-extra.js"></script>
    <script src="/static//xyb/js/jquery-1.9.1.min.js"></script>
    <script src="/static//xyb/layer/layer.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/static//xyb/js/html5shiv.js"></script>
    <script src="/static//xyb/js/respond.js"></script>
    <![endif]-->
</head>
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/",
        WEB_ROOT: "/",
        JS_ROOT: "/static//xyb/js/",
        APP: 'xyb'/*当前应用名*/
    };
</script>
<body class="no-skin">
 <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="navbar-container" id="navbar-container">
            <!-- #section:basics/sidebar.mobile.toggle -->
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <!-- /section:basics/sidebar.mobile.toggle -->
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="{:Url('index/index')}" class="navbar-brand">
                    <small>
                        <i class="fa fa-leaf"></i>
                        智慧党建平台
                    </small>
                </a>

                <!-- /section:basics/navbar.layout.brand -->

                <!-- #section:basics/navbar.toggle -->

                <!-- /section:basics/navbar.toggle -->
            </div>

            <!-- #section:basics/navbar.dropdown -->
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">

                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="/static/xyb/img/user.jpg" alt="Jason's Photo" />
                            <span class="user-info">
									<small>Welcome,</small>
									<?php echo \think\Session::get('uname'); ?>
								</span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    设置
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    个人资料
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo url('login/sign_out'); ?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container --><!-- /.navbar-container -->
    </div>

    <!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
        <!-- #section:basics/sidebar -->
    <div class="bg_div"></div>
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li <?php if($tag_id == 1): ?> class='active' <?php endif; ?> >
                <a href="<?php echo url('index/index',['tag_id'=>1]); ?>">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> 控制台 </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								课程分类管理
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu" <?php if(in_array(($tag_id), explode(',',"2"))): ?>style="display:block"<?php endif; ?>>
                    <li <?php if($tag_id == 2): ?>class='active' <?php endif; ?>>
                        <a href="<?php echo url('course/index',['tag_id'=>2]); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                           分类列表
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> 课程管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu" <?php if(in_array(($tag_id), explode(',',"3"))): ?>style="display:block"<?php endif; ?>>
                    <li <?php if($tag_id == 3): ?>class='active' <?php endif; ?>>
                        <a href="<?php echo url('Curriculum/index',['tag_id'=>3]); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            课程列表
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> 在线测试分类管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu" <?php if(in_array(($tag_id), explode(',',"4"))): ?>style="display:block"<?php endif; ?>>
                    <li <?php if($tag_id == 4): ?>class='active' <?php endif; ?>>
                        <a href="<?php echo url('Test/index',['tag_id'=>4]); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            分类列表
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text">题库管理</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu" <?php if(in_array(($tag_id), explode(',',"5"))): ?>style="display:block"<?php endif; ?>>
                    <li <?php if($tag_id == 5): ?>class='active' <?php endif; ?>>
                        <a href="<?php echo url('Question/index',['tag_id'=>5]); ?>">
                            <i class="menu-icon fa fa-caret-right"></i>
                            题目列表
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-tag"></i>
                    <span class="menu-text"> 招聘管理 </span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="profile.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                          在招职位
                        </a>

                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="profile.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                            关闭职位
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-file-o"></i>

                    <span class="menu-text">
								资料管理
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="faq.html">
                            <i class="menu-icon fa fa-caret-right"></i>
                           资料审核
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>


        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }
        </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
            <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{:Url('index/index')}">首页</a>
            </li>
            <li class="active">智慧党建</li>
        </ul><!-- /.breadcrumb -->
    </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">

                
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <!-- #section:settings.skins -->
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl"> 切换至左边</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        切换宽窄度
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                    <label class="lbl" for="ace-settings-hover"> 子菜单收起</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                    <label class="lbl" for="ace-settings-compact"> 侧边栏紧凑</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                    <label class="lbl" for="ace-settings-highlight"> 当前位置</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->

                <!-- /section:settings.box -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li><a href="<?php echo url('curriculum/index',['tag_id'=>$tag_id]); ?>">课程列表</a></li>
                                        <li class="active"><a>新建课程</a></li>
                                    </ul>
                                    <div style="margin-top: 20px;"></div>
                                    <form class="form-horizontal margin-top-20" action="<?php echo url('Curriculum/add_post'); ?>" method="post" onsubmit="return check()" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>课程分类</label>
                                            <div class="col-md-6 col-sm-10">
                                                <select name="p_id" id="p_id">
                                                    <option value="0">请选择大类</option>
                                                    <<?php if(is_array($cat) || $cat instanceof \think\Collection || $cat instanceof \think\Paginator): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>>
                                                      <option value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
                                                    <<?php endforeach; endif; else: echo "" ;endif; ?>>
                                                </select>
                                                <select name="p_next_id" id="p_next_id">
                                                    <option>请选择二级分类</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>课程名称</label>
                                            <div class="col-md-6 col-sm-10">
                                                <input type="text" class="form-control" id="input-name" name="curriculum_name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>课程简介</label>
                                            <div class="col-md-6 col-sm-10">
                                                <textarea type="text" class="form-control" id="input-name" name="curriculum_intro" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>课程分数</label>
                                            <div class="col-md-6 col-sm-10">
                                                <input type="text" class="form-control" id="input-name" name="curriculum_score">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>课程学习时间(分钟)</label>
                                            <div class="col-md-6 col-sm-10">
                                                <input type="text" class="form-control" id="input-name" name="curriculum_min">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-name" class="col-sm-2 control-label"><span style="color: red">*</span>图片简介</label>
                                            <div class="col-md-6 col-sm-10">
                                                <img src="" style="width: 200px; height: 200px;" id="imgs"/>
                                                <input type="file" name="pic" class="form-control" style="border: none" id="pic"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn-add">添加</button>
                                                <button type="submit" class="btn-add">取消</button>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- /.tab-content -->
                                </div><!-- /.tabbable -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

        <div class="footer">
        <div class="footer-inner">
            <!-- #section:basics/footer -->

            <!-- /section:basics/footer -->
        </div>
    </div>

</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/static//xyb/js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/static//xyb/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/static//xyb/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="/static//xyb/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->
<script src="/static//xyb/js/bootbox.js"></script>
<!-- ace scripts -->
<script src="/static//xyb/js/ace/elements.scroller.js"></script>
<script src="/static//xyb/js/ace/elements.colorpicker.js"></script>
<script src="/static//xyb/js/ace/elements.fileinput.js"></script>
<script src="/static//xyb/js/ace/elements.typeahead.js"></script>
<script src="/static//xyb/js/ace/elements.wysiwyg.js"></script>
<script src="/static//xyb/js/ace/elements.spinner.js"></script>
<script src="/static//xyb/js/ace/elements.treeview.js"></script>
<script src="/static//xyb/js/ace/elements.wizard.js"></script>
<script src="/static//xyb/js/ace/elements.aside.js"></script>
<script src="/static//xyb/js/ace/ace.js"></script>
<script src="/static//xyb/js/ace/ace.ajax-content.js"></script>
<script src="/static//xyb/js/ace/ace.touch-drag.js"></script>
<script src="/static//xyb/js/ace/ace.sidebar.js"></script>
<script src="/static//xyb/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="/static//xyb/js/ace/ace.submenu-hover.js"></script>
<script src="/static//xyb/js/ace/ace.widget-box.js"></script>
<script src="/static//xyb/js/ace/ace.settings.js"></script>
<script src="/static//xyb/js/ace/ace.settings-rtl.js"></script>
<script src="/static//xyb/js/ace/ace.settings-skin.js"></script>
<script src="/static//xyb/js/ace/ace.widget-on-reload.js"></script>
<script src="/static//xyb/js/ace/ace.searchbox-autocomplete.js"></script>
<script src="/static//xyb/js/jquery-ui.js"></script>
<!-- inline scripts related to this page -->
</body>
</html>
<script type="application/javascript">
    function check(){
        var p_id=$("#p_id").val();
        var p_next_id=$("#p_next_id").val();
        var curriculum_name=$("input[name=curriculum_name]").val();
        var curriculum_intro=$("input[name=curriculum_intro]").val();
        var curriculum_score=$("input[name=curriculum_score]").val();
        var curriculum_min=$("input[name=curriculum_min]").val();
        var pic=$("#pic").val();
        if(p_id==0){
            layer.msg('请选择大类', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(p_next_id==0){
            layer.msg('请选择二级分类', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(curriculum_name==''){
            layer.msg('请填写课程名称', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(curriculum_intro==''){
            layer.msg('请填写课程简介', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(curriculum_score==''){
            layer.msg('请填写课程分数', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(curriculum_min==''){
            layer.msg('请填写课程分钟数', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        if(pic==''){
            layer.msg('请选择图片', {
                icon: 0,
                time: 2000 ,//2秒关闭（如果不配置，默认是3秒）
                anim: 6
            });
            return false;
        }
        $('.btn-add').attr('disabled',true);
    }
    //获取图片路劲的方法，兼容多种浏览器，通过createObjectURL实现
    function getObjectURL(file){
        var url = null;
        if(window.createObjectURL != undefined){
            url = window.createObjectURL(file);//basic
        }else if(window.URL != undefined){
            url = window.URL.createObjectURL(file);
        }else if(window.webkitURL != undefined){
            url = window.webkitURL.createObjectURL(file);
        }

        return url;
    }

    //实现功能代码
        $("input[type=file]").change(function(){
            var path = $("input[type=file]").value;
            var objUrl = getObjectURL(this.files[0]);
            if(objUrl){
                $('#imgs').attr("src",objUrl);
            }
        })
    //切换分类
    $("#p_id").change(function(){
        var p_id=$("#p_id").val();
        if(p_id>0){
            var p_next_id=$("#p_next_id").empty();
            var str='';
            $.post('/xyb/curriculum/get_cat',{p_id:p_id},function(data){
               if(data){
                   for(var i=0;i<data.info.length;i++){
                       str+="<option value='"+data.info[i].id+"'>'"+data.info[i].name+"'</option>";
                   }
                   $("#p_next_id").append(str);
               }
            })
        }else{
            $("#p_next_id").empty();
            $("#p_next_id").append('<option value="0">请选择二级分类</option>');
        }
    })
</script>