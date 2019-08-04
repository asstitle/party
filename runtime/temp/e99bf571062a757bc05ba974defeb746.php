<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"D:\PHPTutorial\WWW\xx\public/../application/home\view\index\details.html";i:1564911912;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\header.html";i:1563979038;s:62:"D:\PHPTutorial\WWW\xx\application\home\view\public\footer.html";i:1563979038;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 ,maximum-scale=1,user-scalable=no">
    <meta name="keywords" content="智慧党建,党员教育，在线考核" />
    <meta name="description" content="智慧党建平台" />
    <title>善缘-智慧党建平台-党员教育</title>
    <link rel="stylesheet" type="text/css" href="/static/home/Css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/Css/details.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/Public/Css/hanyu.css" /> -->
    <link rel="stylesheet" type="text/css" href="/static/home/Css/header.css"  />
    <script type="text/javascript" src="/static/home/Js/jquery-1.8.2.min.js" ></script>
    <script type="text/javascript" src="/static/home/Js/bootstrap.min.js" ></script>
    <title>详情页</title>
    <script>
        $(function(){
            var uid = $("#user-id").val();
            //选项卡颜色
            var type = $("#type").val();
            $('.first a').eq(type - 1).css({color:'#d80311'});
            //收藏信息，如果没有收藏:鼠标移上去变红
            //否则 永久变红
            var collectStatus = $("#collect").val();
            if(collectStatus == 0) {
                $(".collect").hover(function() {
                    $(".collect").each(function(i) {
                        $(this).css('color', '#d80311');
                    });
                }, function(){
                    $(".collect").each(function(i) {
                        $(this).css('color', '');
                    });
                });
            } else {
                $(".collect").each(function(i) {
                    $(this).css('color', '#d80311');
                });
                $(".collect:last").html("已收藏");
            }
            //点击收藏，收藏或取消
            var courseId = $("#course-id").val();

            if(uid != '') {
                $(".collect").click(function() {
                    if(collectStatus == 0) collectStatus = 1;
                    else collectStatus = 0;
                    $.post("collect.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/collect.html*/, {uid : uid, course_id : courseId, status : collectStatus}, function(data) {
                        if(data == 'get') {
                            if(collectStatus == 1) {
                                //解绑所有事件
                                $(".collect").unbind("hover");
                                $(".collect").unbind("mouseover");
                                $(".collect").unbind("mouseout");
                                $(".collect").each(function(i) {
                                    $(this).css('color', '#d80311');
                                    $(".collect:last").html("已收藏");
                                });
                            } else {
                                //绑定hover
                                $(".collect").each(function(i) {
                                    $(this).css('color', '');
                                });
                                $(".collect:last").html("收藏");
                                $(".collect").bind({mouseover : function(){
                                        $(".collect").each(function(i) {
                                            $(this).css('color', '#d80311');
                                        });
                                    }, mouseout : function() {
                                        $(".collect").each(function(i) {
                                            $(this).css('color', '');
                                        });
                                    }});

                            }

                        } else {
                            alert(data);
                        }

                    });
                });
            } else {
                $(".collect").click(function() {
                    location.href = "../Deng/xuedeng.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html*/;
                });
            }

            //分享 变色
            $(".share").hover(function() {
                $(".share").each(function(i) {
                    $(this).css('color', '#d80311');
                });
            }, function(){
                $(".share").each(function(i) {
                    $(this).css('color', '');
                });
            });

            //学习功能
            var learnStatus = $("#learn").val();
            if(learnStatus == 0 && uid != '') {
                $(".jiaru").click(function() {
                    learnStatus = 1;
                    $.post("http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/learn.html", {uid : uid, course_id : courseId, status : learnStatus}, function(data) {
                        if(data == 'get') {
                            location.href = location.href;
                        } else {
                            alert(data);
                        }
                    });
                })
            };
            //头像css
            /*var headImgWidth = $(".head-img").width();
            $(".head-img").css({
                height : headImgWidth,
                borderRadius : headImgWidth
            });*/
            //心得正文 打开关闭
            var winWidth = $(window).width();

            if(winWidth > 768) {
                $(".rated-body").css({
                    whiteSpace   : 'nowrap',
                    overflow     : 'hidden',
                    textOverflow : 'ellipsis',
                    width        : '360px'
                });
                //点击展开
                $(".unfold-body").click(function() {
                    var ufType = $(this).attr("unfoldtype");
                    if(ufType == 0) {
                        $(this).parents(".a-rated-box").find(".rated-body").css({
                            whiteSpace : '',
                            width      : '100%'
                        });
                        $(this).attr("unfoldtype", 1);
                        $(this).html('[收起全文-]');
                    } else if (ufType == 1) {
                        $(this).parents(".a-rated-box").find(".rated-body").css({
                            whiteSpace   : 'nowrap',
                            overflow     : 'hidden',
                            textOverflow : 'ellipsis',
                            width        : '360px'
                        });
                        $(this).attr("unfoldtype", 0);
                        $(this).html('[展开全文+]');
                    }

                });
            } else {
                $(".rated-body").css({
                    whiteSpace   : 'nowrap',
                    overflow     : 'hidden',
                    textOverflow : 'ellipsis',
                    width        : '200px'
                });
                //点击展开
                $(".unfold-body").click(function() {
                    var ufType = $(this).attr("unfoldtype");
                    if(ufType == 0) {
                        $(this).parents(".a-rated-box").find(".rated-body").css({
                            whiteSpace : '',
                            width      : '100%'
                        });
                        $(this).attr("unfoldtype", 1);
                        $(this).html('[收起全文-]');
                    } else if (ufType == 1) {
                        $(this).parents(".a-rated-box").find(".rated-body").css({
                            whiteSpace   : 'nowrap',
                            overflow     : 'hidden',
                            textOverflow : 'ellipsis',
                            width        : '200px'
                        });
                        $(this).attr("unfoldtype", 0);
                        $(this).html('[展开全文+]');
                    }

                });
            }


            //保存心得
            $(".save").click(function() {
                if (uid == '') {
                    location.href = "../Deng/xuedeng.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html*/;
                } else {
                    var detail = $(".text-area").val();
                    $.post("rated.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/rated.html*/, {uid : uid, course_id : courseId, detail : detail}, function(data) {
                        if(data == 'get') {
                            location.href = location.href;
                        } else if (data == 'score') {
                            alert('发表成功，积分+3');
                            location.href = location.href;
                        } else {
                            alert(data);
                        }
                    });
                }

            });

            //显示或隐藏心得输入框
            var present = $("#present").val();
            if(present == '') {
                $(".again").hide();
            } else {
                $(".hid-form").hide();
            }
            //重新评价按钮
            $(".again").click(function() {
                $(this).hide();
                $(".hid-form").slideDown(300);
            });

            //用户头像
            $(".users").hover(function(){
                $(this).find(".user-info").fadeIn();
            },function(){
                $(this).find(".user-info").hide();
            });

            //关注
            $(".user-info-follow").click(function() {
                var userid = $(this).attr("hid");
                if(uid == '') {
                    location.href = "../Deng/xuedeng.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Deng/xuedeng.html*/;
                } else {
                    $.post("../Tec/getFollow.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/getFollow.html*/, {uid : uid, secondid : userid}, function(data) {
                        if(data == 'get') location.href = location.href;
                        else alert(data);
                    });
                }
            });
            //取消关注
            $(".user-info-cancel").click(function() {
                var userid = $(this).attr("hid");
                $.post("../Tec/cancelFollow.html"/*tpa=http://zaixiankaohe.12371.ac.cn/index.php/Home/Tec/cancelFollow.html*/, {uid : uid, secondid : userid}, function(data) {
                    if(data == 'get') location.href = location.href;
                    else alert(data);
                });
            });

            $('.list_course').mouseover(function(){
                $(this).css({backgroundColor:'#efeeec'}).siblings('.list li').css({backgroundColor:'#fff'});
            })
            $('.list_course').mouseleave(function(){
                $(this).css({backgroundColor:'#fff'});
            })

            $('.note span').mouseover(function(){
                $(this).css({color:'#d80311'});
            })
            $('.note span').mouseleave(function(){
                $(this).css({color:'#666'});
            })

            $('.allcourse').mouseover(function(){
                $(this).css({backgroundColor:'#d1d1d1'});
            })
            $('.allcourse').mouseleave(function(){
                $(this).css({backgroundColor:'#f0f0ef'});
            })
            $('.allcourse').click(function(){
                $('.course').show();
            })
            $('.allcourse').blur(function(){
                $('.course').hide();
            })

            $('.course li').mouseover(function(){
                $(this).css({backgroundColor:'#fe0616',color:'#f6f5f5'
                }).siblings('.course li').css({backgroundColor:'#fff',color:'#666'
                });
            })
            $('.course li').mouseleave(function(){
                $(this).css({backgroundColor:'#fff',color:'#666'});
            })

        })
    </script>
