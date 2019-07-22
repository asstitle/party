<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\PHPTutorial\WWW\xx\public/../application/home\view\index\lists.html";i:1563797388;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="智慧党建,党员教育，在线考核" />
    <meta name="description" content="智慧党建平台" />
    <title>“两优一先”专题片-智慧党建平台-党员教育</title>
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
        <li><a href="../Index/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index.html">首页</a></li>
        <li><a href="../Study/study.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Study/study.html" target="_blank">党员学习情况</a>
        </li>
        <li class="test"><a href="../Test/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Test/index.html">在线测试</a></li>
        <li data-toggle="modal" data-target="#myModal">意见反馈</li>
    </ul>
</div>
<div id="all"></div>
<div id="all_log"></div>
<div class="top">                             <!--顶部开始-->
    <div class="glyphicon glyphicon-align-justify"></div>
    <div class="head_yi">智慧党建平台-党员教育</div>
    <div class="head_er"><a href="../Index/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index.html">首页</a></div>
    <div class="head_san test"><a href="../Test/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Test/index.html" target="_blank">在线测试</a>
    </div>
    <div class="head_sans test">
        <a href="../Study/study.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Study/study.html" target="_blank">党员学习情况</a>
    </div>
    <div class="glyphicon glyphicon-user user"></div>
    <!-- 网页登陆-->
    <div class="deng"><a href="../Deng/xuedeng.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html" style="display: block;">登录</a></div>
    <div class="head_si">
        <input type="text" class="get-search" placeholder="搜索" name="s" id="s" style="outline: none;">
        <span class="glyphicon glyphicon-search search-icon"></span>
    </div>
    <div style="clear:both;"></div>
    <ul class="phone_log">                <!--   手机  下拉菜单-->
        <li><a href="../Deng/xuedeng.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html">登录</a></li>
    </ul>
    <ul class="phone_order" style="border:1px solid #e7e7e7;">
        <li style="text-align:center;">0</li>
        <li><a href="../Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="chuang.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/chuang.html" style="display: block;"><span class="glyphicon glyphicon-book"></span>&nbsp;我的学习</a></li>
        <li><a href="../Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
        <li><a href="emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
    <form action="" method="get"><input name="" type="hidden" value="0" id="user_hide"/></form>
</div>	                                <!--顶部的结束-->
<div class="myorder" style="border:1px solid #e7e7e7;">                   <!--   网页  下拉菜单-->
    <div class="log_user">0</div>
    <ul>
        <li><a href="../Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
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
        location.href="lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
    });
    $(".get-search").keydown(function(e){
        if(e.keyCode == 13) {
            var title = $(this).val();
            location.href="lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
        }

    });
    $(".phone-search").click(function() {
        var title = $(".phone-title").val();
        location.href="lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
    });

</script>


<!-- category -->
<div id="category-box" class="container">
    <input type="hidden" id="ct" value="Array" />
    <input type="hidden" id="cl" value="" />

    <!-- get信息 -->
    <input type="hidden" id="tid" value="16" />
    <input type="hidden" id="label" value="" />
    <input type="hidden" id="ordertype" value="create_time" />
    <input type="hidden" id="desc" value="desc" />
    <!-- /end -->
    <div class="row">
        <div class="category-checked checkedone">“两优一先”专题片<img src="/static/home/Images/xiala.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Images/xiala.png" alt="" class="zyjt nselected" />
            <!-- navBox Start -->
            <div class="type-box container">
                <div class="row" style="margin-top: 12px;">
                    <div class="cdb-left col-md-1 col-xs-2">分类：</div>
                    <div id="cdb-right" class="col-md-10 col-xs-10">
                        <div class="row">
                            <div class="types"><a  href="lists.html-tid=&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=&ordertype=create_time&order=desc" class="last-a hover-red">全部</a></div>
                            <div class="types"><a href="javascript:void(0)" class="first-a" >“两优一先”专题片</a></div><div class="types"><a  href="lists.html-tid=17&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=17&ordertype=create_time&order=desc" class="last-a hover-red">党课讲座</a></div><div class="types"><a  href="lists.html-tid=18&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=18&ordertype=create_time&order=desc" class="last-a hover-red">红色故事汇</a></div><div class="types"><a  href="lists.html-tid=19&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=19&ordertype=create_time&order=desc" class="last-a hover-red">农牧业实用技术</a></div><div class="types"><a  href="lists.html-tid=20&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=20&ordertype=create_time&order=desc" class="last-a hover-red">精品欣赏</a></div><div class="types"><a  href="lists.html-tid=21&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=21&ordertype=create_time&order=desc" class="last-a hover-red">红色系列剧</a></div><div class="types"><a  href="lists.html-tid=71&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=71&ordertype=create_time&order=desc" class="last-a hover-red">通知通告</a></div><div class="types"><a  href="lists.html-tid=74&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=74&ordertype=create_time&order=desc" class="last-a hover-red">智慧党建微信平台</a></div>						</div>
                    </div>
                </div>
            </div>
            <!-- navBox End -->
        </div>
        <span class="yjt nselected">&gt;</span>

        <div class="category-checked checkedtwo">全部分类<img src="/static/home/Images/xiala.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Images/xiala.png" alt="" class="zyjt nselected" />
            <!-- navBox Start -->
            <div class="type-box container">
                <div class="row">
                    <div class="cdb-left col-md-1 col-xs-2">分类：</div>
                    <div id="cdb-right" class="col-md-10 col-xs-10">
                        <div class="row">
                            <div class="types"><a href="javascript:void(0)" class="first-a">全部</a></div>
                            <div class="types"><a  href="lists.html-tid=22&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22&ordertype=create_time&order=desc" class="last-a hover-red">先进基层党组织</a></div><div class="types"><a  href="lists.html-tid=25&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=25&ordertype=create_time&order=desc" class="last-a hover-red">优秀党务工作者</a></div><div class="types"><a  href="lists.html-tid=26&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26&ordertype=create_time&order=desc" class="last-a hover-red">优秀共产党员</a></div>							</div>
                    </div>
                </div>
            </div>						<!-- navBox End -->
        </div>		<span id="count" class="">共<span id="count-num" class="num-color">49</span>个结果</span>
    </div>

