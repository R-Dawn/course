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
         <li><a href="/course/admin/Onlineask">在线问答</a></li>
         <li class="active"><a href="/course/admin/More">扩展阅读</a></li>          
       </ul>
     </div>
     
     <!--左半部分导航结束-->

     <!--右半部分内容开始-->
     <div class="col-md-9">
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  课外资料
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                <table class="table" id="t-table">
                    <tr id="tt0">
                        <th width="10%">编号</th>
                        <th width="20%">标题</th>
                        <th width="50%">地址</th>
                        <th width="20%">操作</th>
                    </tr>
                    <?php
 $Extend = M("Extend"); $data = $Extend->where('type="t"')->select(); foreach ($data as $key => $value) { echo '<tr id="tt'.$value["id"].'">'; echo '<td>'.$value["id"].'</td>'; echo '<td>'.$value["title"].'</td>'; echo '<td>'.$value["site"].'</td>'; echo '<td><button onclick="deletenode('."'tt".$value["id"]."'".')">删除</button></td>'; } ?>                    
                </table>
                <button onclick="add('t-table')";>添加</button>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  实用工具
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
              <div class="panel-body">
                <table class="table" id="o-table">
                    <tr id="ot0">
                        <th width="10%">编号</th>
                        <th width="20%">标题</th>
                        <th width="50%">地址</th>
                        <th width="20%">操作</th>
                    </tr>
                    <?php
 $Extend = M("Extend"); $data = $Extend->where('type="o"')->select(); foreach ($data as $key => $value) { echo '<tr id="ot'.$value["id"].'">'; echo '<td>'.$value["id"].'</td>'; echo '<td>'.$value["title"].'</td>'; echo '<td>'.$value["site"].'</td>'; echo '<td><button onclick="deletenode('."'ot".$value["id"]."'".')">删除</button></td>'; } ?>                    
                </table>
                <button onclick="add('o-table')";>添加</button>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                  研究成果
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                 <table class="table" id="r-table">
                    <tr id="rt0">
                        <th width="10%">编号</th>
                        <th width="20%">标题</th>
                        <th width="50%">地址</th>
                        <th width="20%">操作</th>
                    </tr>
                    <?php
 $Extend = M("Extend"); $data = $Extend->where('type="r"')->select(); foreach ($data as $key => $value) { echo '<tr id="rt'.$value["id"].'">'; echo '<td>'.$value["id"].'</td>'; echo '<td>'.$value["title"].'</td>'; echo '<td>'.$value["site"].'</td>'; echo '<td><button onclick="deletenode('."'rt".$value["id"]."'".')">删除</button></td>'; } ?>                    
                </table>
                <button onclick="add('r-table')";>添加</button>
              </div>
            </div>
          </div>
        </div>
     </div>


     <script>
        function add(tableid){
            var last1 = $("#"+tableid+" tr:last");
            var last1id = last1.attr("id");
            var flag = last1id.substr(1,1);
            var foot = last1id.substr(2);
            var types = last1id.substr(0,1);

            if(flag=="t"){
                var nfoot = parseInt("1");
                var nid = types+"n"+nfoot;
              
                
            }
            else{
                var nfoot = parseInt(foot)+1;
                var nid = types+"n"+nfoot; 
                
            }

            

            var trHtml = "<tr id='"+nid+"'><td></td>"+
                            "<td><input name='title"+nid+"'></td>"+
                            "<td><input name='site"+nid+"'></td>"+
                            "<td>"+
                                "<button onclick='cancel("+'"'+nid+'"'+")'>取消</button>"+
                                "<button onclick='save("+'"'+nid+'"'+")'>保存</button>"+
                            "</td></tr>";
            last1.after(trHtml);
        }

        function cancel(mid){
            $("#"+mid).remove();
        }

        function save(mid){
            var url = "/course/admin/More/save";
            var i1 = $("#"+mid+" td input:eq(0)");
            var i2 = $("#"+mid+" td input:eq(1)");
            var name1=i1.attr("name");
            var value1=i1.val();
            var name2=i2.attr("name");
            var value2=i2.val();
            var data = name1+"="+value1+"&"+name2+"="+value2;
            var htmlobj = $.ajax({url:url,data:data,async:false});
            var number = htmlobj.responseText;
            if(number==0)   
                alert("内容不能为空！");
            else{
                newHtml = "<td>"+number+"</td>"+
                "<td>"+value1+"</td>"+
                "<td>"+value2+"</td>"+                
                "<td><button onclick='deletenode("+'"'+mid+'"'+")'>删除</button></td>";
                $("#"+mid).html(newHtml);
            }
        }

        function deletenode(mid){
            var deleteid = $("#"+mid+" td:eq(0)").html();
            var url = "/course/admin/More/deletenode";
            var data = "id="+deleteid;
            var htmlobj = $.ajax({url:url,data:data,async:false});
            var number = htmlobj.responseText;
            if(number==1)
                $("#"+mid).remove();
            else alert("删除出错！");
        }
     </script>
    </div>
</div>