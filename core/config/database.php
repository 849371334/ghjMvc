<?php

return
    array (
//    'DSN' => 'mysql:host=localhost;dbname=abc',   //数据库名
//    'USERNAME' => 'root',     //用户名
//    'PASSWD' => 'root'       //密码
    'database_type'=>'mysql',
    'database_name'=>'abc',
    'server'=>'localhost',
    'username'=>'root',
    'password'=>'root',
    'charset'=>'utf8',
    // 可选参数
    'port' => 3306,

    // 可选，定义表的前缀
    'prefix' => '',

    // 连接参数扩展, 更多参考 http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
);