<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends AuthController {
    public function index(){
    	echo __ACTION__;
    }
}