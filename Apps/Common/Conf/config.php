<?php
return array (
		// '配置项'=>'配置值'
		'MODULE_ALLOW_LIST' => array (
				'Home',
				'Admin' 
		),
		
		// 其它配置
		'DEFAULT_MODULE' => 'Home', // 默认模块
		'URL_MODEL' => '2', // URL模式
		'SESSION_AUTO_START' => true, // 是否开启session
		'URL_CASE_INSENSITIVE' => false, // false为默认项，表示URL访问区分大小写
		'URL_HTML_SUFFIX' => '' 
) // 修改伪.html后缀
;