<?php

namespace  core\lib;
use   core\lib\conf;
class  route
{
    public $ctrl;
    public $action;
    /*
     * http://www.b.com/index.php?r=index/index/id/2   默认访问
     * */
    public  function __construct()
    {
        $path = request_uri();
        if ($path && $path!= '/')  {

                $patharr = explode('/',trim($path,'/'));


                    $this->ctrl = substr($patharr[0],12);

                    unset($patharr[0]);

                    if (isset($patharr[1])) {

                        $this->action = $patharr[1];

                        unset($patharr[1]);
                    } else {

                        $this->action=conf::get('ACTION','route');
                    }
                    $count = count($patharr) + 2;
                    $i = 3;
                    while ($i < $count) {
                      if (isset($patharr[$i + 1])) {
                          $_GET[$patharr[$i]] = $patharr[$i + 1];
                      }
                      $i = $i + 2;
                  }
        } else {
                    $this->ctrl =conf::get('CTRL','route');
                    $this->action=conf::get('ACTION','route');
          }
     }
}

