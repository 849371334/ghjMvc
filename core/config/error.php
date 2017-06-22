<?php

namespace  core\config;

class  error
{
    static  public  function  init()
    {
        if (DEBUG) {

            $errorTitle='PHP框架开发者-GHJ';
            $whoops = new \Whoops\Run();
            $option = new \Whoops\Handler\prettyPageHandler();
            $option->setPageTitle($errorTitle);
            $whoops->pushHandler($option);
            $whoops->register();
            ini_set('display_errors','On');

        } else {

            ini_set('display_errors','Off');
        }

    }
}