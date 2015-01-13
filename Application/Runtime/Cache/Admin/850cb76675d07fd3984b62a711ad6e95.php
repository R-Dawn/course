<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	select{
		width: 100px
	}
</style>
<html>
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
				<h3><span>套号及题量</span>&nbsp;&nbsp;&nbsp;&nbsp;<button id="add-btn" class="btn btn-primary" onclick="add();">添加一套试题</button></h3>							
			</div>	
				<form action="/course/admin/Excercise/addSet">
				<table class="table">
					<tr>
						<th width="20%">套号</th>
						<th width="20%">题目数量</th>
						<th width="40%">操作</th>						
					</tr>
					<?php  $excercise_set = M("excercise_set"); $data = $excercise_set->order("setid")->select(); if($data!=null){ foreach ($data as $key => $value) { $set = $value["setid"]; $excercise_count = $value["excercise_count"]; echo "<tr id='".$set."'>"; echo "<td>$set</td>"; echo "<td>$excercise_count</td>"; echo "<td><a href='/course/admin/excercise/delete_set?ch=$set' class='delete_item btn btn-primary' type='button'>删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/course/admin/excercise/enter?ch=$set' class='btn btn-primary' type='button'>进入</a></td></tr>"; } } ?>
				</table>
			</form>
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
				function add(){
					$("#add-btn").attr("disabled","disabled");
                    var lasttr = $(".table tr:last");
                    var lastid = lasttr.attr("id");
                    if(lastid==undefined){
                        var nid = "cid1";                        
                    }else{
                        var foot = lastid.substr(3);
                        var nfoot = parseInt(foot)+1;
                        var nid = "cid"+nfoot;
                    }
                    var trHtml = "<tr id='"+nid+"'><td><select name='ch'>"+
                        "<option value='1'>1</option>"+
                        "<option value='2'>2</option>"+
                        "<option value='3'>3</option>"+
                        "<option value='4'>4</option>"+
                        "<option value='5'>5</option>"+
                        "<option value='6'>6</option>"+
                        "<option value='7'>7</option>"+
                        "<option value='8'>8</option>"+
                        "<option value='9'>9</option>"+
                        "<option value='10'>10</option>"+                        
                        "</select></td>"+
                        "<td>0</td>"+
                        "<td><a href='javascript:;' class='btn btn-primary' onclick='cancel("+'"'+nid+'"'+")';>取消</a>&nbsp;&nbsp;"+
                        "<button class='btn btn-primary' type='submit';>保存</button></td></tr>";

                    lasttr.after(trHtml);
                }

                
                function cancel(mid){                    
                    $("#"+mid).remove();
                    $("#add-btn").removeAttr("disabled");
                }
			</script>
		</div>
	</div>
</div>  <!-- row结束 -->
</div>	<!-- container结束 -->