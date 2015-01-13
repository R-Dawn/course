function setMarginTop(){
    var h = screen.availHeight;
    var x = document.getElementById("divform").scrollHeight;
    var marg_top = (h-60-x)/2;      
    document.getElementById("divform").style.marginTop=marg_top+"px";             
};

function checkLogin(){
    
    var get_username = document.getElementById("inputUsername").value;
    var get_password = document.getElementById("inputPassword").value;
    //get_password = hex_md5(get_password);
    var flag = false;
    if(get_username==""||get_username==null){
        flag = true;
    }
    if(get_password==""||get_password==null){
        flag = true;
    }

    if(flag==true){
        document.getElementById("warningContent").innerHTML="无效的用户名或密码 !!!";
        $('#errorTips').modal();
        return !flag;
    }

    url = "/course/Admin/Login/CheckLogin";
    data = "username="+get_username+"&password="+get_password;
    var t = $.ajax({url:url,data:data,async:false,type:"POST"});
    //ajax返回值-1代表用户不存在
    var result = t.responseText;

    if(result==-1){
        document.getElementById("warningContent").innerHTML="用户不存在 !!!";
        $('#errorTips').modal();
        return false;
    }
    //返回值为0代表密码错误
    else if(result==0){
        document.getElementById("warningContent").innerHTML="密码错误 !!!";
        $('#errorTips').modal();
        return false;
    }
}
//隐藏提示框
/*function checkLogin(){
    return false;
}*/

function checkEmail(){

    //检验email的格式是否正确
    var email_value = document.getElementById("inputEmail").value;
    apos=email_value.indexOf("@");
    dotpos=email_value.lastIndexOf(".");
    if (apos<1||dotpos-apos<2){
        alert("E-mail format error!!!");
        return false;
    }

    //检查是否为管理员的邮箱
    getemail = document.getElementById("inputEmail").value;
    url1 = "/course/Admin/login/checkEmail";
    var postStr1 = "email="+getemail;
    var t1 = $.ajax({url:url1,data:postStr1,async:false});
    result = t1.responseText;
    alert(result);
    if(result == 1){
        alert("Your new Password was sent to your MailBox!!!");
        return true;
    }
    else
    {
        alert("Wrong address!!!");
        return false;
    }



}

//在重置密码弹出框关闭之后清除密码
function clearPassword(){
    document.getElementById("inputPassword").value="";
}