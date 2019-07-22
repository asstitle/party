<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\PHPTutorial\WWW\xx\public/../application/home\view\index\index.html";i:1563799260;}*/ ?>
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
        <li><a href="indexphp/Home/Study/study.html"  target="_blank">党员学习情况</a>
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
        <a href="indexphp/Home/Study/study.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Study/study.html" target="_blank">党员学习情况</a>
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
        <li><a href="indexphp/Home/Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="indexphp/Home/Hanyu/infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="indexphp/Home/Hanyu/chuang.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/chuang.html" style="display: block;"><span class="glyphicon glyphicon-book"></span>&nbsp;我的学习</a></li>
        <li><a href="indexphp/Home/Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
        <li><a href="indexphp/Home/Hanyu/emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
    <form action="" method="get"><input name="" type="hidden" value="0" id="user_hide"/></form>
</div>	                                <!--顶部的结束-->
<div class="myorder" style="border:1px solid #e7e7e7;">                   <!--   网页  下拉菜单-->
    <div class="log_user">0</div>
    <ul>
        <li><a href="indexphp/Home/Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="indexphp/Home/Hanyu/infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="indexphp/Home/Hanyu/emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
</div>
<div class="mymess" style="border:1px solid #e7e7e7;height: 40px;"	>
    <ul>
        <li style="height: 100%;"><a href="indexphp/Home/Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
    </ul>
</div>

<script>
    //搜索
    $(".search-icon").click(function() {
        var title = $(".get-search").val();
        location.href="indexphp/Home/Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?title=*/ + title;
    });
    $(".get-search").keydown(function(e){
        if(e.keyCode == 13) {
            var title = $(this).val();
            location.href="indexphp/Home/Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?title=*/ + title;
        }

    });
    $(".phone-search").click(function() {
        var title = $(".phone-title").val();
        location.href="indexphp/Home/Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?title=*/ + title;
    });

</script>





<div class="banner">                    <!--banner图-->
    <div class="box1">
        <img src="/static/home/Uploads/banner/2016-12-24/585de0841e0a1.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/banner/2016-12-24/585de0841e0a1.jpg" />
    </div>

    <div class="list_one">

        <ul>
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=16">“两优一先”专题片<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=17">党课讲座<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=18">红色故事汇<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=19.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=19">农牧业实用技术<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=20.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=20">精品欣赏<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=21.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=21">红色系列剧<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=71.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=71">通知通告<span>〉&nbsp;&nbsp;&nbsp;</span></a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=74.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=74">智慧党建微信平台<span>〉&nbsp;&nbsp;&nbsp;</span></a></li>            </ul>

    </div>
    <div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=22">先进基层党组织</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=25.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=25">优秀党务工作者</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=26.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=26">优秀共产党员</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=27.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=27">学习党章党规</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=28.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=28">学习习总书记各类重要论述</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=29.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=29">学习习总书记系列重要讲话</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=30.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=30">地方篇</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=31.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=31">人物篇</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=32.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=32">叙事篇</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=33.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=33">疾病防治</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=34.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=34">农业技术</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=35.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=35">其他牲畜养殖</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=36.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=36">养牛技术</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=37.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=37">养羊技术</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=38.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=38">民俗欣赏</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=39.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=39">微视频</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=40.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=40">休闲养生广场</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=41.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=41">保卫延安</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=42.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=42">大宅门</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=43.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=43">井冈山</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=44.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=44">筑梦路上</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=52.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=52">红色电影</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=72.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=72">通知</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=73.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=73">通告</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div><div class="list_right">

        <ul class="list_two">
            <li><a href="indexphp/Home/Hanyu/lists.html-tid=75.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=75">时政</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=76.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=76">动态</a></li><li><a href="indexphp/Home/Hanyu/lists.html-tid=77.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=77">学习</a></li>            </ul>

        <!-- <ul class="list_three">
                            </ul> -->
        <div style="clear:both"></div>

    </div>    </div>                                      <!--banner结束-->

