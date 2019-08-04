<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\PHPTutorial\WWW\xx\public/../application/home\view\index\lists.html";i:1563979038;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\header.html";i:1563979038;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\footer.html";i:1563979038;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="智慧党建,党员教育，在线考核" />
    <meta name="description" content="智慧党建平台" />
    <title>先进基层党组织-智慧党建平台-党员教育</title>
    <link rel="stylesheet" href="/static/home/Css/bootstrap.min.css" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Css/bootstrap.min.css" />
    <link rel="stylesheet" href="/static/home/Css/ws-list.css" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Css/ws-list.css" />
    <link rel="stylesheet" href="/static/home/Css/header.css" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Css/header.css" />
    <script type="text/javascript" src="/static/home/Js/jquery-1.8.2.min.js" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/static/home/Js/bootstrap.min.js" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/static/home/Wsadmin/Css/font-awesome.min.css" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Wsadmin/Css/font-awesome.min.css" />
</head>

<body>
<!-- title -->
<!-- <script type="text/javascript" src="/Public/Js/jquery-1.8.2.min.js"></script> -->
<script>
    $(function(){
        $('#s').click(function(){                         //搜索框变大
            $('.head_si').animate({width:"12%"},300);
        });
        $('#s').blur(function(){
            $('.head_si').animate({width:"6%"},300);
        });


        var h = $('.list_one li').height();             //手机  登陆 、个人中心
        $('.list_one li').css({"line-height":"h"});

        var winWidth = $(window).width();
        if(winWidth > 768) {
            $('.user').mouseover(function(){
                user = $('#user_hide').val();
                if(user == 0){$('.phone_log').show();}
                else{$('.phone_order').show();}
            })
            $('.user').mouseleave(function(){
                $('.phone_log').hide();
                $('.phone_order').hide();
            })
        }
        else {
            $('.user').click(function(){
                user = $('#user_hide').val();
                if(user == 0){$('.phone_log').show();}
                else{$('.phone_order').show();}
                $('#all_log').show();
            })
            $('#all_log').click(function(){
                $('.phone_log').hide();
                $('.phone_order').hide();
                $('#all_log').hide();
            })
        }


        $('.glyphicon-align-justify').click(function(){  //手机  首页 在现测试等
            $('#left').show();
            $('#all').show();
            $('#all').css({overflow:'hidden'});
            $("body").bind("touchmove",function(event){event.preventDefault();});

        })
        $('#all').click(function(){
            $('#left').hide();
            $('#all').hide();
            $('.top').css({left:'0%'});
            $('.banner').css({left:'0%'});
            $('.phone_top').css({left:'5%'});
            $('.phone_ban').css({left:'5%'});
            $('.sec').css({left:'0%'});
            $('.footer').css({left:'0%'});
            $("body").unbind('touchmove');
        })
        $('.myorder li').mouseover(function(){      //个人中心
            var i = $(this).index();
            $('.myorder li').eq(i).css({backgroundColor:'#d80311'}).siblings('.myorder li').css({backgroundColor:'#fff'});
            $('.myorder a').eq(i).css({color:'#f6f5f5'}).siblings('.myorder a').css({color:'#666'});
        })
        $('.myorder li').mouseleave(function(){
            var i = $(this).index();
            $('.myorder li').eq(i).css({backgroundColor:'#fff',color:'#666'});
            $('.myorder a').eq(i).css({color:'#666'});
        });

        function hideList() {
            $('.myorder').hide();
            clearInterval(window.hide_list);
        }
        $('.log_tou').mouseover(function(){
            if(typeof window.hide_list != 'undefined') clearInterval(window.hide_list);
            $('.myorder').show();
        });
        $('.log_tou').mouseleave(function(){ window.hide_list = setInterval(hideList, 100); });
        $('.myorder').mouseover(function(){
            if(typeof window.hide_list != 'undefined') clearInterval(window.hide_list);
            $(this).show();
        });
        $('.myorder').mouseleave(function(){ window.hide_list = setInterval(hideList, 100); });

        $('.mymess li').mouseover(function(){      //私信
            var i = $(this).index();
            $('.mymess li').eq(i).css({backgroundColor:'#d80311'}).siblings('.mymess li').css({backgroundColor:'#fff'});
            $('.mymess a').eq(i).css({color:'#f6f5f5'}).siblings('.mymess a').css({color:'#666'});
        })
        $('.mymess li').mouseleave(function(){
            var i = $(this).index();
            $('.mymess li').eq(i).css({backgroundColor:'#fff',color:'#666'});
            $('.mymess a').eq(i).css({color:'#666'});
        })
        $('.logins li').eq(0).mouseover(function(){$('.mymess').show();});
        $('.logins li').eq(0).mouseleave(function(){$('.mymess').hide();});
        $('.mymess').mouseover(function(){$(this).show();});
        $('.mymess').mouseleave(function(){$(this).hide();});
        // setInterval(hideList, 100);

        /*$('.test').click(function(){                          //在线测试  跳转页面
            var user = $('#user_hide').val();
            if(user == 0){location.href="../Deng/xuedeng.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng*/;}
    else{location.href="../Index/index.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index*/;}
    })*/
    function logout() {
        location.href = "emptys.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html*/;
    }

    })
