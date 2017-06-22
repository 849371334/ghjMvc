<?php

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.4.0','<'))  die('require PHP > 5.4.0 !');

//获取入口文件的根目录
define('GHJ',__DIR__);

//定义框架核心目录
define('CORE',GHJ.'/core');

include  'vendor/autoload.php';

//加载函数库
require  CORE.'/common/function.php';

//加载核心文件
require  CORE.'/ww.php';

\core\ww::init();

