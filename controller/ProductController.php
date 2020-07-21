<?php


class ProductController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
//        $ind = $this->modeldb->insertProduct('q1','wwwwwwwwdsadasd','5425dsgfsdfgfg');
        $query = $this->modeldb->getproductByID(7);
        var_dump($query);
        $this->view('product/index');
    }

}