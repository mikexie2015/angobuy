<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/angobuy/Tpl/Pub/Css/global.css" />
<script type="text/javascript" src="/angobuy/Tpl/Pub/Js/jquery.min.js"></script>
<title>首页</title>
<!-- 页面header钩子，一般用于加载插件CSS文件和代码 -->
<?php echo hook('pageHeader');?>

</head>
<body>
	<!-- 头部 -->
	<!-- 导航条
================================================== -->
<div class="nav">
    <div class="fl">
        <ul>
            <li><a href='<?php echo U("index/index");?>'>首页</a></li>
            <li>关注我们</li>
            <li><a href="">请登录</a></li>
            <li><a href="">免费注册</a></li>
        </ul>
    </div>
    <div class="fr">
        <ul>
            <li><a href="">会员中心</a></li>
            <li><span>交易热线:400-800-8888</span></li>
            <li><a href="">交易资讯</a></li>
        </ul>
    </div>
</div>

	<!-- /头部 -->
	
	<!-- 主体 -->
	
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h2>源自相同起点，演绎不同精彩！</h2>
            <p class="lead"></p>
        </div>
    </header>

<div id="main-container" class="container">
    <div class="row">
        
    <!-- 左侧 nav
    ================================================== -->
    <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
            <?php echo W('Category/lists', array(1, true));?>
        </ul>
    </div>

        
    <div class="span9">
        <!-- Contents
        ================================================== -->


        </section>
    </div>

    </div>
</div>

<script type="text/javascript">
    $(function () {
        $(window).resize(function () {
            $("#main-container").css("min-height", $(window).height() - 343);
        }).resize();
    })
</script>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部
    ================================================== -->
    <footer class="footer">
      <div class="container">
          <p> 本站由 <strong><a href="http://www.onethink.cn" target="_blank">Angobuy</a></strong> 强力驱动</p>
      </div>
    </footer>


 <!-- 用于加载js代码 -->
<!-- 页面footer钩子，一般用于加载插件JS文件和JS代码 -->
<?php echo hook('pageFooter', 'widget');?>
<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
	
</div>
</body>
</html>
	<!-- /底部 -->
</body>
</html>
<!--

{__CONTENT__}

-->