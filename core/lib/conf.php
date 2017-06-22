<?php

namespace  core\lib;
class conf
{
    static public $conf=array();

    static public function get($name,$file)
    {
        if(isset(self::$conf[$file])) {
             return self::$conf[$file][$name];
      } else {
        $path = GHJ.'/core/config/'.$file.'.php';
        if (is_file($path)) {
                 $conf = include $path;
                if(isset($conf[$name])) {
                self::$conf[$file] = $conf;
                return $conf[$name];
            } else {
                throw  new \Exception('找不到匹配项'.$name);
            }
        } else {
            throw  new \Exception('找不到匹配文件'.$file);
        }
      }
    }

 static public  function  all($file)
 {
     if(isset(self::$conf[$file])) {
         return self::$conf[$file];
     } else{
         $path = GHJ.'/core/config/'.$file.'.php';
         if (is_file($path)) {
             $conf = include $path;
             self::$conf[$file] = $conf;
             return $conf;
         }else{
             throw  new \Exception('找不到匹配文件'.$file);
         }
     }
 }
}