</head>

<body style="background-color:#efeeec;position:relative;">
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
        <li><a href="../Index/index.html" >首页</a></li>
        <li><a href="../Study/study.html"  target="_blank">党员学习情况</a>
        </li>
        <li class="test"><a href="../Test/index.html">在线测试</a></li>
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
        <li><a href="../Hanyu/infor.html"  style="display: block;"><span class="glyphicon glyphicon-cog"></span>&nbsp;个人设置</a></li>
        <li><a href="../Hanyu/emptys.html"  style="display: block;"><span class="glyphicon glyphicon-off"></span>&nbsp;退出登录</a></li>
    </ul>
</div>
<div class="mymess" style="border:1px solid #e7e7e7;height: 40px;"	>
    <ul>
        <li style="height: 100%;"><a href="../Comment/notice.html"  style="display: block;"><span class="glyphicon glyphicon-bell"></span>&nbsp;通知</a></li>
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


<input type="hidden" id="type" value="1" />
<input type="hidden" id="collect" value="0" />
<input type="hidden" id="course-id" value="169" />
<input type="hidden" id="user-id" value="" />
<input type="hidden" id="learn" value="0" />
<input type="hidden" id="present" value="" />

<div class="from">
    <div class="from_1"><a href="<?php echo url('index/index'); ?>" >首页</a></div>
    <span>/</span>
    <div class="from_1"><a href="../Hanyu/lists.html-tid=39.htm" ><?php echo $now_name; ?></a></div>
    <span>/</span>
    <div class="from_1" style="color:#999;"><?php echo $info['curriculum_name']; ?></div>
