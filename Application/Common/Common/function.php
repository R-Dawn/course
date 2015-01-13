<?php
    function sendMail($address, $mySubject, $myText){
        vendor("PHPMailer.class#phpmailer");
            $mail=new \PHPMailer();
		    // 设置PHPMailer使用SMTP服务器发送Email
		    $mail->IsSMTP();
		    $mail->SMTPSecure = "ssl";    				//打开SSL
            $mail->SMTPDebug  = 1;                     // 启用SMTP调试功能 
		    // 设置邮件的字符编码,若不指定,则为'UTF-8'
		    $mail->CharSet='UTF-8';
		 
		    // 添加收件人地址,可以多次使用来添加多个收件人
		    $mail->AddAddress($address);
		    date_default_timezone_set('PRC');//设置默认时区否则会出现时间不一致问题
		 	$time=date("Y年m月d日 H:i.s");		 	
		    // 设置邮件正文
		    $mail->Body=$myText;
		 
		    // 设置邮件头的From字段。
		    $mail->From=C('from');
		 
		    // 设置发件人名字
		    $mail->FromName=C('fromname');
		 
		    // 设置邮件标题
		    $mail->Subject=$mySubject;
		 
		    // 设置SMTP服务器。
		    $mail->Host=C('host');
		 	$mail->Port= C('port');    
		    // 设置为"需要验证"
		    $mail->SMTPAuth=true;
		 
		    // 设置用户名和密码。
		    $mail->Username=C('user');
		    $mail->Password=C('password');
            
		    // 发送邮件。
		  if($mail->Send()){
		  	return 1;
            
		  }else{
		  	return 0;           
		  }
    }
    
    
    function make_password( $length = 8 )  
    {  
 
        // 密码字符集,可任意添加你需要的字符  
        $chars = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h',  
        'i', 'j', 'k', 'l','m', 'n', 'o', 'p', 'q', 'r', 's',  
        't', 'u', 'v', 'w', 'x', 'y','z', 'A', 'B', 'C', 'D',  
        'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L','M', 'N', 'O',  
        'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y','Z',  
        '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');  
                
        $password = "";  
        for($i = 0; $i < $length; $i++)  
        {  
        // 将 $length 个数组元素连接成字符串  
        $key = mt_rand(0,61);
        $password .= $chars[$key];  
        }  
        return $password;  
        } 
?>