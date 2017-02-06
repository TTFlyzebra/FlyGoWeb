<?php

namespace Home\Controller;

use Think\Controller;
/**
 * Rbac认证基类，所有需要认证的控制器必须继续此类
 * @author Administrator
 *
 */
class AuthController extends Controller {
	public function _initialize() {
		$this->display("Auth/index");
	}
	
}