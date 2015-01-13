<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$this->display();   	
    }

    public function checklogin(){
            /*$user_id = make_password(10);
            cookie("user_id",$user_id);*/
            $User = M("user");
            $get_username = $_POST["username"];
            $get_password = $_POST["password"];

            $password = $User->where("username='".$get_username."'")->getField("password");

            //-1代表用户不存在，0代表密码错误，1代表正确
            //echo $password;
            if($password == null) {
                echo -1; return;
            }
            if($password == $get_password){
                echo 1;
                session('user_id',$user_id);
            }
            else echo 0;
            return false;

        }

     public function checkEmail(){
            $User = D('user');
            $get_email = $_GET['email'];
            $email = $User->where('email="'.$get_email.'"')->getField('email');
            if($email == $get_email){
                echo 1;
                $new_password = make_password();
                $insert_password = $new_password;
                //$insert_password = md5("123");
                $User->where('email="'.$email.'"')->setField('password',$insert_password);
                sendMail($email, 'New password', "Your new password is $new_password");
            }
            else
                echo 0;
        }
}
?>