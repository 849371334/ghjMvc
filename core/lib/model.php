<?php

namespace core\lib;
use core\lib\conf;

class model extends  medoo
{

    public function __construct()
    {

        //连接数据库
        $database = conf::all('database');
        parent::__construct($database);
//        try
//        {
//            //连接测试
//            parent::__construct($database['DSN'],$database['USERNAME'],$database['PASSWD']);
//        }
//         //连接失败 抛出异常
//        catch(\PDOException $e)
//        {
//            var_dump($e->getMessage());
//        }
    }
}


