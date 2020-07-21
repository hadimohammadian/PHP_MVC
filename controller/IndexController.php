<?php


class IndexController extends Controller
{


    public function __construct()
    {

    }

    public function index()
    {
        $db = $this->modeldb->getNews();
            var_dump($db);
        $this->header('index/header');
        $this->view('index/index');
        $this->footer('index/footer');
    }
}

?>