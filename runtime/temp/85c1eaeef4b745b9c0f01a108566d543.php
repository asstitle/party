<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"D:\PHPTutorial\WWW\xx\public/../application/home\view\index\index.html";i:1563979038;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\header.html";i:1563979038;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\footer.html";i:1563979038;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="智慧党建,党员教育，在线考核" />
    <meta name="description" content="智慧党建平台" />
    <title>智慧党建平台-党员教育</title>
    <link rel="stylesheet" type="text/css" href="/static/home/Css/bootstrap.min.css" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/Css/hanyu.css" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Css/hanyu.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/Css/header.css" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Css/header.css" />
    <script type="text/javascript" src="/static/home/Js/jquery-2.1.1.js" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="/static/home/Js/bootstrap.min.js" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Js/bootstrap.min.js"></script>
    <script>
        $(function(){

            $('.list_one li').mouseover(function(){           //分类
                var i = $(this).index();
                $('.list_right').eq(i).show().siblings('.list_right').hide();
                $('.list_one li').eq(i).css({
                    backgroundColor:'#111'
                }).siblings('.list_one li').css({
                    backgroundColor:'#333'
                })
            });
            $('.list_one li').mouseleave(function(){
                var n = $(this).index();
                $('.list_right').eq(n).hide();
            });
            $('.list_right').mouseover(function(){
                $(this).show().siblings('list_right').hide();
            });
            $('.list_right').mouseleave(function(){
                $(this).hide();
            });

            $('.more').mouseover(function(){                //更多
                $(this).css({backgroundColor:'#c0bfbf'}).siblings('.more').css({backgroundColor:'#e4e4e4'});
            })
            $('.more').mouseleave(function(){
                $(this).css({backgroundColor:'#e4e4e4'});
            })


            $('.list_more').click(function(){           //手机 下拉菜单
                $('.order').slideDown("slow");

            })
            $('.return').click(function(){              //返回
                $('.order').slideUp("slow");
            })


        })
    </script>

</head>
<body style="background-color:#efeeec;position:absolute;">

