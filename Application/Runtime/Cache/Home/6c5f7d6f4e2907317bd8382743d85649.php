<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title><?php echo ($title); ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/course/Public/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/course/Public/css/docs.css">
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
          <ul id="mymenu" class="nav navbar-nav">
            <li class="active"><a href="/course">首页</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">课程介绍<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="">
                  <a href="/course/index.php/Home/Introduction/outline">课程简介</a>
                </li> 
                <li class="">
                  <a href="/course/index.php/Home/Introduction/system" >课程体系</a>
                </li>            
                <li class="">
                  <a href="/course/index.php/Home/Introduction/team" >教学队伍及负责人</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">电子教案<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/course/index.php/Home/Teachingplan/show">播放</a>
                </li>
                <li>
                  <a href="/course/index.php/Home/Teachingplan/download">下载</a>
                </li>
                            
              </ul>
            </li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">在线学习<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="/course/index.php/Home/QA/excercise">在线习题</a>
                </li>
                <li>
                  <a href="/course/index.php/Home/QA/onlineask">在线答疑</a>
                </li>
                <li>                 
              </ul>
            </li>
            
            <li><a href="/course/index.php/Home/More">扩展阅读</a></li>
            
            
          </ul>

          <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/course/index.php/admin/login">管理员入口</a>
        </li>
        </div>


      </ul>
      </div>
    </div>

<script type="text/javascript" src="/course/Public/js/jquery.uploadify.min.js"></script>
<link rel="stylesheet" type="text/css" href="/course/Public/css/uploadify.css">

	<form>
		<div id="queue"></div>
		<input id="file_upload" name="file_upload" type="file" multiple="true" auto="false">
	</form>
		<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : '/course/Public/swf/uploadify.swf',
				'uploader' : 'test/uploadify'
			});
		});
	</script>

</html>