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
<script type="text/javascript">
  $(document).ready(function(){
    $("#mymenu .active").removeClass("active");
    $("#mymenu li:eq(8)").addClass("active");
  });
</script>
<?php
 $excercise_set = M("excercise_set"); $setlist = $excercise_set->where("excercise_count>0")->order("setid")->select(); if($setlist==null){ echo "<script>alert('系统暂无习题！');</script>";return; } ?>

<script>
    $(document).ready(function(){
      $("#set<?php  if($flag==0) echo $setlist[0]["setid"]; else echo $flag; ?>").addClass("active");
      
    });
</script>
<div class="container"  style="margin-top: 50px">
    <div class="row">
      <div class="col-md-2 col-md-offset-1">
          <ul class="nav nav-pills nav-stacked">          
            <?php
 foreach ($setlist as $key => $value) { $setid = $value["setid"]; echo "<li id='set".$setid."'><a href='/course/Home/QA/Excercise?setid=".$setid."'>套题$setid &nbsp;&nbsp;<i class='glyphicon  glyphicon-chevron-right'></i></a></li>" ; } ?>         
          </ul>
      </div>
      <div class="col-md-7 col-md-offset-1">
          <?php  if($flag==0) $setid = $setlist[0]["setid"]; else $setid = $flag; $Excercise = M("Excercise"); $excercise_list = $Excercise->where("setid='".$setid."'")->order("id")->select(); $i = 0; foreach ($excercise_list as $key => $value) { $i++; $question = $value["question"]; $answer = $value["answer"]; echo "<div><h3>Excercise$i</h3>$question</div>"; echo "<button type='button' class='btn btn-danger' data-toggle='collapse' data-target='#demo$i'>查看答案</button>"; echo "<div id='demo$i' class='collapse'></br>$answer</div>"; echo "<hr>"; } ?>
      </div>