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
    
<?php  $User = M("User"); $data = $User->select(); $username = $data[0]["username"]; $sex = $data[0]["sex"]; $email = $data[0]["email"]; ?>
<div class="container" style="padding-top: 80px">
      <div class="row">
      	<!--左半部分导航开始-->
        <div class="col-md-2 col-md-offset-1">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="/course/admin">个人资料</a></li>   
            <li><a href="/course/admin/Introduction">课程介绍</a></li>
            <li><a href="/course/admin/Teachingplan">电子教案</a></li> 
         	<li><a href="/course/admin/Excercise">习题库</a></li>   
            <li><a href="/course/admin/Onlineask">在线问答</a></li>
         	<li><a href="/course/admin/More">扩展阅读</a></li> 
            
          </ul>
        </div>
        
        <!--左半部分导航结束-->

        <!--右半部分内容开始-->
        <div class="col-md-8 col-md-offset-1">
        	<h3>个人资料</h3>
        	<hr>
        	<!--展示账号资料-->
        	<div id="show-data">
	        	<table class="table table-hover">
	        		<tr>   
	        			<th>账户名称：</th>	     			
	        			<th><?php echo ($username); ?></th>
	    			</tr>	
	    			<tr>
	    				<th>性别：</th>
	    				<th><?php echo ($sex); ?></th>
	    			</tr>
	    			<tr>
	    				<th>邮箱：</th>
	    				<th><?php echo ($email); ?></th>
	    			</tr>
	    			<tr>
	    				<th>密码：</th>
	    				<th>*********</th>
	    			</tr>
		     	</table>
	     		<button class="btn btn-primary" onclick="switchModify();">修改资料</button>
	     	</div>

	     	<!--修改用户资料-->
	     	<form id="modify-data" class="form-horizontal" role="form" 
	     		onsubmit="return checkUpdate(this);"; style="display: none" action="/course/Admin/Index/updateProfile" method="post">
	     		<div class="form-group">
				    <label for="inputNick" class="col-sm-2 control-label">账号</label>
				    <div class="col-sm-4">
				      <input class="form-control" name="nick" id="inputNick" placeholder="" value=<?php echo ($username); ?>>
				    </div>
				</div>
				<div class="form-group">
				    <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
				    <div class="col-sm-4">
				      <input type="email" name="email" class="form-control" id="inputEmail" placeholder="" value=<?php echo ($email); ?>>
				    </div>
				</div>
				
				<div class="form-group">
				    <label for="inputPassword" class="col-sm-2 control-label">密码</label>
				    <div class="col-sm-4">
				      <input type="password" name="password" disabled="disabled" class="form-control" id="inputPassword" placeholder="">	
				  	</div>
				</div>

				<div class="form-group" id="confirmPassword" style="display: none">
				    <label for="confirmPassword" class="col-sm-2 control-label">确认密码</label>
				    <div class="col-sm-4">
				      <input type="password" class="form-control" id="confirmPw" placeholder="">	
				  	</div>
				</div>			
				
				<div class="form-group">
				    <label class="col-sm-2 control-label">性别</label>
				    <div class="col-sm-4">
						<div class="radio">
		  					<label>
		    					<input type="radio" name="sex" id="optionsRadios1" value="男" checked>男    	
		  					</label>
						</div>
						<div class="radio">
						  	<label>
						    	<input type="radio" name="sex" id="optionsRadios2" value="女">
						   		女
						   	</label>
						</div>
					</div>
				</div>	

				
    				
							  
				<div class="form-group">
				 	<div class="col-sm-offset-2 col-sm-10">
				      	<a href="javascript:;" type="button"id="btn-pw" class="btn btn-primary" onclick="activeModifyPw();">修改密码</a>
				      	<button type="submit" class="btn btn-primary">保存</button>
				    </div>
				</div>

				
	     	</form>
        </div>
        <!--右半部分内容结束-->
      </div>
 </div>

 <script type="text/javascript">
 	function switchModify(){
 		$("#show-data").hide();
 		$("#modify-data").show();
 	};

 	function activeModifyPw(){ 		
 		if($("#inputPassword").attr("disabled")=="disabled"){
 			$("#inputPassword").removeAttr("disabled");
 			$("#btn-pw").html("取消");
 			$("#confirmPassword").show(); 			
 		}
 		else{
 			$("#inputPassword").attr("disabled","disabled");
 			$("#btn-pw").html("修改密码"); 			
 			$("#confirmPassword").hide();
 		}
 	};
 	function checkUpdate(thisform){
 		if ($("#inputNick").val()==""||$("#inputEmail").val()==""){
 			alert("信息填写不完整！1");
 			return false;
 		}
 		if($("#inputPassword").attr("disabled")!=="disabled"){
 			if($("#confirmPw").val()==""||$("#inputPassword").val()==""){
 				alert("信息填写不完整！2");
 				return false;
 			}
 			else if(($("#inputPassword").val())!==($("#confirmPw").val())){
 				alert("两次密码填写不匹配！");
 				return false;
 			}
 		
 		}

 		
 	}
 </script>