</script>

<div id="left">
    <form>
        <input name="" type="text" placeholder="搜索" class="phone-title" style="outline: none;" />
        <i class="glyphicon glyphicon-search phone-search"></i>
    </form>
    <ul>
        <li><a href="<?php echo url('index/index'); ?>" >首页</a></li>
        <li><a href="../Study/study.html"  target="_blank">党员学习情况</a>
        </li>
        <li class="test"><a href="<?php echo url('test/index'); ?>" >在线测试</a></li>
        <li data-toggle="modal" data-target="#myModal">意见反馈</li>
    </ul>
</div>
<div id="all"></div>
<div id="all_log"></div>
<div class="top">                             <!--顶部开始-->
    <div class="glyphicon glyphicon-align-justify"></div>
<div class="head_yi">智慧党建平台-党员教育</div>
<div class="head_er"><a href="<?php echo url('index/index'); ?>" >首页</a></div>
<div class="head_san test"><a href="<?php echo url('test/index'); ?>" target="_blank">在线测试</a>
</div>
<div class="head_sans test">
    <a href="<?php echo url('study/study'); ?>"  target="_blank">党员学习情况</a>
</div>
<div class="glyphicon glyphicon-user user"></div>
<!-- 网页登陆-->
<div class="deng"><a href="<?php echo url('login/login'); ?>"  style="display: block;">登录</a></div>
<div class="head_si">
    <input type="text" class="get-search" placeholder="搜索" name="s" id="s" style="outline: none;">
    <span class="glyphicon glyphicon-search search-icon"></span>
</div>
<div style="clear:both;"></div>
<ul class="phone_log">                <!--   手机  下拉菜单-->
    <li><a href="<?php echo url('login/login'); ?>" >登录</a></li>
</ul>
<ul class="phone_order" style="border:1px solid #e7e7e7;">
    <li style="text-align:center;">0</li>
    <li><a href="indexphp/Home/Tec/tec.html"  style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
    <li><a href="indexphp/Home/Hanyu/infor.html"  style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
    <li><a href="indexphp/Home/Hanyu/chuang.html"  style="display: block;"><span class="glyphicon glyphicon-book"></span>&nbsp;我的学习</a></li>
    <li><a href="indexphp/Home/Comment/notice.html"  style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
    <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
    <li><a href="indexphp/Home/Hanyu/emptys.html"  style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
</ul>
<form action="" method="get"><input name="" type="hidden" value="0" id="user_hide"/></form>
</div>	                                <!--顶部的结束-->
<div class="myorder" style="border:1px solid #e7e7e7;">                   <!--   网页  下拉菜单-->
    <div class="log_user">0</div>
    <ul>
        <li><a href="../Tec/tec.html"  style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="infor.html"  style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="emptys.html"  style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
</div>
<div class="mymess" style="border:1px solid #e7e7e7;height: 40px;"	>
    <ul>
        <li style="height: 100%;"><a href="../Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
    </ul>
</div>

<script>
    //搜索
    $(".search-icon").click(function() {
        var title = $(".get-search").val();
        location.href="lists.html-title=.htm" + title;
    });
    $(".get-search").keydown(function(e){
        if(e.keyCode == 13) {
            var title = $(this).val();
            location.href="lists.html-title=.htm" + title;
        }

    });
    $(".phone-search").click(function() {
        var title = $(".phone-title").val();
        location.href="lists.html-title=.htm" + title;
    });

</script>


