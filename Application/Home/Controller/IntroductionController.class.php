<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IntroductionController extends Controller {
    //教学大纲
    public function outline(){
		$data["title"]="课程简介";
        $this->assign($data);
        $this->display();
    }
/*    //课程简介
    public function profile(){
    	$this->display();
    }*/
    //课程特色
    public function Characteristic(){
		$this->display();
    }
    //教学队伍及负责人
    public function team(){
		$this->display();
    }

    public function system(){
        $data["title"]="课程体系";
        $this->assign($data);
        $this->display();
    }
}