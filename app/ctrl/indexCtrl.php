<?php

namespace app\ctrl;

use  \core\lib\model;
use  \app\model\miModel;
class  indexCtrl  extends  \core\ww{

    public  function  index()
    {

//        $db = new model();
//        $model = new miModel();
//        $session = new \core\lib\session();
//       $cookie = new \core\lib\cookie();
     // p($_GET);die;
        $included_files = get_included_files();
      // p($included_files);die;
        $data  = 'hello , world';
//        $this->assign('data',$data);
//        $session->setSessionVar('ghj','郭慧杰');
        $cache = new \core\lib\cache();
        //$cache->set_dir('data/cache_dir/');
        $data=$cache->read('cache',1);
        if(empty($data))
        {
            $data=array('aa'=>1111,'bb'=>2222,'date'=>date('Y-m-d H:i:s'));
            $cache->write('cache',$data);
        }
            $this->display('index.html');

    }

    public  function  bbb()
    {
       // p(GHJ);die;

        $this->display('test.html');
    }


    public  function  ppp()
    {
        echo 88;
    }
}