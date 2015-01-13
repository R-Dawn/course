<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title><?php echo ($title); ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/course/Public/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/course/Public/css/docs.css">
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
            <li><a href="/course/Admin">系统首页</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">课程简介<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="">
                  <a href="/course/index.php/Admin/Introduction/outline">教学大纲</a>
                </li>
                <li class="">
                  <a href="/course/index.php/Admin/Introduction/profile">课程简介</a>
                </li>
                <li class="">
                  <a href="/course/index.php/Admin/Introduction/characteristic">课程特色</a>
                </li>                
                <li class="">
                  <a href="/course/index.php/Admin/Introduction/team" >教学队伍</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">电子教案<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/course/index.php/Admin/Teachingplan/show">播放</a>
                </li>
                <li>
                  <a href="/course/index.php/Admin/Teachingplan/download">下载</a>
                </li>
                <li>                 
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">在线学习<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="http://v3.bootcss.com/getting-started/" target="_blank">在线习题</a>
                </li>
                <li>
                  <a href="http://v3.bootcss.com/css/" target="_blank">在线答疑</a>
                </li>
                <li>                 
              </ul>
            </li>
            
            <li><a href="http://jquery.bootcss.com/" target="_blank">扩展阅读</a></li>
            
            
          </ul>
        </div>
      </div>
    </div>
课程大纲