<!-- category -->
<div id="category-box" class="container">
    <input type="hidden" id="ct" value="Array" />
    <input type="hidden" id="cl" value="Array" />

    <!-- get信息 -->
    <input type="hidden" id="tid" value="22" />
    <input type="hidden" id="label" value="" />
    <input type="hidden" id="ordertype" value="<?php echo $order_num; ?>" />
    <input type="hidden" id="desc" value="desc" />
    <!-- /end -->
    <div class="row">
        <div class="category-checked checkedone"><?php echo $parent_name; ?><img src="/static/home/Images/xiala.png"  alt="" class="zyjt nselected" />
            <!-- navBox Start -->
            <div class="type-box container">
                <div class="row" style="margin-top: 12px;">
                    <div class="cdb-left col-md-1 col-xs-2">分类：</div>
                    <div id="cdb-right" class="col-md-10 col-xs-10">
                        <div class="row">
                            <div class="types"><a  href="lists.html-tid=&ordertype=create_time&order=desc.htm" >全部</a></div>
                            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?>
                            <div class="types"><a  href="lists.html-tid=17&ordertype=create_time&order=desc.htm"  <?php if($r['id'] == $parent_id): ?> class="first-a" <?php else: ?> class="last-a hover-red" <?php endif; ?>><?php echo $r['name']; ?></a></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- navBox End -->
        </div>
        <span class="yjt nselected">&gt;</span>

        <div class="category-checked checkedtwo"><?php echo $next_name; ?><img src="/static/home/Images/xiala.png" alt="" class="zyjt nselected" />
            <!-- navBox Start -->
            <div class="type-box container">
                <div class="row" style="margin-top: 12px;">
                    <div class="cdb-left col-md-1 col-xs-2">分类：</div>
                    <div id="cdb-right" class="col-md-10 col-xs-10">
                        <div class="row">
                            <div class="types"><a href="lists.html-tid=16&ordertype=create_time&order=desc.htm"  class="last-a hover-red">全部</a></div>
                            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>
                            <div class="types"><a  href="lists.html-tid=17&ordertype=create_time&order=desc.htm"  <?php if($t['id'] == $id): ?> class="first-a" <?php else: ?> class="last-a hover-red" <?php endif; ?>><?php echo $t['name']; ?></a></div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>			<!-- navBox End -->
        </div>		<span id="count" class="">共<span id="count-num" class="num-color"><?php echo $count; ?></span>个结果</span>
    </div>

</div>
<div style="clear: both;"></div>



<div id="list-box">
    <!-- order -->
    <span id="category-name">全部分类</span>
    <div id="order">


        <a href="<?php echo url('index/lists',['id'=>$id,'parent_id'=>$parent_id,'order_num'=>$order_num,'default_order'=>$contrary_order]); ?>" id="clickId">
                <?php echo $order_name; ?>
        </a>

    </div>
    <ul id="order-type">
        <li><a href="<?php echo url('index/lists',['id'=>$id,'parent_id'=>$parent_id,'order_num'=>1]); ?>" value="1" >发布时间</a></li>
        <li><a href="<?php echo url('index/lists',['id'=>$id,'parent_id'=>$parent_id,'order_num'=>2]); ?>" value="2" >热度</a></li>
        <li><a href="<?php echo url('index/lists',['id'=>$id,'parent_id'=>$parent_id,'order_num'=>3]); ?>" value="3" >推荐</a></li>
    </ul>
    <!-- list -->
    <div style="clear: both;"></div>
    <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <div class="lists">
        <img src="/uploads/<?php echo $v['pic']; ?>" alt="" class="list-pic" />
        <h3><a href="" target="_blank" class="hover-red"><?php echo $v['curriculum_name']; ?></a></h3>
        <ul class="msg">
            <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count"><?php echo $v['browse_num']; ?></span><span>浏览量</span></li>
            <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count"><?php echo $v['study_num']; ?></span><span>在学人数</span></li>
            <li><a href=""  class="hover-red">贾文林</a></li>
            <li><a href=""  class="hover-red"><?php echo get_cat_info($v['id']); ?></a></li>
            <li><a href=""  class="hover-red"></a></li>
        </ul>
        <br />
        <br />
        <div class="description"><?php echo $v['curriculum_intro']; ?></div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <div style="clear: both"></div>
    <div class="modal-footer no-margin-top">
        <?php echo $page; ?>
    </div>
</div>
<div style="clear: both;"></div>


<style type="text/css">
    @media (max-width: 768px) {
        .feosy{
            display: none;
        }
    }
