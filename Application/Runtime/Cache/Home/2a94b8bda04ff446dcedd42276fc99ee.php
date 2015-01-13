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
          <ul id="mymenu" class="nav navbar-nav">
            <li class="active"><a href="/course">首页</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">课程介绍<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="">
                  <a href="/course/index.php/Home/Introduction/outline">课程简介</a>
                </li> 
                <li class="">
                  <a href="/course/index.php/Home/Introduction/system" >课程体系</a>
                </li>            
                <li class="">
                  <a href="/course/index.php/Home/Introduction/team" >教学队伍及负责人</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">电子教案<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/course/index.php/Home/Teachingplan/show">播放</a>
                </li>
                <li>
                  <a href="/course/index.php/Home/Teachingplan/download">下载</a>
                </li>
                            
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">在线学习<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/course/index.php/Home/QA/excercise">在线习题</a>
                </li>
                <li>
                  <a href="/course/index.php/Home/QA/onlineask">在线答疑</a>
                </li>
                <li>                 
              </ul>
            </li>
            
            <li><a href="/course/index.php/Home/More">扩展阅读</a></li>
            
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/course/index.php/admin/login">管理员入口</a>
        </li>
        </div>


      </ul>
      </div>
    </div>
<?php
 $Introduction = M("Introduction"); $data= $Introduction->select(); $Director = M("Director"); $data1 = $Director->select(); ?>
<script src="/course/Public/js/ckeditor/ckeditor.js"></script>
<script src="/course/Public/js/ckeditor/adapters/jquery.js"></script>
<div class="bs-header" >
      <div class="container">      
        <span style="font-size:40px">
        <img src="/course/Public/img/logo.png">&nbsp;&nbsp;英语口译 INTERPRETING</span><br>
        <div style="font-size:10px;width:150px;text-align:center">英语语言文化学院</div>
        <span style="font-size:10px">Faculty of English Language and Culture</span>        
      </div>
</div>

<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-md-6" style="border-right: solid #cfcee0">
			<h1>课程简介</h1>
			<h4>&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $data[0]["profile"]?>
			</h4>
		</div>
		<!-- <div class="col-md-7">
			<h1>课程负责人:<b><?php echo ($data1[0]['name']); ?></b></h1>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;
				<img style="float: right" src="/course/Public/img/person.jpg">
				<div><?php echo $data1[0]["profile"]?></div>
			</p>
		</div> -->
		<div class="col-md-6">
			<h1>课程特色</h1>
			<h4>
			<?php echo $data[0]["characteristic"]?>
			</h4>
		</div>
	</div>

	
</div>