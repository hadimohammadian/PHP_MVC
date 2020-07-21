<?php


class Controller
{
    public $modeldb = '';
    public function __construct()
    {
    }


    public function Model($urlmodel)
    {
        require 'model/model_'.$urlmodel.'.php';
        $className = "model_".$urlmodel;
        $this->modeldb = new $className();
    }

    public function view($urlview)
    {
        require 'view/' . $urlview . '.php';
    }
    public function header($urlview)
    {
        require 'view/' . $urlview . '.php';
    }
    public function footer($urlview)
    {
        require 'view/' . $urlview . '.php';
    }
}
