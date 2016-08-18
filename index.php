<?php

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true);
//项目名称
define('APP_NAME','视频打赏');
// 定义应用目录
define('APP_PATH','./app/');
//定义运行目录
define('RUNTIME_PATH','./Caches/');

define('ENGINE_NAME','sae');
//设置目录路径
define('TMPL_PATH','./tpl/');
//配置文件路径
define('CONF_PATH','./Conf/');
//附件目录访问路径
define('UPLOAD_PATH','./uploads/');
// 引入ThinkPHP入口文件
require './Core/core.php';
error_reporting(E_ALL ^E_NOTICE);
