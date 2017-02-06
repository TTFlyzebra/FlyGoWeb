<?php
namespace Home\Controller;
use Think\Controller;
class RunluaController extends AuthController {
    public function index(){
//     	echo __ACTION__;
		$this->display("Runlua/index");
    }
}