</div>
<div style="clear: both;"></div>


<div id="category-down-box" class="container">
    <div class="row">
        <div class="cdb-left col-md-1 col-xs-2">分类：</div>
        <div id="cdb-right" class="col-md-10 col-xs-10">
            <div class="row">
                <div class="types"><a href="javascript:void(0)" class="first-a">全部</a></div>
                <div class="types"><a href="lists.html-tid=22&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22&ordertype=create_time&order=desc" class="last-a hover-red">先进基层党组织</a></div><div class="types"><a href="lists.html-tid=25&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=25&ordertype=create_time&order=desc" class="last-a hover-red">优秀党务工作者</a></div><div class="types"><a href="lists.html-tid=26&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26&ordertype=create_time&order=desc" class="last-a hover-red">优秀共产党员</a></div>			</div>
        </div>
    </div>
</div>
<!-- list -->
<div id="list-box">
    <!-- order -->
    <span id="category-name">全部分类</span>
    <div id="order">
        <a href="lists.html-tid=16&ordertype=create_time&order=asc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&ordertype=create_time&order=asc">
            <if condition="$order eq asc">倒序
        </a>	</div>
    <ul id="order-type">
        <li><a href="lists.html-tid=16&ordertype=create_time&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&ordertype=create_time&order=desc">发布时间</a></li>
        <li><a href="lists.html-tid=16&ordertype=views&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&ordertype=views&order=desc">热度</a></li>
        <li><a href="lists.html-tid=16&ordertype=recommend&order=desc.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&ordertype=recommend&order=desc">推荐</a></li>
    </ul>
    <!-- list -->
    <div style="clear: both;"></div>
    <div class="lists">
        <img src="/static/home/Uploads/cover/2018-05-14/5af8f9ff2bc5f.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2018-05-14/5af8f9ff2bc5f.png" alt="" class="list-pic" />
        <h3><a href="../Details/details.html-id=297.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=297" target="_blank" class="hover-red">第十四届党员教育电视观摩交流活动优秀作品展播</a></h3>
        <ul class="msg">
            <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">1474</span><span>浏览量</span></li>
            <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">262</span><span>在学人数</span></li>
            <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
            <li><a href="lists.html-tid=26.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26" class="hover-red">优秀共产党员</a></li>
            <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
        </ul>
        <br />
        <br />
        <div class="description">第十四届党员教育电视观摩交流活动优秀作品展播</div>
    </div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-11-12/5a0860db03c32.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-11-12/5a0860db03c32.png" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=266.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=266" target="_blank" class="hover-red">党旗映国门</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">32222</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">897</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22" class="hover-red">先进基层党组织</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">党旗映国门</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-11-12/5a08600daed1f.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-11-12/5a08600daed1f.png" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=265.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=265" target="_blank" class="hover-red">党建情系百姓</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">12079</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">755</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22" class="hover-red">先进基层党组织</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">党建情系百姓</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-11-12/5a085f5480cb3.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-11-12/5a085f5480cb3.png" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=264.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=264" target="_blank" class="hover-red">党建引领小康路</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">11727</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">672</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22" class="hover-red">先进基层党组织</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">党建引领小康路</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-11-12/5a085ad5a4fae.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-11-12/5a085ad5a4fae.png" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=263.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=263" target="_blank" class="hover-red">创建引领党建 贴心服务社区</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">6570</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">532</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22" class="hover-red">先进基层党组织</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">创建引领党建 贴心服务社区</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-10-24/59eee374a643b.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-10-24/59eee374a643b.png" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=255.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=255" target="_blank" class="hover-red">《榜样》2017</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">14646</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">853</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=26.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26" class="hover-red">优秀共产党员</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">        为深入推进“两学一做”学习教育常态化制度化，树立优秀共产党员楷模，发挥先进典型示范作用，引导和激励广大党员群众紧密团结在以习近平同志为核心的党中央周围，以新的精神状态和奋斗姿态把中国特色社会主义推向前进，中央组织部、中央电视台联合录制了反映优秀共产党员和先进基层党组织典型事迹的专题节目《榜...</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-01-09/5873485c13449.jpg" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-01-09/5873485c13449.jpg" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=231.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=231" target="_blank" class="hover-red">我是共产党员之践行</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">354248</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">3709</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=25.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=25" class="hover-red">优秀党务工作者</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">我是共产党员之践行</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-01-09/587347dc32f9b.jpg" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-01-09/587347dc32f9b.jpg" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=230.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=230" target="_blank" class="hover-red">我是共产党员之情怀</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">89751</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">3289</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=22.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=22" class="hover-red">先进基层党组织</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">我是共产党员之情怀</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-01-09/587347785e74e.jpg" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-01-09/587347785e74e.jpg" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=229.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=229" target="_blank" class="hover-red">我是共产党员之信念</a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">68306</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">3058</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=26.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26" class="hover-red">优秀共产党员</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">我是共产党员之信念</div>
