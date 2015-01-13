<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="/course/Public/css/bootstrap.min.css" />
<link rel="stylesheet" href="/course/Public/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="/course/Public/css/fullcalendar.css" />
<link rel="stylesheet" href="/course/Public/css/matrix-style.css" />
<link rel="stylesheet" href="/course/Public/css/matrix-media.css" />
<link href="/course/Public/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="/course/Public/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> 我的资料</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> 我的任务</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> 退出登陆</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">站内消息</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> 新消息</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> 收件箱</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> 发件箱</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> 垃圾箱</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">退出登录</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>    
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>课程简介</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="/course/index.php/Admin/Introduction/index#outline">教学大纲</a></li>
        <li><a href="/course/index.php/Admin/Introduction/index#profile">课程简介</a></li>
        <li><a href="/course/index.php/Admin/Introduction/index#characteristic">课程特色</a></li>
        <li><a href="/course/index.php/Admin/Introduction/index#team">课程队伍</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>电子教案</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="">播放</a></li>
        <li><a href="">展示</a></li>
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-pencil"></i> <span>在线学习</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="">在线习题</a></li>
        <li><a href="">在线问答</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>扩展阅读</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span4"> <a href="index.html"> <i class="icon-user"></i> 账户管理 </a> </li>
        <li class="bg_lg span4"> <a href="charts.html"> <i class="icon-signal"></i> 站内消息</a> </li>        
      </ul>
    </div>
  </div>

  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">        
        <li class="bg_lr"> <a href="widgets.html"> <i class="icon-inbox"></i>课程简介 </a> </li>        
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> 电子教案</a> </li>
        <li class="bg_lg"> <a href="grid.html"> <i class="icon-fullscreen"></i> 在线学习</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> 扩展阅读</a> </li>
      </ul>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="/course/Public/js/excanvas.min.js"></script> 
<script src="/course/Public/js/jquery.min.js"></script> 
<script src="/course/Public/js/jquery.ui.custom.js"></script> 
<script src="/course/Public/js/bootstrap.min.js"></script> 
<script src="/course/Public/js/jquery.flot.min.js"></script> 
<script src="/course/Public/js/jquery.flot.resize.min.js"></script> 
<script src="/course/Public/js/jquery.peity.min.js"></script> 
<script src="/course/Public/js/fullcalendar.min.js"></script> 
<script src="/course/Public/js/matrix.js"></script> 
<script src="/course/Public/js/matrix.dashboard.js"></script> 
<script src="/course/Public/js/jquery.gritter.min.js"></script> 
<script src="/course/Public/js/matrix.interface.js"></script> 
<script src="/course/Public/js/matrix.chat.js"></script> 
<script src="/course/Public/js/jquery.validate.js"></script> 
<script src="/course/Public/js/matrix.form_validation.js"></script> 
<script src="/course/Public/js/jquery.wizard.js"></script> 
<script src="/course/Public/js/jquery.uniform.js"></script> 
<script src="/course/Public/js/select2.min.js"></script> 
<script src="/course/Public/js/matrix.popover.js"></script> 
<script src="/course/Public/js/jquery.dataTables.min.js"></script> 
<script src="/course/Public/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>