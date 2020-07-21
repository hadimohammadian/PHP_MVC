<?php


class AdminController extends Controller
{
    public function __construct()
    {

    }

    public  function index(){
        
        $this->header('admin/header');
        $this->view("admin/index");
        $this->footer("admin/footer");
    }


}