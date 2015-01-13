<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this->display();
    }

    public function test(){
    	$this->display();
    }

    public function upload(){
    	echo "nima";
    }
    public function updateProfile(){
		foreach ($_POST as $key => $value) {
			switch ($key) {
				case 'nick':
					$data["username"] = $value;
					break;
				
				case 'password':
					$data["password"] = $value;
					break;

				case 'email':
					$data["email"] = $value;
					break;
				case 'sex':
					$data['sex'] = $value;
					break;
				default:
					break;
			}
		}
		$User = M("User");
		$data["userid"]=1;
		$url = __ROOT__."/Admin/";
		$User->where("userid=1")->save($data);
		$this->success("修改成功！",$url,1);
	}

	public function logout(){
		$url=__ROOT__."/admin/login";
		$this->success("成功退出!",$url);
	}
}