<!-- <script type="text/javascript" src="//static/home/Js/jquery-1.8.2.min.js"></script> -->
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
            if(user == 0){location.href="indexphp/Home/Deng/xuedeng.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Deng/xuedeng*/;}
    else{location.href="indexphp/Home/Index/index.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Index/index*/;}
    })*/
    function logout() {
        location.href = "indexphp/Home/Hanyu/emptys.html"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/emptys.html*/;
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
        <li><a href="<?php echo url('study/study'); ?>"  target="_blank">党员学习情况</a>
        </li>
        <li class="test"><a href="<?php echo url('test/index'); ?>" >在线测试</a></li>
        <li data-toggle="modal" data-target="#myModal">意见反馈</li>
    </ul>
</div>
<div id="all"></div>
<div id="all_log"></div>
<div class="top"><!--顶部开始-->
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
</div><!--顶部的结束-->
<div class="myorder" style="border:1px solid #e7e7e7;"><!--   网页  下拉菜单-->
    <div class="log_user">0</div>
    <ul>
        <li><a href="indexphp/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="indexphp/Home/Hanyu/infor.html"  style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="indexphp/Home/Hanyu/emptys.html"  style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
</div>
<div class="mymess" style="border:1px solid #e7e7e7;height: 40px;"	>
    <ul>
        <li style="height: 100%;"><a href="indexphp/Home/Comment/notice.html"  style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
    </ul>
</div>

<script>
    //搜索
    $(".search-icon").click(function() {
        var title = $(".get-search").val();
        location.href="indexphp/Home/Hanyu/lists.html-title=.htm" + title;
    });
    $(".get-search").keydown(function(e){
        if(e.keyCode == 13) {
            var title = $(this).val();
            location.href="indexphp/Home/Hanyu/lists.html-title=.htm" + title;
        }

    });
    $(".phone-search").click(function() {
        var title = $(".phone-title").val();
        location.href="indexphp/Home/Hanyu/lists.html-title=.htm" + title;
    });

</script>





<div class="banner">                    <!--banner图-->
    <div class="box1">
        <img src="/static/home/Uploads/banner/2016-12-24/585de0841e0a1.jpg"  />
    </div>

    <div class="list_one">

        <ul>
            <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('index/lists',['id'=>$v['id'],'parent_id'=>$v['parent_id']]); ?>" ><?php echo $v['name']; ?><span>〉&nbsp;&nbsp;&nbsp;</span></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

    </div>
    <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <div class="list_right">

        <ul class="list_two">
            <?php if(is_array($v['children']) || $v['children'] instanceof \think\Collection || $v['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo url('index/lists',['parent_id'=>$vv['parent_id'],'id'=>$vv['id']]); ?>" ><?php echo $vv['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div style="clear:both"></div>

    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>                                      <!--banner结束-->

<div class="phone_top">
    <ul class="phone_one">
        <a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" ><li>“两优一先”专题片</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" ><li>党课讲座</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" ><li>红色故事汇</li></a>        </ul>
    <div class="list_more">∨</div>
    <div style="clear:both;"></div>
</div>
<div class="order">
    <div class="order_one">
        <ul>
            <a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" ><li>“两优一先”专题片</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" ><li>党课讲座</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" ><li>红色故事汇</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=19.htm" ><li>农牧业实用技术</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=20.htm" ><li>精品欣赏</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=21.htm" ><li>红色系列剧</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=71.htm" ><li>通知通告</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=74.htm" ><li>智慧党建微信平台</li></a>            </ul>
    </div>
    <div class="return">×</div>
</div>
<!-- <div class="phone_ban">
    <img src="//static/home/Images/han_31.jpg" />
</div> -->
<div class="container sec">
    <?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <div class="row">
        <div class="zhanshi"><?php echo $v['name']; ?></div>
        <div class="more"><a href="<?php echo url('index/lists',['id'=>$v['id'],'parent_id'=>$v['parent_id']]); ?>"  style="display: block;">更多课程&nbsp;></a></div>
    </div>

    <div class="row">
        <?php if(is_array($v['lists']) || $v['lists'] instanceof \think\Collection || $v['lists'] instanceof \think\Paginator): $i = 0; $__LIST__ = $v['lists'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vs): $mod = ($i % 2 );++$i;?><!--cont的开始-->
        <div class="box-move">

            <div class="show">
                <a href="<?php echo url('index/details',['id'=>$vs['id']]); ?>"  target="_blank">
                    <img src="/uploads/<?php echo $vs['pic']; ?>"  alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">
                </a>
                <a href="<?php echo url('index/details',['id'=>$vs['id']]); ?>" >
                    <div class="titles"><?php echo $vs['curriculum_name']; ?></div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count"><?php echo $vs['browse_num']; ?></span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count"><?php echo $vs['study_num']; ?></span>
            </div>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div style="clear:both;"></div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
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

<div class="left-float">
    <div class="float-body">
        <a href="<?php echo url('test/index'); ?>" target="_blank">在线测试</a>
        <p data-toggle="modal" data-target="#myModal">意见反馈</p>
    </div>
    <div class="float-toggle">
        <i class="glyphicon glyphicon-chevron-left" id="float-arrows" style="display: block;"></i>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">请输入您要反馈的意见</h4>
            </div>
            <div class="modal-body">
                <textarea id="opinion-body" rows="6" style="padding:10px;"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary submit-opinion">提交</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>

<input type="hidden" id="hid-uid" value="" />
</body>
<script>
    $(".box-move").hover(function(){
        $(this).find(".show").animate({
            marginTop:'-5px','box-shadow':'0px 3px 5px #333'},200);
    },function() {
        $(this).find(".show").animate({
            marginTop:'','box-shadow':'none'},200);
    });

    //鼠标滑上滑下颜色
    $(".neck").mouseover(function(){
        var i = $(this).index();
        $(this).css('backgroundColor','#ccc').siblings(".neck").css('backgroundColor','#efeeec')
    })

    //点击颜色变红
    $(".tushu").eq(0).css('display','block');
    $(".neck").eq(0).css('backgroundColor','#cf010e');
    $(".neck").click(function(){
        var i = $(this).index();
        $(".neck").eq(i).css('backgroundColor','#cf010e').siblings(".neck").css('backgroundColor','#efeeec')
        $(".tushu").eq(i).show().siblings(".tushu").hide();
    })

    $(".neck_yi").eq(0).css('backgroundColor','#ccc');
    $(".neck_yi").mouseover(function(){
        var i = $(this).index();
        $(this).css('backgroundColor','#ccc').siblings(".neck_yi").css('backgroundColor','#efeeec')
    })
    $(".bod_er").mouseleave(function(){
        $(".neck_yi").css('backgroundColor','#efeeec');
        $(".neck_yi").eq(0).css('backgroundColor','#ccc');
    })

    //打开关闭左浮动菜单
    $("#float-arrows").click(function() {
        var thisState = $(this).attr("class");
        if(thisState == 'glyphicon glyphicon-chevron-left') {
            $(this).parents(".left-float").animate({
                left : '-160px'
            }, 500);
            $(this).attr("class", "glyphicon glyphicon-chevron-right");
        } else {
            $(this).parents(".left-float").animate({
                left : 0
            }, 500);
            $(this).attr("class", "glyphicon glyphicon-chevron-left");
        }
    });

    //意见反馈
    $(".submit-opinion").click(function() {
        var body = $("#opinion-body").val();
        var uid = $("#hid-uid").val();
        if(uid == '') alert('请登录');
        else {
            if(body == '') alert('请填写内容');
            else {
                $.post("indexphp/Home/Index/getOpinion.html"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Index/getOpinion.html*/, {uid : uid, body : body}, function(data) {
                    if(data == 'get') {
                        alert('反馈成功！');
                        location.href = location.href;
                    } else {
                        alert(data);
                    }
                });
            }
        }

    });
</script>
</html>