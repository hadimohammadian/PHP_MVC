<?php


class Model_ProductController extends Model
{


    public function __construct()
    {
        parent::__construct();
    }

    public function getproduct()
    {
        $sql = 'select  * from product';
       $quey = self::doSelect($sql,[],'');
       var_dump($quey);

    }

    public function getproductByID($id)
    {
        $sql = 'select  * from product where  `id` = ?';
        $quey = self::doSelect($sql,[$id],'1');
        var_dump($quey);

    }
    public  function insertProduct($title,$summary,$text){
        $sql = 'INSERT INTO `product` (`title`, `summary`, `text`) VALUES (?,?,?)';
        $this->doQuery($sql,[$title,$summary,$text]);


    }

}