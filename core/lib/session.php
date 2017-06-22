<?php

namespace  core\lib;

/**
会话操作类

 **/

class session{

    //构造函数开启会话操作
    function __construct(){
        return session_start();
    }

    //设置会话变量
    function setSessionVar($sessionvarname,$value){
        $_SESSION["$sessionvarname"]="$value";
        return $this->issetVar($sessionvarname);
    }

    //得到指定会话变量的值
    function getSessionVar($sessionvarname){
        if(!$this->issetVar($sessionvarname)) return false; //没设置
        return $_SESSION[$sessionvarname];
    }

    //判断是否设置了指定变量
    function issetVar($sessionvarname){
        return isset($_SESSION[$sessionvarname]);
    }

    function destroy(){
        return session_destroy();
    }

    //取消整个会话
    function unsetTheWholeSession(){
        session_unset();
    }

    //取消指定的会话变量
    function unsetSession($sessionvarname){
        if(!$this->issetVar($sessionvarname)) return false;
        unset($_SESSION[$sessionvarname]);
        if($this->issetVar($sessionvarname)) return false;
        return true;
    }
}