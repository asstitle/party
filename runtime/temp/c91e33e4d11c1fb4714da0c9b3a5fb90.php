<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\PHPTutorial\WWW\xx\public/../application/home\view\test\index.html";i:1563979038;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1,user-scalable=no">
    <link href="/static/home/Css/index.css" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Css/index.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/static/home/Css/header.css" />
    <script type="text/javascript" src="/static/home/Js/jquery-1.8.2.min.js" ></script>
    <script type="text/javascript" src="/static/home/Js/bootstrap.min.js" ></script>
    <!-- <link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.min.css" /> -->
    <title>题库</title>
</head>

<body>
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
        location.href = "../Hanyu/emptys.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html*/;
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
        <li class="test"><a href="index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Test/index.html">在线测试</a></li>
        <li data-toggle="modal" data-target="#myModal">意见反馈</li>
    </ul>
</div>
<div id="all"></div>
<div id="all_log"></div>
<div class="top">                             <!--顶部开始-->
    <div class="glyphicon glyphicon-align-justify"></div>
    <div class="head_yi"></div>
    <div class="head_er"><a href="../Index/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index.html">首页</a></div>
    <div class="head_san test"><a href="index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Test/index.html" target="_blank">在线测试</a>
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
        <li><a href="../Hanyu/infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="../Hanyu/chuang.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/chuang.html" style="display: block;"><span class="glyphicon glyphicon-book"></span>&nbsp;我的学习</a></li>
        <li><a href="../Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
        <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
        <li><a href="../Hanyu/emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
    <form action="" method="get"><input name="" type="hidden" value="0" id="user_hide"/></form>
</div>	                                <!--顶部的结束-->
<div class="myorder" style="border:1px solid #e7e7e7;">                   <!--   网页  下拉菜单-->
    <div class="log_user">0</div>
    <ul>
        <li><a href="../Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
        <li><a href="../Hanyu/infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="../Hanyu/emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
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
        location.href="../Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
    });
    $(".get-search").keydown(function(e){
        if(e.keyCode == 13) {
            var title = $(this).val();
            location.href="../Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
        }

    });
    $(".phone-search").click(function() {
        var title = $(".phone-title").val();
        location.href="../Hanyu/lists.html-title=.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/lists.html?title=*/ + title;
    });

</script>