<div class="phone_top">
    <ul class="phone_one">
        <a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=16"><li>“两优一先”专题片</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=17"><li>党课讲座</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=18"><li>红色故事汇</li></a>        </ul>
    <div class="list_more">∨</div>
    <div style="clear:both;"></div>
</div>
<div class="order">
    <div class="order_one">
        <ul>
            <a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=16"><li>“两优一先”专题片</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=17"><li>党课讲座</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=18"><li>红色故事汇</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=19.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=19"><li>农牧业实用技术</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=20.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=20"><li>精品欣赏</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=21.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=21"><li>红色系列剧</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=71.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=71"><li>通知通告</li></a><a href="indexphp/Home/Hanyu/lists.html-tid=74.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=74"><li>智慧党建微信平台</li></a>            </ul>
    </div>
    <div class="return">×</div>
</div>
<!-- <div class="phone_ban">
    <img src="//static/home/Images/han_31.jpg" />
</div> -->
<div class="container sec">
    <div class="row">
        <div class="zhanshi">“两优一先”专题片</div>
        <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=16.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=16" style="display: block;">更多课程&nbsp;></a></div>
    </div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=42.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=42" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585d5d90175b7.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585d5d90175b7.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=42.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=42">
                    <div class="titles">丁铁人的铁军梦</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">20480</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">1448</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=31.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=31" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-23/585d20790adab.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-23/585d20790adab.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=31.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=31">
                    <div class="titles">创建引领党建 贴心服务社区</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">43604</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">1901</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=297.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=297" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-14/5af8f9ff2bc5f.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-14/5af8f9ff2bc5f.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=297.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=297">
                    <div class="titles">第十四届党员教育电视观摩交流活动优秀作品展播</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">1474</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">262</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=266.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=266" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-11-12/5a0860db03c32.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-11-12/5a0860db03c32.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=266.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=266">
                    <div class="titles">党旗映国门</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">32222</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">858</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">党课讲座</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=17.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=17" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=241.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=241" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-07-26/5978425e39d85.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-07-26/5978425e39d85.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=241.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=241">
                    <div class="titles">将改革进行到底第一集</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">23669</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">1456</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=314.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=314" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-21/5b0235e83c193.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-21/5b0235e83c193.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=314.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=314">
                    <div class="titles">全国党员干部现代远程教育网</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">1044</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">175</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=270.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=270" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-11-12/5a0864a90ff78.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-11-12/5a0864a90ff78.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=270.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=270">
                    <div class="titles">学习习近平关于全面深化改革的重要论述下</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">10934</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">554</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=268.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=268" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-11-12/5a08631c7bb5b.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-11-12/5a08631c7bb5b.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=268.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=268">
                    <div class="titles">学习习近平关于全面从严治党的重要论述下</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">7258</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">539</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">红色故事汇</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=18.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=18" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=299.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=299" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-14/5af8f9b833815.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-14/5af8f9b833815.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=299.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=299">
                    <div class="titles">第十四届党员教育电视观摩交流活动优秀作品展播</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">1198</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">211</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=298.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=298" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-14/5af8f9db7d458.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-14/5af8f9db7d458.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=298.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=298">
                    <div class="titles">第十四届党员教育电视观摩交流活动优秀作品展播</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">999</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">188</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=273.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=273" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-11-12/5a086682ead35.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-11-12/5a086682ead35.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=273.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=273">
                    <div class="titles">用生命播种绿色</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">5790</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">526</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=272.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=272" target="_blank">
                    <img src="/static/home/Uploads/cover/2017-11-12/5a08661c9ca49.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2017-11-12/5a08661c9ca49.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=272.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=272">
                    <div class="titles">守护心灵五十年</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">5013</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">413</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">农牧业实用技术</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=19.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=19" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=152.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=152" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e2c3b89509.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e2c3b89509.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=152.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=152">
                    <div class="titles">肉羊三元杂交技术</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">44368</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">2316</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=151.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=151" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e2bc560220.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e2bc560220.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=151.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=151">
                    <div class="titles">绒山羊增绒饲养管理技术</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">36462</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">2186</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=150.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=150" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e2adf629ec.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e2adf629ec.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=150.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=150">
                    <div class="titles">罕山白绒山羊养殖技术</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">33026</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">1979</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=149.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=149" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e2aaf53b4d.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e2aaf53b4d.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=149.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=149">
                    <div class="titles">优质肉羊快繁及生产技术</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">32446</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">1964</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">精品欣赏</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=20.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=20" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=315.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=315" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-21/5b023d0704350.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-21/5b023d0704350.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=315.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=315">
                    <div class="titles">档案（十七）</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">808</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">142</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=313.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=313" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-21/5b02325c3b24a.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-21/5b02325c3b24a.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=313.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=313">
                    <div class="titles">档案（十六）</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">942</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">196</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=309.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=309" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-18/5afe76b33304e.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-18/5afe76b33304e.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=309.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=309">
                    <div class="titles">档案（十五）</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">868</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">162</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=307.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=307" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-15/5afabd1e839cf.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-15/5afabd1e839cf.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=307.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=307">
                    <div class="titles">档案（十四）</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">1170</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">187</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">红色系列剧</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=21.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=21" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=300.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=300" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-14/5af8f9960d86d.png" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-14/5af8f9960d86d.png" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=300.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=300">
                    <div class="titles">第十四届党员教育电视观摩交流活动优秀作品展播</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">974</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">167</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=179.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=179" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e91300b363.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e91300b363.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=179.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=179">
                    <div class="titles">筑梦路上</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">61370</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">2216</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=177.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=177" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e8fda991e1.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e8fda991e1.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=177.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=177">
                    <div class="titles">井冈山</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">50184</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">2175</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=175.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=175" target="_blank">
                    <img src="/static/home/Uploads/cover/2016-12-24/585e87df17812.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2016-12-24/585e87df17812.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=175.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=175">
                    <div class="titles">保卫延安 </div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">60822</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">2179</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">通知通告</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=71.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=71" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=287.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=287" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-10/5af3b9c3ad3af.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-10/5af3b9c3ad3af.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=287.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=287">
                    <div class="titles">2018年党员教育通知</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">982</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">180</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div><div class="row">
    <div class="zhanshi">智慧党建微信平台</div>
    <div class="more"><a href="indexphp/Home/Hanyu/lists.html-tid=74.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Hanyu/lists.html?tid=74" style="display: block;">更多课程&nbsp;></a></div>
