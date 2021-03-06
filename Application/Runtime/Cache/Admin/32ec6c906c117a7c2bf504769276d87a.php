<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="/course/Public/b2/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/course/Public/b2/css/login.css" rel="stylesheet">
        <script src="/course/Public/b2/js/jquery.js"></script>
        <script src="/course/Public/b2/js/bootstrap.min.js"></script>
        <script src="/course/Public/b2/js/login.js"></script>
        <script src="/course/Public/b2/js/bootstrap-tooltip.js"></script>
        <script src="/course/Public/b2/js/md5.js"></script>
    </head>
    <body onload="setMarginTop();">
        <!--登录框--> 
        <div id="divform" >
        <div style="text-align: center;"><h3>人工智能课程网站</h3></div>
        <div style="text-align: center;"><h3>管理系统</h3></div>
        <form class="form-horizontal" onsubmit="return checkLogin();" action="/course/Admin/index">
            <div class="control-group">
                <label class="control-label" for="inputUsername">用户名</label>
                <div class="controls">
                    <input type="text" id="inputUsername" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">密码</label>
                <div class="controls">
                     <input type="password" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">                   
                    <button type="submit" class="btn btn-primary">登录</button>
                    <a href="#divGetpassword" role="button" class="btn btn-primary" data-toggle="modal">丢失密码？</a>
                    <a href="/course" class="btn btn-danger">前台</a>;
                </div>
            </div>
        </form>

            <!-- 隐藏的取回密码的模块 -->
            <form id="divGetpassword" class="modal hide fade form-horizontal" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel" aria-hidden="true"
                  action="/demo/index.php/admin/index" onsubmit="return checkEmail();"  method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">输入您的邮箱：</h3>
                </div>
                <div class="modal-body control-group">
                     <label class="control-label" for="inputEmail">E-mail:</label>
                     <div class="controls">
                          <input  id="inputEmail" placeholder="E-mail">
                     </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"
                            onclick="clearPassword();">关闭</button>
                    <button class="btn btn-primary" type="submit">提交</button>
                </div>
            </form>

            <div id="errorTips" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-header"><h3>Warning!</h3></div>
                <div id="warningContent" class="modal-body">无效的用户名或密码!!!</div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
            </div>
        </div>
    </body>
</html>