<div class="col-sm-6 max"><!--最大的DIV开始-->
    <div class="imge">
        <img src="/static/home/Meng/Images/custom_logo.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Meng/Images/custom_logo.png">
    </div>

    <input type="hidden" value="" id="tikuid_"/>
    <div style="margin: 0 auto;width: 77%;height: 50%;" >
        <!--头部文件的开始-->
        <div class="trew" style="width: 137%;margin-left:-21.8%;height:60px;background-color: #e00102">
            <div class="eks"><a href="../Index/index.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index.html">首页</a></div>
            <div class="glyphicon glyphicon-user users"><img src="/static/home/Images/toux.png" tppabs="http://zaixiankaohe.12371.ac.cn/Public/Images/toux.png" style="margin-top: 21px;width: 22px;height:22px;"></div>
            <!-- 网页登陆-->
            <div class="deng"><a href="../Deng/xuedeng.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html" style="display: block;">11登录</a></div>
            <div style="clear:both;"></div>
            <ul class="phone_log">                <!--   手机  下拉菜单-->
                <li><a href="../Deng/xuedeng.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html">登录</a></li>
            </ul>
            <ul class="phone_order" style="border:1px solid #e7e7e7;">
                <li style="text-align:center;">0</li>
                <li><a href="../Tec/tec.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/tec.html" style="display: block;"><span class="glyphicon glyphicon-user"></span>&nbsp;个人主页</a></li>
                <li><a href="../Hanyu/infor.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/infor.html" style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
                <li><a href="../Hanyu/chuang.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/chuang.html" style="display: block;"><span class="glyphicon glyphicon-book"></span>&nbsp;我的学习</a></li>
                <li><a href="../Comment/notice.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Comment/notice.html" style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
                <!-- <li><a href="" style="display: block;"><span class="glyphicon glyphicon-envelope"></span>&nbsp;私信</a></li> -->
                <li><a href="../Hanyu/emptys.html" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Hanyu/emptys.html" style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
            </ul>
        </div>
        <!--头部文件的的结束-->
        <div class="wer">
            <span class="asq" style="margin-left:12px;">题&nbsp;库&nbsp;分&nbsp;类</span>
        </div>
        <div class="left"><!--左侧导航的开始-->
            <ul style="list-style:none;">
                <li class="yi_caidan">十九大</li>
                <li class="yi_caidan">两学一做专题

                </li>
                <li class="yi_caidan">党建知识

                </li>
                <li class="yi_caidan">百年潮•中国梦

                </li>

                <li class="yi_caidan">四个全面战略

                </li>
                <li class="yi_caidan">三严三实专题

                </li>
                <li class="yi_caidan">团建知识

                </li>

                <li class="yi_caidan">百科知识

                </li>
                <li class="yi_caidan">法律知识

                </li>
                <li class="yi_caidan">群众路线

                </li>
                <li class="yi_caidan">安全常识

                </li>
            </ul>

        </div><!--左侧导航的结束-->

        <div class="right"> <!--右侧的开始-->
            <div class="tops"><span class="ant">党&nbsp;建&nbsp;测&nbsp;试&nbsp;题&nbsp;库</div>
            <div class="bottom">

                <div class="cuo" id="cuo" style="display:none;">

                    <p class="pas">提交成功!</p>
                    <p id="dati_shu">本次答对0道题，不满足积分条件，欢迎继续作答！</p>
                    <p style="margin-top:20px;">
                        <input class="jixu" value="&nbsp;确&nbsp;&nbsp;定">

                    </p>
                </div>

                <div class="zheng" id="zheng3" style="display:none;">

                    <p class="pas">提交成功!</p>
                    <p id="dati_shu">本次共答对3道题，加1分。</p>
                    <p style="margin-top:20px;">
                        <a href="###"><input class="jixu" value="&nbsp;确&nbsp;&nbsp;定"></a>

                    </p>
                </div>
                <div class="zheng" id="zheng2" style="display:none;">

                    <p class="pas">提交成功!</p>
                    <p id="dati_shu">本次共答对2道题，不满足积分条件，欢迎继续作答！</p>
                    <p style="margin-top:20px;">
                        <a href="###"><input class="jixu" value="&nbsp;确&nbsp;&nbsp;定"></a>

                    </p>
                </div>
                <div class="zheng" id="zheng1" style="display:none;">

                    <p class="pas">提交成功!</p>
                    <p id="dati_shu">本次共答对1道题，不满足积分条件，欢迎继续作答！</p>
                    <p style="margin-top:20px;">
                        <a href="###"><input class="jixu" value="&nbsp;确&nbsp;&nbsp;定"></a>

                    </p>
                </div>
                <div class="zheng" id="wancheng" style="display:none;">

                    <p class="pas">提交成功!</p>
                    <p id="dati_shu">您今天已经完成任务了！</p>
                    <p style="margin-top:20px;">
                        <a href="###"><input class="jixu" value="&nbsp;确&nbsp;&nbsp;定" style="width:50px;height:20px;cursor: pointer;border:none;padding:5px;font-size:15px;color:#fff;background-color:#F60;margin-left:130px;margin-top:12px;border-radius:2px;"></a>

                    </p>
                </div>

                <div class="yi_yi" id="yiyi">
                    <ul style="list-style:none;margin-top:30px;">
                        <li style="margin-left:25px;"><span id="quesid1" class="quesid"></span>.&nbsp;<span class="ques"></span></li>
                        <li style="margin-left:25px;" >A<input type="radio" name="checkbox1" class="ansva ans1 box" style="margin-left:6.1px;cursor: pointer;" value=""/><span class="ansa" style="margin-left:12px;"></span></li>
                        <li style="margin-left:25px;">B<input type="radio" name="checkbox1" class="ansvb ans1 box" style="margin-left:7.6px;cursor: pointer;" value=""/><span class="ansb" style="margin-left:12px;"></span></li>
                        <li style="margin-left:25px;">C<input type="radio" name="checkbox1" class="ansvc ans1 box" style="margin-left:6.8px;cursor: pointer;" value=""/><span class="ansc" style="margin-left:12px;"></span></li>
                        <li style="margin-left:25px;">D<input type="radio" name="checkbox1" class="ansvd ans1 box" style="margin-left:5.6px;cursor: pointer;" value=""/><span class="ansd" style="margin-left:12px;"></span></li>
                    </ul>
                    <ul style="list-style:none;margin-top:30px;">
                        <li style="margin-left:25px;"><span id="quesid2" class="quesid"></span>.&nbsp;<span class="ques"></span></li>
                        <li style="margin-left:25px;" >A<input type="radio" name="checkbox2" class="ansva ans2 box" style="margin-left:6.1px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansa"></span></li>
                        <li style="margin-left:25px;">B<input type="radio" name="checkbox2" class="ansvb ans2 box" style="margin-left:7.6px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansb"></span></li>
                        <li style="margin-left:25px;">C<input type="radio" name="checkbox2" class="ansvc ans2 box" style="margin-left:6.8px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansc"></span></li>
                        <li style="margin-left:25px;">D<input type="radio" name="checkbox2" class="ansvd ans2 box" style="margin-left:5.6px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansd"></span></li>
                    </ul>
                    <ul style="list-style:none;margin-top:30px;">
                        <li style="margin-left:25px;"><span id="quesid3" class="quesid"></span>.&nbsp;<span class="ques"></span></li>
                        <li style="margin-left:25px;" >A<input type="radio" name="checkbox3" class="ansva ans3 box" style="margin-left:6px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansa"></span></li>
                        <li style="margin-left:25px;">B<input type="radio" name="checkbox3" class="ansvb ans3 box" style="margin-left:7.6px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansb"></span></li>
                        <li style="margin-left:25px;">C<input type="radio" name="checkbox3" class="ansvc ans3 box" style="margin-left:6.8px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansc"></span></li>
                        <li style="margin-left:25px;">D<input type="radio" name="checkbox3" class="ansvd ans3 box" style="margin-left:5.6px;cursor: pointer;" value=""/>&nbsp;&nbsp;<span class="ansd"></span></li>
                    </ul>
                    <p class="pss"><input type="submit" value="提交" id="tijiao"></p>

                </div>

            </div>

        </div><!--右侧的结束-->
    </div>
    <style type="text/css">

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
            width: 88%;
            font-size: 16px;
            float: right;
            line-height: 40px;
            color: #000;
            margin-right: 15px;
            font-weight: bolder;
            display: block;
            text-align: center;
        }
        .login_bottom img{
            width: 60px;
        }
        @media (max-width: 768px) {
            .feosy{
                display: none;
            }
        }
    </style>
    <div style="clear: both;"></div>
    <div style="width: 100%;padding: 20px 0px;background: #961804;">
        <div class="login_bottom">
            <img src="../../../../www.etkqqzhdj.gov.cn/wp-content/themes/dangjian/newstyle/v3/images/dzjg-1.png" tppabs="http://www.etkqqzhdj.gov.cn/wp-content/themes/dangjian/newstyle/v3/images/dzjg-1.png">
            <span><div style="text-align:center;padding:20px 0;font-size:14px;">技术支持　<a href="http://fuwu.yinhaisoft.com" title="智慧党建" target="_blank">智慧党建</a>开发服务集团*mobile:13436570110</br></br></div>
                    </span>

        </div>
    </div>

    <!--      <style type="text/css">


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
                     <img src="http://www.etkqqzhdj.gov.cn/wp-content/themes/dangjian/newstyle/v3/images/dzjg-1.png">
                     <span><div style="text-align:center;padding:20px 0;font-size:14px;">技术支持　<a href="http://fuwu.yinhaisoft.com" title="智慧党建" target="_blank">智慧党建</a>开发服务集团*mobile:13436570110</br></br></div>
                     </span>

                 </div>
         </div>
       </div>
     </footer>  -->

