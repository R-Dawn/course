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
            
            <li><a href="javascript:;">欢迎您!</a></li>
            <li><a href="/course/admin/index/logout">退出</a></li>
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/course/">前台入口</a>
        </li>
        </ul>
        </div>
      </div>
    </div>
    
<script src="/course/Public/js/ckeditor/ckeditor.js"></script>
<script src="/course/Public/js/ckeditor/adapters/jquery.js"></script>
<div class="container" style="padding-top: 80px">
    <div class="row">
     <!--左半部分导航开始-->
        <div class="col-md-2 col-md-offset-1">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="/course/admin">个人资料</a></li>   
                <li><a href="/course/admin/Introduction">课程介绍</a></li>
                <li><a href="/course/admin/Teachingplan">电子教案</a></li> 
                <li class="active"><a href="/course/admin/Excercise">习题库</a></li>   
                <li><a href="/course/admin/Onlineask">在线问答</a></li>
                <li><a href="/course/admin/More">扩展阅读</a></li>          
            </ul>
        </div>
     
     <!--左半部分导航结束-->

     <!--右半部分内容开始-->
        <div class="col-md-9">
		<?php
 $excercise = M("excercise"); $question = $excercise->where("id='".$id."'")->getField("question"); $answer = $excercise->where("id='".$id."'")->getField("answer"); $setid = $excercise->where("id='".$id."'")->getField("setid"); ?>
		<form action = "/course/admin/excercise/saveEdit" method="post">
			<div>
			<h3><span>编辑习题</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/course/admin/Excercise/enter?ch=<?php echo ($setid); ?>" type="button" class="btn btn-primary">返回习题列表</a>&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary">保存修改</button></h3>							
			</div>
			<h4>修改问题：</h4><textarea name="question" id="editor1"><?php echo ($question); ?></textarea>
			<h4>修改答案：</h4><textarea name="answer" id="editor2"><?php echo ($answer); ?></textarea>
			<input type="hidden" name="id" value="<?php echo ($id); ?>">
		</form>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#editor1").ckeditor();
				$("#editor2").ckeditor();
			});
		</script>
	</div> <!-- span9 -->
</div>  <!-- row结束 -->
</div>	<!-- container结束 -->