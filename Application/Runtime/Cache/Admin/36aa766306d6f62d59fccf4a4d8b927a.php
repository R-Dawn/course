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
    

<div class="container" style="padding-top: 80px">
	<script type="text/javascript" src="/course/Public/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/course/Public/js/ckeditor/adapters/jquery.js"></script>
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

		<div>
			<h3><span>为Set<?php echo ($setid); ?>添加习题</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/course/admin/Excercise/enter?ch=<?php echo ($setid); ?>" type="button" class="btn btn-primary">返回习题列表</a></h3>							
		</div>
		<form action="/course/admin/Excercise/saveAdd" method="post" enctype="multipart/form-data">			
			<div id="uppic">
				<h4>插入图片：<button onclick="return addpic();">添加图片</button></h4>
				<input type="file" name="file1">
				<script type="text/javascript">
					function addpic(){
						var lastinput = $("#uppic input:last");
						var num = lastinput.attr("name").substr(4);
						var new_num = parseInt(num)+1;
						var new_name = "file"+new_num;
						var newinput = "<input type='file' name='"+new_name+"'>";
						lastinput.after(newinput);	

						return false;					
					}
				</script>
			</div>
			<h4>请输入问题：</h4><textarea name="question" id="editor1"></textarea>
			<h4>请输入答案：</h4><textarea name="answer" id="editor2"></textarea>
			<input type="hidden" name="ch" value="<?php echo ($setid); ?>">
			<button type="submit" class="btn btn-primary">保存</button>
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