</div><!--最大的DIV结束-->



</body>
<script>


    var winWidth = $(window).width();
    if(winWidth > 768) {
        $('.users').mouseover(function(){
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
        $('.users').click(function(){
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


    var id=1;
    $(".yi_caidan").eq(0).css({'backgroundColor':'#FC6','borderColor':'#fff'}).siblings(".yi_caidan").css({'backgroundColor':'#b21a05','borderColor':'#831000'})

    $.ajax({
        type:'POST',
        url:'/index.php/Home/Test/select',
        data:'id='+id,
        success: function(data){
            var msg=eval(data);
            for(var i=0;i<$("#yiyi ul").length;i++)
            {
                var uli=$("#yiyi ul").eq(i)
                uli.find(".quesid").html(msg[i]['id']);
                uli.find(".ques").html(msg[i]['wenti']);
                uli.find(".ansa").html(msg[i]['a']);
                uli.find(".ansb").html(msg[i]['b']);
                uli.find(".ansc").html(msg[i]['c']);
                uli.find(".ansd").html(msg[i]['d']);
                uli.find(".ansva").val(msg[i]['a']);
                uli.find(".ansvb").val(msg[i]['b']);
                uli.find(".ansvc").val(msg[i]['c']);
                uli.find(".ansvd").val(msg[i]['d']);
            }
        }
    })

    $(".yi_caidan").eq(0).attr('id','check').siblings(".yi_caidan").attr('id','notcheck');
    //location.replace("../Index/index.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index*/)  //点击刷新当前啊页面

    $(".yi_caidan").click(function(){

        var id=$(this).index()+1;
        $(this).css({'backgroundColor':'#FC6','borderColor':'#fff'}).siblings(".yi_caidan").css({'backgroundColor':'#b21a05','borderColor':'#831000'})

        if($(this).attr("id")!='check')
        {
            $.ajax({
                type:'POST',
                url:'/index.php/Home/Test/select',
                data:'id='+id,
                success: function(data){
                    var msg=eval(data);
                    for(var i=0;i<$("#yiyi ul").length;i++)
                    {
                        var uli=$("#yiyi ul").eq(i)
                        uli.find(".quesid").html(msg[i]['id']);
                        uli.find(".ques").html(msg[i]['wenti']);
                        uli.find(".ansa").html(msg[i]['a']);
                        uli.find(".ansb").html(msg[i]['b']);
                        uli.find(".ansc").html(msg[i]['c']);
                        uli.find(".ansd").html(msg[i]['d']);
                        uli.find(".ansva").val(msg[i]['a']);
                        uli.find(".ansvb").val(msg[i]['b']);
                        uli.find(".ansvc").val(msg[i]['c']);
                        uli.find(".ansvd").val(msg[i]['d']);
                    }

                }
            })
        }


        $(".box").each(function(){  //取消复选框选择
            $(this).attr("checked",false);
        });

        $(this).attr('id','check').siblings(".yi_caidan").attr('id','notcheck');

        $("#cuo").hide();

        $("#zheng1").hide();

        $("#zheng2").hide();
        $("#zheng3").hide();

    })


    // $(".left ul").mouseleave(function(){
    // 	$(".yi_caidan").eq(i).css({'backgroundColor':'#FC6','borderColor':'#fff','height':'50','line-height':'3.5'})

    // 	})
    $("#tijiao").click(function(){
        if($("input[name=checkbox1]:checked").val() == undefined || $("input[name=checkbox2]:checked").val() == undefined || $("input[name=checkbox3]:checked").val() == undefined) {
            alert("请选择答案");
        } else {
            var id1=$("#quesid1").html();
            var id2=$("#quesid2").html();
            var id3=$("#quesid3").html();
            var ans1="";
            var ans2="";
            var ans3="";


            for(var i=0;i<$(".ans1:checked").length;i++)
            {
                ans1+=","+$(".ans1:checked").eq(i).val();
            }
            for(var i=0;i<$(".ans2:checked").length;i++)
            {
                ans2+=","+$(".ans2:checked").eq(i).val();
            }
            for(var i=0;i<$(".ans3:checked").length;i++)
            {
                ans3+=","+$(".ans3:checked").eq(i).val();
            }

            $.ajax({
                type:'POST',
                url:'/index.php/Home/Test/dangjian',
                data:'id1='+id1+'&ans1='+ans1.substr(1)+'&id2='+id2+'&ans2='+ans2.substr(1)+'&id3='+id3+'&ans3='+ans3.substr(1),//substr(1)
                success:function(data){

                    // alert(data);return;
                    if((data)==3){

                        $("#zheng3").show();


                        $(".jixu").click(function(){

                            $("#zheng3").hide();
                        })
                        $("#zheng2").hide();
                        $("#zheng1").hide();
                        $("#cuo").hide();
                    }
                    /*if(data==1){
                        $("#wancheng").show();
                        }*/
                    if((data)==2){

                        $("#zheng2").show();
                        $(".jixu").click(function(){

                            $("#zheng2").hide();
                        })
                        $("#zheng3").hide();
                        $("#zheng1").hide();
                        $("#cuo").hide();
                    }

                    if((data)==1){

                        $("#zheng1").show();
                        $(".jixu").click(function(){

                            $("#zheng1").hide();
                        })
                        $("#zheng2").hide();
                        $("#zheng3").hide();

                        $("#cuo").hide();
                    }
                    if((data)==0){

                        $("#cuo").show();
                        $(".jixu").click(function(){

                            $("#cuo").hide();
                        })
                        $("#zheng1").hide();

                        $("#zheng2").hide();
                        $("#zheng3").hide();
                    }

                }
            })

            $(".box").each(function(){  //取消复选框选择
                $(this).attr("checked",false);
            });
        }

    })


    /*$(".yi_caidan").eq(0).attr('id','check').siblings(".yi_caidan").attr('id','notcheck');*/
    $(".jixu").click(function(){

        var id=$(this).index()+1;
        $(this).css({'backgroundColor':'#ea7909','borderColor':'#fff'}).siblings(".yi_caidan").css({'backgroundColor':'#b21a05','borderColor':'#831000'})

        if($(this).attr("id")!='check')
        {
            $.ajax({
                type:'POST',
                url:'/index.php/Home/Test/select',
                data:'id='+id,
                success: function(data){
                    var msg=eval(data);
                    for(var i=0;i<$("#yiyi ul").length;i++)
                    {
                        var uli=$("#yiyi ul").eq(i)
                        uli.find(".quesid").html(msg[i]['id']);
                        uli.find(".ques").html(msg[i]['wenti']);
                        uli.find(".ansa").html(msg[i]['a']);
                        uli.find(".ansb").html(msg[i]['b']);
                        uli.find(".ansc").html(msg[i]['c']);
                        uli.find(".ansd").html(msg[i]['d']);
                        uli.find(".ansva").val(msg[i]['a']);
                        uli.find(".ansvb").val(msg[i]['b']);
                        uli.find(".ansvc").val(msg[i]['c']);
                        uli.find(".ansvd").val(msg[i]['d']);
                    }
                }
            })
        }

        //location.replace("../Index/index.htm"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Index/index*/)  //点击刷新当前啊页面
    })

</script>
</html>