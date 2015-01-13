<?php
namespace Admin\Controller;
use Think\Controller;
class ExcerciseController extends Controller {
	public function index(){
		$this->display();
    }  

    public function addSet(){
    	$setid = $_GET['ch'];
    	$excercise_set=M("excercise_set");
    	$data1 = $excercise_set->where("setid='".$setid."'")->select();
    	if($data1!==null){
    		$this->error("套题已经存在，不可重复添加！");
    		return;
    	}
    	else{
    		$data['setid']=$setid;
    		$excercise_set->add($data);
    		$this->success("添加成功！");
    	}

    }

    public function delete_set(){
    	$setid = $_GET["ch"];
    	$excercise_set=M("excercise_set");
    	$count= $excercise_set->where("setid='".$setid."'")->getField("excercise_count");
    	if($count!=0){
    		$excercise = M('excercise');
    		$excercise->where("setid='".$setid."'")->delete();
    		
    	}
    	$excercise_set->where("setid='".$setid."'")->delete();
    	echo true;

    }

    public function enter(){
    	$setid = $_GET['ch'];
    	$data["setid"]=$setid;
    	$this->assign($data);
    	$this->display();

    }

    public function addExcercise(){
    	$data["setid"]=$_GET["ch"];
    	$this->assign($data);
    	$this->display();
    }

    public function saveAdd(){
    	if(!empty($_POST)){
    		foreach ($_POST as $key => $value) {
    			switch ($key) {
    				case 'question':
    					$data["question"]=$value;
                        $data["question"]=str_replace('src="', 'src="/course/public/img/excercise/', $data["question"]);
    					break;
    				
    				case 'answer':
    					$data["answer"]=$value;
                        $data["answer"]=str_replace('src="', 'src="/course/public/img/excercise/', $data["answer"]);
    					break;
    				default:
    					$data["setid"]=$value;
    					# code...
    					break;
    			}
    		}

            if(!empty($_FILES)){
                
                foreach ($_FILES as $key => $value) {
                    
                    if(!empty($value["name"])){                        
                        $temp_name = $value["tmp_name"];
                        $filename = $value["name"];                       
                        move_uploaded_file($temp_name, "./public/img/excercise/".$filename);
                    }
                }
            }
            
    		$setid=$data["setid"];
    		$url = __ROOT__."/admin/excercise/enter?ch=".$setid;
    		$excercise = M("excercise");
    		$excercise->add($data); 
    		$excercise_set=M("excercise_set");
    		$oldcount = $excercise_set->where("setid='".$setid."'")->getField("excercise_count");
    		$data["excercise_count"]=$oldcount+1;
    		$excercise_set->where("setid='".$setid."'")->field('excercise_count')->save($data);
    		$this->success("添加成功！",$url);
    	}
    }

    public function delete_excercise(){
    	$id = $_GET["id"];
    	$excercise = M("excercise");
    	$setid = $excercise->where("id='".$id."'")->getField("setid");
    	
    	$excercise->where("id='".$id."'")->delete();
    	
    	$excercise_set = M("excercise_set");
    	$oldcount = $excercise_set->where("setid='".$setid."'")->getField("excercise_count");
    	$data["excercise_count"]=$oldcount-1;
    	$excercise_set->where("setid='".$setid."'")->field('excercise_count')->save($data);
    	echo true;
    }

    public function edit(){
    	$data["id"] = $_GET["id"];
    	$this->assign($data);
    	$this->display();
    }

    public function saveEdit(){
    	if(!empty($_POST)){
    		foreach ($_POST as $key => $value) {
    			switch ($key) {
    				case 'question':
    					$data["question"]=$value;
                        $data["question"]=str_replace('src="', 'src="/course/public/img/excercise/', $data["question"]);
    					break;
    				case 'answer':
    					$data["answer"]=$value;
                        $data["answer"]=str_replace('src="', 'src="/course/public/img/excercise/', $data["answer"]);
    					break;
    				default:
    					$data["id"]=$value;
    					break;
    			}
    		}
    		$excercise = M("excercise");
    		$id = $data["id"];
    		$excercise -> where("id='".$id."'") -> save($data);
    		$setid=$excercise->where("id='".$id."'")->getField("setid");
    		$url = __ROOT__."/admin/Excercise/enter?ch=$setid";
    		$this->success("修改成功！",$url);

    	}
    }
}
?>