</div><div class="lists">
    <img src="/static/home/Uploads/cover/2017-01-09/587346d399f60.jpg" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Uploads/cover/2017-01-09/587346d399f60.jpg" alt="" class="list-pic" />
    <h3><a href="../Details/details.html-id=228.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=228" target="_blank" class="hover-red">我是共产党员之责任 </a></h3>
    <ul class="msg">
        <li><i class="glyphicon glyphicon-play-circle"></i><span class="peoples-count">37450</span><span>浏览量</span></li>
        <li><i class="glyphicon glyphicon-user"></i><span class="peoples-count">2381</span><span>在学人数</span></li>
        <li><a href="../Tec/tec.html-userid=5335.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html?userid=5335" class="hover-red">贾文林</a></li>
        <li><a href="lists.html-tid=26.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=26" class="hover-red">优秀共产党员</a></li>
        <li><a href="lists.html-label=.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?label=" class="hover-red"></a></li>
    </ul>
    <br />
    <br />
    <div class="description">我是共产党员之责任</div>
</div>	<div style="clear: both"></div>
    <div class="modal-footer no-margin-top"><ul class="pagination pull-right no-margin"><li class="prev disabled"><a href="javascript:void(0)">&laquo;</a></li><li class="active"><a href="javascript:void(0)">1</a></li><li><a href="lists.html-tid=16&label=&ordertype=create_time&order=desc&page=2.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&label=&ordertype=create_time&order=desc&page=2">2</a></li><li><a href="lists.html-tid=16&label=&ordertype=create_time&order=desc&page=3.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&label=&ordertype=create_time&order=desc&page=3">3</a></li><li><a href="lists.html-tid=16&label=&ordertype=create_time&order=desc&page=4.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&label=&ordertype=create_time&order=desc&page=4">4</a></li><li><a href="lists.html-tid=16&label=&ordertype=create_time&order=desc&page=5.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&label=&ordertype=create_time&order=desc&page=5">5</a></li><li class="next"><a href="lists.html-tid=16&label=&ordertype=create_time&order=desc&page=2.htm" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?tid=16&label=&ordertype=create_time&order=desc&page=2">&raquo;</a></li></ul></div>
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
            <div class="login_bottom">
                <img src="../../../../www.etkqqzhdj.gov.cn/wp-content/themes/dangjian/newstyle/v3/images/dzjg-1.png" tppabs="http://www.etkqqzhdj.gov.cn/wp-content/themes/dangjian/newstyle/v3/images/dzjg-1.png">
                <span><div style="text-align:center;padding:20px 0;font-size:14px;">技术支持　<a href="http://fuwu.yinhaisoft.com" title="智慧党建" target="_blank">智慧党建</a>开发服务集团*mobile:13436570110</br></br></div>
                    </span>

            </div>
        </div>
    </div>
</footer>
</body>
<script>
    var typeName = $("#ordertype").val();
    var typeIndex;
    if(typeName == 'create_time') typeIndex = 0;
    else if (typeName == 'views') typeIndex = 1;
    else if (typeName == 'recommend') typeIndex = 2;
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