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
    
<?php
 $Introduction = M("Introduction"); $data = $Introduction->select(); ?>
<script src="/course/Public/js/ckeditor/ckeditor.js"></script>
<script src="/course/Public/js/ckeditor/adapters/jquery.js"></script>

<div class="container" style="padding-top: 80px">
   <div class="row">
     <!--左半部分导航开始-->
     <div class="col-md-2 col-md-offset-1">
       <ul class="nav nav-pills nav-stacked">
         <li><a href="/course/admin">个人资料</a></li>   
         <li class="active"><a href="/course/admin/Introduction">课程介绍</a></li>
         <li><a href="/course/admin/Teachingplan">电子教案</a></li> 
         <li><a href="/course/admin/Excercise">习题库</a></li>   
         <li><a href="/course/admin/Onlineask">在线问答</a></li>
         <li><a href="/course/admin/More">扩展阅读</a></li>      
       </ul>
     </div>
     
     <!--左半部分导航结束-->

     <!--右半部分内容开始-->
     <div class="col-md-9">
         <div class="panel-group" id="accordion"> <!--折叠-->
             <div class="panel panel-default">
                 <div class="panel-heading">         <!--教学大纲部分-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                         <h3>教学大纲</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapseOne" class="panel-collapse collapse in">
                     <div class="panel-body">
                            <form action="/course/Admin/Introduction/save" method="post">
                            <textarea id="editor1" name="outline"><?php echo ($data[0]["outline"]); ?></textarea>
                            <button onclick="saveOutline()">保存</button>
                            </form>
                             <script type="text/javascript">
                               $(document).ready( function() {
                                   $('#editor1').ckeditor();                                   
                               });

                                function saveOutline(){
                                    var data = $("#editor1").val();                                    
                                }
                            </script>

                     </div>
                    
                    
                 </div>
             </div>

             <div class="panel panel-default">
                 <div class="panel-heading">         <!--教学大纲部分-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                         <h3>教学日历</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapse1" class="panel-collapse collapse">
                     <div class="panel-body">
                            <form action="/course/Admin/Introduction/save" method="post">
                            <textarea id="editor3" name="calendar"><?php echo ($data[0]["calendar"]); ?></textarea>
                            <button onclick="saveCalendar()">保存</button>
                            </form>
                             <script type="text/javascript">
                               $(document).ready( function() {
                                   $('#editor3').ckeditor();                                   
                               });

                                function saveCalendar(){
                                    var data = $("#editor3").val();
                                    //alert(data);
                                }
                            </script>

                     </div>
                    
                    
                 </div>
             </div>

             <div class="panel panel-default">
                 <div class="panel-heading">         <!--课程简介部分-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                         <h3>课程简介</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapseTwo" class="panel-collapse collapse">
                   <div class="panel-body">
                         <form>
                             <div class="form-group">
                                 <textarea class="form-control" rows="4"><?php echo ($data[0]["profile"]); ?></textarea>
                             </div>
                             <div class="form-group">                                 
                                 <a href="javascript:;" type="button" class="btn btn-primary" onclick="saveProfile();">保存</a>
                             </div>
                         </form>
                         <script type="text/javascript">
                            function saveProfile(){                                
                                var profile = $("#collapseTwo textarea").val();
                                if(profile==""){
                                    alert("内容不能为空！");
                                    return 0;
                                }

                                var url = "/course/Admin/Introduction/save";
                                var data = "profile="+profile;
                                var htmlobj = $.ajax({url:url,data:data,type:"post",async:false});
                               
                                    alert("保存成功！");
                               
                            }
                         </script>
                   </div>
                 </div>
             </div>

             <div class="panel panel-default">
                 <div class="panel-heading">         <!--课程特色部分-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                         <h3>课程特色</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapseThree" class="panel-collapse collapse">
                   <div class="panel-body">
                         <form>
                             <div class="form-group">
                                 <textarea class="form-control" rows="4"><?php echo ($data[0]["characteristic"]); ?></textarea>
                             </div>
                             <div class="form-group">
                                 <a href="javascript:;" type="button" class="btn btn-primary" onclick="saveCharacteristic();">保存</a>
                             </div>
                         </form>
                         <script type="text/javascript">
                            function saveCharacteristic(){
                                var characteristic = $("#collapseThree textarea").val();
                                if(characteristic==""){
                                    alert("内容不能为空！");
                                    return 0;
                                }

                                var url = "/course/Admin/Introduction/save";
                                var data = "characteristic="+characteristic;
                                var htmlobj = $.ajax({url:url,data:data,type:"post",async:false});
                               /* if(htmlobj.responseText==1)*/
                                    alert("保存成功！");
                                //else alert("保存失败");

                                
                            }
                         </script>
                   </div>
                 </div>
             </div>

             <div class="panel panel-default">
                 <div class="panel-heading">         <!--课程队伍部分-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                         <h3>课程队伍</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapseFour" class="panel-collapse collapse">
                   <div class="panel-body">
                         <form action="javascript:;">
                             <table class="table" id="team-table">
                                 <tr>
                                     <td>成员</td>
                                     <td>是否为负责人</td>
                                     <td>操作</td>
                                 </tr>                                 
                                 <?php
 $Team = M("Team"); $menber = $Team->select(); $t = 'team'; foreach ($menber as $key => $value) { $ti = $t.$value["id"]; echo '
                                            <tr id="'.$ti.'">
                                                <td>'.$value['name'].'</td>
                                                <td>'.$value['charge'].'</td>
                                                <td> '; echo '
                                            <button id="e-'.$ti.'" onclick="editTeam('."'".$ti."'".');">修改</button>
                                            <button id="s-'.$ti.'" onclick="saveTeam('."'".$ti."'".');" style="display: none">保存</button>
                                            <button id="d-'.$ti.'" onclick="deleteTeam('."'".$ti."'".');">删除</button>
                                            
                                        '; echo '

                                                </td>
                                            </tr>
                                        '; $i++; } ?>
                             </table>
                             <button onclick="add()";>添加</button>
                         </form>
                         <script type="text/javascript"> 
                             function add(){
                                var last1 = $("#team-table tr:last");
                                var last1id = last1.attr("id");
                                if(last1id==undefined)
                                    nid = "newt1";
                                else {

                                    var head = last1id.substr(0,4);
                                    var foot = last1id.substr(4);
                                    if(head=="team"){
                                        var nfoot = parseInt(1);
                                        var nid = "newt"+nfoot;
                                    }
                                    else {
                                        var nfoot = parseInt(foot)+1;
                                        var nid = "newt"+nfoot; 

                                    }
                                }
                                var trHtml = "<tr id='"+nid+"'>"+
                                    "<td><input type='text' name='input"+nid+"'></td>"+
                                    "<td><select id='isCharge"+nid+"' name='isCharge"+nid+"'><option value='是' selected='selected'>是</option><option value='否'>否</option></select></td>"+
                                    "<td>"+
                                    "<button onclick='cancel("+'"'+nid+'"'+")'>取消</button>"+
                                    "<button onclick='saveNewTeam("+'"'+nid+'"'+")'>保存</button>"+
                                    "</td></tr>";
                                    last1.after(trHtml);

                             }

                             function editTeam(tid){

                                 var v1 = $("#"+tid+" td:eq(0)").html();
                                 var v2 = $("#"+tid+" td:eq(1)").html();
                                 $("#"+tid+" td:eq(0)").html("<input type='text' name='input"+tid+"' value='"+v1+"'>");
                                 $("#"+tid+" td:eq(1)").html("<select id='isCharge"+tid+"' name='isCharge"+tid+"'><option value='是' selected='selected'>是</option><option value='否'>否</option></select>");
                                 $("#e-"+tid).hide();
                                 $("#s-"+tid).show();
                                 $("#d-"+tid).hide();
                             }

                             function saveNewTeam(tid){
                                var myinput = $("input[name=input"+tid+"]").val();
                                var mycharge=$("#isCharge"+tid).val();
                                
                                tid1 = tid.substr(4,1);
                                var data = "name="+myinput+"&charge="+mycharge+"&id="+tid1;
                                var url  = "/course/admin/Introduction/saveNewTeam";

                                htmlobj=$.ajax({url:url,data:data,async:false});
                                var bid = htmlobj.responseText;
                                $("#"+tid).attr("id","newt"+bid);
                                tid = "newt"+bid;
                                    $("#"+tid).html("<td>"+myinput+"</td>"+
                                            "<td>"+mycharge+"</td>"+
                                            "<td>"+
                                            "<button id='e-"+tid+"'"+"onclick='editTeam("+'"'+tid+'"'+")';>修改</button>"+
                                            "<button id='s-"+tid+"'"+"onclick='saveTeam("+'"'+tid+'"'+")' style='"+"display: none';>保存</button>"+
                                            "<button id='d-"+tid+"'"+"onclick='deleteTeam("+'"'+tid+'"'+")';>删除</button>"
                                        );
                                    alert("保存成功！");
                             }

                             function saveTeam(tid){
                                var myinput = $("input[name=input"+tid+"]").val();
                                var mycharge=$("#isCharge"+tid).val();
                                
                                tid1 = tid.substr(4,1);
                                var data = "name="+myinput+"&charge="+mycharge+"&id="+tid1;
                                var url  = "/course/admin/Introduction/saveTeam";

                                htmlobj=$.ajax({url:url,data:data,async:false});
                               
                                    $("#"+tid).html("<td>"+myinput+"</td>"+
                                            "<td>"+mycharge+"</td>"+
                                            "<td>"+
                                            "<button id='e-"+tid+"'"+"onclick='editTeam("+'"'+tid+'"'+")';>修改</button>"+
                                            "<button id='s-"+tid+"'"+"onclick='saveTeam("+'"'+tid+'"'+")' style='"+"display: none';>保存</button>"+
                                            "<button id='d-"+tid+"'"+"onclick='deleteTeam("+'"'+tid+'"'+")';>删除</button>"
                                        );
                                    alert("保存成功！");

                                
                            
                                

                             }

                             function deleteTeam(tid){
                                var tid1 = tid.substr(4,1);
                                var url  = "/course/admin/Introduction/deleteTeam";
                                var data = "id="+tid1;
                                htmlobj=$.ajax({url:url,data:data,async:false});
                                if(htmlobj.responseText==1){
                                    $("#"+tid).remove();
                                    alert("删除成功！");
                                }
                                else alert("删除失败");

                             }
                         </script>
                   </div>
                 </div>
             </div>


             <?php  $Director=M("Director"); $data2 = $Director->select(); $profile = $data2[0]["profile"] ?>
             <div class="panel panel-default">
                 <div class="panel-heading">         <!--课程负责人-->
                   <h4 class="panel-title">
                     <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                         <h3>课程负责人</h3>
                         <hr>
                     </a>
                   </h4>
                 </div>
                 <div id="collapseFive" class="panel-collapse collapse">
                   <div class="panel-body">
                         <form action="/course/admin/Introduction/saveDirector" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                 <label>输入负责人姓名</label>
                                 <input name="name" value="<?php echo ($data2[0]['name']); ?>"/>
                             </div>
                             <div class="form-group">
                                 <label>上传相片</label>
                                 <input type="file" name="file" id="file" />
                             </div>
                             <div class="form-group">
                                <label>输入负责人简介</label>
                                 <textarea name="profile" id="editor2"><?php echo ($profile); ?></textarea>
                             </div>
                             <div class="form-group">
                                 <button class="btn btn-primary">保存</button>
                             </div>
                         </form>

                         <script type="text/javascript">
                            $(document).ready( function() {
                                   $('#editor2').ckeditor();                                   
                               });   

                         </script>
                   </div>
                 </div>
             </div>

         </div>
     </div>