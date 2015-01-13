<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class QAController extends Controller {
    public function index(){
		$this->display();
    }

    public function onlineask(){
    	$this->display();
    }

    public function excercise(){
        if(!empty($_GET["setid"])){
            $data["flag"] = $_GET["setid"];
        }
        else $data["flag"]=0;
        $this->assign($data);
        $this->display();
    }

    public function question(){
    	$Question = M("Question");
    	foreach ($_POST as $key => $value) {
    		switch ($key) {
    		case 'question':
    			$data["question"] = $value;
    			break;
    		
    		default:
    			$data['email'] = $value;
    			break;
    	}
    	}
    	
    	$data["have_answer"]="n";
    	echo $Question->add($data);
    	$this->success("提交成功");
    	

    }    
}