<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
    public function index(){
		$data["title"]="测试";
        $this->assign($data);
        
		$this->display();
    }

    public function uploadify(){

    	$targetFolder = '/course/Public/uploads'; // Relative to the root

		$verifyToken = md5('unique_salt' . $_POST['timestamp']);
		var_dump($FILES);
		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			echo "www";
			$tempFile = $_FILES['Filedata']['tmp_name'];

			$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			echo $targetPath;
			$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
			
			// Validate the file type
			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			
			if (in_array($fileParts['extension'],$fileTypes)) {
				move_uploaded_file($tempFile,$targetFile);
				echo '1';
			} else {
				echo 'Invalid file type.';
			}
		}
    }
}