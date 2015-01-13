<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class TeachingplanController extends Controller {
    public function index(){
    	$this->display();
    }

    public function dc(){
        $Chapter=M("Chapter");
        if(!empty($_GET)){
            $id = $_GET["ch"];
            $Chapter->where('id="'.$id.'"')->delete();
        }
        
    }

    public function upload(){
        $id =  $_POST["ch"];
        $filename = "./public/swf/"."c".$id.".swf";
        $data["id"]=$id;
        $data["filename"]="c".$id.".swf";
        $temp_name = $_FILES["swf"]["tmp_name"];
        move_uploaded_file($temp_name,$filename);
        $Chapter = M("Chapter");        
        $data1 = $Chapter->where('id="'.$id.'"')->select();        
        if($data1==null){
            $Chapter->add($data);

        }
        else {$Chapter->where("id='"+$id+"'")->save();}
        
        $this->success("上传成功！");
    }

}