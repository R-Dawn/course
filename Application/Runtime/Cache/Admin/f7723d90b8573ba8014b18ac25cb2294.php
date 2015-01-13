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
    <div class="row">
        <!--左半部分导航开始-->
        <div class="col-md-2 col-md-offset-1">
          <ul class="nav nav-pills nav-stacked">
            <li><a href="/course/admin">个人资料</a></li>   
            <li><a href="/course/admin/Introduction">课程介绍</a></li>
            <li><a href="/course/admin/Teachingplan">电子教案</a></li>             
            <li><a href="/course/admin/Excercise">习题库</a></li>   
            <li class="active"><a href="/course/admin/Onlineask">在线问答</a></li>
            <li><a href="/course/admin/More">扩展阅读</a></li> 
          </ul>
        </div>
        
        <!--左半部分导航结束-->

        <!--右半部分内容开始-->
        <div class="col-md-9 "> 
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">
                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          未解决的问题
                </a>
                </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <form action="/course/admin/Onlineask/answer" method="post">
                    <table class="table">
                        <tr>
                            <th width="10%">编号</th>
                            <th width="50%">问题</th>
                            <th width="40%">答案</th>
                        </tr>   
                    <?php
 $Question = M("Question"); $data = $Question->where('have_answer="n"')->select(); if($data==false){ echo "
                                <tr>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                </tr>
                            "; } foreach ($data as $key => $value) { echo "<tr>"; echo "<td>".$value["id"]."</td>"; echo "<td>".$value["question"]."</td>"; echo "<td><textarea name='q".$value["id"]."'></textarea></td>"; echo "</tr>"; } ?>        
                    </table>
                    <button class="btn btn-primary" type="submit">保存</button>
                    </form>
                    </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                          已解决问题
                        </a>
                      </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <form action="/course/admin/Onlineask/answer" metdod="post">
                    <table class="table">
                        <tr>
                            <th width="10%">编号</th>
                            <th width="40%">问题</th>
                            <th width="40%">答案</th>
                            <th width="10%">操作</th>
                        </tr>   
                    <?php
 $Question = M("Question"); $data = $Question->where('have_answer="y"')->select(); if($data==false){ echo "
                                <tr>
                                    <td>无</td>
                                    <td>无</td>
                                    <td>无</td>
                                </tr>
                            "; } foreach ($data as $key => $value) { $iid = $value["id"]; echo '<tr id="qa'.$iid.'">'; echo "<td>".$value["id"]."</td>"; echo "<td>".$value["question"]."</td>"; echo "<td>".$value["answer"]."</td>"; echo '<td><a href="javascript:;" class="btn btn-primary"onclick="edit('."'qa".$iid."'".');">修改</a></td>'; echo "</tr>"; '<button onclick="edit('."'qa".$iid."'".')"></button>'; } ?>        
                    </table>
                    
                    </form>
                    <script type="text/javascript">
                        function edit(tid){

                                 var v = $("#"+tid+" td:eq(3) a").html();
                                 
                                 if(v=="修改"){
                                    var v1 = $("#"+tid+" td:eq(2)").html();                                                            
                                     $("#"+tid+" td:eq(2)").html("<textarea name='text"+tid+"'>"+v1+"</textarea>"); 
                                     $("#"+tid+" td:eq(3) a").html("保存");     
                                 } else{
                                    var v2 = $("#"+tid+" td:eq(2) textarea").val();                                    
                                    var data = tid+"="+v2;
                                    var url = "/course/admin/Onlineask/update";
                                    var htmlobj = $.ajax({url:url, data:data, async:false});
                                    var result = htmlobj.responseText;
                                    if(result==1){
                                        $("#"+tid+" td:eq(3) a").html("修改");
                                        $("#"+tid+" td:eq(2)").html(v2);
                                        alert("修改成功！");
                                    }
                                    else alert("答案不能为空");
                                 }                         
                             }
                    </script>
                      </div>
                    </div>
                </div>
            </div>
         </div>
</div>