</div>
    <div class="row">                       <!--cont的开始-->
        <div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=317.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=317" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-23/5b04bc4e568f4.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-23/5b04bc4e568f4.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=317.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=317">
                    <div class="titles">5月22日鄂托克前旗智慧党建微信平台推送 </div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">743</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">137</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=316.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=316" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-23/5b04bb57845cd.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-23/5b04bb57845cd.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=316.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=316">
                    <div class="titles">5月21日鄂托克前旗智慧党建微信平台推送 </div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">601</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">227</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=312.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=312" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-20/5b01808c68a01.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-20/5b01808c68a01.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=312.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=312">
                    <div class="titles">5月20日鄂托克前旗智慧党建微信平台推送</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">758</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">229</span>
            </div>
        </div><div class="box-move">
            <div class="show">
                <a href="indexphp/Home/Details/details-id=311.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=311" target="_blank">
                    <img src="/static/home/Uploads/cover/2018-05-20/5b017574287db.jpg" tppabs="http://zaixiankaohe.12371.ac.cn//static/home/Uploads/cover/2018-05-20/5b017574287db.jpg" alt="" style="width:94%;height:69%;margin-left: 3%;margin-top: 3%;border-radius: 12px;">                    </a>
                <a href="indexphp/Home/Details/details-id=311.htm" tppabs="http://zaixiankaohe.12371.ac.cn/indexphp/Home/Details/details?id=311">
                    <div class="titles">5月19日鄂托克前旗智慧党建微信平台推送</div>
                </a>
                <i class="glyphicon glyphicon-play-circle user_show"></i><span class="count">746</span>
                <i class="glyphicon glyphicon-user user_show"></i><span class="count">209</span>
            </div>
        </div>            <div style="clear:both;"></div>
    </div>    </div>
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