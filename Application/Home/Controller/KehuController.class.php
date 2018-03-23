<?php
namespace Home\Controller;
use Think\Controller;
class KehuController extends Controller{
//显示当前入住房间客人信息
 public function index(){
 	    $code = $_GET['code'];
    	$db = D("Fangjian");
    	$arr = $db->where("code='$code'")->find();
        $user = $arr['user'];
        $db = D("Kehu");
        $user = $db->where("ids='$user'")->find();
      // var_dump($user);
        $this->assign("user",$user);
        $this->show();
}
}


