<?php

namespace Home\Controller;

use Think\Controller;

class RunluaController extends AuthController {
    public function index(){
//     	echo __ACTION__;
    	$file_path = "./data/flygo.lua";
    	if(file_exists($file_path)){
    		$str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
//     		$str = str_replace("\r\n","<br />",$str);
//     		$str = str_replace("\n","<br />",$str);
    	}else{
    		$str = "file not exits!".$file_path;
    	}
    	$this->content=$str;
    	$this->display("Runlua/index");
    }
}