</style>
<style type="text/css">


    .footer-top{
        margin-right: -15px;
        margin-left: -15px;
    }


    .feosy{
        background: #961804;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        padding: 20px 0px;
        position: relative;top: 20%;
    }
    .wert{
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;"
    }

    .login_bottom {
        /* clear: both; */
        /* float: left; */
        /* margin-bottom: 50px; */
        /*text-align: center;*/
        padding-left: 50px;
        line-height: 50px;
        width: 100%;
        max-width: 707px;
        margin: 0px auto;
    }
    .login_bottom span {
        width: 92%;
        font-size: 16px;
        float: right;
        line-height: 40px;
        color: #000;
        margin-right: -25px;
        font-weight: bolder;
        display: block;
        text-align: center;
    }
    .login_bottom img{
        width: 60px;
    }
</style>
<footer class="feosy">
    <div class="container wert">
    <div class="row footer-top">
        <div class="login_bottom"><span>版权所有：智慧党建平台在线考核 <div style="text-align:center;padding:20px 0;font-size:14px;">技术支持　<a href="http://fuwu.yinhaisoft.com" title="智慧党建" target="_blank">智慧党建</a>开发服务集团*mobile:13436570110</br></br></div>

                    </span>

        </div>
    </div>
</div>
</footer>
</body>
<script>
    var typeName = $("#ordertype").val();
    var typeIndex;
    if(typeName == 1) typeIndex = 0;
    else if (typeName == 2) typeIndex = 1;
    else if (typeName == 3) typeIndex = 2;
    $("#order-type li").eq(typeIndex).css({
        background          : 'rgb(198,47,47)',
        '-moz-box-shadow'   : '-5px -5px 5px #333 inset',
        '-webkit-box-shadow': '-5px -5px 5px #333 inset',
        'box-shadow'        : '-0.5px 0.5px 0.5px #333 inset',
    });
    $("#order-type li").eq(typeIndex).find('a').css({
        color : '#fff'
    });
    $("a").css({textDecoration : 'none'});
    //调整下拉框的位置和宽度
    $(".category-checked").each(function(i){
        var position = $(this).position();
        $(this).find(".type-box").css('left', '-' + position.left + 'px');
    });
    var cateWidth = $("#category-box").width();
    $(".type-box").css('width', cateWidth);
    //手机设备下的下拉框位置和宽度
    var winWidth = $(window).width();
    if(winWidth < 768) {
        $(".type-box").css('width', winWidth);

        $(".category-checked").each(function(i){
            var scrLeft = $(this).scrollTop();
            $(this).find(".type-box").css({
                left : '-' + scrLeft + 'px',
                top  : '42px'
            });
        });

    }
    //调整浏览器大小时
    $(window).resize(function(){
        var winWidth = $(window).width();
        if(winWidth < 768) {
            $(".type-box").css('width', winWidth);

            $(".category-checked").each(function(i){
                var scrLeft = $(this).scrollTop();
                $(this).find(".type-box").css({
                    left : '-' + scrLeft + 'px',
                    top  : '42px'
                });
            });

        } else {
            $(".category-checked").each(function(i){
                var position = $(this).position();
                $(this).find(".type-box").css({
                    left : '-' + position.left + 'px',
                    top  : ''
                });
            });
            var cateWidth = $("#category-box").width();
            $(".type-box").css('width', cateWidth);
        }
    })

    // 分类下拉框
    $(".category-checked").hover(function(){
        var index = $(this).index();
        if(index == 0) {
            var check = $("#ct").val();
        } else {
            var check = $("#cl").val();
        }
        if(check != '') {
            $(this).find(".zyjt").attr('src', '/static/home/Images/shangla.png'/*tpa=http://zaixiankaohe.12371.ac.cn/Public/Images/shangla.png*/);
            $(this).css({
                height : '25px',
                borderBottom : '3px solid #fff',
                zIndex : '3'
            });
            $("#label-box").css('margin-top', '5px');
            $(this).find(".type-box").show();
        }
    }, function(){
        $(this).find(".zyjt").attr('src', '/static/home/Images/xiala.png'/*tpa=http://zaixiankaohe.12371.ac.cn/Public/Images/xiala.png*/);
        $(this).css({
            height : '20px',
            borderBottom : '1px solid rgb(207,1,14)',
            zIndex : ''
        });
        $("#label-box").css('margin-top', '10px');
        $(this).find(".type-box").hide();
    });
    if($("#ct").val() == '') {

    }
</script>
</html>