<?php
/**
 *主入口文件
 **/
//定义项目名，对应配置在/config/appConfig
define('APP_NAME', 'w');
define('SITE_NAME', '一个PHP框架');
define('SITE_NAME_EXP', '');
//程序目录
define('APP_PATH', dirname(__FILE__) . '/');
//调用核心文件
require APP_PATH . 'w.php';


