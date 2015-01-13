<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$data["title"]="首页";
        $this->assign($data);
		$this->display();
    }
    public function test(){
		$this->display();
    }
}