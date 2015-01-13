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
            <li class="active"><a href="/course/admin/Teachingplan">电子教案</a></li>             
            <li><a href="/course/admin/Excercise">习题库</a></li>   
            <li><a href="/course/admin/Onlineask">在线问答</a></li>
            <li><a href="/course/admin/More">扩展阅读</a></li>  
          </ul>
        </div>
        
        <!--左半部分导航结束-->

        <!--右半部分内容开始-->
        <div class="col-md-8 col-md-offset-1">            
            <div class="jumbotron">
              <h2>上传课件包</h2>
              <h4>请将ppt文件转化为swf再上传，上传已有章节，新的文件将覆盖旧的文件</h4>                            
            </div>
            <!-- onsubmit="return checkSubmit();" -->

            <form action="/course/Admin/Teachingplan/upload" method="post" 
                enctype="multipart/form-data"> 
                <table id="chapterlist" class="table">
                    <tr>
                        <th width="20%">章节</th>
                        <th width="20%">文件名</th>
                        <th width="35%">上传文件</th>   
                        <th width="25%">操作</th>                     
                    </tr>
                    <?php
 $chapter = M("chapter"); $data = $chapter->order("id")->select(); if($data!=null){ foreach ($data as $key => $value) { echo "<tr id='cid".$value["id"]."'>"; echo "<td>".$value["id"]."</td>"; echo "<td>".$value["filename"]."</td>"; echo "<td></td>"; echo "<td><a type='button' class='btn btn-primary' href='javascript:;' onclick='dc(".$value["id"].")'>删除</td>"; echo "</tr>"; } } ?>
                </table>
                <a href="javascript:;" type="button" class="btn btn-primary" onclick="add();">添加</a>
            </form>
            <script type="text/javascript">
                function dc(ch){
                    var url = "/course/admin/Teachingplan/dc?ch="+ch;
                    var htmlObj=$.ajax({url:url,async:false});
                    alert(htmlObj.responseText+"删除成功!");                    
                    $("#cid"+ch).remove();
                }

                function add(){
                    var lasttr = $("#chapterlist tr:last");
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
                        "</select></td><td></td>"+
                        "<td><input type='file' name='swf'></td>"+
                        "<td><a href='javascript:;' class='btn btn-primary' onclick='cancel("+'"'+nid+'"'+")';>取消</a>&nbsp;&nbsp;"+
                        "<button class='btn btn-primary';>上传</button></td></tr>";

                    lasttr.after(trHtml);
                }

                function cancel(mid){
                    alert(mid);
                    $("#"+mid).remove();
                }

            </script>
        </div>
    </div>
</div>