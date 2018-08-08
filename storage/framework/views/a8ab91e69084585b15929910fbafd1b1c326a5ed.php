<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="cache-control" content="no-siteapp">
    <title><?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="<?php echo e(config('webset.webkeywords')?config('webset.webkeywords'):'全网vip免费看'); ?>">
    <meta name="description" content="<?php echo e(config('webset.webname')); ?>-<?php echo e(config('webset.websubname')); ?>-<?php echo $__env->yieldContent('title'); ?>-<?php echo e(config('webset.wedesc')?config('webset.wedesc'):'全网vip免费看'); ?>">
    <link rel="stylesheet" href="/public/static/wapian/css/bootstrap.min.css"/>
    <link href="/public/static/wapian/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="/public/static/wapian/css/iconfont.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/wapian/css/iconfont2.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/wapian/css/<?php echo e(config('webset.theme')); ?>color.css" rel="stylesheet" type="text/css"/>
    <link href="/public/static/wapian/css/style.min.css" rel="stylesheet" type="text/css"/>
    <script type='text/javascript' src="/public/static/wapian/js/swiper.min.js"></script>
    <script type='text/javascript' src="/public/static/wapian/js/system.js"></script>
    <script src="/public/static/wapian/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/static/wapian/js/su.js"></script>
    <script type="text/javascript" src="/public/static/wapian/js/lazyload.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/public/static/wapian/js/html5.js"></script><![endif]-->
    <?php $__env->startSection('other'); ?>
     <?php echo $__env->yieldSection(); ?>
    <style>
        #ys {
            background: deepskyblue;
            color: black;
        }
        .jkbtn{
            background: deepskyblue;
            color: black;
        }
    </style>
</head>
<body class="<?php echo $__env->yieldContent('body'); ?>">
<div class="hy-head-menu">
    <div class="container">
        <div class="row">
            <div class="item">
                <div class="logo">
                    <a class="hidden-sm hidden-xs" href="/"><img src="/public/static/wapian/images/logo.png" height="50px" width="150px"/></a>
                </div>
                <div class="search  hidden-sm">
                    <div id="ff-search" role="search">
                        <input class="form-control" placeholder="输入影片关键词..." type="text" id="ff-wd" name="wd" required="">
                        <input type="submit" class="hide"><a href="javascript:" class="btns" title="搜索" id="sousuo"><i class="icon iconfont icon-search"></i></a>
                    </div>
                </div>
                <ul class="menulist hidden-xs">
                    <?php if($navlist): ?>
                     <?php $__currentLoopData = $navlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li id="nav-index"><a href="<?php echo e($v['nav_addr']); ?>"><?php echo e($v['nav_title']); ?></a></li>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <li id="nav-down"><?php echo config('appconfig.isdh')?'<a href="/app.html" target="_blank">'.config('appconfig.appdh').'</a>':''; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('content'); ?>
<?php echo $__env->yieldSection(); ?>
<div class="hy-gototop hidden-sm hidden-xs">
    <ul class="item clearfix">
        <li><a data-toggle="tooltip" data-placement="top" class="" href="javascript:scroll(0,0)" title="返回顶部"><i class="icon iconfont icon-uparrow"></i></a></li>
    </ul>
</div>
<div class="tabbar visible-xs">
    <a href="/" class="item ">
        <i class="icon iconfont icon-home"></i>
        <p class="text">首页</p>
    </a>
    <a href="/movielist/all/1.html" class="item ">
        <i class="icon iconfont icon-film"></i>
        <p class="text">电影</p>
    </a><a href="/tvlist/all/1.html" class="item ">
        <i class="icon iconfont icon-show"></i>
        <p class="text">电视剧</p>
    </a><a href="/dmlist/all/1.html" class="item ">
        <i class="icon iconfont icon-mallanimation"></i>
        <p class="text">动漫</p>
    </a><a href="/zylist/all/1.html" class="item ">
        <i class="icon iconfont icon-flag"></i>
        <p class="text">综艺</p>
    </a>
</div>

    <div class="container">
    <div class="row">
        <div class="hy-footer clearfix">
            <p style="padding: 0 4px;text-align:center" class="container-fluid">
                本站提供的最新电影和电视剧资源均系收集于各大视频网站,本站只提供web页面服务,并不提供影片资源存储,也不参与录制、上传<br/>
                若本站收录的节目无意侵犯了贵司版权，请给网页底部邮箱地址来信,我们会及时处理和回复,谢谢。<br/>
                管理员邮箱：<?php echo e(config('webset.webmail')); ?> <br/>
            <center><div><?php echo config('webset.webtongji'); ?></div></center>
            <p>Copyright:<a href="#" target="_blank"><?php echo e(config('webset.webicp')); ?>-<?php echo e(config('webset.copyright')); ?></a></p></p>
        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        $('#sousuo').click(function () {
            var key = $('#ff-wd').val();
            if (key != '' && key != null) {
                window.location = '/search/' + key + '.html'
            }
        });

        $('input').keyup(function () {
            if (event.keyCode == 13) {
                $("#sousuo").trigger("click");
            }
        });

        $('.lazy').lazyload({
            placeholder:"/public/static/wapian/images/loading.gif",
            effect : "fadeIn", //渐现，show(直接显示),fadeIn(淡入),slideDown(下拉)
            threshold : 180, //预加载，在图片距离屏幕180px时提前载入
        });
    })
</script>
<script>
    function jilu(obj) {
        var url = $(obj).attr('href');
        var img = $(obj).attr('src');
        var title = $(obj).attr('title');
        $.ajax({
            type: "get",
            url: "/history",
            dataType: "json",
            data: {"url": url, "img": img, "title": title},
            success: function () {

            }
        })
    }
</script>
</html>
