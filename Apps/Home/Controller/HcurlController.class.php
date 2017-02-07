<?php

namespace Home\Controller;

use Think\Controller;

class HcurlController extends AuthController {
    public function index(){
    	$this->display("Hcurl/index");
    }
}