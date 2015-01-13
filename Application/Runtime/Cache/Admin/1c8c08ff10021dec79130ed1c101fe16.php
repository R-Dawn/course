<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title><?php echo ($title); ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/course/Public/css/bootstrap.css">
		
		<script type="text/javascript" src="/course/Public/js/jquery.js"></script>
		<script type="text/javascript" src="/course/Public/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/course/admin" style="font-size: 20px;">后台管理系统</a></li>
            
            <li><a href="javascript:;">欢迎您！User</a></li>
            <li><a href="javascript:;">退出</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    

<div class="container" style="padding-top: 80px">
      <div class="row">
        <!--左半部分导航开始-->
        <div class="col-md-2 col-md-offset-1">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="/course/admin">个人资料</a></li>   
            <li><a href="/course/admin/Introduction">课程介绍</a></li>
            <li><a href="/course/admin/Teachingplan">电子教案</a></li> 
            <li class="active"><a href="/course/admin/Onlinestudy">在线学习
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="/course/admin">习题库</a></li>   
                    <li><a href="/course/admin/Introduction">在线问答</a></li>
                </ul>
            </a></li> 
            <li><a href="/course/admin/More">扩展阅读</a></li> 
          </ul>
        </div>
        
        <!--左半部分导航结束-->

        <!--右半部分内容开始-->
        <div class="col-md-8 col-md-offset-1">