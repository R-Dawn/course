<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IntroductionController extends Controller {
    
    public function index(){
        $this->display();
    }
    public function save(){
        if(!empty($_POST)){
        	foreach ($_POST as $key => $value) {
        		switch ($key) {
        			case 'outline':
        				$data["outline"]=$value;
        				break;
        			
        			case 'profile':
        				$data["profile"]=$value;
        				break;
                    case 'characteristic':
                        $data["characteristic"]=$value;
                    case 'calendar':
                        $data["calendar"] = $value;
        			default:
        				# code...
        				break;
        		}
        	}
        	$Introduction = M("Introduction");
        	$Introduction ->where("id=1")->save($data);
            $this->success("修改成功");
        	
        }
        
    }
    public function saveTeam(){
    	if(!empty($_GET)){
    		foreach ($_GET as $key => $value) {
    			switch ($key) {
    				case 'name':
    					$data["name"]=$value;
    					break;
    				case 'charge':
    					$data["charge"]=$value;
    					break;
    				case 'id':
    					$id = $value;
    					break;
    				default:
    					# code...
    					break;
    			}
    		}

    		$Team = M("Team");
    		
    		$Team -> where('id="'.$id.'"')->save($data);

            $this->success("修改成功");
    	}
    }
    public function saveNewTeam(){
    	if(!empty($_GET)){
    		

    		foreach ($_GET as $key => $value) {
    			switch ($key) {
    				case 'name':
    					$data["name"]=$value;
    					break;
    				case 'charge':
    					$data["charge"]=$value;
    					break;
    				default:
    					# code...
    					break;
    			}
    		}
    		$Team = M("Team");
    		$Team ->add($data);
    		$this->success("修改成功");
    	}
    	    }

    public function deleteTeam(){
    	if(!empty($_GET)){
    		$id = $_GET["id"];
    		$Team =M("Team");
    		$Team -> where('id="'.$id.'"')->delete();
            $this->success("修改成功");
    	}
    }

    public function saveDirector(){
        $Director = M("Director");
        foreach ($_POST as $key => $value) {
            switch ($key) {
                case 'name':
                    $data['name']=$value;
                    break;                
                case 'profile':
                    $data['profile']=$value;
                    break;                
            }
        }
        
        $Director->where('id=1')->save($data);
        if(!empty($_FILES['file'])){
            $filename = $_FILES['file']['name'];
            $tempname = $_FILES["file"]["tmp_name"];

           move_uploaded_file($tempname, "./Public/img/person.jpg");
        }
        $this->success();

    }
    
}