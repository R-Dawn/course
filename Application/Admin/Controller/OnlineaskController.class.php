<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class OnlineaskController extends Controller {
    public function index(){
    	$this->display();
    }

    public function answer(){
    	$url = __ROOT__;
    	$Question = M("Question");

    	if(!empty($_POST)){
    		foreach ($_POST as $key => $value) {
    			if(!empty($value)){
    				$key = substr($key, 1);
		    		$Question->have_answer="y";
		    		$Question->answer=$value;
		    		$Question->where('id="'.$key.'"')->save();	
                                      
    			}
    		
    		}
    	}
        $answer = $Question->where('id="'.$key.'"')->getField("answer");
        $question = $Question->where('id="'.$key.'"')->getField("question"); 
        $email = $Question->where('id="'.$key.'"')->getField("email"); 
        $myText = "您在我们网站留下的问题：".$question." \n答案为:".$answer;
    	sendMail($email,"人工智能问题回复",$myText);
    	$this->success('',$url.'/admin/Onlineask/');

    }

    public function update(){
    	$url = __ROOT__;
    	$Question = M("Question");

    	if(!empty($_GET)){
    		foreach ($_GET as $key => $value) {
    			if(!empty($value)){
    				$key = substr($key, 2);		    		
		    		$Question->answer=$value;
		    		$Question->where('id="'.$key.'"')->save();	
                    $answer = $Question->where('id="'.$key.'"')->getField("answer");
                    $question = $Question->where('id="'.$key.'"')->getField("question"); 
                    $email = $Question->where('id="'.$key.'"')->getField("email"); 
                    $myText = "您在我们网站留下的问题：".$question." \n答案更改为:".$answer;
                    sendMail($email,"人工智能问题答案更改",$myText);	

    			}else echo 0;
    		
    		}
    		echo 1;
    	}
    	
    }
}