<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\PHPTutorial\WWW\xx\public/../application/xyb\view\login\index.html";i:1563603892;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>智慧党建平台</title>
    <meta name="keywords" content="智慧党建平台" />
    <meta name="description" content="智慧党建平台" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/static/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/static/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/static/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <!--	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

    <!-- ace styles -->

    <link rel="stylesheet" href="/static/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/static/assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/static/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src="/static/js/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/static/assets/js/html5shiv.js"></script>
    <script src="/static/assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="/static/layer/layer.js"></script>
</head>
<style>
    html {
        height: 100%;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        overflow: hidden;
    }
    @keyframes animStar {
        from {
            transform: translateY(0px);
        }
        to {
            transform: translateY(-2000px);
        }
    }
    .signin{
        background-image: none;
    }
    body{
        background-color: transparent;
        overflow-x: initial;
    }
    .col-sm-offset-1{
        padding-top: 10%;
    }
</style>
<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <span class="white" style="font-size: 20px;">智慧党建平台</span>
                        </h1>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="icon-coffee green"></i>
                                        快来登陆吧！ ( ^_^ )
                                    </h4>

                                    <div class="space-6"></div>

                                    <form method="post" action="<?php echo url('login/sign_in'); ?>" onsubmit="return check();">
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control user_login" placeholder="账号" name="user_login"/>
															<i class="icon-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control user_pass" placeholder="密码" name="user_pass"/>
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right" style="width:50%">
															<input type="text" class="form-control" placeholder="验证码" id="verify" name="verify"/>
															<i class="icon-pencil"></i>
														</span>
                                                <img src="<?php echo captcha_src(); ?>" style="float: right;margin-top: -35px;height:45px;cursor: pointer"  onclick="this.src='<?php echo captcha_src(); ?>?x='+Math.random();" alt="点击刷新" title="点击刷新"/>

                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="icon-key"></i>
                                                    登陆
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                </div><!-- /widget-main -->

                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->

                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->

<!-- basic scripts -->


<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/public/static/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/public/static/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
</body>
<script>
    function check(){
        var account = $.trim($('input[name="user_login"]').val());
        var pwd = $.trim($('input[name="user_pass"]').val());
        var verify = $.trim($('#verify').val());
        if(account == ''){
            layer.tips('请输入账号','.user_login',{
                tips: [4, '#3595CC'],
                time: 3000
            });
            return false;
        }
        if(pwd == ''){
            layer.tips('请输入密码','.user_pass',{
                tips: [4, '#3595CC'],
                time: 3000
            });
            return false;
        }
        if(verify == ''){
            layer.tips('请输入验证码','#verify',{
                tips: [4, '#3595CC'],
                time: 3000
            });
            return false;
        }
    }
</script>
</html>
