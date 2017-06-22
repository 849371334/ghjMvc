<?php

namespace  core\config;

class  constant
{
    static  public  function  init()
    {
        //控制器，模型层, 视图层所在的目录
        define('APP',GHJ.'/app');

        //控制器，模型层, 视图层所在的目录
        define('HOME','app');

        //缓存目录
        define('RUNTIME',GHJ.'/runtime/');

        //开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
        define('DEBUG',true);
    }
}