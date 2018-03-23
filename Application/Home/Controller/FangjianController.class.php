<?php
namespace Home\Controller;
use Think\Controller;
class FangjianController extends Controller {
	//显示房间
    public function index(){
    	$db = D("Fangjian");
    	$arr = $db->select();
    	//echo $arr;
        $this->assign("fangjian",$arr);
        $this->show();
}
	public function edit(){
		$code = $_GET['code'];
		$db = D("Fangjian");
		$arr = $db->where("code = $code")->find();
		//var_dump($arr);
		
		$this->assign("fangjian",$arr);
		$this->assign("code",$code);
        $this->show();
	}
	public function create(){
		 // var_dump($_POST);
			$db = D("Kehu");
		    $db->create();//收集表单
    		//$db->Sex = $_POST["Sex"]=="1"?true:false;
    		$result = $db->add();
    		$id = $result;
    		//$use = $db->Name;
    		//var_dump($result);
    		//修改房间状态
    		$code = $_POST['room'];
    		//var_dump($code);
    		$db = D("fangjian");
    		$db->station = "1";
    		$db->user = $id;
    		//$fangjian['station'] = "1";
    		//var_dump($db);
    		$db->where("code = '$code'")->save();
    		//var_dump($db);
    	    $this->success('新增成功', 'index');
	}

	public function tuifang(){
       $code = $_GET['code'];
     //  var_dump($code);
		$db = D("Fangjian");
		$db->station = "0";
		$db->user = "";
		$db->where("code ='$code'")->save();
		//$this->error('退房成功','index',2);
	    // $this->success('新增成功', 'index');
		$this->redirect('Fangjian/index',array(), 1, '退房成功...');
	}

}
