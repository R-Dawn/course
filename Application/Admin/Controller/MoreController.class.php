<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class MoreController extends Controller {
    public function index(){
    	$this->display();
    }

    public function save(){
    	$url = __ROOT__."/admin/More";
    	$data["title"] = "";
    	$data["site"] = "";
    	$data["type"] = "";
    	if(empty($_GET))
    		$this->error("无效地址",$url,1);
    	else{
    		foreach ($_GET as $key => $value) {
    			if(empty($value)){
    				echo "0";
    				return;
    			}
    			else{
    				$temp = substr($key, 0, 5);
    				if($temp=="title"){
    					$data["title"] = $value;
    					$data["type"] = substr($key, 5, 1);
    				}
    				else{
    					$data["site"] = $value;
    				}
    			}
    		}
    		$Extend = M("Extend");
    		echo $Extend->add($data);
    	}
    }

    public function deletenode(){
    	$url = __ROOT__."/admin/More";
    	$id = "" ;
    	if(empty($_GET)||empty($_GET["id"]))
    		$this->error("无效地址",$url,1);
    	else{
    		$id = $_GET["id"];
    		$Extend = M("Extend");
    		echo $Extend->where('id="'.$id.'"')->delete();

    	}
    }
}
?>