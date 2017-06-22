<?php

namespace  core;

/*
 *
 * 框架的核心文件
 *
 */

use DebugBar\Bridge\Twig\TwigCollector;
use core\config\constant;
use core\config\error;
use core\lib\log;
use core\lib\route;

class  ww {

    static  public  $classMap = array();

    static  public function  init()
    {
        //不存在的类，PHP会自动调用，文件路径
        spl_autoload_register( 'self::load' );
        constant::init();
        log::init();
        error::init();
        $route = new route();
        $ctrlClass   =  $route->ctrl;
        $actionClass =  $route->action;
        $ctrlFile    =  APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $LIb = '\\'.HOME.'\ctrl\\'.$ctrlClass.'Ctrl';
        if (is_file($ctrlFile)) {
             include $ctrlFile;
             $ctrl = new $LIb();
             $ctrl->$actionClass();
             log::log('ctrl:'.$ctrlClass.'    '.'action:'.$actionClass);
        } else {
            throw  new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static  public  function  load ($class) {
        //自动加载类库
        if (isset($classMap[$class])) {
            return true;
        } else {
                $class = str_replace('\\','/',$class);
                $file  = GHJ.'/'.$class.'.php';
                if (is_file($file)) {
                    include $file;
                   self::$classMap[$class] = $class;
            } else {
                    return false;
                }
            }
       }

    public  function assign($name,$value)
    {
        $this->assign[$name] = $value;

    }

    public  function display($file)
    {
        $route = new  route();
        //将文件路径拼出来
        $files = APP.'/views/'.$route->ctrl.'/'.$file;
        if (is_file($files)) {
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/views/'.$route->ctrl);
            $twig   = new \Twig_Environment($loader, array(
                'cache' => GHJ.'/log/twig',
                'debug' => DEBUG,
            ));
            $template = $twig->loadTemplate($file);
            if (isset($this->assign)) {
                $template->display($this->assign);
            } else {
                $template->display(array());
            }
        } else {
            dump('找不到文件'.$files);
        }
    }

    /*
     * Post方式请求：带服务器请求验证token，只有token验证通过，才会执行其他逻辑操作，
     * 这种操作安全新高，但需要请求之前，要获取一次token，
     * 一般向微信一样，token有效期时间7200s。
     * */

    public function g($name, $defaultValue = "") {

        // php这里区分大小写，将两者都变为小写

        $_GET = array_change_key_case ( $_GET, CASE_LOWER );

        $name = strtolower ( $name );

        $v = isset ( $_GET [$name] ) ? $_GET [$name] : "";

        if ($v == "")

        {

            $_POST = array_change_key_case ( $_POST, CASE_LOWER );

            $v = isset ( $_POST [$name] ) ?$_POST [$name] : "";

        }

        if ($v == "")

            return $defaultValue;

        else

        {

            $v = trim($v);

            return $v;

        }
    }

    /**
     * 过滤参数
     * @param string $str 接受的参数
     * @return string
     */
    static public function filterWords($str)
    {
        $farr = array(
            "/<(\\/?)(script|i?frame|style|html|body|title|link|meta|object|\\?|\\%)([^>]*?)>/isU",
            "/(<[^>]*)on[a-zA-Z]+\s*=([^>]*>)/isU",
            "/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile|dump/is"
        );
        $str = preg_replace($farr,'',$str);
        return $str;
    }

    /**
     * 过滤接受的参数或者数组,如$_GET,$_POST
     * @param array|string $arr 接受的参数或者数组
     * @return array|string
     */
     public function filterArr($arr)
    {
        if(is_array($arr)){
            foreach($arr as $k => $v){
                $arr[$k] = self::filterWords($v);
            }
        }else{
            $arr = self::filterWords($v);
        }
        return $arr;
    }

    public  function Upload($uploaddir)
    {
        $tmp_name =$_FILES['file']['tmp_name'];  // 文件上传后得临时文件名
        $name     =$_FILES['file']['name'];     // 被上传文件的名称
        $size     =$_FILES['file']['size'];    //  被上传文件的大小
        $type     =$_FILES['file']['type'];   // 被上传文件的类型
        $dir      = $uploaddir.date("Ym");
        @chmod($dir,0777);//赋予权限
        @is_dir($dir) or mkdir($dir,0777);
        //chmod($dir,0777);//赋予权限
        move_uploaded_file($_FILES['file']['tmp_name'],$dir."/".$name);
        $type = explode(".",$name);
        $type = @$type[1];
        $date   = date("YmdHis");
        $rename = @rename($dir."/".$name,$dir."/".$date.".".$type);
        if($rename)
        {
            return $dir."/".$date.".".$type;
        }
    }



}
