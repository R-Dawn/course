<?php if (!defined('THINK_PATH')) exit();?>

<html>
<head>
<title></title>

<script type="text/javascript" src="/course/Public/js/jquery.form.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script type="text/javascript"> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            var options = { 
                target:        '#fileinfo'   // target element(s) to be updated with server response         
            };
 
            $('#myForm').submit(function() { 
                $(this).ajaxSubmit(options);
                return false; 
            });
 
        }); 
</script>
</head>
 
<body>
<h2>nihao</h2>
<form id="myForm" action="/course/admin/index/upload" method="post"
    enctype="multipart/form-data">
    <input name="myfile" type="file" />
    <input type="submit" value="Submit Comment" />
</form>
<div id="fileinfo"></div>
</body>
</html>