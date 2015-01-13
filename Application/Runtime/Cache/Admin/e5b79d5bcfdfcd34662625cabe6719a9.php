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
		<div>
			
			<div>
				<h3><span>Set<?php echo ($setid); ?>习题</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/course/admin/Excercise/addExcercise?ch=<?php echo ($setid); ?>" type="button" class="btn btn-primary">添加习题</a></h3>							
			</div>	
				<table class="table">
					<tr>
						<th width="10%">编号</th>
						<th width="50%">题目摘要</th>
						<th width="40%">操作</th>						
					</tr>
					<?php  $excercise = M("excercise"); $data = $excercise->where("setid='".$setid."'")->order("id")->select(); if($data!=null){ foreach ($data as $key => $value) { $id = $value["id"]; $question_long = $value["question"]; if(strlen($question_long)>30){ $question=substr($question_long, 0, 30)."..."; } else $question=$question_long; echo "<tr id='".$chapter."'>"; echo "<td>$id</td>"; echo "<td>$question</td>"; echo "<td><a href='/course/admin/excercise/delete_excercise?id=$id' class='delete_item btn btn-primary' type='button'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/course/admin/excercise/edit?id=$id' class='btn btn-primary' type='button'>编辑</a></td></tr>"; } } ?>
				</table>
			
			<script type="text/javascript">
				$(".delete_item").click(function(){
				        if (!confirm('确定要删除这个章节吗？所有习题也会删除')) {
				            return false;
				        }
				        var a = $(this);
				        $.get(a.attr('href'), function(result) {
				            if (result) {
				                a.parent().parent().remove();
				            } else {
				                alert('删除失败，请稍后重试！');
				            }
				        });
				        return false;
				});
			</script>
		</div>
	</div> <!-- span9 -->
</div>  <!-- row结束 -->
</div>	<!-- container结束 -->