</div>
<div class="container">
    <div class="row sec_top">
        <div class="col-sm-4 cover"><img  src="/uploads/<?php echo $info['pic']; ?>"  /></div>
        <div class="col-sm-4">
            <div class="titles"><?php echo $info['curriculum_name']; ?>
                <!-- 二维码 -->
                <!-- <span class="glyphicon glyphicon-qrcode"></span> --></div>
        </div>
        <div class="col-sm-4 collect-box">
            <div class="geren">
                <i class="glyphicon glyphicon-user"></i><span>&nbsp;<?php echo $info['study_num']; ?></span><span>人</span>
            </div>
            <div class="cang">
                <ul class="cang_lef">
                    <li class="glyphicon glyphicon-bookmark collect" style="font-size:20px;"></li>
                    <li class="collect">收藏</li>
                </ul>
                <ul class="cang_lef">
                    <li class="glyphicon glyphicon-share share" style="font-size:20px;"></li>
                    <li class="share">分享</li>
                </ul>
            </div>
            <div style="clear:both;"></div>
            <div class="jiaru">
                <a href="../Deng/xuedeng.html"  style="color:#fff;text-decoration: none;display: block;">加入学习</a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row sec" style="margin-top:15px;">
        <div class="col-sm-9">
            <ul class="first">
                <li><a href="javascript:if(confirm('http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/tec.html?userid=3908&type=5  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ������, �����������, ����Ŀ����ֹͣ��  \n\n�����ڷ������ϴ���?'))window.location='http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/tec.html?userid=3908&type=5'" tppabs="http://zaixiankaohe.12371.ac.cn/index.php/Home/Details/details.html?id=169&type=1">课程列表</a></li>
                <li><a href="details.html-id=300&type=1.htm" >课程概览</a></li>
                <li><a href="details.html-id=300&type=2.htm" >心得体会</a></li>
                <li><a href="details.html-id=300&type=3.htm" >资料区</a></li>
            </ul>
            <div style="clear:both;"></div>
            <div class="list">
                <ul>
                    <?php if(is_array($course_list) || $course_list instanceof \think\Collection || $course_list instanceof \think\Paginator): $i = 0; $__LIST__ = $course_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
                    <li class="list_course"><span></span>
                        <a href="<?php echo url('detail/course',['id'=>$k['id']]); ?>" style="color:#555"><?php echo $k['title']; ?></a>
                        <span  class="glyphicon glyphicon-film course-icon" title="视频课程" ></span>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <!-- 心得 -->
        </div>
        <div class="col-sm-3 bottom-box">
            <div class="teacher">
                <div class="teach_intro">授课教师</div>
                <div class="teach_pic">
                    <div class="teach-head-box">
                        <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_photo/image/20170619170130aidf.jpg"  class="teach-head" />                        </div>
                    <ul class="teach_infor">
                        <li><a href="../Tec/tec.html-userid=5335.htm" >贾文林</a></li>
                    </ul>
                </div>
            </div>
            <div class="student">
                <div class="stu_intro">最新学员</div>
                <div class="stu_pic">
                    <div class="users">
                        <a href="../Tec/tec.html-userid=4109.htm"  class="head-pics-box">
                            <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170331214210a6x1.jpg"  class="head-pics" />                            </a>
                        <div class="user-info">
                            <div class="user-info-head">
                                <div class="head-pic-box">
                                    <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170331214210a6x1.jpg"  class="head-pic" />
                                </div>
                                <a href="../Tec/tec.html-userid=4109.htm" class="user-info-name">刘志兰</a>
                                <div class="head-right">
                                    <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="4109" value="关注" />
                                </div>
                            </div>
                            <div class="user-info-idiograph">
                                清白做人，干净做事，让每一天都不虚度，让每一天都有价值，生活就会对你发出由衷的微笑。
                            </div>
                            <div class="user-info-foot">
                                <a href="../Tec/tec.html-userid=4109&type=2.htm" >
                                    <div class="foot-elements">
                                        <p>47</p>
                                        <p>在学</p>
                                    </div>
                                </a>
                                <a href="../Tec/tec.html-userid=4109&type=4.htm" >
                                    <div class="foot-elements">
                                        <p>0</p>
                                        <p>关注</p>
                                    </div>
                                </a>
                                <a href="../Tec/tec.html-userid=4109&type=5.htm" >
                                    <div class="foot-elements">
                                        <p>1</p>
                                        <p>粉丝</p>
                                    </div>
                                </a>
                                <div class="user-triangle"></div>
                            </div>
                        </div>
                    </div><div class="users">
                    <a href="../Tec/tec.html-userid=3788.htm" class="head-pics-box">
                        <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/201702071118138t6q.jpg"  class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/201702071118138t6q.jpg"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=3788.htm"  class="user-info-name">查汉东</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="3788" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            <span class="un-idiograph">还没有签名</span>
                        </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=3788&type=2.htm" >
                                <div class="foot-elements">
                                    <p>198</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=3788&type=4.htm" >
                                <div class="foot-elements">
                                    <p>2</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=3788&type=5.htm" >
                                <div class="foot-elements">
                                    <p>6</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=881.htm" class="head-pics-box">
                        <img src="/static/home/Images/1_03.png"  class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="/static/home/Images/1_03.png"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=881.htm"  class="user-info-name">吕飞勋</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="881" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            <span class="un-idiograph">还没有签名</span>
                        </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=881&type=2.htm" >
                                <div class="foot-elements">
                                    <p>92</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=881&type=4.htm" >
                                <div class="foot-elements">
                                    <p>0</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=881&type=5.htm" >
                                <div class="foot-elements">
                                    <p>3</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=2324.htm"  class="head-pics-box">
                        <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170322104632x3k0.jpg"  class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170322104632x3k0.jpg"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=2324.htm" class="user-info-name">道尔吉</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="2324" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            道尔吉                                </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=2324&type=2.htm" >
                                <div class="foot-elements">
                                    <p>177</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2324&type=4.htm">
                                <div class="foot-elements">
                                    <p>2</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2324&type=5.htm" >
                                <div class="foot-elements">
                                    <p>4</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=2194.htm" class="head-pics-box">
                        <img src="/static/home/Images/1_03.png" class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="/static/home/Images/1_03.png"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=2194.htm" class="user-info-name">杜日斯哈勒</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="2194" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            <span class="un-idiograph">还没有签名</span>
                        </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=2194&type=2.htm" >
                                <div class="foot-elements">
                                    <p>161</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2194&type=4.htm" >
                                <div class="foot-elements">
                                    <p>1</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2194&type=5.htm" >
                                <div class="foot-elements">
                                    <p>2</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=2188.htm"  class="head-pics-box">
                        <img src="/static/home/Images/1_03.png"  class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="/static/home/Images/1_03.png" class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=2188.htm" class="user-info-name">布音吉日嘎拉</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="2188" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            布音吉日嘎拉
                        </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=2188&type=2.htm">
                                <div class="foot-elements">
                                    <p>191</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2188&type=4.htm">
                                <div class="foot-elements">
                                    <p>1</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2188&type=5.htm" >
                                <div class="foot-elements">
                                    <p>1</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=2700.htm"  class="head-pics-box">
                        <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170316112601c9ck.jpg" class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170316112601c9ck.jpg"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=2700.htm"  class="user-info-name">刘培兴</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="2700" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            做合格党员。                                </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=2700&type=2.htm" >
                                <div class="foot-elements">
                                    <p>127</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2700&type=4.htm" >
                                <div class="foot-elements">
                                    <p>3</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2700&type=5.htm" >
                                <div class="foot-elements">
                                    <p>2</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div><div class="users">
                    <a href="../Tec/tec.html-userid=2517.htm" class="head-pics-box">
                        <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170316085659si6n.jpg"  class="head-pics" />
                    </a>
                    <div class="user-info">
                        <div class="user-info-head">
                            <div class="head-pic-box">
                                <img src="../../../../zaixiankaohe.12371.ac.cn/cpc_user/img/20170316085659si6n.jpg"  class="head-pic" />
                            </div>
                            <a href="../Tec/tec.html-userid=2517.htm"  class="user-info-name">布和</a>
                            <div class="head-right">
                                <input type="button" class="btn btn-danger btn-xs user-info-follow" hid="2517" value="关注" />
                            </div>
                        </div>
                        <div class="user-info-idiograph">
                            <span class="un-idiograph">还没有签名</span>
                        </div>
                        <div class="user-info-foot">
                            <a href="../Tec/tec.html-userid=2517&type=2.htm" >
                                <div class="foot-elements">
                                    <p>141</p>
                                    <p>在学</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2517&type=4.htm">
                                <div class="foot-elements">
                                    <p>0</p>
                                    <p>关注</p>
                                </div>
                            </a>
                            <a href="../Tec/tec.html-userid=2517&type=5.htm">
                                <div class="foot-elements">
                                    <p>1</p>
                                    <p>粉丝</p>
                                </div>
                            </a>
                            <div class="user-triangle"></div>
                        </div>
                    </div>
                </div>                    </div>
            </div>
            <div style="clear: both;"></div>

        </div>

    </div>
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
</body>