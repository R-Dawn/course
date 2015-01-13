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
		$("#mymenu li:eq(12)").addClass("active");
	});
</script>
<?php  $Extend = M("Extend"); $t = $Extend->where("type='t'")->select(); $o = $Extend->where("type='o'")->select(); $r = $Extend->where("type='r'")->select(); ?>
<div class="container">
    <div class="row">
      <div class="col-md-2 col-md-offset-1" style="margin-top: 50px">
          <ul class="nav nav-pills nav-stacked">          
          	<li class="active"><a href="javascript:;" onclick="switchdata('resource');">课外资料&nbsp;&nbsp;<i class='glyphicon  glyphicon-chevron-right'></i></a></li>                
          	<li><a href="javascript:;" onclick="switchdata('tool');">相关工具&nbsp;&nbsp;<i class='glyphicon  glyphicon-chevron-right'></i></a></li>                
          	<li><a href="javascript:;" onclick="switchdata('research');">研究成果&nbsp;&nbsp;<i class='glyphicon  glyphicon-chevron-right'></i></a></li>                
          </ul>
      </div>
      <script type="text/javascript">
      		function switchdata(mid){
      			switch(mid)
      			{
      				case 'resource':
      					$(".row .active").removeClass('active');
      					$(".row li:eq(0)").addClass('active');
      					$("#resource").show();
      					$("#tool").hide();
      					$("research").hide();
      					break;
      				case 'tool':
      					$(".row .active").removeClass('active');
      					$(".row li:eq(1)").addClass('active');
      					$("#resource").hide();
      					$("#tool").show();
      					$("#research").hide();
      					break;
      				case 'research':
      					$(".row .active").removeClass('active');
      					$(".row li:eq(2)").addClass('active');
      					$("#resource").hide();
      					$("#tool").hide();
      					$("#research").show();
      					break;
      			}
      		}
      </script>
      <div class="col-md-7 col-md-offset-1">
          <table class="table" id="resource" style="margin-top: 50px">
          		<tr>
          			<td width="30%">标题</td>
          			<td width="70%">链接</td>          			
          		</tr>
          		<?php
 foreach ($t as $key => $value) { echo "<tr>"; echo "<td>".$value['title']."</td>"; echo "<td><a href='".$value['site']."'>".$value['site']."</td>"; echo "</tr>"; } ?>
          </table>

          <table class="table" id="tool" style="margin-top: 50px;display: none">
          		<tr>
          			<td width="30%">标题</td>
          			<td width="70%">链接</td>          			
          		</tr>
          		<?php
 foreach ($o as $key => $value) { echo "<tr>"; echo "<td>".$value['title']."</td>"; echo "<td><a href='".$value['site']."'>".$value['site']."</td>"; echo "</tr>"; } ?>
          </table>

          <table class="table" id="research" style="margin-top: 50px;display: none">
          		<tr>
          			<td width="30%">标题</td>
          			<td width="70%">链接</td>          			
          		</tr>
          		<?php
 foreach ($r as $key => $value) { echo "<tr>"; echo "<td>".$value['title']."</td>"; echo "<td><a href='".$value['site']."'>".$value['site']."</td>"; echo "</tr>"; } ?>
          </table>
      </div>
    </div>
</div>