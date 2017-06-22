<?php

namespace app\ctrl;

use  \core\lib\model;
use  \app\model\miModel;
class  miCtrl  extends  \core\ww{

    public  function  index()
    {
        $this->display('index.html');
    }
}