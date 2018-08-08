<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Xenon Boostrap Admin Panel"/>
    <meta name="author" content=""/>

    <title>后台管理系统</title>

    <link rel="stylesheet" href="/public/static/admin/assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/xenon-core.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/xenon-forms.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/xenon-components.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/xenon-skins.css">
    <link rel="stylesheet" href="/public/static/admin/assets/css/custom.css">
    <link rel="stylesheet" href="/public/static/admin/css/layer.css">
    <!--extra css-->
    <?php $__env->startSection('css'); ?>
    <?php echo $__env->yieldSection(); ?>
    <script src="/public/static/admin/assets/js/jquery-1.11.1.min.js"></script>
    <script src="/public/static/admin/js/layer.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/public/static/admin/assets/js/html5shiv.min.js"></script>
    <script src="/public/static/admin/assets/js/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body">
</div>

<div class="page-container">

    <div class="sidebar-menu toggle-others fixed">

        <div class="sidebar-menu-inner">

            <header class="logo-env">

                <!-- logo -->
                <div class="logo">
                    <a href="#" class="logo-expanded">
                        <img src="/public/static/admin/assets/images/logo@2x.png" width="80" alt=""/>
                    </a>

                    <a href="#" class="logo-collapsed">
                        <img src="/public/static/admin/assets/images/logo-collapsed@2x.png" width="40" alt=""/>
                    </a>
                </div>

                <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                <div class="mobile-menu-toggle visible-xs">

                    <a href="#" data-toggle="mobile-menu">
                        <i class="fa-bars"></i>
                    </a>
                </div>

            </header>


            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="<?php echo $__env->yieldContent('adminindex'); ?>">
                    <a href="/<?php echo e(config('webset.webdir')); ?>">
                        <i class="linecons-desktop"></i>
                        <span class="title">后台首页</span>
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('set'); ?>">
                    <a href="#">
                        <i class="linecons-cog"></i>
                        <span class="title">网站设置</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('webset'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/webset">
                                <span class="title">基本设置</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('jkset'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/jkset">
                                <span class="title">接口设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('new'); ?>">
                    <a href="#">
                        <i class="linecons-heart"></i>
                        <span class="title">自动尝鲜</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('autocx'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/autocx">
                                <span class="title">尝鲜设置</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('playerset'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/playerset">
                                <span class="title">播放器设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('vip'); ?>">
                    <a href="#">
                        <i class="linecons-graduation-cap"></i>
                        <span class="title">会员视频</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('newlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/newmovielist">
                                <span class="title">视频列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addnew'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addnewmovie">
                                <span class="title">增加视频</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('user'); ?>">
                    <a href="#">
                        <i class="linecons-user"></i>
                        <span class="title">会员管理</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('userlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/userlist">
                                <span class="title">会员列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('userset'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/userset">
                                <span class="title">会员设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('kami'); ?>">
                    <a href="#">
                        <i class="linecons-wallet"></i>
                        <span class="title">卡密管理</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('kamilist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/kamilist.html">
                                <span class="title">卡密列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('kamisc'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/makekami.html">
                                <span class="title">卡密生成</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('banner'); ?>">
                    <a href="#">
                        <i class="linecons-photo"></i>
                        <span class="title">首页轮播</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('bannerlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/bannerlist">
                                <span class="title">轮播列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addbanner'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addbanner">
                                <span class="title">添加轮播</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('nav'); ?>">
                    <a href="#">
                        <i class="linecons-params"></i>
                        <span class="title">导航管理</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('navlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/navlist">
                                <span class="title">导航列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addnav'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addnav">
                                <span class="title">添加导航</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('zb'); ?>">
                    <a href="#">
                        <i class="linecons-videocam"></i>
                        <span class="title">电视直播</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('zblist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/zblist">
                                <span class="title">直播列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addzb'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addzb">
                                <span class="title">增加直播</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addzb2'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addzb2">
                                <span class="title">批量添加</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('wx'); ?>">
                    <a href="#">
                        <i class="linecons-comment"></i>
                        <span class="title">微信管理</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('weixin'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/weixin">
                                <span class="title">基本设置</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('yq'); ?>">
                    <a href="#">
                        <i class="linecons-heart"></i>
                        <span class="title">友情链接</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('yqlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/yqlinklist">
                                <span class="title">友链列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addyq'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addyqlink">
                                <span class="title">添加友链</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('app'); ?>">
                    <a href="#">
                        <i class="linecons-shop"></i>
                        <span class="title">APP管理</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('appinfo'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/appinfo">
                                <span class="title">APP信息</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('qq'); ?>">
                    <a href="#">
                        <i class="linecons-truck"></i>
                        <span class="title">侵权设置</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('qqlist'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/qqlist">
                                <span class="title">侵权列表</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('addqq'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/addqq">
                                <span class="title">添加侵权</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('security'); ?>">
                    <a href="#">
                        <i class="linecons-eye"></i>
                        <span class="title">安全防御</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('ccdefense'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/ccdefense">
                                <span class="title">CC防御</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo $__env->yieldContent('ad'); ?>">
                    <a href="/<?php echo e(config('webset.webdir')); ?>/setad">
                        <i class="linecons-megaphone"></i>
                        <span class="title">广告管理</span>
                    </a>
                </li>
                <li class="<?php echo $__env->yieldContent('cache'); ?>">
                    <a href="#">
                        <i class="linecons-inbox"></i>
                        <span class="title">缓存相关</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('cacheset'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/cacheset">
                                <span class="title">缓存设置</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('cacheindex'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/cache">
                                <span class="title">首页缓存</span>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="<?php echo $__env->yieldContent('otherkill'); ?>">

                    <a href="#">
                        <i class="linecons-doc"></i>
                        <span class="title">其他功能</span>
                    </a>
                    <ul>
                        <li class="<?php echo $__env->yieldContent('passwd'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/editadmin">
                                <i class="linecons-lock"></i>
                                <span class="title">修改密码</span>
                            </a>
                        </li>
                        <li class="<?php echo $__env->yieldContent('short'); ?>">
                            <a href="/<?php echo e(config('webset.webdir')); ?>/shorturl">
                                <i class="linecons-paper-plane"></i>
                                <span class="title">短网址生成</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="/">
                                <i class="linecons-cloud"></i>
                                <span class="title">站点首页</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>
    <div class="main-content">

        <!-- User Info, Notifications and Menu Bar -->
        <nav class="navbar user-info-navbar" role="navigation">

            <!-- Left links for user info navbar -->
            <ul class="user-info-menu left-links list-inline list-unstyled">

                <li class="hidden-sm hidden-xs">
                    <a href="#" data-toggle="sidebar">
                        <i class="fa-bars"></i>
                    </a>
                </li>
            </ul>


            <!-- Right links for user info navbar -->
            <ul class="user-info-menu right-links list-inline list-unstyled">
                <li class="dropdown user-profile">
                    <a href="#" data-toggle="dropdown">
                        <img src="/public/static/admin/assets/images/user-4.png" alt="user-image"
                             class="img-circle img-inline userpic-32" width="28"/>
                        <span>
								<?php echo e(session('adminname')); ?>

                            <i class="fa-angle-down"></i>
							</span>
                    </a>

                    <ul class="dropdown-menu user-profile-menu list-unstyled">
                        <li>
                            <a href="/" target="_blank">
                                <i class="fa-desktop"></i>
                                站点首页
                            </a>
                        </li>
                        <li>
                            <a href="/<?php echo e(config('webset.webdir')); ?>/editadmin">
                                <i class="fa-edit"></i>
                                修改密码
                            </a>
                        </li>
                        <li class="last">
                            <a href="/adminloginout">
                                <i class="fa-lock"></i>
                                注销
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </nav>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
        <footer class="main-footer sticky footer-type-1">

            <div class="footer-inner">

                <!-- Add your copyright text here -->
                <div class="footer-text">
                    &copy; 2017
                    <strong>BY:淡心心心</strong>
                </div>


                <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                <div class="go-up">

                    <a href="#" rel="go-top">
                        <i class="fa-angle-up"></i>
                    </a>

                </div>

            </div>

        </footer>
    </div>
</div>


<div class="page-loading-overlay">
    <div class="loader-2"></div>
</div>


<!-- Bottom Scripts -->
<script src="/public/static/admin/assets/js/bootstrap.min.js"></script>
<script src="/public/static/admin/assets/js/TweenMax.min.js"></script>
<script src="/public/static/admin/assets/js/resizeable.js"></script>
<script src="/public/static/admin/assets/js/joinable.js"></script>
<script src="/public/static/admin/assets/js/xenon-api.js"></script>
<script src="/public/static/admin/assets/js/xenon-toggles.js"></script>


<!-- Imported scripts on this page -->
<script src="/public/static/admin/assets/js/xenon-widgets.js"></script>
<script src="/public/static/admin/assets/js/devexpress-web-14.1/js/knockout-3.1.0.js"></script>
<script src="/public/static/admin/assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
<script src="/public/static/admin/assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>

<!--extra js-->
<?php $__env->startSection('js'); ?>
<?php echo $__env->yieldSection(); ?>


<!-- JavaScripts initializations and stuff -->
<script src="/public/static/admin/assets/js/xenon-custom.js"></script>

</body>
<script>
    function autocache(webdir, webaction) {
        layer.msg('正在刷新缓存中', {
            icon: 16
            , shade: 0.01, time: 10 * 1000
        });
        $.ajax({
            type: "get",
            url: "/action/flushcache/index",
            dataType: "json",
            success: function (resp) {
                if (resp.status == 200) {
                    layer.msg(resp.msg);
                    window.location = '/' + webdir + '/' + webaction;
                }
                else {
                    layer.msg(resp.msg)
                }
            }
        })
    }
</script>
</html>